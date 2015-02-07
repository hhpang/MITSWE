<?php
    //Start session
    session_start();

    //Include database connection details
    require_once('database_connection.php');

    //Array to store validation errors
    $errmsg_arr = array();

    //Function to sanitize values received from the form. Prevents SQL injection
    function clean($str) {
        $str = trim($str);
        if(get_magic_quotes_gpc()) {
                $str = stripslashes($str);
        }
        return mysql_real_escape_string($str);
    }

    if(isset($_POST['forgot_password'])) {
        if(!empty($_POST['email'])) {
            $email = mysql_real_escape_string($_POST['email']);
            
            $query = "SELECT * FROM members WHERE Email='$email'";
            $result = mysql_query($query);
            if($result && mysql_num_rows($result)) { 
                $errmsg_arr[] = "A link has been emailed to your MIT email to change your password.";
                $row = mysql_fetch_assoc($result);
                $id = $row['id'];
                $password = substr(md5(uniqid(rand(),1)), 3, 10);
                $password_hashed = hash_hmac('sha512', 'salt' . $password, $_SERVER['site_key']);
                $query = "UPDATE members SET Password='$password_hashed' WHERE id='$id'";
                mysql_query($query);
                $body = 'Welcome to the SWE portal! We\'re glad to have you as part of our organization. Your password to log into SWE Members Portal has been temporarily changed to ' . $password . '. Please log in using this password and your MIT email, and immediately change it.';
                mail($_POST['email'], 'Your MIT SWE Members Portal temporary password.', $body, 'From: swe-exec@mit.edu');
            } else {
                $errmsg_arr[] = "Looks like you're not registered. Please register to proceed.";
            }
        } else {
            $errmsg_arr[] = "Please enter an email address to recover your password.";
        }
        $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
        session_write_close();
        header("location: index.php");
        exit();
    }

    //Sanitize the POST values
    $email = clean($_POST['email']);
    $password = $_POST['password'];

    //Input Validations
    if($email == '') {
        $errmsg_arr[] = 'Username missing';
    }
    if($password == '') {
        $errmsg_arr[] = 'Password missing';
    }

    //If there are input validations, redirect back to the login form
    if(count($errmsg_arr) > 0) {
        $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
        session_write_close();
        header("location: index.php");
        exit();
    }

    //Check whether email is currently registered in the database
    $query = "SELECT * FROM members WHERE Email='$email'";
    $result = mysql_query($query);

    if($result && mysql_num_rows($result) > 0) {
        $row = mysql_fetch_array($result);
        if($row['Password'] == '') {
            $errmsg_arr[] = 'Your email is in the database, but you have not created a password. Please request a password by clicking on Forgot Password.';
            $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
            session_write_close();
            header("location: index.php");
            exit();
        }
        if(hash_hmac('sha512', 'salt' . $password, $_SERVER['site_key']) != $row['Password']) {
            $errmsg_arr[] = 'You entered the wrong password. Try again or request a new password.';
            $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
            session_write_close();
            header("location: index.php");
            exit();
        }
    } else {
        $errmsg_arr[] = 'You are not currently registered in the database. Please register.';
        $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
        session_write_close();
        header("location: index.php");
        exit();
    }

    // Redirect to login home if there is no problem with the login
    session_regenerate_id();
    $_SESSION['SESS_EMAIL'] = $email;
    $_SESSION['SESS_NAME'] = $row['Name'];
    session_write_close();
    header("location: member_info.php");
    exit();
?>

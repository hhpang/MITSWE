<?php
    //Start session
    session_start();

    //Include database connection details
    require_once('database_connection.php');

    //Function for sanitizing input to form
    function clean($str) {
        $str = trim($str);
        if(get_magic_quotes_gpc()) {
            $str = stripslashes($str);
        }
        return mysql_real_escape_string($str);
    }

    //Array to store validation errors
    $errmsg_arr = array();

    //Sanitize the POST values
    $name = clean($_POST['name']);
    $email = clean($_POST['email']);
    $password = $_POST['password'];
    $password_retype = $_POST['password-retype'];

    //Query database to see if the email is already contained in database
    $qry="SELECT * FROM members WHERE email='$email'";
    $result = mysql_query($qry);

    if($result && mysql_num_rows($result) > 0) {
        $row = mysql_fetch_array($result);
        if($row['Password'] == '') {
            $errmsg_arr[] = "Email already exists in database. Please request your password by clicking on Forgot Password.";
        } else {
            $errmsg_arr[] = "Email already exists in database. Please login or request a new password";
        }
        $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
        session_write_close();
        header("Location: index.php");
        exit();
    } else {
        if($name == '') {
            $errmsg_arr[] = 'Please input your name.';
        }
        if($password != $password_retype) {
            $errmsg_arr[] = 'Passwords do not match';
        }
        if($password == '') {
            $errmsg_arr[] = 'Please input a password';
        }
        if($email == '') {
            $errmsg_arr[] = 'Please input your email';
        }
        if($password_retype == '') {
            $errmsg_arr[] = 'Please retype your password';
        }
        if(count($errmsg_arr) > 0) {
            $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
            session_write_close();
            header("Location: index.php");
            exit();
        }

        //Hashes password so that you cannot view and decrypt what password is in database
        $password = hash_hmac('sha512', 'salt' . $password, $_SERVER['site_key']);

        $query = "INSERT INTO members (Name, Email, Password) VALUES ('$name', '$email', '$password')";
        mysql_query($query);
        session_regenerate_id();
        $_SESSION['SESS_EMAIL'] = $email;
        $_SESSION['SESS_NAME'] = $name;
        session_write_close();
        header("Location: member_info.php");
        exit();
    }
?>

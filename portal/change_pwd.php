<?php
    session_start();
    
    require_once('database_connection.php');
    
    $email = $_SESSION['SESS_EMAIL'];
    $oldpassword = mysql_real_escape_string($_POST['old_password']);
    $newpassword = mysql_real_escape_string($_POST['new_password']);
    $newpasswordretype = mysql_real_escape_string($_POST['new_password_retype']);
    echo $oldpassword;
    echo $newpassword;
    echo $newpasswordretype;
    echo $email;
    $query = "SELECT * FROM members WHERE Email='$email'";
    $password_hashed = hash_hmac('sha512', 'salt' . $oldpassword, $_SERVER['site_key']);
    $result = mysql_query($query);
    if($result && mysql_num_rows($result) > 0) {
        $row = mysql_fetch_assoc($result);
        echo $row['Name'] . "NAME!";
        $id = $row['id'];
        echo "hashed" . $row['Password'];
        echo "another hashed" . $password_hashed;
        if($row['Password'] == $password_hashed && $newpassword == $newpasswordretype) {
            echo "yes!";
            $newpassword_hashed = hash_hmac('sha512', 'salt' . $newpassword, $_SERVER['site_key']);
            $query = "UPDATE members SET Password = '$newpassword_hashed' WHERE id='$id'";
            mysql_query($query);
        }
    }
    header("location: member_info.php");
    exit();
?>
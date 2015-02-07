<?php
    //Start session
    session_start();
    
    if($_SESSION['SESS_NAME'] == '') {
        header("location: please_login.php");
    }
    
    include('../header.php');
?>
<DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
        <div id = "templatehead">
        <div id="templatehead-text" style="font-size:28px;">
            SWE Members Portal | Members Page
            <?php include('../header2.php');?>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
            <title>SWE Members Portal</title>
            <style type="text/css">
            </style>
        </head>
        <body>
            <h3 align="center">Change Password</h3>
                <?php
                    $name = $_SESSION['SESS_NAME'];
                    echo "Hello, " . $name;
                ?>
                <p>Please enter your old password and your new password.</p>
                <form name="swe-member-change-password" action="change_pwd.php" method="post">
                    <table width="600" border="0" align="center" cellpadding="2" cellspacing="5">
                        <tr>
                            <td><div align="left">Old Password</div></td>
                            <td><input name="old_password" type="password" size="50" /></td>
                        </tr>
                        <tr>
                            <td><div align="left">New Password</div></td>
                            <td><input name="new_password" type="password" size="50" /></td>
                        </tr>
                        <tr>
                            <td><div align="left">New Password Retype</div></td>
                            <td><input name="new_password_retype" type="password" size="50" /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input name="change_password" type="submit" value="change password" /></td>
                        </tr>
                    </table>
                </form>
        </body>
        <?php include('sidebar.php'); ?>
        <?php include('../footer.php'); ?>
    </html>
<?php
    //Start session
    session_start();
    
    if($_SESSION['SESS_EMAIL'] != '' || $_SESSION['SESS_NAME'] != '') {
      header("location: member_info.php");
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
        </head>
        <body>
        <h3 align="center">Login to an Existing Account</h3>
        <p>If an account has been made for you, type in your MIT email and password to log in. If you forgot your password, type in your email, click "forgot password" and a link will be emailed to you to change your password.</p>
            <form name="swe-member-login" action="login_member.php" method="post">
            <table width="600" border="0" align="center" cellpadding="2" cellspacing="5">
                <tr>
                    <td width = "300"><div align="right">MIT Email</div></td>
                    <td width = "300"><input name = "email" type="text" /></td>
                </tr>
                <tr>
                    <td><div align="right">Password</div></td>
                    <td><input name = "password" type="password" /></td>
                </tr>
                <tr>
                    <td><div align="right"><input name="login" type="submit" value="login" /></div></td>
                    <td><input name="forgot_password" type="submit" value="forgot password" /></td>
                </tr>
            </table>
            </form>
        </body>
        <?php include('sidebar.php'); ?>
        <?php include('../footer.php'); ?>
    </html>
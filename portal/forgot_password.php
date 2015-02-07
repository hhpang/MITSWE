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
            <style type="text/css">
            </style>
        </head>
        <body>
            <h3 align="center">Forgot Password</h3>
                <p>Enter your email address and an email will be sent to you with a recovery password.</p>
                <form name="swe-member-login" action="login_member.php" method="post">
                    <table width="600" border="0" align="center" cellpadding="2" cellspacing="5">
                        <tr>
                            <td><div align="left">Email</div></td>
                            <td><input name="email" type="text" size="50" /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input name="forgot_password" type="submit" value="recover password" /></td>
                        </tr>
                    </table>
                </form>
        </body>
        <?php include('sidebar.php'); ?>
        <?php include('../footer.php'); ?>
    </html>
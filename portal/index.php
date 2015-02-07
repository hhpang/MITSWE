<?php
    //Start session
    session_start();

    if($_SESSION['SESS_EMAIL'] != '' || $_SESSION['SESS_NAME'] != '') {
      header("location: member_info.php");
    }
    
    include('../header.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <div id = "templatehead">
    <div id="templatehead-text" style="font-size:28px;">
        SWE Members Portal
        <?php include('../header2.php');?>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <style type="text/css">
         .err {
            text-align:left;
            margin-left: 150px;
            color:red;
         }
        </style>
        </head>
        <body>
            <p>
               <!-- Used to display signup errors and messages. !-->
               <?php
                  if(count($_SESSION['ERRMSG_ARR']) > 0) {
                      echo '<ul class="err"> Errors found:';
                      foreach($_SESSION['ERRMSG_ARR'] as $msg) {
                          echo '<li>',$msg,'</li>';
                      }
                      echo '</ul>';
                      unset($_SESSION['ERRMSG_ARR']);
                  }
               ?>
            </p>
            <h3 align="center">Create an Account</h3>
            <p>You must be a national member of SWE to signup and to see your points as well as other information about MIT SWE. If you are currently not a national member, you can register <a href="http://societyofwomenengineers.swe.org/index.php/membership">here</a>.</p>
            <form name="swe-member-registration" action="signup-member.php" method="post">
            <table width="600" border="0" align="center" cellpadding="2" cellspacing="5">
                <tr>
                    <td width="300"><div align="right">MIT Email</div></td>
                    <td width="300"><input align="center" name="email" type="text" /></td>
                </tr>
                <tr>
                    <td><div align="right">Name</div></td>
                    <td><input name="name" type = "text" /></td>
                </tr>
                <tr>
                    <td><div align="right">Password</div></td>
                    <td><input name="password" type="password" /></td>
                </tr>
                <tr>
                    <td><div align="right">Retype your password</div></td>
                    <td><input name="password-retype" type="password" /></td>
                </tr>
                <tr>
                    <td><div align="right"></div></td>
                    <td><input name="" type="submit" value="signup" /></td>
                </tr>
            </table>
            </form><br><br>
        <h3 align="center">Login to an Existing Account</h3>
        <p>If an account has been made for you, type in your MIT email and password to log in. If you forgot your password, type in your email, click "forgot password" and a link will be emailed to you to change your password.</p>
            <form name="swe-member-login" action="login_member.php" method="post">
            <table width="600" border="0" align="center" cellpadding="2" cellspacing="5">
                <tr>
                    <!-- Used to display login errors -->
                    <?php
                        if(count($_SESSION['ERRMSG_ARR'] > 0)) {
                            echo '<ul class="err">';
                            foreach($_SESSION['ERRMSG_ARR'] as $msg) {
                                echo '<li>', $msg, '</li>';
                            }
                            echo '</ul>';
                            unset($_SESSION['ERRMSG_ARR']);
                        }
                    ?>
                </tr>
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
           <p align="center"><a href="index.php">logout</a></p>
        </body>
        <?php include('sidebar.php'); ?>
        <?php include('../footer.php'); ?>
</html>

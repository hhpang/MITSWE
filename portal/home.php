<?php
    //Start session
    session_start();

    //Unset the variables stored in session
    unset($_SESSION['SESS_EMAIL']);
    unset($_SESSION['SESS_NAME']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>SWE Members Portal</title>
        <style type="text/css">
        </style>
        </head>
        <body>
            <p align="center" class="style1">SWE Members Portal </p>
            <p align="center">Create an Account</p>
            <form name="swe-member-registration" action="signup-member.php" method="post">
            <table width="309" border="0" align="center" cellpadding="2" cellspacing="5">
                <tr>
                   <!-- Used to display signup errors -->
                    <?php
                        if(count($_SESSION['ERRMSG_ARR']) > 0) {
                            echo '<ul class="err">';
                            foreach($_SESSION['ERRMSG_ARR'] as $msg) {
                                echo '<li>',$msg,'</li>';
                            }
                            echo '</ul>';
                            unset($_SESSION['ERRMSG_ARR']);
                        }
                    ?>
                </tr>
                <tr>
                    <td width="116"><div align="right">MIT Email</div></td>
                    <td width="177"><input name="email" type="text" /></td>
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
            </form>
        <p align="center">Login to an Existing Account</p>
            <form name="swe-member-login" action="login_member.php" method="post">
            <table width="309" border="0" align="center" cellpadding="2" cellspacing="5">
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
                    <td width = "116"><div align="right">MIT Email</div></td>
                    <td width = "177"><input name = "email" type="text" /></td>
                </tr>
                <tr>
                    <td><div align="right">Password</div></td>
                    <td><input name = "password" type="password" /></td>
                </tr>
                <tr>
                    <td><div align="right"></div></td>
                    <td><input name="" type="submit" value="login" /></td>
                </tr>
            </table>
            </form>
           <p align="center"><a href="home.php">logout</a></p>
        </body>
    </html>

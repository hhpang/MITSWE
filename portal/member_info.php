<?
    //start session
    session_start();
    
    //log onto database
    require_once('database_connection.php');


    if($_SESSION['SESS_NAME'] == '' && $_SESSION['SESS_EMAIL'] == '') {
        header("location: please_login.php");
    }
?>

<?php include('../header.php'); ?>
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
                .err {
                    text-align:left;
                    margin-left: 150px;
                    color:red;
                }
            </style>
        </head>
        <body>
            <p>
                <!-- Used to display messages and errors !-->
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
            </p>
            <h3 align="center">Your Points</h3>
            <?php
                $email = $_SESSION['SESS_EMAIL'];
                $query = "SELECT * FROM members WHERE Email='$email'";
                $result = mysql_query($query);
                if($result && mysql_num_rows($result) > 0) {
                    $row = mysql_fetch_array($result);
                    $name = $row['Name'];
                    $email = $row['Email'];
                    $year = $row['Year'];
                    $course = $row['course'];
                    $freshiap = $row['freshiap'];
                    $freshs = $row['freshsummer'];
                    $sophiap = $row['sophiap'];
                    $sophs = $row['sophsummer'];
                    $junioriap = $row['junioriap'];
                    $juniors = $row['juniorsummer'];
                    $senioriap = $row['senioriap'];
                    $seniors = $row['seniorsummer'];
                    $network = $row['network'];
                    echo "<p style='font-size:18;'>Hello, ". $row['Name'] . ". You currently have <b>" . $row['Points'] . "</b> points. If you believe this is an error. Please contact <a href='mailto:swe-exec@mit.edu' target='_top'>swe-exec@mit.edu</a>. </p><br>";
                }
            ?>
            <h3 align="center">Events You've Attended</h3>
            <table width="600" border="0" align="left" cellpadding="2" cellspacing="5" style="border-spacing:10px 20px">
                <tr><td width="300"><b>Event Name</b></td><td width="120"><b>Event Date</b></td><td><b>Event Points</b></td></tr>
                <?php
                    $kerberos = explode("@", $email);
                    $k = array_shift($kerberos);
                    $query = "SELECT * FROM events WHERE attendee='$k'";
                    $result = mysql_query($query);
                    if($result && mysql_num_rows($result) > 0) {
                        while ($row = mysql_fetch_array($result)) {
                            echo "<tr><td>" . $row['name'] ."</td>" . " <td> " . $row['date'] . "</td><td>" . $row['points'] . "</td></tr>";
                        }
                    }
                ?>
            </table>
            <h3 align="center">Your Profile</h3>
            <form name="swe-member-login" action="edit_profile.php" method="post">
            <table width="600" border="0" align="left" cellpadding="2" cellspacing="5" style="border-spacing:10px 20px">
                <tr>
                    <td width = "100"><div align="left">Name</div></td>
                    <td width = "500"><input name="name" type="text" size="50" value="<?php echo $name ?>"/></td>
                </tr>
                <tr>
                    <td><div align="left">Email</div></td>
                    <td><input name="email" type="text" size="50" value="<?php echo $email ?>" /></td>
                </tr>
                <tr>
                    <td><div align="left">Year</div></td>
                    <td><input name="year" type="text" size="50" value="<?php echo $year ?>" /></td>
                </tr>
                 <tr>
                    <td><div align="left">Course</div></td>
                    <td><input name="course" type="text" size="50" value="<?php echo $course ?>" /></td>
                </tr>
                <tr>
                    <td><div align="left">Freshman IAP</div></td>
                    <td><textarea style="height:100px; width:300px;" name="freshiap"><?php echo $freshiap ?></textarea></td>
                </tr>
                <tr>
                    <td><div align="left">Freshman Summer</div></td>
                    <td><textarea style="height:100px; width:300px;" name="freshs"><?php echo $freshs ?></textarea></td>
                </tr>
                <tr>
                    <td><div align="left">Sophomore IAP</div></td>
                    <td><textarea style="height:100px; width:300px" name="sophiap"><?php echo $sophiap ?></textarea></td>
                </tr>
                <tr>
                    <td><div align="left">Sophomore Summer</div></td>
                    <td><textarea style="height:100px; width:300px;" name="sophs"><?php echo $sophs ?></textarea></td>
                </tr>
                <tr>
                    <td><div align="left">Junior IAP</div></td>
                    <td><textarea style="height:100px; width:300px;" name="junioriap"><?php echo $junioriap ?></textarea></td>
                </tr>
                <tr>
                    <td><div align="left">Junior Summer</div></td>
                    <td><textarea style="height:100px; width:300px;" name="juniors"><?php echo $juniors ?></textarea></td>
                </tr>
                <tr>
                    <td><div align="left">Senior IAP</div></td>
                    <td><textarea style="height:100px; width:300px;" name="senioriap"><?php echo $senioriap ?></textarea></td>
                </tr>
                <tr>
                    <td><div align="left">Senior Summer</div></td>
                    <td><textarea style="height:100px; width:300px;" name="seniors"><?php echo $seniors ?></textarea></td>
                </tr>
                <tr>
                    <td><div align="left">Who do you want to network with?</div></td>
                    <td><textarea style="height:100px; width:300px;" name="network"><?php echo $network ?></textarea></td>
                </tr>
                <tr>
                    <td><div align="left"><input name="login" type="submit" value="edit profile" /></div></td>
                </tr>
            </table>
            </form>
        </body>
        </div></div>
        <?php include('sidebar.php'); ?>
        <?php include('../footer.php'); ?>
</html>

<?php
    session_start();
    
    require_once('database_connection.php');
    
    //Array to store messages and validation errors
    $errmsg_arr = array();
    
    $email = $_SESSION['SESS_EMAIL'];
    $query = "SELECT * FROM members WHERE Email='$email'";
    $result = mysql_query($query);
    $newname = mysql_real_escape_string($_POST['name']);
    $newemail = mysql_real_escape_string($_POST['email']);
    $newyear = mysql_real_escape_string($_POST['year']);
    $newcourse = mysql_real_escape_string($_POST['course']);
    $newfreshiap = mysql_real_escape_string($_POST['freshiap']);
    $newfreshs = mysql_real_escape_string($_POST['freshs']);
    $newsophiap = mysql_real_escape_string($_POST['sophiap']);
    $newsophs = mysql_real_escape_string($_POST['sophs']);
    $newjunioriap = mysql_real_escape_string($_POST['junioriap']);
    $newjuniors = mysql_real_escape_string($_POST['juniors']);
    $newsenioriap = mysql_real_escape_string($_POST['senioriap']);
    $newseniors = mysql_real_escape_string($_POST['seniors']);
    $newnetwork = mysql_real_escape_string($_POST['network']);
    if($result && mysql_num_rows($result) > 0) {
        $row = mysql_fetch_assoc($result);
        $year = $row['Year'];
        $email = $row['Email'];
        $name = $row['Name'];
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
        $id = $row['id'];
        $errmsg_arr[] = "Your information has been updated.";
        if($newname != $name && $newname != '') {
            $query = "UPDATE members SET Name='$newname' WHERE id='$id'";
            $_SESSION['SESS_NAME'] = $newname;
            session_write_close();
            mysql_query($query);
        }
        if($newemail != $name && $newemail != '') {
            $query = "UPDATE members SET Email='$newemail' WHERE id='$id'";
            $_SESSION['SESS_EMAIL'] = $newemail;
            session_write_close();
            mysql_query($query);
        }
        if($newyear != $year && $newyear != '') {
            $query = "UPDATE members SET Year='$newyear' WHERE id='$id'";
            mysql_query($query);
        }
        if($newyear != $year && $newyear != '') {
            $query = "UPDATE members SET Year='$newyear' WHERE id='$id'";
            mysql_query($query);
        }
        if($newcourse != $course && $newcourse != '') {
            $query = "UPDATE members SET course='$newcourse' WHERE id='$id'";
            mysql_query($query);
        }
        if($newfreshiap != $freshiap) {
            $query = "UPDATE members SET freshiap='$newfreshiap' WHERE id='$id'";
            mysql_query($query);
        }
        if($newfreshs != $freshs) {
            $query = "UPDATE members SET freshsummer='$newfreshs' WHERE id='$id'";
            mysql_query($query);
        }
        if($newsophiap != $sophiap) {
            $query = "UPDATE members SET sophiap='$newsophiap' WHERE id='$id'";
            mysql_query($query);
        }
        if($newsophs != $sophs) {
            $query = "UPDATE members SET sophsummer='$newsophs' WHERE id='$id'";
            mysql_query($query);
        }
        if($newjunioriap != $junioriap) {
            $query = "UPDATE members SET junioriap='$newjunioriap' WHERE id='$id'";
            mysql_query($query);
        }
        if($newjuniors != $juniors) {
            $query = "UPDATE members SET juniorsummer='$newjuniors' WHERE id='$id'";
            mysql_query($query);
        }
        if($newsenioriap != $senioriap) {
            $query = "UPDATE members SET senioriap='$newsenioriap' WHERE id='$id'";
            mysql_query($query);
        }
        if($newseniors != $seniors) {
            $query = "UPDATE members SET seniorsummer='$newseniors' WHERE id='$id'";
            mysql_query($query);
        }
        if($newnetwork != $network) {
            $query = "UPDATE members SET network='$newnetwork' WHERE id='$id'";
            mysql_query($query);
        }
        if(count($errmsg_arr) > 0) {
            $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
            session_write_close();
        }
    }
    header("location: member_info.php");
    exit();
?>
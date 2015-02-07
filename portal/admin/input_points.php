<?php
    session_start();

    require_once('database_connection.php');

    if(isset($_POST['add_more_rows'])) {
        $_SESSION['SESS_NUM_INPUT_ROWS'] = $_SESSION['SESS_NUM_INPUT_ROWS'] + 3;
        session_write_close();
        header("location: exec_input_points.php");
        exit();
    }

    //Adds events to database and input points to each athena user
    $userCount = $_SESSION['SESS_NUM_INPUT_ROWS'];
    for ($i = 0; $i < $userCount;  $i++) {
        $eventid = $_POST['event'][$i];
        $pointvalue = $_POST['userpoints'][$i];
        $date = $_POST['date'][$i];
        $department = $_POST['department'][$i];
        $users = $_POST['userkerberos'][$i];
        $data = preg_split("/[\r\n]+/", $users, -1, PREG_SPLIT_NO_EMPTY);
        $chairs = $_POST['chairs'][$i];
        if($users != '') {
            foreach($data as $user) {
                $insert = "INSERT INTO events (name, date, points, department, attendee, chairs) VALUES ('$eventid', '$date', $pointvalue, '$department', '$user', '$chairs')";
                mysql_query($insert);
                $email = $user . "@mit.edu";
                $userquery = "SELECT * FROM members WHERE Email = '$email'";
                $userresult = mysql_query($userquery);
                if($userresult && mysql_num_rows($userresult) > 0) {
                    $row = mysql_fetch_array($userresult);
                    $points = $row['Points'] + $pointvalue;
                    $update = "UPDATE members SET Points='$points' WHERE Email='$email'";
                    mysql_query($update);
                } else {
                    $newmember = "INSERT INTO members (Email, Points) VALUES ('$email', '$pointvalue')";
                    mysql_query($newmember);
                }
            }
        }
    }
    unset($_SESSION['SESS_NUM_INPUT_ROWS']);
    header("location: exec_input_points.php");
    exit();
    
    /*
     *From old input_point.php file
     *Counts number of users in the database when the points were added
    $userCount = $_POST['userCount'];
    $query = "SELECT * FROM members";
    $result = mysql_query($query);

        for($i = 0; $i < $userCount; $i++) {
            $userid = $_POST['userid'][$i];
            $pointvalue = $_POST['userpoints'][$i];
            if ($pointvalue != '') {
                $query = "SELECT * FROM members WHERE Email='$userid'";
                $result = mysql_query($query);
                if($result && mysql_num_rows($result) > 0) {
                    $row = mysql_fetch_array($result);
                    //If the add points button was clicked
                    if(isset($_POST['add_points'])) {
                        $pointvalue = $row['Points'] + $pointvalue;
                    } else {
                        //The subtract points button was clicked
                        $pointvalue = $row['Points'] - $pointvalue;
                    }
                    $update = "UPDATE members SET Points='$pointvalue' WHERE Email='$userid'";
                    mysql_query($update);
                }
            }
        }

    unset($_SESSION['SESS_NUM_INPUT_ROWS']);
    header("location: exec_input_points.php");
    exit();*/
?>

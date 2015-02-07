<?php
    session_start();

    require_once('database_connection.php');
    
    $data = $_POST['board_members'];
    $users = preg_split("/[\r\n]+/", $data, -1, PREG_SPLIT_NO_EMPTY);
    
    if($data != '') {
        foreach($users as $user) {
            $email = $user . "@mit.edu";
            $query = "SELECT * FROM members WHERE Email = '$email'";
            $result = mysql_query($query);
            if($result && mysql_num_rows($result) > 0) {
                $row = mysql_fetch_array($result);
                $update = "UPDATE members SET board='T' WHERE Email='$email'";
                mysql_query($update);
            } else {
                $newmember = "INSERT INTO members (Email, board) VALUES ('$email', 'T')";
                mysql_query($newmember);
            }
        }
    }
    header("location: exec_input_points.php");
    exit();
?>
<?php
    session_start();

    require_once('database_connection.php');

    if(isset($_POST['add_more_rows'])) {
        $_SESSION['SESS_NUM_INPUT_ROWS'] = $_SESSION['SESS_NUM_INPUT_ROWS'] + 10;
        session_write_close();
        header("location: exec_input_points.php");
        exit();
    }

    $inputCount = $_POST['inputCount'];

    for($i = 0; $i < $inputCount; $i++) {
        $userid = $_POST['userkerberos'][$i];
        $pointvalue = $_POST['userpoints'][$i];
        echo $userid;
        echo $pointvalue;
        $userid = $userid . "@mit.edu";
        echo "userid" . $userid;
        if ($userid != '@mit.edu' && $pointvalue != '') {
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
    exit();
    
    /* From the old exec_input_points.php file
     *             
            
            <!-- Input points by members only
            <form action="input_points.php" method="post">
                <table><tr><td>Name</td><td>Add/Subtract Points</td></tr>
                <?php
                    session_start();

                    require_once('database_connection.php');
                    $query = "SELECT * FROM members";
                    $result = mysql_query($query);

                    //Sets unique ids for each input box
                    $userCount=mysql_num_rows($result);
                    //Makes sure only to query as many users as are currently in the database
                    $userCount=mysql_num_rows($result);
                    echo '<input type="hidden" name="userCount" value="' .$userCount. '">';

                    while($row = mysql_fetch_assoc($result)) {
                        echo '<input type="hidden" name="userid[]" value="' . $row['Email'] . '">'; //Give the unique email
                        echo '<tr><td>' . $row['Name'] . '</td><td><input type="number" name="userpoints[]"></td></tr>';
                    }
                ?>
                <tr><td><input type="submit" name="add_points" value="add points" /></td>
                <td><input type="submit" name="subtract_points" value="subtract points" /></td></tr>
                </table>
            </form><br><br><br>
            <h3 align="center">Input Points: Enter Kerberos</h3>
            <form action="input_points_enter.php" method="post">
            <table>
                <tr>
                    <td> Kerberos</td>
                    <td> Points</td>
                </tr>
                <?php
                    session_start();
                    //Keeps track of how many rows of input are allowed
                    if($_SESSION['SESS_NUM_INPUT_ROWS'] < 10) {
                        $_SESSION['SESS_NUM_INPUT_ROWS'] = 10;
                    }
                    session_write_close();

                    echo '<input type="hidden" name="inputCount" value="' . $_SESSION['SESS_NUM_INPUT_ROWS'] . '">';
                    for($i = 0; $i < $_SESSION['SESS_NUM_INPUT_ROWS']; $i++) {
                        echo '<tr><td><input type="text" name="userkerberos[]"></td><td><input type="number" name="userpoints[]"></td></tr>';
                    }
                ?>
                <tr>
                    <td><input type="submit" name="add_more_rows" value="add more rows" /></td>
                    <td><input type="submit" name="add_points" value="add points" /></td>
                    <td><input type="submit" name="subtract_points" value="subtract points" /></td>
                </tr>
            </table>
            </form> !-->
            */
?>

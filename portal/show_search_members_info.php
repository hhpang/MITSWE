<?php
    session_start();
    
    //log onto database
    require_once('database_connection.php');
    
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
                .err {
                    text-align:left;
                    margin-left: 150px;
                    color:red;
                }
            </style>
        </head>
        <body>
            <p>
                <?php
                    $id = $_GET['id'];
                    $query = "SELECT * FROM members WHERE id=$id";
                    $result = mysql_query($query);
                    
                    $column = array("Email", "Year", "course", "freshiap", "freshsummer", "sophiap", "sophsummer", "junioriap", "juniorsummer", "senioriap", "seniorsummer");
                ?>
                <p>
                    <?php
                        if($result && mysql_num_rows($result) > 0) {
                            $row = mysql_fetch_array($result);
                            echo "<h3 align='center'>" . $row['Name'] . "</h3>"; 
                            foreach($column as $fieldName) {
                                $fieldvalue = $row[$fieldName];
                                if($fieldName == "freshiap") {
                                    $fieldName = "Freshman IAP";
                                } elseif ($fieldName == "freshsummer") {
                                    $fieldName = "Freshman Summer";
                                } elseif($fieldName == "sophiap") {
                                    $fieldName = "Sophomore IAP";
                                } elseif($fieldName == "sophsummer") {
                                    $fieldName = "Sophomore Summer";
                                } elseif($fieldName == "junioriap") {
                                    $fieldName = "Junior IAP";
                                } elseif($fieldName == "juniorsummer") {
                                    $fieldName = "Junior Summer";
                                } elseif($fieldName == "senioriap") {
                                    $fieldName = "Senior IAP";
                                } elseif($fieldName == "seniorsummer") {
                                    $fieldName = "Senior Summer";
                                } elseif($fieldName == "course") {
                                    $fieldName = "Course";
                                }
                                echo "<b>" . $fieldName . "</b>: " . $fieldvalue . "<br><br>";
                            }
                        }
                    ?>
                </p>
        </body>
        </div></div>
        <?php include('sidebar.php'); ?>
        <?php include('../footer.php'); ?>
</html>
                
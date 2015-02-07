<?php include('../../header.php'); ?>
<DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
        <div id = "templatehead">
        <div id="templatehead-text" style="font-size:28px;">
            SWE Members Portal | Exec Input Points
            <?php include('../../header2.php');?>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
            <title>SWE Members Portal</title>
            <style type="text/css">
            </style>
        </head>
        <body>
            <h3 align="center">Input Points</h3>
            
            <!-- Input points by events !-->
            <form action="input_points.php" method="post">
                    <?php
                        session_start();
                        
                        require_once('database_connection.php');
                        
                        //Keeps track of how many rows of input are allowed
                        if($_SESSION['SESS_NUM_INPUT_ROWS'] < 3) {
                            $_SESSION['SESS_NUM_INPUT_ROWS'] = 3;
                        }
                        session_write_close();
                        
                        echo '<input type="hidden" name="inputCount" value="' . $_SESSION['SESS_NUM_INPUT_ROWS'] . '">';
                        
                        for ($i = 0; $i < $_SESSION['SESS_NUM_INPUT_ROWS']; $i++) {
                            echo '<table width="600" border="0" align="left" cellpadding="2" cellspacing="5">';
                            echo '<tr><td width = "200">Event Name: <input type="text" name="event[]" size="40"></td><td>Points: <input type="number" name="userpoints[]"></td><td>Date: <input type="date" name="date[]"></td><td>Department: <select name="department[]">
                                    <option value="Membership">Membership</option>
                                    <option value="Campus Relations">Campus Relations</option>
                                    <option value="Outreach">Outreach</option>
                                    <option value="Corporate Relations">Corporate Relations</option> ';
                                    echo "</table>";
                            echo '<table><tr><td>Organizing Chairs (put each kerberos on a separate line): <textarea style="height:100px; width:600px;" name="chairs[]"></textarea></td></tr></table>';
                            echo '<table><tr><td>Athena/Kerberos attendees (put each kerberos on a separate line): <textarea style="height:100px; width:600px;" name="userkerberos[]"></textarea></td></tr></table>';
                        }
                    ?>
                    <table><tr><td><input type="submit" name="add_more_rows" value="add more rows" /></td>
                    <td><input type="submit" name="submit" value="submit" /></td></tr></table>
            </form><br><br>
        </body>
        <?php include('sidebar.php'); ?>
        <?php include('../../footer.php'); ?>
    </html>

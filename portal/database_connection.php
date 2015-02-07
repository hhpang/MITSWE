<?php
    $dbhost='sql.mit.edu';
    $dbuser='swe';
    $dbpass='zam52fin';
    $conn=mysql_connect($dbhost, $dbuser, $dbpass) or die('Could not connect to database.');
    mysql_select_db('swe+portal') or die('Cannot select database')
?>

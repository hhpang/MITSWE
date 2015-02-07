<?php
    //Start session
    session_start();
    
    include('../header.php');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <div id = "templatehead">
    <div id="templatehead-text" style="font-size:28px;">
        SWE Members Portal | Login
        <?php include('../header2.php');?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>SWE Members Portal</title>
        <style type="text/css">
        </style>
    </head>
    <body>
        <h3>You have not logged in.</h3>
        <p>Please register or login <a href="http://swe.mit.edu/portal/index.php">here</a>.</p>
    </body>
    <?php include('sidebar.php'); ?>
    <?php include('../footer.php'); ?>
</html>
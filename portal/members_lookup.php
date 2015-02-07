<?
    session_start();
                
    if($_SESSION['SESS_NAME'] == '') {
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
            </style>
        </head>
        <body>
            <h3 align="center">Search Members</h3>
            <table width="600" border="0" align="center" cellpadding="2" cellspacing="10">
                <form name="search" method="post" action="search_members.php">
                    <tr><td align="left" width="180">Search for members: </td><td align="left" width="200"><input type="text" name="find" size="60"/></td>
                    <td align="left" width="50"><input type="submit" name="search" value="Search" /></td></tr>
                </form>
            </table><br><br>
            <table width="600" border="0" align="center" cellpadding="2" cellspacing="5">
            <tr><td width="250">Name</td><td width="300">Email</td><td width="50">Year</td></tr>
            <?php
                if(count($_SESSION['SESS_MEM_SEARCH_RESULTS']) > 0) {
                    foreach($_SESSION['SESS_MEM_SEARCH_RESULTS'] as $result) {
                        echo '<tr>'. $result . '</tr>';
                    }
                }
            ?>
            </table>
        </body>
        </div></div>
        <?php include('sidebar.php'); ?>
        <?php include('../footer.php'); ?>
</html>

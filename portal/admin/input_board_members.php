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
            <h3>Who are the board members?</h3>
            <p>Insert board members kerberos (each kerberos on a separate line)</p>
            <form action="board_members.php" method="post">
                <textarea style="height:100px; width:600px;" name="board_members"></textarea>;
                <input type="submit" name="board_members_input" value="submit" />
            </form>
        </body>
        <?php include('sidebar.php'); ?>
        <?php include('../../footer.php'); ?>
    </html>
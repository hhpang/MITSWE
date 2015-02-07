<?php
function connectDatabase(){
    
	$dbh = mysql_connect('sql.mit.edu', 'swe', 'zam52fin')
		or die('Could not connect: ' . mysql_error() . '<br />');

	mysql_select_db("swe+vote") or die("No database selected.");
    
}
connectDatabase();
?>

<!-- This template is for everything in SUBDIRECTORIES -->


<meta http-equiv="UTF-8" content="text/html; charset=ISO-8859-1">
<?php include('../header.php'); ?>



<div id="templatehead">

<div id="templatehead-text">

<!-- Page Title -->

Outreach Events

<!-- Body -->

<table  cellspacing="0" cellpadding="0">
<tr>
<td valign="top">
<div id="left" style="width: 950px; background: white; text-align: center;">
<div id="margins"><br>
<br><h3>EXECUTIVE BOARD</h3>
</div></div></td></tr>

<tr>
<td valign="top">
<div id="left" style="width: 950px; background: white; text-align: center;">
<div id="margins">

<?php

include_once 'database.php';

$query = "SELECT * FROM exec2011"; 
	 
$result = mysql_query($query) or die(mysql_error());

while($row = mysql_fetch_array($result)){

	echo "<a href=\"#TB_inline?height=240&width=310&inlineId=" . $row['first'] . $row['last'] . $row['year'].  "\" class=\"thickbox\">";
	
	echo "<div class=\"phototext-div100\" onmouseover=\"this.className='phototext-div70'\" onmouseout=\"this.className='phototext-div100'\" style=\"margin: 14px; float: left; background: black url(photos/". $row['file'] .") no-repeat center center;\";>";
	echo "<span id=\"phototext-span\">" . $row['first']. "</span><br>";
	echo "</div>";
	
	echo "</a>";
	echo "<div id=\"" . $row['first'] . $row['last'] . $row['year']. "\" style=\"display:none\">"; 
	
	echo "<div style=\"float: left; width: 150px; height: 230px;\"><img src=\"photos/" . $row['file'] . "\" width=150></div>";
	echo "<div style=\"float: right; width: 150px; line-height: 1.4em; color: #444444; font-size: 13px;\"><span class=\"date\">" . $row['first']. " ". $row['last']. "." . "</span><br />";
	echo "<b>Position:</b> " . $row['position'] . "<br />";
	echo "<b>Year: </b>" . $row['year']. "<br /><b>Course: </b>". $row['course'] . "<br />";
	echo "<b>Fun fact: </b>". $row['fact'] . "</div>";

	//echo "<p style=\"text-align:center\"><a onclick=\"tb_remove()\" style=\"\"/>close</p> ";
	echo "</div>"; 
	//echo "<br /><br />";

}
?>

</div></div></td></tr>

<tr>
<td valign="top">
<div id="left" style="width: 950px; background: white; text-align: center;">
<div id="margins"><hr><br><br>
<h3>CAMPUS RELATIONS</h3>
</div></div></td></tr>

<tr>
<td valign="top">
<div id="left" style="width: 950px; background: white; text-align: center;">
<div id="margins">

<?php

include_once 'database.php';

$query = "SELECT * FROM campusrelations2011"; 
	 
$result = mysql_query($query) or die(mysql_error());

while($row = mysql_fetch_array($result)){

	echo "<a href=\"#TB_inline?height=240&width=310&inlineId=" . $row['first'] . $row['last'] . $row['year'].  "\" class=\"thickbox\">";
	
	echo "<div class=\"phototext-div100\" onmouseover=\"this.className='phototext-div70'\" onmouseout=\"this.className='phototext-div100'\" style=\"margin: 14px; float: left; background: black url(photos/". $row['file'] .") no-repeat center center;\";>";
	echo "<span id=\"phototext-span\">" . $row['first']. "</span><br>";
	echo "</div>";
	
	echo "</a>";
	echo "<div id=\"" . $row['first'] . $row['last'] . $row['year']. "\" style=\"display:none\">"; 
	
	echo "<div style=\"float: left; width: 150px; height: 230px;\"><img src=\"photos/" . $row['file'] . "\" width=150></div>";
	echo "<div style=\"float: right; width: 150px; line-height: 1.4em; color: #444444; font-size: 13px;\"><span class=\"date\">" . $row['first']. " ". $row['last']. "." . "</span><br />";
	echo "<b>Position:</b> " . $row['position'] . "<br />";
	echo "<b>Year: </b>" . $row['year']. "<br /><b>Course: </b>". $row['course'] . "<br />";
	echo "<b>Fun fact: </b>". $row['fact'] . "</div>";

	//echo "<p style=\"text-align:center\"><a onclick=\"tb_remove()\" style=\"\"/>close</p> ";
	echo "</div>"; 
	//echo "<br /><br />";

}
?>

</div></div></td></tr>

<tr>
<td valign="top">
<div id="left" style="width: 950px; background: white; text-align: center;">
<div id="margins"><hr><br><br>
<h3>CORPORATE RELATIONS</h3>
</div></div></td></tr>

<tr>
<td valign="top">
<div id="left" style="width: 950px; background: white; text-align: center;">
<div id="margins">

<?php

include_once 'database.php';

$query = "SELECT * FROM corporaterelations2011"; 
	 
$result = mysql_query($query) or die(mysql_error());

while($row = mysql_fetch_array($result)){

	echo "<a href=\"#TB_inline?height=240&width=310&inlineId=" . $row['first'] . $row['last'] . $row['year'].  "\" class=\"thickbox\">";
	
	echo "<div class=\"phototext-div100\" onmouseover=\"this.className='phototext-div70'\" onmouseout=\"this.className='phototext-div100'\" style=\"margin: 14px; float: left; background: black url(photos/". $row['file'] .") no-repeat center center;\";>";
	echo "<span id=\"phototext-span\">" . $row['first']. "</span><br>";
	echo "</div>";
	
	echo "</a>";
	echo "<div id=\"" . $row['first'] . $row['last'] . $row['year']. "\" style=\"display:none\">"; 
	
	echo "<div style=\"float: left; width: 150px; height: 230px;\"><img src=\"photos/" . $row['file'] . "\" width=150></div>";
	echo "<div style=\"float: right; width: 150px; line-height: 1.4em; color: #444444; font-size: 13px;\"><span class=\"date\">" . $row['first']. " ". $row['last']. "." . "</span><br />";
	echo "<b>Position:</b> " . $row['position'] . "<br />";
	echo "<b>Year: </b>" . $row['year']. "<br /><b>Course: </b>". $row['course'] . "<br />";
	echo "<b>Fun fact: </b>". $row['fact'] . "</div>";

	//echo "<p style=\"text-align:center\"><a onclick=\"tb_remove()\" style=\"\"/>close</p> ";
	echo "</div>"; 
	//echo "<br /><br />";

}
?>

</div></div></td></tr>

<tr>
<td valign="top">
<div id="left" style="width: 950px; background: white; text-align: center;">
<div id="margins"><hr><br><br>
<h3>MEMBERSHIP DEVELOPMENT</h3>
</div></div></td></tr>

<tr>
<td valign="top">
<div id="left" style="width: 950px; background: white; text-align: center;">
<div id="margins">

<?php

include_once 'database.php';

$query = "SELECT * FROM memberdevelopment2011"; 
	 
$result = mysql_query($query) or die(mysql_error());

while($row = mysql_fetch_array($result)){

	echo "<a href=\"#TB_inline?height=240&width=310&inlineId=" . $row['first'] . $row['last'] . $row['year'].  "\" class=\"thickbox\">";
	
	echo "<div class=\"phototext-div100\" onmouseover=\"this.className='phototext-div70'\" onmouseout=\"this.className='phototext-div100'\" style=\"margin: 14px; float: left; background: black url(photos/". $row['file'] .") no-repeat center center;\";>";
	echo "<span id=\"phototext-span\">" . $row['first']. "</span><br>";
	echo "</div>";
	
	echo "</a>";
	echo "<div id=\"" . $row['first'] . $row['last'] . $row['year']. "\" style=\"display:none\">"; 
	
	echo "<div style=\"float: left; width: 150px; height: 230px;\"><img src=\"photos/" . $row['file'] . "\" width=150></div>";
	echo "<div style=\"float: right; width: 150px; line-height: 1.4em; color: #444444; font-size: 13px;\"><span class=\"date\">" . $row['first']. " ". $row['last']. "." . "</span><br />";
	echo "<b>Position:</b> " . $row['position'] . "<br />";
	echo "<b>Year: </b>" . $row['year']. "<br /><b>Course: </b>". $row['course'] . "<br />";
	echo "<b>Fun fact: </b>". $row['fact'] . "</div>";

	//echo "<p style=\"text-align:center\"><a onclick=\"tb_remove()\" style=\"\"/>close</p> ";
	echo "</div>"; 
	//echo "<br /><br />";

}
?>


</div></div></td></tr>

<tr>
<td valign="top">
<div id="left" style="width: 950px; background: white; text-align: center;">
<div id="margins"><hr><br><br>
<h3>OUTREACH</h3>
</div></div></td></tr>

<tr>
<td valign="top">
<div id="left" style="width: 950px; background: white; text-align: center;">
<div id="margins">

<?php

include_once 'database.php';

$query = "SELECT * FROM outreach2011"; 
	 
$result = mysql_query($query) or die(mysql_error());

while($row = mysql_fetch_array($result)){

	echo "<a href=\"#TB_inline?height=240&width=310&inlineId=" . $row['first'] . $row['last'] . $row['year'].  "\" class=\"thickbox\">";
	
	echo "<div class=\"phototext-div100\" onmouseover=\"this.className='phototext-div70'\" onmouseout=\"this.className='phototext-div100'\" style=\"margin: 14px; float: left; background: black url(photos/". $row['file'] .") no-repeat center center;\";>";
	echo "<span id=\"phototext-span\">" . $row['first']. "</span><br>";
	echo "</div>";
	
	echo "</a>";
	echo "<div id=\"" . $row['first'] . $row['last'] . $row['year']. "\" style=\"display:none\">"; 
	
	echo "<div style=\"float: left; width: 150px; height: 230px;\"><img src=\"photos/" . $row['file'] . "\" width=150></div>";
	echo "<div style=\"float: right; width: 150px; line-height: 1.4em; color: #444444; font-size: 13px;\"><span class=\"date\">" . $row['first']. " ". $row['last']. "." . "</span><br />";
	echo "<b>Position:</b> " . $row['position'] . "<br />";
	echo "<b>Year: </b>" . $row['year']. "<br /><b>Course: </b>". $row['course'] . "<br />";
	echo "<b>Fun fact: </b>". $row['fact'] . "</div>";

	//echo "<p style=\"text-align:center\"><a onclick=\"tb_remove()\" style=\"\"/>close</p> ";
	echo "</div>"; 
	//echo "<br /><br />";

}



<?php include('../header2.php');?>



<!-- Body -->
<script>
    function expand(elem) {
	document.getElementById(elem).style.display = "block";
    }
</script>


<p><h4>Outreach is the largest section of MIT SWE, where we work to create programming that helps inspire over 800 students per year to pursue Science, Technology, Engineering, and Math (STEM) education and careers.</p>

<p>See below to to find a listing of all of our outreach programming, to join our mailing list (if you are MIT-affiliated), and to find 
where to direct your questions!</h4></p><br>







<?php include('../calendar.php'); ?>



<!-- Right panel -->









<?php include('../footer.php'); ?>



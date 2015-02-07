<?php include('../../header_alternative.php'); ?>

<!-- Page Title -->
MIT SWE Elections 2011
</div>
</div>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function()
{
  //hide the all of the element with class msg_body
  $(".msg_body").hide();
  //toggle the componenet with class msg_body
  $(".msg_head").click(function()
  {
    $(this).next(".msg_body").slideToggle(100);
  });
});
</script>

<div id="expanded-div" style="min-height: 500px; background: white;">

<!-- Body -->

<form action="submit.php" method="POST">

<?php
 if (@$_SERVER['SSL_CLIENT_S_DN_CN']) {
  $email = $_SERVER['SSL_CLIENT_S_DN_Email'];
  print 'Welcome, <b>' . $_SERVER['SSL_CLIENT_S_DN_CN'] .'</b>.<br>';
  } else {
  print "Oops, your certificate did not work. Your vote <b>won't be counted</b>. Contact the webmaster <a href=\"mailto:kqli@mit.edu\">Kimberly Li</a> if you see this message.";
  }
  echo "<input type=\"text\" name=\"email\" value=\"$email\"/ style=\"display:none;\"><br>";
  
  // time senstive voting
  //Time stamp of (mm/dd/yyyy) 12/02/2010 : 19 Hours: 0 Minutes, 0 Seconds= 1291334400
  //Time stamp of (mm/dd/yyyy) 12/03/2011 : 13 Hours: 0 Minutes, 0 Seconds EST= 1322935200
  //Time stamp of (mm/dd/yyyy) 12/02/2010 : 23 Hours: 59 Minutes, 59 Seconds= 1291352399
  //Time stamp of (mm/dd/yyyy) 12/09/2011 : 23 Hours: 59 Minutes, 59 Seconds EST= 1323493199
  echo 'Current time: '. date("F j, Y, g:i a") .'<br>' ;
  
  if (time()> 1322935200 && time()< 1323493199) {
	$active = true;
  } else {
	$active = false;
	echo "<h2>Please note that voting is currently not active. <br><br>Vote between 12/03/11 1:00pm and 12/09/11 11:59pm.</h2>";
  }


echo "<br><b>Should you wish to write in a candidate, please send an email to <a href=\"mailto:swe-nomcomm@mit.edu\">swe-nomcomm@mit.edu</a> with the positions and names of individuals
for which you are proposing a write-in candidate.</b><br>
";

//Connect to database
require('functions.php');
//Get positions
$result = mysql_query("SELECT * FROM positions") or die(mysql_error());
while($row = mysql_fetch_array($result)){
	$positionId = $row['positionId'];
	$description = $row['positionDescription'];
    $result2 = mysql_query("SELECT * FROM candidates WHERE positionId='$positionId'") or die(mysql_error());
	echo '<br><h2>'.$row['positionName'].'</h2>';
	echo "<div style=\"padding-left:10px;\"><p class=\"msg_head\">Click to view this position's description</p><div class=\"msg_body\">";
	echo $description;
	echo "</div></div>";	
	if ($active) {
		echo '<input type="radio" name='. $positionId .' value=\'none\' checked>Not voting for this position<br><br>';
	}
	while($row2 = mysql_fetch_array($result2)) {
		$id = $row2['candidateId'];
		$name = $row2['candidateName'];
		$statement = $row2['statement'];
		if ($active) echo '<input type="radio" name='. $positionId .' value='. $id .'>';
		echo '<strong>' .$name ;
		echo "</strong><div style=\"padding-left:20px;\"><p class=\"msg_head\">Click for Platform</p><div class=\"msg_body\">";
		echo "<b>".$name. "'s Platform:</b><br>" .$statement;
		echo "</div></div>";
	}
	echo '<hr>';	
}
?>


<?php 
if ($active) {
	echo 'You can only vote once, so double check your votes before submitting!';
	echo '<input type="submit" value="Vote!">';
	} else {
	echo 'Voting is currently not available. Voting is available between 12/3/11 7:00pm and 12/03/11 11:59pm';
	
	}
?>
</form>

	
<?php include('../../footer_alternative.php'); ?>



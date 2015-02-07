<?php include('../header_alternative.php'); ?>

<!-- Page Title -->
MIT SWE Elections 2015
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


<?php

  // time sensitive voting
  // Time stamp of (mm/dd/yyyy) 12/02/2010 : 19 Hours: 0 Minutes, 0 Seconds= 1291334400
  // Time stamp of (mm/dd/yyyy) 12/03/2011 : 13 Hours: 0 Minutes, 0 Seconds EST= 1322935200
  // Time stamp of (mm/dd/yyyy) 12/02/2010 : 23 Hours: 59 Minutes, 59 Seconds= 1291352399
  // Time stamp of (mm/dd/yyyy) 12/09/2011 : 23 Hours: 59 Minutes, 59 Seconds EST= 1323493199
  // Time stamp of (mm/dd/yyyy) 12/01/2012 : 13 Hours: 0 Minutes, 0 Seconds EST= 1322935200
  // Time stamp of (mm/dd/yyyy) 12/09/2012 : 23 Hours: 59 Minutes, 59 Seconds EST= 1323493199
  // Time stamp of (mm/dd/yyyy) 11/17/2014 : 0  Hours: 0 Minutes, 0 seconds EST = 1416182400
  // Time stamp of (mm/dd/yyyy) 11/23/2014 : 23 Hours: 59 Minutes, 59 seconds EST = 1416805200

//echo 'Current time: '. date("F j, Y, g:i a") .'<br>' ;
if (time()> 1416182400 && time()< 1416805200) {
	$active = true;
	//echo "Voting is now CLOSED. We will be announcing the new MIT SWE Exec 2014 shortly.";
	//"Voting opens on <b>December 1</b>.<br><br>";
        echo "<h2>Click <a href=\"vote2/\">here</a> to vote!</h2><br> You must be an MIT SWE member to participate in the voting process. Certificates are needed to access the voting page.</h2><br><br>";
 } else {
	$active = false;
	echo "<h2>Please note that voting is currently not active. <br><br></h2>When voting is active, a link will appear at the top of this page.<br><br> ";
 }

echo "<h3>Information on Voting for SWE Exec 2015</h3>
<p>MIT SWE has two leadership teams - SWE Exec and SWE Board. The eight members of SWE Exec are voted in by the section membership in December and take office in January; their job is to oversee the activities and growth of the MIT SWE section and act in advisory roles to the members Planning Board. There are around 30-40 Planning Board positions each year; these positions are open for application in late January and are appointed by SWE Exec in early February, taking office immediately.</p>
<p>The SWE Nominating Committee's mission is to present at least one qualified candidate for each Exec position to MIT SWE. All current SWE members at MIT are eligible to vote for SWE Exec. The ballot for the 2015 SWE Executive Team is presented below:</p>
<h3>SWE Exec Voting Timeline</h3>
<b>November 15:</b> Ballots announced<br>
<b>November 17:</b> Election voting begins<br>
<b>November 23:</b> Election voting closes at 11:59PM<br>
<b>November 24:</b> 2015 MIT SWE Exec announced<br>
<b>January 1:</b> 2015 MIT SWE Exec takes office<br><br>";

/*<h3>Petitioning to Join the Ballot for FY14 MIT SWE Executive Board </h3>
<p>After the ballot is announced, additional candidates may be nominated by petition to be added to the ballot, provided that:</p>
<b>1.</b> The member is eligible for the position;<br>
<b>2.</b> The member has given written consent to being placed on the ballot;<br>
<b>3.</b> A minimum of five of the voting members of the section have signed a petition to place the candidate's name on the ballot; and<br>
<b>4.</b> The petition, together with the written consent, is submitted to the Nominating Committee by 11:59 pm on November 30.<br>
<br>
<p>Any additional candidate successfully nominated by petition will appear on the ballot when voting opens, with it indicated that they were a petition candidate.</p>

<p>To nominate an additional candidate for SWE Exec 2014, please fill out the petition form (<a href=\"Petition to Nominate an Additional Candidate for SWE Exec 2012.pdf\">click to download</a>) and send it to SWE NomComm (<a href=\"mailto:swe-nomcomm@mit.edu\">swe-nomcomm@mit.edu</a>) by 11:59 pm on November 30.</p>
<br><h1>SWE Exec 2013 Ballot (as of November 28)</h1>
" ;*/

//Connect to database
require('vote2/functions.php');
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
	while($row2 = mysql_fetch_array($result2)) {
		$id = $row2['candidateId'];
		$name = $row2['candidateName'];
		$statement = $row2['statement'];
		echo '<strong>' .$name ;
		echo "</strong><div style=\"padding-left:20px;\"><p class=\"msg_head\">Click for Platform</p><div class=\"msg_body\">";
		echo "<b>".$name. "'s Platform:</b><br>" .$statement;
		echo "</div></div>";
	}
	echo '<hr>';	
}
?>


<?php include('../footer_alternative.php'); ?>



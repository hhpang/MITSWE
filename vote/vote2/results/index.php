<?php include('../../../header_alternative.php'); ?>

<!-- Page Title -->
MIT SWE Elections 2014 Results
</div>
</div>


<script type="text/javascript" src="../jquery.js"></script>
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

Results of the SWE 2014 Elections:<br><br>
People who currently have access to this page:<br>
Anika Gupta, Jean Xin, Pri Tembhekar, Quanquan Liu
<br><br>

<?php
require('../functions.php');
//Get positions
$result = mysql_query("SELECT * FROM positions") or die(mysql_error());
while($row = mysql_fetch_array($result)){ // for each position
    $positionId = $row['positionId'];
    echo "<h2>" . $row['positionName']. "</h2><br><br>"; //Position name
    $result2 = mysql_query("SELECT * FROM candidates WHERE positionId='$positionId'") or die(mysql_error());
	while($row2 = mysql_fetch_array($result2)){ // for each candidate
		echo $row2['candidateName']."<br>";
		$candidateId = $row2['candidateId'];
		$result3 = mysql_query("SELECT * FROM votes WHERE positionId='$positionId' and candidateId='$candidateId'") or die(mysql_error());
		echo "Votes: ". mysql_num_rows($result3)."<br>";  //Number of votes
		echo "<div style=\"padding-left:20px;\"><p class=\"msg_head\">Click to see voters</p><div class=\"msg_body\"><strong>Voters: </strong><br>";
		while ($row3 = mysql_fetch_array($result3)) {
			echo $row3['username']."<br>";
		} 
		echo "</div></div>";
	}
	echo "<br>";   
    echo '<br /><hr><br>';
}
?>

</html>

	
<?php include('../../footer_alternative.php'); ?>

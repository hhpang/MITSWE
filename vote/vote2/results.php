<?php include('../../header_alternative.php'); ?>

<!-- Page Title -->
MIT SWE Elections 2011 Results
</div>
</div>

<div id="expanded-div" style="min-height: 500px; background: white;">

<!-- Body -->

Results of the SWE 2011 Elections:<br><br>
People who currently have access to this page:<br>
Ellen McIsaac, Diandra Drago, Joy Jiao, Kimberly Li, Sandra Chen
<br><br>

<?php
require('functions.php');
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
		echo mysql_num_rows($result3)."<br>";  //Number of votes
	}
	echo "<br>";   
    echo '<br /><hr><br>';
}
?>

</html>

	
<?php include('../../footer_alternative.php'); ?>

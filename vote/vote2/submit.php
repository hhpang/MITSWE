<?php include('../../header_alternative.php'); ?>

<!-- Page Title -->
Thanks for voting!
</div>
</div>

<div id="expanded-div" style="min-height: 500px; background: white;">

<!-- Body -->


<?php
//Connect to database
require('functions.php');
//Get votes
$arr = array(0 => $_POST["0"], 
			1 => $_POST["1"],
			2 => $_POST["2"],
			3 => $_POST["3"],
			4 => $_POST["4"],
			5 => $_POST["5"],
			6 => $_POST["6"],
			7 => $_POST["7"]);

// get user
$user = $_POST["email"];
//Check if already voted
$voted = mysql_query("SELECT * FROM votes WHERE username='$user'") or die(mysql_error());
$votedrows = mysql_num_rows($voted);
if ($votedrows > 0) {
	$alreadyVoted = true;
} else {
	$alreadyVoted = false;
}
if($alreadyVoted){
    echo "Sorry, you already voted! If you believe that this is a mistake, please contact the webmaster at <a href=\"mailto:swe-webmaster@mit.edu\">swe-webmaster@mit.edu</a>";
}else{
	echo "Thanks for voting, ".$user."!<br><br>Here are your votes:<br><br>";
	$result = mysql_query("SELECT * FROM positions") or die(mysql_error());
	while($row = mysql_fetch_array($result)){
		$Id = $row['positionId'];
		$candidateName = "no one";
		$candidateId = $arr[$Id];
		$positionName = $row['positionName'];
		if ($candidateId != "none" and $candidateId != null) {
			mysql_query("INSERT INTO votes (username,positionId,candidateID) VALUES('$user','$Id', '$candidateId')") or die(mysql_error());
			$result2 = mysql_query("SELECT * FROM candidates WHERE candidateId='$candidateId'") or die(mysql_error());
			$row2 = mysql_fetch_array($result2);
			$candidateName = $row2['candidateName'];
		} 
		echo "For ". $positionName .", you voted for: <br><span style=\"padding-left: 10px;\"> " . $candidateName ."</span><br>"; 
	}
}
?>




	
<?php include('../../footer_alternative.php'); ?>
<!-- This template is for everything in the root directory -->

<?php include('../header.php'); ?>

<div id="templatehead">
<div id="templatehead-text">
<!-- Page Title -->
Networking Event - December 12

<?php include('../header2.php');?>

<!-- Body --> 

<?php 
 $target = "uploadedresumes/"; 
 $target = $target . basename( $_FILES['uploaded']['name']) ; 
 $ok=1; 
 
 //This is our size condition 
 if ($uploaded_size > 2000000) 
 { 
 echo "<b>Your file is too large. Please restrict your file to 2 MB.</b><br>"; 
 echo "Click <a href=\"networkingevent1212.php\">here</a> to return.<br>";
 $ok=0; 
 } 
 
 //This is our limit file type condition 
 if ($uploaded_type =="text/php") 
 { 
 echo "<b>No PHP files.</b><br>"; 
 echo "Click <a href=\"networkingevent1212.php\">here</a> to return.<br>";
 $ok=0; 
 } 
 
 //Here we check that $ok was not set to 0 by an error 
 if ($ok==0) 
 { 
 echo "<b>Sorry, your file was not uploaded.</b><br>"; 
 echo "Click <a href=\"networkingevent1212.php\">here</a> to return.<br>";
 } 
 
 //If everything is ok we try to upload it 
 else 
 { 
 if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)) 
 { 
 echo "<b>The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded. We look forward to seeing you at the event!</b><br>"; 
 echo "Click <a href=\"networkingevent1212.php\">here</a> to return.<br>";
 } 
 else 
 { 
 echo "<b>Sorry, there was a problem uploading your file.</b><br>"; 
 echo "Click <a href=\"networkingevent1212.php\">here</a> to return.<br>";
 } 
 } 
 ?> 

<?php include('../calendar.php'); ?>

<!-- Right panel -->




<?php include('../footer.php'); ?>

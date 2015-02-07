<?
    //Start session
    session_start();
    
    //Unset the variables stored in session
    unset($_SESSION['SESS_EMAIL']);
    unset($_SESSION['SESS_NAME']);
    unset($_SESSION['SESS_NUM_INPUT_ROWS']);
    
    header("location: index.php");
?>
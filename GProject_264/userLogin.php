<?php 
session_start() ; 
// Starts user session which stores user session information 

$mysqli = mysqli_connect("localhost", "cs264user", "letmein", "userLoginInfo");
// Connect to the database
$securityCode = filter_input(INPUT_POST,'securityCode'); 

if($securityCode && !(filter_input(INPUT_POST,'username'))){ 

$sql="SELECT * FROM testUsers WHERE securityCode= PASSWORD('".$securityCode."')"; 
//gets the num of rows for the query
$query = mysqli_query($mysqli,$sql) or die(mysqli_error($mysql)) ;

if(mysqli_num_rows($query) >= 1){   
    
    while ($info = mysqli_fetch_array($query)) {
    echo ("Your Password is ".$info['password']);
    exit ; 
    }
    
    }
    
    else {
	//redirect back to login form if not authorized
	header("Location: home.html");
	exit;
    }
}

if((!filter_input(INPUT_POST,'username')) || (!filter_input(INPUT_POST,'password'))){
    header("Location: home.html") ;
    exit;
}

$targetUsername = filter_input(INPUT_POST,'username');
$targerPassword = filter_input(INPUT_POST,'password');

$sql = "SELECT * FROM testUsers WHERE username='".$targetUsername."' AND password = PASSWORD('".$targerPassword."')";

$query = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));
//gets the num of rows for the query 
if(mysqli_num_rows($query) >= 1){
    
    while ($info = mysqli_fetch_array($query)) {
    $username = stripslashes($info['username']);
    }

    $_SESSION['username'] = $username ; 
    
    //set authorization cookie using curent Session ID
    setcookie("authUser", session_id(), time()+60*30, "/", "", 0); 
    
    header("Location:Puzzle1.php"); 
}

?>
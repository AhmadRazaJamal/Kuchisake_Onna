<?php  
session_start();

$mysqli = mysqli_connect("localhost", "cs264user", "letmein", "answersDB");
// Connect to the database

$puzzleAnswer = filter_input(INPUT_POST,'puzzleAnswer');
//Answer to the puzzle 

$sql = "SELECT * FROM answers WHERE answer ='".$puzzleAnswer."'";

$query = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli)) ;

if(mysqli_num_rows($query) >= 1){
    while ($answer = mysqli_fetch_array($query)) {
        if($answer['answer'] == 'The dark, empty, and lifeless streets'){
            $solvedUser = "INSERT INTO puzzle1 values('".$_SESSION['username']."',null)";
            $query = mysqli_query($mysqli,$solvedUser) or die(mysqli_error($mysqli)) ;
            header("Location:Puzzle2.html"); 
            exit ; 
        }
        elseif($answer['answer'] == 'Figure approaching, closely ever, hidden behind a mask'){
            $solvedUser = "INSERT INTO puzzle2 values('".$_SESSION['username']."',null)";
            $query = mysqli_query($mysqli,$solvedUser) or die(mysqli_error($mysqli)) ;
            header("Location:Puzzle3.html");
            exit ; 
        }
        elseif($answer['answer'] == '67 111 108 100 44 32 108 105 102 101 108 101 115 115 44 32 115 104 101 32 97 112 112 114 111 97 99 104 101 115'){
            $solvedUser = "INSERT INTO puzzle3 values('".$_SESSION['username']."',null)";
            $query = mysqli_query($mysqli,$solvedUser) or die(mysqli_error($mysqli)) ;
            header("Location:Puzzle4.html");
            exit ; 
        }
        elseif($answer['answer'] == 'Am I pretty? She asks frailly'){
            $solvedUser = "INSERT INTO puzzle4 values('".$_SESSION['username']."',null)";
            $query = mysqli_query($mysqli,$solvedUser) or die(mysqli_error($mysqli)) ;
            header("Location:Decision1.html");
            exit ; 
        }
        elseif($answer['answer'] == 'Unveils and asks once more'){
            $solvedUser = "INSERT INTO puzzle5 values('".$_SESSION['username']."',null)";
            $query = mysqli_query($mysqli,$solvedUser) or die(mysqli_error($mysqli)) ;
            header("Location:Decision2.html");
            exit ; 
        }
    }
}

else
{

    header("Location: Puzzle1.php");
    exit ; 

}










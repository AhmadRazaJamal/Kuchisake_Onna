<?php

$displayBlock = '' ; 

$userDecisionYes = filter_input(INPUT_POST,'Yes');
$userDecisionNo = filter_input(INPUT_POST,'No');
$userDecisionMaybe = filter_input(INPUT_POST,'Maybe');

if($userDecisionYes){
    header("Location: Puzzle5.html"); 
    exit ; 
}

elseif($userDecisionNo){
    header("Location: Death.html"); 
    exit ; 
}

elseif($userDecisionMaybe){
    header("Location: alternateDeath.html"); 
    exit ; 
}

?>
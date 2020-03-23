<?php

$userDecisionYes = filter_input(INPUT_POST,'Yes');
$userDecisionNo = filter_input(INPUT_POST,'No');
$userDecisionMaybe = filter_input(INPUT_POST,'Maybe');

$decisionNum1 = filter_input(INPUT_POST,'decision1');
$decisionNum2 = filter_input(INPUT_POST,'decision2');

if($decisionNum1)
{
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
}

if($decisionNum2)
{
    if($userDecisionYes){
        header("Location:Death.html"); 
        exit ; 
    }
    
    elseif($userDecisionNo){
        header("Location:Death.html"); 
        exit ; 
    }
    
    elseif($userDecisionMaybe){
        header("Location:Life.html"); 
        exit ; 
    }
}


?>
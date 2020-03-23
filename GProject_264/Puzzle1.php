<?php

//Initializes the session and displays the username that was stored 
session_start();
    $displayBlock = "<p class='welcomeUser' >Welcome Authorized User :".$_SESSION['username']."</p>";

?>

<html>

    <script src='https://fonts.googleapis.com/css?family=Denk+One'></script>
    <script src='http://use.edgefonts.net/de-walpergens-pica.js'></script>
    <!----Imports font style-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='http://use.edgefonts.net/astloch.js'></script>
    <!----Imports JQuery functions-->

<style>

#loginVideo{
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

.block1{
    position: absolute ; 
    border: 2px transparent solid ;
    background-color : rgba(255, 255, 255,0.1) ;
    border-radius: 5%; 
    width: 600px ; 
    height: 500px ; 
    left: 28vw ; 
    top: 12vh ; 
}

.answer1{
    position: relative;
    left: 27.5vw; 
    top: 80vh ; 
    border-radius: 5px ; 
    display: block ; 
    padding: 20px;
    font-family: 'Denk One', sans-serif;  
    border:2px transparent solid; 
    outline: 0 ; 
    background: black;
    opacity: 0.9;
    width:42.6%;
    font-size: 15px;
    color: azure; 
}

.welcomeUser{
    position: relative;
    font-family:de-walpergens-pica ;
    font-size: 20px;
    color: azure;
}

.submitAnswerB{
    position:absolute;
    border-radius: 5px ; 
    display: block ; 
    padding: 10px;
    font-family:de-walpergens-pica ;
    width:15.2% ;  
    font-size: 16px;
    background:grey ; 
    color: azure;
    left: 787px;
    top: 790px;
}

.submitB{
    position: absolute;
    border-radius: 5px ; 
    display: block ; 
    padding: 10px;
    font-family:de-walpergens-pica ;
    width:15.2% ;  
    font-size: 16px;
    background:grey ; 
    color: azure;
    left:1200px ; 
    top:10px;
}


.answer{
    position: relative;
    left: 18vw; 
    top: 82.5vh ; 
    color: transparent ; 
    text-shadow: 0 0 1px rgba(255, 0, 0, 0.788);
    font-family: 'Denk One', sans-serif;
    text-transform: uppercase;
    letter-spacing: 2px;
    font-size: 2em;
    position: absolute ; 
    margin-left: -180px;
    animation-name: horror;
    animation-duration: 5s;
    animation-iteration-count: infinite ;
}

#puzzle1{
    font-family: 'Denk One', sans-serif; 
    position: relative;
    letter-spacing: 4px;
    font-size: 40px;
    color: azure; ;
    text-shadow: 1px 1px 2px black ; 
    
}

@keyframes horror{ /*Animation effect for text*/ 

    0% {text-shadow: 0 0 10px rgba(255, 0, 0, 0.1);; left: 19vw; top: 82.5vh;}
    5% {text-shadow: 0 0 5px rgba(255, 0, 0, 0.2);; left: 18vw; top: 82.5vh;}
    10% {text-shadow: 0 0 5px rgba(255, 0, 0, 0.3);; left: 18vw; top: 83vh;}
    15% {text-shadow: 0 0 5px rgba(255, 0, 0, 0.4);; left: 19vw; top: 83.5vh;}
    16% {text-shadow: 0 0 10px rgba(255, 0, 0, 0.5);; left: 18vw; top: 82vh;}
    17% {text-shadow: 0 0 10px rgba(255, 0, 0, 0.6);; left: 18vw; top: 82.5vh;}
    18% {text-shadow: 0 0 10px rgba(255, 0, 0, 0.7);; left: 19vw; top: 82.56vh;}
    19% {text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);; left: 20vw; top: 82.5vh;}
    20% {text-shadow: 0 0 10px rgba(255, 0, 0, 0.9);; left: 19vw; top: 83vh;}
    25% {text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);; left: 18vw; top: 83.5vh;}
    30% {text-shadow: 0 0 10px rgba(255, 0, 0, 1);; left: 19vw; top: 82vh;}
    34% {text-shadow: 0 0 10px rgba(255, 0, 0, 0.6);; left: 20vw; top: 82.5vh;}
    35% {text-shadow: 0 0 10px rgba(255, 0, 0, 0.5);; left: 17vw; top: 82.5vh;}
    40% {text-shadow: 0 0 5px rgba(255, 0, 0, 0.4);; left: 16vw; top: 82.5vh;}
    50% {text-shadow: 0 0 5px rgba(255, 0, 0, 0.8);; left: 16vw; top: 83vh;}
    55% {text-shadow: 0 0 5px rgba(255, 0, 0, 0.2);; left: 17vw; top: 83vh;}
    56% {text-shadow: 0 0 10px rgba(255, 0, 0, 0.1);; left: 17vw; top: 83.5vh;}
    57% {text-shadow: 0 0 10px rgba(255, 0, 0, 0.2);; left: 18vw; top: 82vh;}
    60% {text-shadow: 0 0 10px rgba(255, 0, 0, 0.4);; left: 19vw; top: 82vh;}
    65% {text-shadow: 0 0 10px rgba(255, 0, 0, 0.5);; left: 19vw; top: 82vh;}
    70% {text-shadow: 0 0 5px rgba(255, 0, 0, 1);; left: 19.5vw; top: 83vh;}
    80% {text-shadow: 0 0 5px rgba(255, 0, 0, 0.7);; left: 20vw; top: 83.5vh;}
    90% {text-shadow: 0 0 5px rgba(255, 0, 0, 0.6);; left: 18vw; top: 82vh;}
    90% {text-shadow: 0 0 10px rgba(255, 0, 0, 0.8);; left: 17vw; top: 82vh;}
    100% {text-shadow: 0 0 10px rgba(255, 0, 0, 1);; left: 17vw; top: 82.5vh;}
    
}

</style>

<head>
</head>

<body>

   <video loop muted autoplay id='loginVideo'>
         <source src='indexPage.mp4' type='video/mp4'> <!--- Credits to Videvo -->
   </video>

    <?php echo $displayBlock ?>

    <form method='post' action='logOut.php'>
    <input name='submitB' type="submit" class='submitB' value="LOGOUT">
    </form>
    <!--- Button to log out -->

    <form method="POST" action="processPuzzle.php">
    <input name='puzzleAnswer' type= 'text' class= 'answer1'>
    <label class='answer'><b>Your Answer? </b></label>
    <input type="submit" class="submitAnswerB" value="SUBMIT">
    </form>
    <!--- Button to submit Answer -->

    <div class = 'block1' ><p id='puzzle1' name='puzzle1'>
    <b>   - .... . / -.. .- .-. -.- --..-- / . -- .--. - -.-- --..-- / .- -. -.. / .-.. .. ..-. . .-.. . ... ... / ... - .-. . . - ... /
    </b></p></div> 
    <!--- Block for puzzles -->

</body>

</html>


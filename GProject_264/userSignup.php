<?php 
session_start() ; 
$mysqli = mysqli_connect("localhost", "cs264user", "letmein", "userLoginInfo");
// Connect to the database

$usernameErr = $emailErr = $passErr = $retypePasserr = $securityCodeerr = "";

    $Newusername = filter_input(INPUT_POST,'username'); 
    $email = filter_input(INPUT_POST,'email'); 
    $securityCode = filter_input(INPUT_POST,'securityCode'); 
    
    $Newpassword = filter_input(INPUT_POST,'password');
    $Retypepassword = filter_input(INPUT_POST,'retypepass');
    
    if(!$Newusername){
        $usernameErr = 'Username is required' ; 
    }
    if(!$email){
        $emailErr = "Email is required";
    }
    if(!$securityCode){
        $securityCodeerr = "SecurityCode is required"; 
    }
    if(!$Newpassword){
        $passErr = "Password is required"; 
    }
    if(!$Retypepassword){
        $retypePasserr = "Password needs to be retyped"; 
    }

if($usernameErr == '' && $emailErr == '' && $passErr == '' &&
 $retypePasserr == '' && $securityCodeerr == ''){
    if($Newpassword==$Retypepassword){
        
        $sql = "INSERT testUsers values('".$Newusername.
            "','".$email."',PASSWORD('".$Newpassword.
            "'),PASSWORD('".$securityCode."'))";
        
        $query = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));

    echo 'Account Registered';
    header("refresh:3;url=home.html");
    exit;    
    }
    else{
        echo 'Passwords did not match, Try Again' ; 
        header("refresh:3;url=home.html");
        exit;
    }
}

else {
?>

<html>

<script src='http://use.edgefonts.net/de-walpergens-pica.js'></script>
<!----Imports font style-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!----Imports JQuery functions-->

<style>

::placeholder {
  color:aliceblue;
  font-size: 15px
}

#welcome{
    position: absolute ; 
    width: 125px;
    height: 125px;
    border-radius: 50% ;
    left: 43vw ; 
    top: 20vh ; 
    border: 5px azure outset ;
}

#loginVideo{
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

#creep{
    position: absolute ; 
    width: 125px;
    height: 125px;
    border-radius: 50% ;
    left: 43vw ; 
    top: 20vh ; 
    border: 5px azure outset ; 
}

.loginForm{
    position: relative ; 
    left: 35vw ; 
    top: 33vh ; 
    border-radius: 6px;
    overflow: hidden;
}

.el_form{
    border-radius: 5px ; 
    display: block ; 
    padding: 20px;
    font-family:de-walpergens-pica ;
    border:2px black solid; 
    outline: 0 ; 
    background: black;
    opacity: 0.9;
    width:24%;
    font-size: 15px;
    color: azure;
    float : inherit ;
}

.error{
    font-family:de-walpergens-pica ;
    color : red ;
}

.btn{
    border-radius: 5px ; 
    display: block ; 
    padding: 20px;
    font-family:de-walpergens-pica ;
    width:24.2% ;  
    font-size: 16px;
    background:azure ; 
    color: black;
}

.btn2,.backB{
    width:10% ;  
    left: 85vw ;
    top:2vh ;
    position: absolute ; 
    padding: 1px ;
    border-radius: 5px ; 
    display: block ; 
    font-family:de-walpergens-pica ;
    font-size: 16px;
    background:azure ;
    color: black;
}

.helpLogin{
    position: relative;
    left: 35vw ;
    top:32vh ;
}

</style>

<body>

    <video loop muted autoplay id='loginVideo'>
     <source src='indexPage.mp4' type='video/mp4'> <!--- Credits to Videvo -->
    </video>

    <img id='creep' src="LoginCreeper.gif" alt="N/A"> <br><!--- Image for creepy eye -->
    <br>
    <form method='post' action= 'userSignup.php' class="loginForm" name="loginForm"> <!--Form page for user login/signup-->
        
        <div class='formGroup'><input name='username' type='text' class='el_form' placeholder='USERNAME' maxlength="25" required></div>
        <span class='error'><?php echo $usernameErr ?></span>
        <div class='formGroup'><input name='email' type='email' class='el_form' placeholder='EMAIL'  maxlength='25' required></div>
        <span class='error'><?php echo $emailErr ?></span>
        <div class='formGroup'><input name='password' type='password' class='el_form' placeholder='PASSWORD' maxlength='45' required></div>
        <span class='error'><?php echo $passErr ?></span>
        <div class='formGroup'><input name='retypepass' type='password' class='el_form' placeholder='RETYPE PASSWORD'  maxlength='45' required></div>
        <span class='error'><?php echo $retypePasserr ?></span> 
        <div class='formGroup'><input name='securityCode' type='password' class='el_form' placeholder='SECURITY CODE'  maxlength='45' required></div>
        <span class='error'><?php echo $securityCodeerr ?></span><br>
        <br><div class='formGroup'><input name=submitB class="btn" type="submit" value='SUBMIT'></div>

    </form>

</body>

</html>

<?php
}
?>

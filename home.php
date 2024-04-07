<?php
    
    session_start();

    
    if (isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == true) {
        
    }
    else {
        //header('Location: login.php');
        //exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Who Wants to be a Millionaire?</title>
	<link href="home.css" type="text/css" rel="stylesheet" />
</head>
<body>


<audio controls autoplay>
        <source src="./home_bgm.mp3" type="audio/mpeg" >
      </audio>
	
<div class="background-image">
    <nav class="navbar">
        <a href="logout1.php" class="button">Log Out</a>
    </nav>
    <div class="box">
    <p>RULES: Answer incorrectly, and the game is over.<br/>
            Answer correctly, and move on to the next question.<br/>
            10 correct answers makes you a millionaire! <br/>
            if you quit at any instance, you only get $10.
        </p>
</div>
    <div class="login-container">
  
    <!-- <div class="box">
  This is a box!
</div> -->
        <div class="login-box"> 
       
            <h1>WELCOME, <?php print_r($_SESSION["username"]);?></h1>
            
	
            
            <a href="q1.php" class="button">Start the game!!</a> <br>
            <a href="leaderboard.php" class="button">See Leaderboard</a>
        
		
    </div>
    </div>
</div>
</body>
</html>
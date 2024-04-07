
<html>
<head>
	<title>You Lost</title>
	<link href="loser.css" type="text/css" rel="stylesheet" />
</head>

<body>
<audio controls autoplay>
        <source src="./lose.mp3" type="audio/mpeg" >
      </audio>
<div class ="gif">
        <img src="loser.gif" alt="loser">
</div>
<div class="loser-message">
        <h2>Sorry, You Lost !</h2>
        <p>Unfortunately, you didn't answer correctly. 
            So you won only <?php print_r($_SESSION["amount"]);?>. Better luck next time!</p>
        <div class="button-container">
            <a href="leaderboard.php">View Leaderboard</a>
            <a href="home.php">Go to Homepage</a>
        </div>
    </div>
</body>

</html>
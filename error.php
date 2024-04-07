
<?php
	session_save_path("session");
	session_start();
	$error = $_SESSION["error"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Who Wants to be a Millionaire?</title>
	<link href="error.css" type="text/css" rel="stylesheet" />
</head>
<body>
	

	<div class="loser-message">
	<h1>ERROR</h1>
	<h2>Username/Password is incorrect or you are new user so register first</h2>
	
	<div>
	
	</div>
        <div class="button-container">
            
            <a href="login.php">Go to login</a>
			<a href="register.php">Go to Register</a>
        </div>
    </div>
</body>
</html>
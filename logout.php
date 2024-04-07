<?php 
	session_start();
	session_save_path("session");
	$username = $_SESSION["username"];
	$password = $_SESSION["password"];
	$score = 0;
	$_SESSION["score"] = $score;
	$amount = $_SESSION["amount"];

	
		//check post
		$lines = file('user_data.txt');
		$result = '';

		foreach($lines as $line) {
			$data = explode(',', $line);
			if($data[0] == $username) {
				$result .= $username . "," . $password . "," . $score . "\n";
			} else {
				$result .= $line;
			}
		}
		file_put_contents('user_data.txt', $result);
		header("Location: logoutPage.php");
		exit;
	
?>
<?php
	if($_SERVER[ 'REQUEST_METHOD' ] === "POST" && isset($_POST[ 'url' ])) {

		require_once 'config.php';
		
		$characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
		$url = mysqli_real_escape_string($conn, $_POST['url']);
		$len = 5;
		$redirect_token = '';

		for( $i = 0; $i<$len; $i++ ) {
			$redirect_token[$i] = $characters[rand(0, strlen($characters))];
		}

		if(mysqli_query($conn, "INSERT INTO `redirects_logs` ( `origin`, `redirect_code` ) 
			VALUES ('{$url}', '{$redirect_token}')")) {
			echo $redirect_token;
		} else {
			echo 1;
		}

	}

	exit;
?>
<?php
	require_once 'config.php';
	$protocol = $_SERVER[ 'SERVER_PROTOCOL' ] === 'HTTP/1.1' ? "http://" : "https://";
	$host = $_SERVER[ 'HTTP_HOST' ];
	$path = $_SERVER[ 'REQUEST_URI' ];
	$url = $protocol.$host.$path;
	$codeSplitter = explode("?", $url);
	$redirect_token = NULL;
	if( count($codeSplitter) > 1 ) {
		if(strlen($codeSplitter[1]) === 5) {
			$redirect_token = $codeSplitter[1];
			$redirect_token = mysqli_real_escape_string($conn, $redirect_token);
		}
	}
	
	if($conn) {
		if($q = mysqli_query($conn, "SELECT `origin` FROM `redirects_logs` WHERE redirect_code='{$redirect_token}'")) {
			$count = mysqli_num_rows($q);
			if($count > 0) {
				$fdata = mysqli_fetch_assoc($q);
				extract($fdata);
				header("Location: ".$origin);
			}
		}
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="author" content="Anonymous Hacker" />
	<meta name="description" content="Shorten long URLs. URL Shortner for all." />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" type="image/*" href="favicon.ico" />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script src="https://kit.fontawesome.com/0d1b6d31de.js" crossorigin="anonymous"></script>
	<title>URL Shortner</title>
</head>
<body>

	<!-- Main Section -->
	<section id="main">
		<div class="top-div">
			<div class="row-0">
				<img src="main-img.png" alt="URL Shortner" />
			</div>
			<div class="row-1">
				<h1>Welcome to URL Shortner</h1>
				<h3>The easiest way to shorten URLs <br/> and share copy your URLs to friends and groups.</h3>
			</div>
		</div>
		<div class="bottom-div">
			<div class="input-area">
				<div class="icon-wrapper">
					<i class="fa-solid fa-link"></i>
				</div>
				<input type="text" name="url" placeholder="Enter the link.." autocomplete="off" />
				<button>Shorten</button>
			</div>
			<div class="status"></div>
		</div>
		<!-- <div class="footer"></div> -->
	</section>

<script type="text/javascript" src="myScript.js" defer async></script>
</body>
</html>
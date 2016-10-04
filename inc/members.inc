<?php

$logged_in = FALSE;
$msg = '';

// Validation
if ($_POST['username'] && $_POST['password']) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	if ($username == '' || empty($username) || $username != "member") {
		$logged_in = FALSE;
		$msg = 'Your username is not correct.';
	} else {
		if($password == '' || empty($password) || $password != "western") {
			$logged_in = FALSE;
			$msg = 'Your password is not correct.';
		}
		else{
			$logged_in = TRUE;
		}
	}
}
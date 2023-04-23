<?php

require "vendor/autoload.php";

// 1. What does this function session_start() do to the application?
// the session start is used to initialize the session that we can used to store data on the server that can be accessed(retrieved data) 
// across multiple pages of the website. Note that the session_start() should be called at the beginning of the page you want to access its session data.

session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
</head>
<body>

	<h1>Analogy Exam Registration</h1>
	<h3>Kindly register your basic information before starting the exam.</h3>

	<form method="POST" action="register.php">
		Enter your full name:<br />
		<input type="text" name="fullname" placeholder="Full Name" required />
		<br />

		Enter your Email:<br />
		<input type="email" name="email" placeholder="email"/>
		<br />

		Enter your Birthdate:<br />
        <input type="date" id="birthday" name="birthday"><br />

		<input type="submit">
	</form>

</body>
</html>

<!-- DEBUG MODE -->
<pre>
<?php
var_dump($_SESSION);
?>
</pre>

<?php
// Inialize session
session_start();
// If USER is already logged in , jump to secured page
if (isset($_SESSION['username']))
{
	header('Location: home.php');
}
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8" /> 
    <title>
        HTML Document Structure
    </title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body> <!-- Copy the snippet beween the body tags and use it in your website, if required -->

<form id="form" name="form" action="#" method="post">
	<div id="block">
		<label id="user" for="name">p</label>
		<input type="text" name="name" id="name" placeholder="Username" required/>
		<label id="pass" for="password">k</label>
		<input type="password" name="password" id="password" placeholder="Password" required />
		<input type="submit" id="submit" name="submit" value="a"/>
	</div>
</form>
<div id="option"> 
	<p>Login</p> 
	<a href="#">forgot?</a>
</div>
</body>
</html>

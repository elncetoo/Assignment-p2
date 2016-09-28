<?php
	session_start();
 ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login test</title>
<link rel="stylesheet" type="text/css" href="style.css" >
</head>

<body>

<header>
    <nav>
    	<ul>
        	<li><a href="index.php">HOME</a></li>
            <?php
			
				if (isset($_SESSION['id'])) {
					echo "<form action='includes/logout.inc.php'>
    				<button>LOG OUT</button>
    				</form>";
				} else {
					echo "<form action='includes/login.inc.php' method='POST'>
					<input type='text' name='uid' placeholder='username'>
					<input type='password' name='pwd' placeholder='password'>
					<button type='submit'>LOG IN</button></br>
        		</form>";
				}
			?>
            <li><a href="signup.php">SIGN UP</a></li>
        </ul>
    </nav>
</header>
<?php
	include 'header.php';
?>
<?php
		if(isset($_SESSION['id'])) {
			echo $_SESSION['id'];
		} else {
			echo "You are not logged in!";
		}
	?>
        
    </br></br></br>
    
    if(isset($_SESSION['id'])) {
			echo $_SESSION['id'];
		} else {
			echo "You are not logged in!";
		}
    
    <div id="signup">
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="first" placeholder="firstname"></br>
            <input type="text" name="last" placeholder="lastname"></br>
            <input type="text" name="uid" placeholder="username"></br>
            <input type="password" name="pwd" placeholder="password"></br>
            <button type="submit">SIGN UP</button></br>
        </form>
    </div>
    
    </br></br></br>
        
</body>
</html>
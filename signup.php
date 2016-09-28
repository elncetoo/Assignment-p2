<?php
	include 'header.php';
?>
<?php

$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
		if(strpos($url, 'error=empty') !==false){
			echo "Fill out all the fields!";
		}
		elseif(strpos($url, 'error=usermane') !==false){
			echo "Username already exist!";
		}
		if(isset($_SESSION['id'])) {
			echo "<p>Hi there user! </p>";
			//echo $_SESSION['id'];
		} else {
			echo "<p>You are not logged in!</p>";
		}
	?>
        
    </br></br></br>
   <?php 
    if(isset($_SESSION['uid'])) {
			echo "<p>You are already logged in!</p>";
		} else {
			echo "<form action='includes/signup.inc.php' method='post'>
					<input type='text' name='first' placeholder='firstname'></br>
					<input type='text' name='last' placeholder='lastname'></br>
					<input type='text' name='uid' placeholder='username'></br>
					<input type='password' name='pwd' placeholder='password'></br>
					<button type='submit'>SIGN UP</button></br>
				  </form>";
		}
    ?>

                   
    </br></br></br>
        
</body>
</html>
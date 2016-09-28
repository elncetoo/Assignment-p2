<?php
	include 'header.php';
?>

    <?php
		if(isset($_SESSION['id'])) {
			echo "<h1>Hi there user! </h1>";
		} else {
			echo "You are not logged in!";
		}
	?>
        
    
    </br></br></br>
      
</body>
</html>
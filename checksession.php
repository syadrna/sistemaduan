<?php

//this script is to check session to verify user login
  session_start();

     if(!isset($_SESSION['id'])){ //if session NOT set
    //echo "You are not logged in,
    // <a href='login.php'>click here to login.</a>";
    //header('location: login.php');

    echo "<script>
			alert('You re not login.');
			window.location.href='http://localhost/sistemaduan/login.php' ;
		  </script>";


}


?>

<?php
//include "footer.php";
?>

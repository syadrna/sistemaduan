<?php

//this script is to check session to verify user login
  session_start();
     if(!isset($_SESSION["id"])){ //if session NOT set
    echo "You are not logged in,
     <a href='login.php'>click here to login.</a>";
  
  /*   echo "<script>
			alert('You Are Not loggin');
			window.location.href='http://localhost/pta/SOPHEABYNH/index.php';
		  </script>";
*/

}


?>

<?php 
//include "footer.php";
?>
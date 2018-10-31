<?php
/*connect with database */
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,'sistemaduan') or die (mysqli_error($con));
?>

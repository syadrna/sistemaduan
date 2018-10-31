<?php
include "connection.php";
include "headeradmin.php";
?>

<?php 
$id=$_GET['id'];
?>
<p><p><p>
<h4> Padam Rekod <?php echo $id?></h4>
<br>

<?php
$sql="DELETE FROM aduan WHERE idaduan ='$id'";

//run sql query
$rs=mysqli_query($db, $sql); 

//feedback operation
if ($rs=true){
	echo "Rekod telah dipadam, ID $id";
}

?>

<a href="searchadmin.php" class="btn btn-success"> KEMBALI </a>
<br><p><p><p><p><p>

<?php 
include "footer.php";
?>

<?php 
include 'connection.php';

$id_aduan = $_POST['id']; 
$status = $_POST['pengadu'];

$sql = "UPDATE aduan SET status = '$status' WHERE idaduan = '$id_aduan' ";
$query = mysqli_query($db,$sql);

if ($query == TRUE) {

	header('location: searchadmin.php');
}
?>
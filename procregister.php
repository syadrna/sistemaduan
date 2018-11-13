<?php
/*Call Database*/
include('link_db.php');

/*Call in Form*/

$id = $_POST['id'];
$noic=$_POST['noic'];
$psw = $_POST['psw'];
$name = $_POST['nama'];
$type = 2;

/*Query*/

$query = "SELECT username FROM user WHERE username = '$id'";
$row = mysqli_query($con,$query);
$count = mysqli_num_rows($row);
$show = mysqli_fetch_assoc($row);

if(mysqli_num_rows($row)){
	echo "<script>
	alert ('Username used');
	window.location.href='http://localhost/sistemaduan/register.php';
	</script>";
}

/*syarat*/
else
{
	$insert = "INSERT INTO user (noic, nama, username, pass,type) 
	           VALUES ('$noic', '$name', '$id', '$psw', '$type')";

	if (mysqli_query($con,$insert)){
		echo "Successfully Registered";
		header("location: formaduan.php");
	}	
else 
{
	echo "ERROR: Could not able to execute $insert " or die (mysqli_error($con));
}

mysqli_close ($con);

}

?>
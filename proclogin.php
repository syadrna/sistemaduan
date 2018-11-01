<?php
/*Call Database*/
include('link_db.php');
session_start();

/*Call in Form*/

$id = $_POST['id'];
$psw = $_POST['psw'];

/*Query*/

$query = "SELECT * FROM user WHERE username = '$id' AND pass = '$psw'";
$row = mysqli_query($con,$query);
$count = mysqli_num_rows($row);
$show = mysqli_fetch_assoc($row);

/*syarat*/


//condition for admin and user
if ($count == 1 )
{

	//bwk data
     $_SESSION['sessionid']=session_id();
     $_SESSION['nama']=$show['nama'];
     $_SESSION['id']=$id;


	$userlevel = $show['Type'];
	if ($userlevel == 1)

	{
		header ('location:searchadmin.php');//page admin

	}
	else if ($userlevel == 2)
	{
		header ('location: formaduan.php');//page user
	}
}
else
{
  // destroy session, pastu buat session baru
  if(session_destroy()) {
      session_start();
      $_SESSION['error_login'] = true;
  }
	header('location: login.php');
}


?>

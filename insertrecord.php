<?php
include "connection.php";
include "header.php";

//capture all data
$nama = $_POST['nama'];
$tarikh = $_POST['tarikh'];
$pengadu = $_POST['pengadu'];
$kategori = $_POST['kategori'];
$tajuk = $_POST['tajuk'];
$butiran = $_POST['butiran'];
$lokasi = $_POST['lokasi'];

if(!isset($_SESSION)) {
		session_start();
}

// Get user ID from username
$query = mysqli_query($db, "SELECT id FROM user WHERE username = '".$_SESSION['id']."'");
$result = mysqli_fetch_assoc($query);
$user_id = $result['id'];

//insert to sql query
$sql= "INSERT INTO aduan (user_id, nama, tarikh, kategoripelawat, kategoriaduan, tajukaduan, butiranaduan, lokasiaduan, status) VALUES ('$user_id', '$nama', '$tarikh', '$pengadu', '$kategori','$tajuk', '$butiran', '$lokasi', '')";

//run SQL query- save record to db server
$rs= mysqli_query($db, $sql);

//berjaya/tidak
if ($rs==true){
	$last_insert_query = mysqli_query($db, "SELECT LAST_INSERT_ID() AS id");
	$res = mysqli_fetch_assoc($last_insert_query);
	echo "<center>";
	echo "<br><br>";
	echo "<img src='img/success1.png' width='100px' height='100px' />";
	echo "<br><br>";
	echo "Record aduan berjaya disimpan <br>";
	echo "<b>No ID Aduan adalah: </b>"."<b>".$res['id']."</b>"."<br>";
	echo "<br>";
	echo "<font color='red'><i>*Nombor yang tertera di atas adalah nombor rujukan untuk menyemak status aduan anda di halaman Semak Aduan.</i></font><br>";
	echo "<br>";
	echo "<a href='formaduan.php' class='main-btn'>KEMBALI</a>\n";
	echo "<a href='semakaduan.php' class='main-btn'>SEMAK ADUAN</a>";
	echo "<br><br><br>";
	echo "</center>";
}
else { //error
    echo "Rekod tidak berjaya disimpan";
}

include 'footer.php'
?>

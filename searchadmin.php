<?php
include "headeradmin.php";

?>

<form action="" method="get">
    <div class="section-header text-center">
                    <br><h2 class="title">CARI ADUAN</h2>
                </div>
    <input type="text" name="txtsearch" class="form-control"><br>
    <input type="submit" value="Cari" class="btn btn-info"><br><p><p>

</form>

<?php
//listing.php 
    include "connection.php";
    $searchName="";
    if(isset($_GET['txtsearch'])){
    $searchName= $_GET['txtsearch']; 
    }

    //sql command
    $sql="SELECT idaduan, nama, tarikh, kategoripelawat, kategoriaduan, tajukaduan, butiranaduan, lokasiaduan, status FROM aduan WHERE nama LIKE '%$searchName%' ";
   

    //run sql
    $rs=mysqli_query($db, $sql);
    if($rs==false) { //if sql error
    	echo("SQL Error : ".mysqli_error($db));
    }

    //no record match 
    if(mysqli_num_rows($rs)==0){
    	echo("Sorry, no record match.<br>");
    }

    else { //listing record
    	?>
    	<table class= "table table-bordered">
    	<tr align="center">
    	   <th>ID ADUAN</th>
           <th>NAMA</th>
           <th>TARIKH</th>
           <th>KATEGORI ADUAN</th>
           <th>KATEGORI PELAWAT</th>
           <th>TAJUK ADUAN</th>
           <th>BUTIRAN ADUAN</th>
           <th>LOKASI ADUAN</th>
           <th>PADAM/ KEMASKINI</th>
           <th>STATUS</th>
        </tr>

    	<?php
    	while ($record=mysqli_fetch_array($rs)){
    	echo "<tr>";
        echo "<td>";
        //button delete
        $x=$record['idaduan'];
        echo $record['idaduan'];
        echo "<td>" .$record['nama']."</td>";
        echo "<td>" .$record['tarikh']."</td>";
        echo "<td>" .$record['kategoriaduan']."</td>";
        echo "<td>" .$record['kategoripelawat']."</td>";
        echo "<td>" .$record['tajukaduan']."</td>";
        echo "<td>" .$record['butiranaduan']."</td>";
        echo "<td>" .$record['lokasiaduan']."</td>";
        echo "<td>";
        echo "<a href='confirmdelete.php?id=$x' class='btn btn-danger'><i class='fa fa-trash'></i></a> ";
        echo "<a href='update.php?id=$x' class='btn btn-warning'><i class='fa fa-check-circle'</i></a>";
        echo "</td>";
        echo "<td>" .$record['status']."</td>";
    	echo "</tr>";

    }//end while
    echo "</table>";
    }
?>

<?php 
include "footer.php";
?>
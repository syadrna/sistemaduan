<?php
    include "connection.php";
    include "header.php";
    include "checksession.php";
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    die();
    if(isset($_GET ['id'])){
    $searchID= $_GET['id']; 
    }

    //get user id and name
    $test = $_SESSION["id"];
    $user = "SELECT nama from user where id= '$test'";
    $rs2 = mysqli_query($db,$user);
    $nn = mysqli_fetch_assoc($rs2);

    echo $nn; 

$searchID= $_GET['id'];

    $sql="SELECT * FROM aduan WHERE idaduan = '$searchID'";
    $rs=mysqli_query($db, $sql);

    if($rs==false) { //if sql error
        echo ("SQL Error : ".mysqli_error($db));
        echo "Rekod tidak dijumpai";
    }
 
    else { //listing record
        
        echo "<p><p>";
        echo "<div class='lapik'>";
        echo "<div class='section-header text-center'>";
        echo "<h2 class='title'>ADUAN</h2>";
        echo "</div>";
        echo "<table class= 'table table-striped'>";
        echo "<tr align='center'>";
        echo "<th>ID ADUAN</th>";
        echo "<th>NAMA</th>";
        echo "<th>TARIKH</th>";
        echo "<th>KATEGORI ADUAN</th>";
        echo "<th>KATEGORI PELAWAT</th>";
        echo "<th>TAJUK ADUAN</th>";
        echo "<th>BUTIRAN ADUAN</th>";
        echo "<th>LOKASI ADUAN</th>";
        echo "<th> STATUS ADUAN</th>";
        echo "</tr>";
        echo "<P><P>";
        ?>

        <?php
        while ($record=mysqli_fetch_assoc($rs)){
        echo "<tr>";
        echo "<td>";
        $x=$record['idaduan'];
        echo $record['idaduan'];
        echo "<td>" .$record["nama"]."</td>";
        echo "<td>" .$record["tarikh"]."</td>";
        echo "<td>" .$record["kategoriaduan"]."</td>";
        echo "<td>" .$record["kategoripelawat"]."</td>";
        echo "<td>" .$record["tajukaduan"]."</td>";
        echo "<td>" .$record["butiranaduan"]."</td>";
        echo "<td>" .$record["lokasiaduan"]."</td>";
        echo "<td>" .$record["status"]."</td>";
        echo "</tr>";
        }

    }//end while
    echo "</table></div>";
    echo "<br>";
    echo "<center>";
    echo "<a href='formaduan.php' class='main-btn'>KEMBALI SEMULA</a>\n";
    echo "</center>";
    echo "<br>";

?>

<?php 
include 'footer.php';
?>
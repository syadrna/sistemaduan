<?php
    include "connection.php";
    include "headersemak.php";

    //get user id and name
    $username = $_SESSION['id'];
    $query = mysqli_query($db, "SELECT id from user where username= '$username'");
    $result = mysqli_fetch_assoc($query);
    $user_id = $result['id'];

    $rs = mysqli_query($db, "SELECT * FROM aduan WHERE user_id = '$user_id'");

    if(mysqli_num_rows($rs) <= 0) {
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

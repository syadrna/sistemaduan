<?php
    include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>SISTEM ADUAN DAN MAKLUMBALAS</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="BHost template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="css/main_styles.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  
  <!-- Header -->

  <header class="header trans_400">
    <div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
      <div class="logo"><img src="img/logokvsa.png" width="110" height="80"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-2">
            <nav class="main_nav">
              <ul class="d-flex flex-row align-items-center justify-content-start">
                <li><a href="mainpage.php">HOME</a></li>
                <li><a href="login.php">LOG MASUK</a></li>
                <li><a href="semakaduanhome.php">SEMAK ADUAN</a></li>
  
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="header_right d-flex flex-row align-items-center justify-content-start">

        <!-- Header Links -->
        <div class="header_links">
          <ul class="d-flex flex-row align-items-center justify-content-start">
            <li><a href="www.facebook.com/kvsaofficial/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="https://plus.google.com/kvsaofficial"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          </ul>
        </div>

        <!-- Phone -->
        <div class="phone d-flex flex-row align-items-center justify-content-start">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <div> 03-5191 6326</div>
        </div>

        <!-- Hamburger -->
        <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
      </div>  
    </div>
  </header>

  <!-- Menu -->

  <div class="menu trans_500">
    <div class="menu_content d-flex flex-column align-items-center justify-content-center">
      <div class="menu_nav trans_500">
        <ul class="text-center">
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About us</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="blog.html">News</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </div>
      <div class="phone menu_phone d-flex flex-row align-items-center justify-content-start">
        <i class="fa fa-phone" aria-hidden="true"></i>
        <div>652-345 3222 11</div>
      </div>
    </div>
  </div>

  <div class="pricing">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="section_title_container text-center">

<?php    
    $searchID= $_POST['id']; 

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
        echo "<table class= 'table table-hover'>";
        echo "<thead>";
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
        while ($record=mysqli_fetch_array($rs)){
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
    echo "<a href='mainpage.php' class='btn btn-info'>KEMBALI SEMULA</a>\n";
    echo "</center>";
    echo "<br>";

?>

</form>
</div></div></div></div>


<footer id="footer" class="sm-padding bg-dark">

    <!-- Container -->
    <div class="container">
<br>
      <!-- Row -->
      <div class="row">
        <br>

        <div class="col-md-12">
          <!-- /footer follow -->
          <ul class="footer-follow">
            <li><a href="www.facebook.com/kvsaofficial/"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://plus.google.com/kvsaofficial"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="www.instagram.com/coloursofkvsa"><i class="fa fa-instagram"></i></a></li>
          </ul>

          <!-- footer copyright -->
          <center><div class="footer-copyright">
            <b><p>KOLEJ VOKASIONAL SHAH ALAM</b></p>
            <p> Jalan Batu Tiga Lama, </p>
            <p> Taman Pinggiran Usj, </p>
            <p> 40300 Shah Alam, Selangor </p>
            <br>
            <p><b>Phone:</b> 03-5191 6326</p>
          </div></center><br>
          <!-- /footer copyright -->

        </div>

      </div>
      <!-- /Row -->

    </div>
    <!-- /Container -->

  </footer>


<script src="js1/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js1/custom.js"></script>
</body>
</html>
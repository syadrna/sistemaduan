<?php 
  include "connection.php";
  include "header.php";
//      include "checksession.php";

$id= $_SESSION["id"];
  $query = "SELECT * FROM user WHERE username = '$id'";
$row = mysqli_query($db,$query);
$count = mysqli_num_rows($row);
$show = mysqli_fetch_assoc($row);

  ?>

   <!-- Container -->
    <div class="container">
      <!-- Row -->
      <div class="row">
      <!-- Section-header -->
        <div class="section-header text-center">
          <br><h2 class="title">DAFTAR ADUAN</h2>
          <h5> Sila Masukkan Butiran Aduan Anda. </h5>
        </div>
                        <style>
                            input[type=text], select {
                                width: 100%;
                                padding: 12px 20px;
                                margin: 8px 0;
                                display: inline-block;
                                border: 1px solid #ccc;
                                border-radius: 4px;
                                box-sizing: border-box;
                            }
                            
                            input[type=date], select {
                                width: 100%;
                                padding: 12px 20px;
                                margin: 8px 0;
                                display: inline-block;
                                border: 1px solid #ccc;
                                border-radius: 4px;
                                box-sizing: border-box;
                            }
                            
                            
                            input[type=submit] {
                                width: 100%;
                                background-color: #85C1E9;
                                color: white;
                                padding: 14px 20px;
                                margin: 8px 0;
                                border: none;
                                border-radius: 4px;
                                cursor: pointer;
                            }

                               input[type=submit]:hover {
                                   background-color: #85C1E9;
                               }

                           
                               </style>

<!--HTML-->
<body>

<div class="col-md-8 col-md-offset-2">
  <form action="editaduan.php" method="POST">

    <label for="fname">NAMA</label>
    <input type="text" id="fname" name="nama" placeholder="Masukkan Nama Anda.." value="<?php echo $_SESSION['nama']; ?>" readonly required><br>

    <label for="lname">TARIKH</label>
    <input type="date" id="lname" name="tarikh" placeholder="" required><br>

    <label for="pelawat">KATEGORI PENGADU</label>
    <select id="pelawat" name="pengadu">
      <option value="Kategori Pelawat"> Sila pilih kategori pengadu </option>
      <option value="Ibu Bapa">Ibu Bapa</option>
      <option value="Pelajar">Pelajar</option>
      <option value="Pelawat">Pelawat</option><br>
    </select><br>

    <label for="kategori">KATEGORI ADUAN</label>
    <select id="kategori" name="kategori">
      <option value="KATEGORI ADUAN">Sila pilih kategori aduan</option>
      <option value="Hal Ehwal Pelajar">Hal Ehwal Pelajar</option>
      <option value="Perkhidmatan Kolej">Perkhidmatan Kolej</option>
      <option value="Pentadbiran Kolej">Pentadbiran Kolej</option>
      <option value="Pembelajaran (PDP)">Pembelajaran (PDP)</option><br>
    </select><br>

    <label for="lname">TAJUK ADUAN</label>
    <input type="text" id="lname" name="tajuk" placeholder="Tajuk Aduan Anda.." required><br>

    <label for="lname">BUTIRAN ADUAN</label><br>
    <textarea name="butiran" rows="5" cols="90" required>
    </textarea><br>

    <label for="lname">LOKASI ADUAN</label><br>
    <textarea name="lokasi" rows="5" cols="90" required>
    </textarea><br>

   
<br><input type="submit" value="SUBMIT"><br>

<p></form></div>
    
      </div>
      <!-- /Row -->

    </div>
    <!-- /Container -->

  <?php 
    include "footer.php";
   ?>
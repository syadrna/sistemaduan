<?php
include "connection.php";
include "header.php";

// redirect if $_POST not exists
if(!isset($_POST['nama'])) {
    header('location: template.php');
}

//capture all data
$nama = $_POST['nama'];
$tarikh = $_POST['tarikh'];
$pengadu = $_POST['pengadu'];
$kategori = $_POST['kategori'];
$tajuk = $_POST['tajuk'];
$butiran = $_POST['butiran'];
$lokasi = $_POST['lokasi'];

/*
// check if user confirmed and submitted data
if(isset($_POST['type']) && $_POST['type'] === 'insert') {
    $query = "INSERT INTO aduan(kategoriaduan, tajukaduan, butiranaduan, lokasiaduan, nama, kategoripelawat, tarikh) VALUES('$kategori', '$tajuk', '$butiran', '$lokasi', '$nama', '$pengadu', '$tarikh')";
    $execute = mysqli_query($db, $query);
    if($execute)
}
*/
?>

        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
            <!-- Section-header -->
                <div class="section-header text-center">
                    <br><h2 class="title">EDIT ADUAN</h2>
                    <h5> Anda dibenarkan untuk mengemaskini aduan anda sebelum dihantar. </h5>
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
  <form action="insertrecord.php" method="POST">

    <label for="fname">NAMA</label>
    <input type="text" id="fname" name="nama" placeholder="Masukkan Nama Anda.." value="<?php echo $nama; ?>"><br>

    <label for="lname">TARIKH</label>
    <input type="date" id="lname" name="tarikh" placeholder="" value="<?php echo $tarikh; ?>"><br>

    <label for="pelawat">KATEGORI PENGADU</label>
    <select id="pelawat" name="pengadu">
        <?php
        $pengadus = array('Ibu Bapa', 'Pelajar', 'Pelawat');
        foreach($pengadus as $pengadues) {
            if($pengadues === $pengadu) {
                echo '<option value="'.$pengadu.'" selected>'.$pengadu.'</option>';
            } else {
                echo '<option value="'.$pengadues.'">'.$pengadues.'</option>';
            }
        }
        ?>
    </select><br>

    <label for="kategori">KATEGORI ADUAN</label>
    <select id="kategori" name="kategori">
        <?php
        $kategories = array(
            'Hal Ehwal Pelajar',
            'Perkhidmatan dan Pengurusan Kolej',
            'Pentadbiran Kolej',
            'Pembelajaran (PDP)'
        );
        foreach($kategories as $kategori_aduan) {
            if($kategori_aduan === $kategori) {
                echo '<option value="'.$kategori.'" selected>'.$kategori.'</option>';
            } else {
                echo '<option value="'.$kategori_aduan.'">'.$kategori_aduan.'</option>';
            }
        }
        ?>
    </select><br>

    <label for="lname">TAJUK ADUAN</label>
    <input type="text" id="lname" name="tajuk" placeholder="Tajuk Aduan Anda.." value="<?php echo $tajuk; ?>"><br>

    <label for="lname">BUTIRAN ADUAN</label><br>
    <textarea name="butiran" rows="5" cols="90">
        <?php echo $butiran; ?>
    </textarea><br>

    <label for="lname">LOKASI ADUAN</label><br>
    <textarea name="lokasi" rows="5" cols="90">
        <?php echo $lokasi; ?>
    </textarea><br>

    <input type="hidden" name="type" value="insert" />


    <br><input type="submit" value="Submit">

</form></div>

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    <?php
        include 'footer.php'
     ?>

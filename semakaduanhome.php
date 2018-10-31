<?php
	// Test changes
	include "connection.php";
	include "header.php";
?>

 <div class="container">
      <!-- Row -->
      <div class="row">
      <!-- Section-header -->
        <div class="section-header text-center">
                <form action="listing.php" method="get">
                    <br><h2 class="title">SEMAK ADUAN</h2>
                    <h5> Sila Masukkan No ID Aduan Anda </h5>
                </div>
    <input type="text" name="id" class="form-control" placeholder="No ID Aduan Anda.. "><br>
    <center><input type="submit" value="SEMAK" class="btn btn-info"><br></center>
    <br>

</form>

</div></div></div>

<?php
	include "footer.php";
?>

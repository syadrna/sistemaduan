<?php
include "headeradmin.php";
include 'connection.php';

$id = $_GET['id'];

?>

<form action="saveupdate.php" method="POST">
    <div class="section-header text-center">
                    <br><h2 class="title">STATUS ADUAN</h2>
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

 <label for="fname">ID ADUAN</label>
    <input type="text" id="fname" name="id" placeholder="" value="<?php echo $id;?>"><br>

 <label for="pelawat">STATUS ADUAN</label>
    <select id="pelawat" name="pengadu">
      <option value="Status Aduan" readonly required> Status Aduan </option>
      <option value="Dalam Proses">Sedang diproses</option>
      <option value="Tindakan Diambil">Tindakan sudah diambil</option><br>
    </select>
    <br>
    <br><input type="submit" value="SUBMIT"><br>
    </form>
<br>
<?php
   include "footer.php";
?>
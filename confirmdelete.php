<?php
include "headeradmin.php";
?>

<?php

$id=$_GET['id'];
?>
<p><p><p><p><p><p><p><p><p>
Are you sure to delete this record for <?php echo $id?>?
<br><br><p><p>
<a href="delete.php?id=<?php echo $id?>" class="btn btn-danger">Yes</a>
<a href="searchadmin.php" class="btn btn-success">No</a><p><p>
<br>

<?php 
include "footer.php";
?>
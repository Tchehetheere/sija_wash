<?php 

include("../../connectdb/connect.php");
$id=$_POST['id'];
$barang=$_POST['barang'];
$stk=$_POST['stk_barang'];

$sql = "UPDATE tblbarang SET namabarang='$barang', stok='$stk' WHERE idbarang=$id";

if ($conn->query($sql) === TRUE) {
    ?>

  <script>
    alert("Berhasil mengubah data")
    window.location="../index.php?hal=barang"
  </script>

  <?php
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

?>
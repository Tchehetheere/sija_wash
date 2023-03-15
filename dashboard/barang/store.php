<?php 

include("../../connectdb/connect.php");
$barang=$_POST['barang'];
$stk=$_POST['stk_barang'];
$sql= "SELECT * FROM tblbarang WHERE namabarang='".$barang."'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
// output data of each row  
?>

  <script>
    alert("Data baru yang anda masukan sudah ada")
    window.location="../index.php?hal=barang-create"
  </script>

  <?php

  exit();

} else {
  $sql = "INSERT INTO tblbarang VALUES ('', '$barang', '$stk')";

  if ($conn->query($sql) === TRUE) {

    ?>

  <script>
    alert("Berhasil menambahkan data")
    window.location="../index.php?hal=barang"
  </script>

  <?php
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
  }

?>
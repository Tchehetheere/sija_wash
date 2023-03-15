<?php 

include("../../connectdb/connect.php");

//INPUT DATA

$nik=$_POST['nik'];
$email=$_POST['email'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$tel=$_POST['telepon'];
$tmlahir=$_POST['tmlahir'];
$tglahir=$_POST['tglahir'];
$foto=$_POST['foto'];
$jk=$_POST['jk'];

$sql= "SELECT * FROM tblpegawai WHERE nik='".$nik."'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
// output data of each row  
?>

  <script>
    alert("Data baru yang anda masukan sudah ada")
    window.location="../index.php?hal=pegawai-create"
  </script>

  <?php

  exit();

} else {
  $sql = "INSERT INTO tblpegawai VALUES
   (
    '',
    '$nik',
    '$nama',
    '$email',
    '$tglahir',
    '$tmlahir',
    '$tel',
    '$alamat',
    '$foto',
    '$jk'
    )";

  if ($conn->query($sql) === TRUE) {
    ?>

    <script>
      alert("Berhasil menambah data")
      window.location="../index.php?hal=pegawai"
    </script>
  
    <?php

  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
  }

?>





?>
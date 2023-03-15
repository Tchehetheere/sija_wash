<?php 

include("../../connectdb/connect.php");

$id=$_POST['id'];
$nik=$_POST['nik'];
$email=$_POST['email'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$tel=$_POST['telepon'];
$tmlahir=$_POST['tmlahir'];
$tglahir=$_POST['tglahir'];
$foto=$_POST['foto'];
$jk=$_POST['jk'];

$sql = "UPDATE tblpegawai SET nik='$nik',nama='$nama',email='$email',tgllahir='$tglahir',tempatlahir='$tmlahir',telepon='$tel',alamat='$alamat',foto='$foto',JK='$jk' WHERE idpegawai='$id'";

if ($conn->query($sql) === TRUE) {
?>
  <script>
      alert('Berhasil mengubah data')
      window.location='../index.php?hal=pegawai'
  </script>
<?php
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

?>
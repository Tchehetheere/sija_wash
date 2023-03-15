<?php 

include('../../connectdb/connect.php');

$nik = $_GET['nik'];
$sql = "DELETE FROM tblpegawai WHERE nik=$nik";

if($conn->query($sql) === TRUE){
?>
    <script>
        alert('Pegawai dengan NIK: \"' + <?= $_GET['nik']?> + '\" berhasil dihapus')
        window.location.replace('../index.php?hal=pegawai')
    </script>
<?php

}else{
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

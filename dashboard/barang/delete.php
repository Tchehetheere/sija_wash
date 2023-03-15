<?php 

include('../../connectdb/connect.php');
$barang = $_GET['barang'];
$sql = "DELETE FROM tblbarang WHERE namabarang=$barang";

if($conn->query($sql) === TRUE){
?>
    <script>
        alert('Barang \"' + <?= $_GET['barang']?> + '\" berhasil dihapus')
        window.location.replace('../index.php?hal=barang')
    </script>
<?php
    
}else{
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

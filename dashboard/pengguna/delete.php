<?php 

include('../../connectdb/connect.php');
$username = $_GET['pengguna'];
$sql = "DELETE FROM tbluser WHERE username=$username";

if($conn->query($sql) === TRUE){
?>
    <script>
        alert('Pengguna \"' + <?= $_GET['pengguna']?> + '\" berhasil dihapus')
        window.location.replace('../index.php?hal=pengguna')
    </script>
<?php

}else{
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

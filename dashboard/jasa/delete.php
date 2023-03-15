<?php 

include('../../connectdb/connect.php');
$jasa = $_GET['jasa'];
$sql = "DELETE FROM tbljasa WHERE jasa=$jasa";

if($conn->query($sql) === TRUE){
?>
    <script>
        alert('Jasa \"' + <?= $_GET['jasa']?> + '\" berhasil dihapus')
        window.location.replace('../index.php?hal=jasa')
    </script>
<?php

}else{
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

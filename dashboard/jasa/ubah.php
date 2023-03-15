<?php 

include("../../connectdb/connect.php");
$id=$_POST['id'];
$jasa=$_POST['jasa'];
$biaya_jasa=$_POST['biaya_jasa'];

$sql = "UPDATE tbljasa SET jasa='$jasa', biaya='$biaya_jasa' WHERE idjasa=$id";

if ($conn->query($sql) === TRUE) {
?>
  <script>
      alert('Berhasil mengubah data')
      window.location='../index.php?hal=jasa'
  </script>
<?php
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

?>
<?php 

include("../../connectdb/connect.php");
$jasa=$_POST['jasa'];
$biaya_jasa=$_POST['biaya_jasa'];
$sql= "SELECT * FROM tbljasa WHERE jasa='".$jasa."'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
// output data of each row  
?>

  <script>
    alert("Data baru yang anda masukan sudah ada")
    window.location="../index.php?hal=jasa-create"
  </script>

  <?php

  exit();

} else {
  $sql = "INSERT INTO tbljasa VALUES ('', '$jasa', '$biaya_jasa')";

  if ($conn->query($sql) === TRUE) {
    ?>

    <script>
      alert("Berhasil menambah data")
      window.location="../index.php?hal=jasa"
    </script>
  
    <?php

  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
  }

?>
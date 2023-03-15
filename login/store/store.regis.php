<?php 

include("../../connectdb/connect.php");

//INPUT DATA

$email=$_POST['email'];
$username=strtolower(stripslashes($_POST['username']));
$pass1=mysqli_real_escape_string($conn, $_POST['pass1']);
$pass2=mysqli_real_escape_string($conn, $_POST['pass2']);
$level=$_POST['level'];

//PASSWORD VALIDATION

if( $pass1 !== $pass2 ){
  echo "<script>
          alert('Password tidak sesuai!')
          window.location='../register.php'
        </script>";

}else{

//INPUT TO DATABASE

  $ver_pass=password_hash($pass1, PASSWORD_DEFAULT); //ENCRYPT

  $sql= "SELECT * FROM tbluser WHERE username='".$username."'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0)
  {
  // output data of each row  
  ?>

    <script>
      alert("Email sudah terdaftar!")
      window.location="../register.php"
    </script>

    <?php

    exit();

  } else {
    $sql = "INSERT INTO tbluser VALUES ('', '$email', '$username', '$ver_pass', '$level')";

    if ($conn->query($sql) === TRUE) {
      ?>

      <script>
        alert("Registrasi berhasil!")
        window.location="../../dashboard/client/index.php?hal=dashboard"
      </script>
    
      <?php

    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    }

}





?>
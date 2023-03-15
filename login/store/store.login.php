<?php

include("../../connectdb/connect.php");

//INPUT DATA

$email = $_POST['email'];
$pass = $_POST['pass'];
$email = mysqli_query($conn, "SELECT level FROM tbluser WHERE email = '$email'");

$sql = mysqli_query($conn, "SELECT * FROM tbluser WHERE email = '$email'");
$result = mysqli_fetch_assoc($sql);

//EMAIL CHECK

if( mysqli_num_rows($result) === 1){

    //PASSWORD CHECK
    $row = mysqli_fetch_field($result);
    if(password_verify($pass, $row($result)) ){
    ?>

        <script>
          alert("Login berhasil!")
          window.location="../../dashboard/client/index.php?hal=dashboard"
        </script>
      exit;
    <?php
    }

}else{
    ?>

    <script>
        alert("Email atau password invalid!!")
        window.location="../login.php"
    </script>

  <?php
}

 ?>
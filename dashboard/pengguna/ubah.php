<?php 

include("../../connectdb/connect.php");
$id=$_POST['id'];
$email=$_POST['email'];
$username=strtolower(stripslashes($_POST['username']));
$pass1=mysqli_real_escape_string($conn, $_POST['pass1']);
$pass2=mysqli_real_escape_string($conn, $_POST['pass2']);
$level=$_POST['level'];


//PASSWORD VALIDATION


if( $pass1 !== $pass2 ){
    echo"
        <script>
          alert('Password tidak sesuai!')
          window.location='../index.php?hal=pengguna-edit&id=$id&email=$email&username=$username'
        </script>";

}else{

//INPUT TO DATABASE

  $ver_pass=password_hash($pass1, PASSWORD_DEFAULT); //ENCRYPT

  $sql = "UPDATE tbluser SET email='$email', username='$username', pass='$ver_pass', level='$level' WHERE iduser=$id";
  if ($conn->query($sql) === TRUE) {
?>
    <script>
        alert('Berhasil mengubah data')
        window.location='../index.php?hal=pengguna'
    </script>
<?php
    } else {
        echo "Error updating record: " . $conn->error;
    }
  
    $conn->close();

    
}
    

?>
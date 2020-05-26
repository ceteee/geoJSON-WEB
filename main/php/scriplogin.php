<?php
session_start();
include'connection.php';

$username=$_POST['username'];
$password=$_POST['password'];

$query=mysqli_query($conn,"SELECT * FROM admin WHERE username='$username' and password='$password'");
if(mysqli_num_rows($query) == 0){
    echo '<script language="javascript">alert("User Tidak Ditemukan!");document.location="../../login.php"</script>'; 
}else{
	$_SESSION['username']=$username;
    echo '<script language="javascript">alert("Anda Berhasil Masuk!"); document.location="../index.php";</script>';
    }
?>

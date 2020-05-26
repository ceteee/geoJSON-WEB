<?php
	session_start();
	session_destroy();
	echo '<script language="javascript">alert("Anda Berhasil Keluar!"); document.location="../../login.php";</script>';
?>
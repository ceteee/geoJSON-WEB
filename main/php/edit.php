<?php
    if(isset($_POST['simpankacam'])){
        include('connection.php');
        $id=$_POST['idcam'];
		$nama=$_POST['nama'];
		$ktp=$_POST['ktp'];
        $hp=$_POST['hp'];
        $wilayah=$_POST['wilayah'];
        $update=mysqli_query($conn,"UPDATE katimcam set nama='$nama',hp='$hp',ktp='$ktp',wilayah='$wilayah' WHERE idcam='$id'") or die(mysql_error());
        if($update){
            echo '<script language="javascript">alert("Data Katimcam berhasil diubah!");document.location="../table-kacam.php"</script>';
        }
        else{
            echo '<script language="javascript">alert("Gagal mengubah data katimcam!");document.location="../edit-kacam.php?id='.$id.'"</script>';
        }
    }
	
	if(isset($_POST['gagal'])){
		echo '<script language="javascript">alert("Batal Mengubah data!");document.location="../datamotor.php"</script>';
    }
    

    if(isset($_POST['simpankalur'])){
        include('connection.php');
        $id=$_POST['idlur'];
		$nama=$_POST['nama'];
        $hp=$_POST['no'];
        $wilayah=$_POST['wilayah'];
        $file_name = $_FILES['foto']['name'];
        $file_size = $_FILES['foto']['size'];
        $file_type = $_FILES['foto']['type'];

        if($file_size== ""){

            $update=mysqli_query($conn,"UPDATE katimlur set nama='$nama', no='$hp',wilayah='$wilayah' WHERE idlur='$id'") or die(mysql_error());
            if($update){
                echo '<script language="javascript">alert("Data Katimlur berhasil diubah!");document.location="../table-kalur.php"</script>';
            }
            else{
                echo '<script language="javascript">alert("Gagal mengubah data katimlur!");document.location="../edit-kalur.php?id='.$id.'"</script>';
            }

        }
        else{
            if($file_size < 5242880 and ($file_type =='image/jpeg' or $file_type == 'image/png')){
                $image   = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
            
                $update=mysqli_query($conn,"UPDATE katimlur set nama='$nama', foto='$image',no='$hp',wilayah='$wilayah' WHERE idlur='$id'") or die(mysql_error());
                if($update){
                    echo '<script language="javascript">alert("Data Katimlur berhasil diubah!");document.location="../table-kalur.php"</script>';
                }}
                else{
                    echo '<script language="javascript">alert("Gagal mengubah data katimlur!");document.location="../edit-kalur.php?id='.$id.'"</script>';
                }


        }
        

    }
    
    


    if(isset($_POST['simpankaling'])){
        include('connection.php');
        $id=$_POST['idling'];
		$nama=$_POST['nama'];
        $hp=$_POST['no'];
        $file_name = $_FILES['foto']['name'];
        $file_size = $_FILES['foto']['size'];
        $file_type = $_FILES['foto']['type'];

        if($file_size== ""){

            $update=mysqli_query($conn,"UPDATE kaling set nama='$nama', no='$hp' WHERE idling='$id'") or die(mysql_error());
            if($update){
                echo '<script language="javascript">alert("Data Kaling berhasil diubah!");document.location="../table-kaling.php"</script>';
            }
            else{
                echo '<script language="javascript">alert("Gagal mengubah data katimlur!");document.location="../edit-kaling.php?id='.$id.'"</script>';
            }

        }
        else{
            if($file_size < 5242880 and ($file_type =='image/jpeg' or $file_type == 'image/png')){
                $image   = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
            
                $update=mysqli_query($conn,"UPDATE kaling set nama='$nama', foto='$image',no='$hp' WHERE idling='$id'") or die(mysql_error());
                if($update){
                    echo '<script language="javascript">alert("Data Kaling berhasil diubah!");document.location="../table-kaling.php"</script>';
                }}
                else{
                    echo '<script language="javascript">alert("Gagal mengubah data katimlur!");document.location="../edit-kaling.php?id='.$id.'"</script>';
                }


        }
        

    }






    if(isset($_POST['simpanvol'])){
        include('connection.php');
        $id=$_POST['nik'];
		$nama=$_POST['nama'];
        $hp=$_POST['no'];
        $file_name = $_FILES['ktp']['name'];
        $file_size = $_FILES['ktp']['size'];
        $file_type = $_FILES['ktp']['type'];
        $file_sec = $_FILES['stiker']['size'];
        $loc = $_POST['geoloc'];        



        if($file_size== ""){

            $update=mysqli_query($conn,"UPDATE datarelawan set nama='$nama', no='$hp',geoloc='$loc' WHERE nik='$id'") or die(mysql_error());
            if($update){
                echo '<script language="javascript">alert("Data Relawan berhasil diubah!");document.location="../table-vol.php"</script>';
            }
            else{
                echo '<script language="javascript">alert("Gagal mengubah Data Relawan!");document.location="../edit-vol.php?id='.$id.'"</script>';
            }

        }


        else{
            if($file_size < 5242880 and ($file_type =='image/jpeg' or $file_type == 'image/png')){
                $ktp   = addslashes(file_get_contents($_FILES['ktp']['tmp_name']));
                $image   = addslashes(file_get_contents($_FILES['stiker']['tmp_name']));
            
                $update=mysqli_query($conn,"UPDATE datarelawan set nama='$nama', stiker='$image',ktp='$ktp',no='$hp',geoloc='$loc' WHERE nik='$id'") or die(mysql_error());
                if($update){
                    echo '<script language="javascript">alert("Data Relawan berhasil diubah!");document.location="../table-vol.php"</script>';
                }}
                else{
                    echo '<script language="javascript">alert("Gagal mengubah data Relawan!");document.location="../edit-vol.php?id='.$id.'"</script>';
                }


        }
        

    }
	
?>

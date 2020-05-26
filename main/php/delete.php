<?php
    if(isset($_GET['idcam'])){
        include('connection.php');
        $id=$_GET['idcam'];
        $cek=mysqli_query($conn,"SELECT idcam FROM katimcam WHERE idcam='$id'") or die(mysql_error());
        if(mysqli_num_rows($cek)==0){
            echo '<script>window.history.back()</script>';
        }
        else{
            $del=mysqli_query($conn,"DELETE FROM katimcam WHERE idcam='$id'");
            if($del){
                echo '<script language="javascript">alert("Data Kepala Tim kecamatan Berhasil di hapus!");document.location="../table-kacam.php"</script>';
              
            }
            else{
                echo '<script language="javascript">alert("Gagal menghapus data!");document.location="../table-kacam.php"</script>';
            }
        }
    }
    else{
        echo '<script>window.history.back()</script>';
    }


    if(isset($_GET['idlur'])){
        include('connection.php');
        $id=$_GET['idlur'];
        $cek=mysqli_query($conn,"SELECT idlur FROM katimlur WHERE idlur='$id'") or die(mysql_error());
        if(mysqli_num_rows($cek)==0){
            echo '<script>window.history.back()</script>';
        }
        else{
            $del=mysqli_query($conn,"DELETE FROM katimlur WHERE idlur='$id'");
            if($del){
                echo '<script language="javascript">alert("Data Kepala Tim kelurahan Berhasil di hapus!");document.location="../table-kalur.php"</script>';
              
            }
            else{
                echo '<script language="javascript">alert("Gagal menghapus data!");document.location="../table-kalur.php"</script>';
            }
        }
    }
    else{
        echo '<script>window.history.back()</script>';
    }


    if(isset($_GET['idling'])){
        include('connection.php');
        $id=$_GET['idling'];
        $cek=mysqli_query($conn,"SELECT idling FROM kaling WHERE idling='$id'") or die(mysql_error());
        if(mysqli_num_rows($cek)==0){
            echo '<script>window.history.back()</script>';
        }
        else{
            $del=mysqli_query($conn,"DELETE FROM kaling WHERE idling='$id'");
            if($del){
                echo '<script language="javascript">alert("Data Kepala Tim Lingkungan Berhasil di hapus!");document.location="../table-kaling.php"</script>';
              
            }
            else{
                echo '<script language="javascript">alert("Gagal menghapus data!");document.location="../table-kaling.php"</script>';
            }
        }
    }
    else{
        echo '<script>window.history.back()</script>';
    }


    if(isset($_GET['nik'])){
        include('connection.php');
        $id=$_GET['nik'];
        $cek=mysqli_query($conn,"SELECT nik FROM datarelawan WHERE nik='$id'") or die(mysql_error());
        if(mysqli_num_rows($cek)==0){
            echo '<script>window.history.back()</script>';
        }
        else{
            $del=mysqli_query($conn,"DELETE FROM datarelawan WHERE nik='$id'");
            if($del){
                echo '<script language="javascript">alert("Data Relawan Berhasil di hapus!");document.location="../table-vol.php"</script>';
              
            }
            else{
                echo '<script language="javascript">alert("Gagal menghapus data!");document.location="../table-vol.php"</script>';
            }
        }
    }
    else{
        echo '<script>window.history.back()</script>';
    }
?>

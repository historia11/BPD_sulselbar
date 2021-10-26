<?php
session_start();
include './../koneksi/koneksi.php';

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sqlAdmin = "select * from admin where username='".$username."' and password='".$password."'";
    $sqlApprover = "select * from approver where username='".$username."' and password='".$password."'";
    $queryAdmin = mysqli_query($koneksi,$sqlAdmin) or die (mysqli_error($koneksi));
    $rowAdmin = mysqli_num_rows($queryAdmin);

    echo $rowApprover;
    echo $rowAdmin;
    if($rowPetugas>0){
        $cid=mysqli_fetch_array($queryPetugas);
        $_SESSION['id']=$cid['id_ptg'];
        $_SESSION['isLoggedIn']='login';
        $_SESSION['nama']=$cid['nm_ptg'];
        $_SESSION['foto']=$cid['ft'];
        $_SESSION['level']="petugas";
        header('Location: /BPD_Sulselbar/Admin/.php');
    
    }else if($rowApprover>0){

        $cid=mysqli_fetch_array($queryApprover);
        $_SESSION['id']=$cid['id_pp'];
        $_SESSION['isLoggedIn']='login';
        $_SESSION['nama']=$cid['nm_pp'];
        $_SESSION['foto']=$cid['ft'];
        $_SESSION['level']="approver";
        header('Location: /BPD_Sulselbar/Admin/approver.php');
    
    }else if($rowAdmin>0){

        $cid=mysqli_fetch_array($queryAdmin);
        $_SESSION['id']=$cid['id_adm'];
        $_SESSION['isLoggedIn']='login';
        $_SESSION['nama']=$cid['nm_adm'];
        $_SESSION['foto']=$cid['ft'];
        $_SESSION['level']="admin";
        header('Location: /BPD_Sulselbar/Admin/admin.php');
        
    }else{
        echo    "<script type='text/javascript'>
                alert('Username Atau Password Anda Salah..!');
                </script>";
        echo    "<script> window.history.back(); </script>";

    } 

    
?>
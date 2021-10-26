 <?php
session_start();
if(!empty($_SESSION['level'])){
	$level = $_SESSION['level'];

	if($level =='admin'){
 
    	header('Location: /BPD_Sulselbar/Admin/admin.php');
	}elseif($level =='petugas'){
		header('Location: /BPD_Sulselbar/Admin/petugas.php');
	}else{
		header('Location: /BPD_Sulselbar/Admin/approver.php');
	}

}else{
	header('Location: /BPD_Sulselbar/');
}

?>
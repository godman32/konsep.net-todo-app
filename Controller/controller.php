<?php
error_reporting(0);
include "../Modul/fungsi.php";

switch($_GET['aksi']){
	default;
	include "../View/home.php";
	break; 

	case "viewInput";
	include "../View/input.php";
	break;

	case "insert";
	if($_POST['nama']!=""){
		if(insertData($_POST['nama'], $_POST['status'])){
			echo "<script>alert('INSERT DATA BERHASIL...!!!');window.location='?aksi';</script>";
		} else {
			echo "<script>alert('INSERT DATA GAGAL...!!!');history.back();</script>";
		}
	} else{
		echo "<script>alert('Masih Ada Field Kosong...!!!');history.back();</script>";
	}
	
	break;

	case "edit";
	$id= $_GET['id'];
	include "../View/edit.php";
	break;

	case "setSelesai";
	$id= $_GET['id'];
	if(setSelesai($id)){
		include "../View/home.php";
	} else {
		echo "<script>alert('Update DATA GAGAL...!!!');history.back();</script>";
	}
	
	break;

	case "update";
	$id= $_POST['id'];

	if($_POST['nama']!="" && $_POST['status']!=""){
		if(updateData($id, $_POST['nama'], $_POST['status'])){
			echo "<script>alert('Update TODO Berhasil...!!!');window.location='?aksi';</script>";
		}
		else{
			echo "<script>alert('Update TODO GAGAL...!!!');history.back();</script>";
		}
	} else {
		echo "<script>alert('Masih Ada Field Kosong...!!!');history.back();</script>";
	}

	break;
}

?>
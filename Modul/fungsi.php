<?php
include "koneksi.php";

function getData(){
	$tampil=mysql_query("SELECT * FROM todo");

	while($d =mysql_fetch_array($tampil)){
			$hasil[] = $d;
	}
	return $hasil;
}

function getDataById($id){
	$tampil=mysql_query("SELECT * FROM todo where id='$id' ");
	$d =mysql_fetch_array($tampil);
	return $d;
}

function insertData($nama,$status){
	$temp=mysql_query("INSERT INTO todo(nama_todo, status_todo) VALUES ('$nama','$status')");
	return $temp;
}

function updateData($id,$nama,$status){
	$temp= mysql_query("UPDATE todo SET nama_todo='$nama', status_todo='$status' WHERE id='$id' ");
	$message="";
	if($temp){
		$message= "berhasil";
	} else{
		$message= "gagal";
	}

	return $temp;
}

function setSelesai($id){
	$temp= mysql_query("UPDATE todo SET status_todo='Selesai' WHERE id='$id' ");

	return $temp;
}

?>
<?php
$data= getDataById($id);
?>

<h1><a href="https://www.konsep.net">konsep.net todo app</a></h1>
<h3><a href="?aksi"><value="delete" Onclick="return Confirm()">Home</a></h3>
<title>konsep.net todo app</title>

<form action="?aksi=update" method="POST">
	<input type="text" id="id" name="id" hidden="true" value="<?php echo $id; ?>">
	<table >
		<tr>
			<td>Nama :</td>
			<td>
				<input type="text" id="nama" name="nama" size="1" style="width:206px" value="<?php echo $data['nama_todo']; ?>">
			</td>

		</tr>

		<tr>
			<td>Status :</td>
			<td>
				<select name="status" size='1' style="width:206px">
					<?php
						if($data['status_todo']=="Belum"){
							?>
							<option value="Belum" selected>Belum</option>
							<option value="Selesai" >Selesai</option>
							<?php
						} else {
							?>
							<option value="Belum" >Belum</option>
							<option value="Selesai" selected>Selesai</option>
							<?php
						}
					?>
				</select>
			</td>

		</tr>
		<tr>
			<td colspan="2" align="center">
				</br><input type="submit" value="Save">
			</td>
		</tr>
	</table>

</form>

<script>
	function Confirm() {
		return confirm("Anda Yakin Tidak Melakukan Perubahan...!!!");
	}
</script>


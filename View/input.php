<h1><a href="https://www.konsep.net">konsep.net todo app</a></h1>
<h3><a href="?aksi"><value="delete" Onclick="return Confirm()">Home</a></h3>
<title>konsep.net todo app</title>

<form action="?aksi=insert" method="POST">
	
<table>
	<tr>
		<td>Nama</td>
		<td><input type="text" id="nama" name="nama" size='1' style="width:206px"></td>
	</tr>
	<tr>
		<td>Status</td>
		<td>
			<select name="status" size='1' style="width:206px">
				<option value="Belum" selected>Belum</option>
				<option value="Selesai" >Selesai</option>
			</select>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center" ></br><input type="submit" value="Simpan"></td>
	</tr>
</table>
</form>

<script>
	function Confirm() {
		return confirm("Anda Yakin Membatalkan Proses Insert...!!!");
	}
</script>
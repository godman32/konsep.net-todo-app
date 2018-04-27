<h1><a href="https://www.konsep.net">konsep.net todo app</a></h1>
<title>konsep.net todo app</title>
<table>
	<tr>
		<td><h3><a href="?aksi">Home</a></h3></td>
		<td><h3> | </h3></td>
		<td><h3><a href="?aksi=viewInput">Add Data</a></h3></td>
	</tr>
</table>

<table border="1">
	<tr>
		<th width="20px">ID</th>
		<th width="150px">Nama</th>
		<th width="70px">Status</th>
		<th width="100px">Aksi</th>
	</tr>
	<?php
	$no = 1;
	foreach(getData() as $x){
	?>
	<tr>
		<td align="center"><?php echo $no++; ?></td>
		<td><?php echo $x['nama_todo']; ?></td>
		<td>
		<?php
			if($x['status_todo']=="Selesai"){
				?>
				<table>
					<tr>
						<td align="center"><?php echo $x['status_todo']; ?></td>
					</tr>
				</table>
				<?php
			} else{
				?>
				<table>
					<tr>
						<td ><?php echo $x['status_todo']; ?></td>
						<td> | </td>
						<td><a href="?aksi=setSelesai&id=<?php echo $x['id']; ?>">Selesai</a></td>
					</tr>
				</table>
				<?php
			}
		?>
		</td>
		<td align="center">
			<a href="?aksi=edit&id=<?php echo $x['id']; ?>">Edit | </a>
			<a href="?aksi=hapus&id=<?php echo $x['id']; ?>"><value="delete" Onclick="return ConfirmDelete()"> </var>Hapus</a>			
		</td>
	</tr>
	<?php 
	}
	?>
</table>

<script>
	function ConfirmDelete() {
		return confirm("Anda Yakin Mau Menghapus Barang?");
	}
</script>
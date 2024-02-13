
	<?php
	include 'koneksi.php';
	$albumid = $_GET['albumid'];
	$data = mysqli_query($koneksi,"select * from album where albumid='$albumid'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>namaalbum</td>
					<td>
						<input type="hidden" name="albumid" value="<?php echo $d['albumid']; ?>">
						<input type="text" name="namaalbum" value="<?php echo $d['namaalbum']; ?>">
					</td>
				</tr>
				<tr>
					<td>deskripsi</td>
					<td><input type="text" name="deskripsi" value="<?php echo $d['deskripsi']; ?>"></td>
				</tr>
				<tr>
					<td>tanggaldibuat</td>
					<td><input type="date" name="tanggaldibuat" value="<?php echo $d['tanggaldibuat']; ?>"></td>
				</tr>
				<tr>
					<td>userid</td>
					<td><input type="number" name="userid" value="<?php echo $d['userid']; ?>"></td>
				</tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
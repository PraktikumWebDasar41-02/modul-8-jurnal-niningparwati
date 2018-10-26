<?php 
$conn = mysqli_connect('localhost','root','','modul8');
$hasil = mysqli_query($conn, "SELECT * FROM user");
echo "
<form>
	<table>
		<tr>
			<th>Nama</th>
			<th>NIM</th>
			<th>Kelas</th>
			<th>Hobi</th>
			<th>Genre Film</th>
			<th>Tempat Wisata</th>
			<th>Tanggal Lahir</th>
			<th>Email</th>
		</tr>";
		$row = mysqli_fetch_row($hasil);
		echo "
		<tr>
			<td><?php echo $row[0]; ?></td>
			<td><?php echo $row[1]; ?></td>
			<td><?php echo $row[2]; ?></td>
			<td><?php echo $row[3]; ?></td>
			<td><?php echo $row[4]; ?></td>
			<td><?php echo $row[5]; ?></td>
			<td><?php echo $row[6]; ?></td>
		</tr>

	</table>
</form>
";
 ?>
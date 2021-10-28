<!DOCTYPE html>
<html>
<body>
	<center>
		<h2>Hasil Data Input Form</h2>
		<button><a href="validasi.php" style="text-decoration: none; color: black;">Input Data</a></button>
	</center><br>
	<table border="1" align="center" width="1000">
		<tr>
			<th>Nama</th>
			<th>E-mail</th>
			<th>Website</th>
			<th>Komentar</th>
			<th>Gender</th>
		</tr>
		<?php
			$fp = fopen("data.txt","r");
			while ($isi = fgets($fp,80)) {
				 $pisah = explode("|",$isi);
				 echo "<tr align='center'><td>$pisah[0]</td>";
				 echo "<td>$pisah[1]</td>";
				 echo "<td>$pisah[2]</td>";
				 echo "<td>$pisah[3]</td>";
				 echo "<td>$pisah[4]</td><tr>";
			}
		?>
	</table><br>
</body>
</html>
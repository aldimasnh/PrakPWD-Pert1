<html>
<head>
<style>
	.error {color: #FF0000;}
</style>
</head>
<body>
	<?php
	// define variables and set to empty values
	$namaErr = $nimErr = $hpErr = $tlErr = $tllErr = $fakErr = $prodiErr = "";
	$nama = $nim = $hp = $tl = $tll = $fak = $prodi = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["nama"])) {
			$namaErr = "Nama harus diisi";
		}else {
			$nama = test_input($_POST["nama"]);
		}
		if (empty($_POST["nim"])) {
			$nimErr = "NIM harus diisi";
		}else {
			$nim = test_input($_POST["nim"]);
		}
		if (empty($_POST["hp"])) {
			$hpErr = "No. HP harus diisi";
		}else {
			$hp = test_input($_POST["hp"]);
		}
		if (empty($_POST["tl"])) {
			$tlErr = "Tempat lahir harus diisi";
		}else {
			$tl = test_input($_POST["tl"]);
		}
		if (empty($_POST["tll"])) {
			$tllErr = "Tanggal lahir harus diisi";
		}else {
			$tll = test_input($_POST["tll"]);
		}
		if (empty($_POST["fak"])) {
			$fakErr = "Fakultas harus diisi";
		}else {
			$fak = test_input($_POST["fak"]);
		}
		if (empty($_POST["prodi"])) {
			$prodiErr = "Prodi harus diisi";
		}else {
			$prodi = test_input($_POST["prodi"]);
		}
	}
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	?>

	<h2>Validasi Data Mahasiswa</h2>
	<p><span class = "error">* Harus Diisi.</span></p>
	<form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<table>
			<tr>
				<td>Nama:</td>
				<td><input type = "text" name = "nama">
				<span class = "error">* <?php echo $namaErr;?></span>
				</td>
			</tr>
			<tr>
				<td>NIM:</td>
				<td><input type = "text" name = "nim">
				<span class = "error">* <?php echo $nimErr;?></span>
				</td>
			</tr>
			<tr>
				<td>No. HP:</td>
				<td><input type = "text" name = "hp">
				<span class = "error">* <?php echo $hpErr;?></span>
				</td>
			</tr>
			<tr>
				<td>Tempat Lahir:</td>
				<td><input type = "text" name = "tl">
				<span class = "error">* <?php echo $tlErr;?></span>
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir:</td>
				<td><input type = "date" name = "tll">
				<span class = "error">* <?php echo $tllErr;?></span>
				</td>
			</tr>
			<tr>
				<td>Fakultas:</td>
				<td><input type = "text" name = "fak">
				<span class = "error">* <?php echo $fakErr;?></span>
				</td>
			</tr>
			<tr>
				<td>Prodi:</td>
				<td><input type = "text" name = "prodi">
				<span class = "error">* <?php echo $prodiErr;?></span>
				</td>
			</tr>
				<td>
					<input type = "submit" name = "submit" value = "Submit">
				</td>
		</table>
	</form>

	<?php
	echo "<h2>Data yang anda isi:</h2>";
	echo $nama;
	echo "<br>";
	echo $nim;
	echo "<br>";
	echo $hp;
	echo "<br>";
	echo $tl;
	echo "<br>";
	echo $tll;
	echo "<br>";
	echo $fak;
	echo "<br>";
	echo $prodi; ?>
</body>
</html>
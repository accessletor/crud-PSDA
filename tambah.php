<?php 
if (isset($_POST["submit"])) {
	var_dump($_POST);
	// 
	// $arsip = $_POST['arsip'];
	// $tgl = $_POST['tgl'];
	// $nosurat = $_POST['nosurat'];
	// $tglsurat = $_POST['tgsurat'];
	// $dari = $_POST['dari'];
	// $hal = $_POST['hal'];
	// $surat = $_POST['surat'];
	// // query inert data
	// $query = "INSERT INTO suratm VALUES ('','$arsip','$tgl','$nosurat','$tgsurat','$dari','$hal','$surat')";
	// mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Surat Masuk</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<h1 class="text-center">Tambah Surat Masuk</h1>
	<hr>
	<div class="container">
		<form action="" method="post">
			<div class="mb-3">
				<label for="arsip" class="form-label">Arsip</label>
				<input type="text" class="form-control" id="arsip" aria-describedby="emailHelp" name="arsip">
			</div>
			<div class="mb-3">
				<label for="tanggal" class="form-label">Tanggal</label>
				<input type="text" class="form-control" id="tanggal" aria-describedby="emailHelp" name="tgl">
			</div>
			<div class="mb-3">
				<label for="nosurat" class="form-label">Nomor Surat</label>
				<input type="text" class="form-control" id="nosurat" aria-describedby="emailHelp" name="nosurat">
			</div>
			<div class="mb-3">
				<label for="tglsurat" class="form-label">Tanggal Surat</label>
				<input type="text" class="form-control" id="tglsurat" aria-describedby="emailHelp" name="tglsurat ">
			</div>
			<div class="mb-3">
				<label for="dari" class="form-label">Asal Surat</label>
				<input type="text" class="form-control" id="dari" aria-describedby="emailHelp" name="dari">
			</div>

			<div class="mb-3">
				<label for="hal" class="form-label">Perihal</label>
				<input type="text" class="form-control" id="hal" aria-describedby="emailHelp" name="hal">
			</div>

			<div class="mb-3">
				<label for="surat" class="form-label">File Surat</label>
				<input type="text" class="form-control" id="surat" aria-describedby="emailHelp" name="surat">
			</div>
			<button class="btn btn-primary" type="submit" name="submit">Tambah</button>
		</form>
	</div>
</body>
</html>
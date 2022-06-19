<?php 
$conn = mysqli_connect("localhost", "root", "", "psda");
// ambil data dari tabel crud
$result = mysqli_query($conn, "SELECT * FROM suratm ");
// ambil data surat dari result
// while($surat = mysqli_fetch_assoc($result)) {
// 	var_dump($surat);
// };
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap demo</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
			<a class="navbar-brand" href="#">PSDA (UMUM)</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
							<path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
						</svg> Surat Masuk</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
							<path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
						</svg> Surat Undangan</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<main>
		<section id="jumbotron">
			<div class="jumbotron">
				<h1>Input Surat Masuk</h1>
			</div>
		</section>
		<section id="fitur">

		</section>
		<section id="tabel">
			<table class="table table-info table-striped">
				<thead>
					<tr class="table-dark">
						<th scope="col">#</th>
						<th scope="col">Aksi</th>
						<th scope="col">Arsip</th>
						<th scope="col">Tanggal</th>
						<th scope="col">No.Surat</th>
						<th scope="col">Tanggal Surat</th>
						<th scope="col">Asal Surat</th>
						<th scope="col">Perihal</th>
						<th scope="col">Surat</th>
					</tr>
				</thead>
				<tbody>
					 <?php $i = 1; ?>
				<?php while ($row = mysqli_fetch_assoc($result)) : ?>
					<tr>
						<th scope="row"><?php $i; ?></th>
						<td><a href="">Edit</a> |
							<a href="">Hapus</a></td>
							<td><?php echo $row['arsip']; ?></td>
							<td><?php echo $row['tgl']; ?></td>
							<td><?php echo $row['nosurat']; ?></td>
							<td><?php echo $row['tglsurat']; ?></td>
							<td><?php echo $row['dari']; ?></td>
							<td><?php echo $row['hal']; ?></td>
							<td><?php echo $row['surat']; ?></td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
							<td>Mark</td>
							<td>Mark</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
							<td>Mark</td>
							<td>Mark</td>
						</tr>
						<?php $i++; ?>
					<?php endwhile; ?>
					</tbody>
				</table>
			</section>
		</main>
		<script src="js/bootstrap.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	</body>
	</html>
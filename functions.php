<?php 
$conn = mysqli_connect("localhost", "root", "", "psda");
function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

// tambah
function tambah($data){
	global $conn;
	$arsip =htmlspecialchars($data['arsip']);
	$tgl = htmlspecialchars($data['tgl']);
	$nosurat = htmlspecialchars($data['nosurat']);
	$tglsurat = htmlspecialchars($data['tglsurat']);
	$dari = htmlspecialchars($data['dari']);
	$hal = htmlspecialchars($data['hal']);
	$message = htmlspecialchars($data['surat']);

	$query = "INSERT INTO suratm VALUES ('','$arsip','$tgl','$nosurat','$tglsurat','$dari','$hal','$message')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
// hapus
function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM suratm WHERE id = $id");
	return mysqli_affected_rows($conn);
}
// ubah data
function ubah($data){
	global $conn;
	$id = $data['id'];
	$arsip =htmlspecialchars($data['arsip']);
	$tgl = htmlspecialchars($data['tgl']);
	$nosurat = htmlspecialchars($data['nosurat']);
	$tglsurat = htmlspecialchars($data['tglsurat']);
	$dari = htmlspecialchars($data['dari']);
	$hal = htmlspecialchars($data['hal']);
	$message = htmlspecialchars($data['surat']);

	$query = "UPDATE suratm SET 
	arsip = '$arsip',
	tgl = '$tgl',
	nosurat = '$nosurat',
	tglsurat = '$tglsurat',
	dari = '$dari',
	hal = '$hal',
	surat = '$message'
	WHERE id = $id
	";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}
// cari
function search($keyword){
	$query = "SELECT * FROM suratm 
	WHERE arsip LIKE '%$keyword%' OR 
	nosurat LIKE '%$keyword%' OR
	dari LIKE '%$keyword%' OR
	hal LIKE '%$keyword%' OR
	surat LIKE '%$keyword%'
	";
	return query($query);
}
?>
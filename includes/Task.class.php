<?php 

/******************************************
PRAKTIKUM RPL
******************************************/
class Task extends DB{
	
	// Mengambil data
	function getTask()
	{
		// Query mysql select data ke data_dosen
		$query = "SELECT * FROM data_dosen";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function getTasknip()
	{
		// Query mysql select data ke data_dosen secara asc di tabel nip
		$query = "SELECT * FROM data_dosen ORDER BY nip ASC";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function getTasknama_dosen()
	{
		// Query mysql select data ke data_dosen secara asc di tabel nama_dosen
		$query = "SELECT * FROM data_dosen ORDER BY nama_dosen ASC";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function getTaskgender()
	{
		// Query mysql select data ke data_dosen secara asc di tabel gender
		$query = "SELECT * FROM data_dosen ORDER BY gender ASC";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function getTasktanggal_lahir()
	{
		// Query mysql select data ke data_dosen secara asc di tabel tanggal lahir
		$query = "SELECT * FROM data_dosen ORDER BY tanggal_lahir ASC";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function getTaskmatkul()
	{
		// Query mysql select data ke data_dosen secara acs di tabel matkul
		$query = "SELECT * FROM data_dosen ORDER BY matkul ASC";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function getTaskstatus()
	{
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do ORDER BY status_td ASC";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function insertTask($data) // fungsi untuk input data
	{
		$nip = $data['nip'];
		$nama_dosen = $data['nama_dosen'];
		$gender = $data['gender'];
		$tanggal_lahir = $data['tanggal_lahir'];
		$matkul = $data['matkul'];
		$status = "Belum";
		
		$query = "INSERT INTO data_dosen (nip, nama_dosen, gender, tanggal_lahir, matkul, status_td) VALUES ('$nip', '$nama_dosen', '$gender', '$tanggal_lahir', '$matkul', '$status' )";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function deleteTask($id_task) // fungsiuntuk delete data
	{
		$query = "DELETE FROM data_dosen WHERE id=$id_task";

		return $this->execute($query);
	}

	function updateTask($id) // fungsi untuk acc data
	{
		$query = "UPDATE data_dosen SET status_td = 'ACC' WHERE id = $id";

		return $this->execute($query);
	}
	
}



?>

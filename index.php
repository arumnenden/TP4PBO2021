<?php

/******************************************
PRAKTIKUM RPL
******************************************/

include("conf.php");
include("includes/Template.class.php");
include("includes/DB.class.php");
include("includes/Task.class.php");

// Membuat objek dari kelas task
$otask = new Task($db_host, $db_user, $db_password, $db_name);
$otask->open();

// Memanggil metho pada di kelas Task
if(isset($_POST['nip']))
{
	$otask->getTasknip();// untuk get nip
}
else if(isset($_POST['nama_dosen']))
{
	$otask->getTasknama_dosen();// untuk get nama dosen
}
else if(isset($_POST['gender']))
{
	$otask->getTaskgender();// untuk get gender
}
else if(isset($_POST['tanggal_lahir']))
{
	$otask->getTasktanggal_lahir();// untuk get tanggal_lahir
}
else if(isset($_POST['matkul']))
{
	$otask->getTaskmatkul();// untuk get matkul
}
else
{
	$otask->getTask();
}

// Proses mengisi tabel dengan data
$data = null;
$no = 1;

if(isset($_POST['add']))// untuk nambahin data
{
	$otask->insertTask($_POST);// pangiil fungsi insertTask

	header("Location:index.php");
}

while (list($id, $nip, $nama_dosen, $gender, $tanggal_lahir, $matkul, $status) = $otask->getResult()) {
	// Tampilan jika status data nya sudah diacc
	if($status == "Sudah")
	{
		$data .= "<tr>
		<td>" . $no . "</td>
		<td>" . $nip . "</td>
		<td>" . $nama_dosen . "</td>
		<td>" . $gender . "</td>
		<td>" . $tanggal_lahir . "</td>
		<td>" . $matkul . "</td>
		<td>" . $status . "</td>
		<td>
		<button class='btn btn-danger'><a href='index.php?id_hapus=" . $id . "' style='color: white; font-weight: bold;'>Hapus</a></button>
		</td>
		</tr>";
		$no++;
	}
	// Tampilan jika status task nya belum diacc
	else
	{
		$data .= "<tr>
		<td>" . $no . "</td>
		<td>" . $nip . "</td>
		<td>" . $nama_dosen . "</td>
		<td>" . $gender . "</td>
		<td>" . $tanggal_lahir . "</td>
		<td>" . $matkul . "</td>
		<td>" . $status . "</td>
		<td>
		<button class='btn btn-danger btn-sm'><a href='index.php?id_hapus=" . $id . "' style='color: white; text-decoration: none; '>Hapus</a></button>
		<button class='btn btn-success btn-sm' ><a href='index.php?id_status=" . $id .  "' style='color: white; text-decoration: none;'>ACC</a></button>
		</td>
		</tr>";
		$no++;
	}

	
}

if(isset($_GET['id_hapus']))// untuk hapus data
{
	$id_task = $_GET['id_hapus'];

	$otask->deleteTask($id_task);// panggil fungsi hapus

	unset($_GET['id_hapus']);

	header("Location: index.php");
}

if(isset($_GET['id_status']))// untuk update
{
	$id_status = $_GET['id_status'];

	$otask->updateTask($id_status);

	unset($_GET['id_status']);
	
	header("Location: index.php");
}

// Menutup koneksi database
$otask->close();

// Membaca template skin.html
$tpl = new Template("templates/skin.html");

// Mengganti kode Data_Tabel dengan data yang sudah diproses
$tpl->replace("DATA_TABEL", $data);

// Menampilkan ke layar
$tpl->write();
<?php 

	$host = "localhost";
	$user = "root";
	$pass = "";
	$database = "jur";

	$conn = mysqli_connect($host, $user, $pass, $database);

	if (isset($_POST['kirim'])) {
		$nama		=$_POST['nama'];
		$nim		=$_POST['nim'];
		$kelas		=$_POST['kelas'];
		$jeniskl	=$_POST['jk'];
		$hobi		=$_POST['hobi'];
		$fakultas	=$_POST['fakultas'];
		$alamat		=$_POST['alamat'];
		$password	=$_POST['pass'];

		if (strlen($nama) == 35) {
			if (strlen($nim) < 10) {
					$qry = $conn -> query("INSERT INTO `proses`(`nama`, `nim`, `kelas`, `jeniskl`, `hobi`, `fakultas`, `alamat`, `password`) VALUES (`$nama`, `$nim`, `$kelas`, `$jeniskl`, `$hobi`, `$fakultas`, `$alamat`, `$password`)");

					echo "Registrasi Berhasil";
					echo "<button><a href='login.php'>Login</button></a>";
				}else{
					echo "Registrasi Gagal";
				}

			}else{
				echo "Registrasi Gagal";
				}
		}


 ?>
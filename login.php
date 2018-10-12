<form method="POST">

	<table>
		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><input type="number" name="nim" length="10"></td>
		</tr>

		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="text" name="pass"></td>
		</tr>

		<tr>
			<td><input type="submit" name="kirim" value="kirim"></td>
		</tr>

	</table>
</form>

<?php 
	if (isset($_POST['kirim'])) {
		session_start();

		include"prosesregis.php";

		$nim = $_POST['nim'];
		$pass = $_POST['pass'];

		$sql = "SELECT nim, password FROM akun WHERE nim='$nim'";

		$qry = mysqli_query($conn,$sql);
		$row = mysqli_fetch_row($qry);

		if ($nim == $row[0]) {
			if ($pass == $row[1]) {
				$_SESSION["berhasil_login"]=1;
        		$_SESSION["nim"]=$row[0];
        		$_SESSION["password"]=$row[1];

        		echo "SELAMAT LOGIN SUKSES";
        		
			}
			else{
				echo "MAAF PASSWORD YANG ANDA MASUKKAN SALAH";
			}
		}
		else{
			echo "MAAF NIM YANG ANDA MASUKKAN SALAH";
		}
	}

 ?>
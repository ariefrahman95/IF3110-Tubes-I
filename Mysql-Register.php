<html>
	<body>
		<?php 
			include 'connect-mysql.php';

			$sql = "INSERT INTO user (username,password,nama,email,hp,alamat,provinsi,kota,kodepos)
				VALUES
					('$_POST[username]' , 
					 '$_POST[password]' , 
					 '$_POST[nama]' , 
					 '$_POST[email]' ,
					 '$_POST[hp]' , 
					 '$_POST[alamat]' , 
					 '$_POST[provinsi]' , 
					 '$_POST[kota]' , 
					 '$_POST[kodepos]')
			";

			$result = mysql_query($sql);
			if (!$result) {
				die("Error : " . mysql_error());
			}
			echo "1 record added";
		?>

		Apakah anda ingin memasukkan nomor kartu kredit anda? <br>
		<a href="Registercard.php">Ya</a> <a href="index.php">Tidak</a>
	</body>
</html>
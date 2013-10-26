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
	</body>
</html>
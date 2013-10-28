<html>
	<body>
		<?php 
			include 'connect-mysql.php';

			$sql = "INSERT INTO creditcard (number,name,date)
				VALUES
					('$_POST[number]' , 
					 '$_POST[name]' , 
					 '$_POST[date]')
			";

			$result = mysql_query($sql);
			if (!$result) {
				die("Error : " . mysql_error());
			}
			echo "1 record added";
		?>

		<a href="index.php">Kembali</a>
	</body>
</html>
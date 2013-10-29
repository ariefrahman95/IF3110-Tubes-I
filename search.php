<!--
Parameter of this page : "string=[search string]"
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<?php
			include("header.php"); 
			include("connect-mysql.php");
		?>
        <title>Search Result</title>
    </head>
    <body>
		<?php
			$search = $_GET['search'];
		
			if ($search == "") { 
				echo "<p>Insert a search string first.</p>"; 
				exit; 
			}
			
			$search = strtoupper($search);
			$search = strip_tags($search);
			$search = trim($search);
			
			$data = mysql_query("SELECT * FROM product WHERE UPPER(name) LIKE '%$search%'");
			
			if(mysql_num_rows($data) === 0) {
				$data = mysql_query("SELECT * FROM product WHERE UPPER(category) LIKE '%$search%'");
				if(mysql_num_rows($data) === 0) {
					$data = mysql_query("SELECT * FROM product WHERE price = '$search'");
					if(mysql_num_rows($data) === 0) {
						echo "<p>Result not found : '$search'.";
					} else {
						echo "<p>Result:</p>";
						echo "<p><ol>";
						while($row = mysql_fetch_array($data)) {
							echo "<li>" .$row["name"]. "<br/>" .$row["picture"]. "</li>";
						}
					}
				} else {
					echo "<p>Result:</p>";
					echo "<p><ol>";
					while($row = mysql_fetch_array($data)) {
						echo "<li>" .$row["name"]. "<br/>" .$row["picture"]. "</li>";
					}
				}
			} else {
				echo "<p>Result:</p>";
				echo "<p><ol>";
				while($row = mysql_fetch_array($data)) {
					echo "<li>" .$row["name"]. "<br/>" .$row["picture"]. "</li>";
				}
			}
		?>
    </body>
</html>

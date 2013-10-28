<HTML> 
	<head></head>
	<body>
		<h1>Registrasi Kartu Kredit</h1>
		<form method="post" action="Mysql-Registercard.php" name="regcard">
			<pre>Credit Card Number      : <input type="text" name="number" onkeyup="validcard()"> <span id="nomor"></span> <br> </pre>
			<pre>Name on Card            : <input type="text" name="name"> <br> </pre>
			<pre>Expired date            : <input type="text" name="date"> <br> </pre>
			<input type="submit" id="register" value="Register" disabled>
		</form>

		<script>
		var validnumber = false;
		function validcard() {
			var number = document.forms["regcard"]["number"].value;
			var xmlhttp;
			if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
			}
			else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					temp = xmlhttp.responseText;
					document.getElementById("nomor").innerHTML = temp;
					document.getElementById("register").disabled = temp!="OK";

				}
			}
			xmlhttp.open("GET","Validate-Registercard.php?value="+number,true);
			xmlhttp.send();

			

		}
		</script>
	</body>
</HTML>
<HTML>
	<head>
	</head>
	<body>
		<h1>Form Registrasi Ruko Serba Ada</h1>
		<form method="post" action="Mysql-Register.php" name="regform">
			<pre>Username            : <input type="text" name="username" onkeyup="valPassword();valUsername()"> <span id="user"> </span><br> </pre>
			<pre>Password            : <input type="password" name="password" onkeyup="valPassword();valUsername();valEmail()"> <span id="pass"></span> <br> </pre>
			<pre>Confirm Password    : <input type="password" name="confirm" onkeyup="valConfirm()"> <span id="conf"></span> <br> </pre>
			<pre>Nama Lengkap        : <input type="text" name="nama" onkeyup="valNama()"> <span id="nama"></span> <br> </pre>
			<pre>Email               : <input type="text" name="email" onkeyup="valEmail();valEmail2();valPassword()"> <span id="email"></span> <br> </pre>
			<pre>No. HP              : <input type="text" name="hp"> <br> </pre>
			<pre>Alamat              : <textarea name="alamat" rows="5" cols="40"> </textarea> <br> </pre>
			<pre>Provinsi            : <input type="text" name="provinsi"> <br> </pre>
			<pre>Kota / Kabupaten    : <input type="text" name="kota"> <br> </pre>
			<pre>Kode Pos            : <input type="text" name="kodepos"> <br> </pre>
			<input type="submit" id="register" value="Register" disabled="disabled">
		</form>

		<script>
			function valUsername() {
				var username = document.forms["regform"]["username"].value;
				var password = document.forms["regform"]["password"].value;

				if ((username.length < 5) && (username.length > 0)) {
					document.getElementById("user").innerHTML = "Username minimal 5 karakter";
				}
				else if ((username == password) && (username.length > 0)) {
					document.getElementById("user").innerHTML = "Username tidak boleh sama dengan password";
				}
				else {
					document.getElementById("user").innerHTML = "";
					var xmlhttp; 
					if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
		  				xmlhttp=new XMLHttpRequest();
		  			}
					else {// code for IE6, IE5
		  			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  			}
					xmlhttp.onreadystatechange=function() {
						if (xmlhttp.readyState==4 && xmlhttp.status==200) {
							document.getElementById("user").innerHTML = xmlhttp.responseText;
						}
					}
					xmlhttp.open("GET","Validate-Register.php?type=1&value="+username,true);
					xmlhttp.send();
				}
				
				
			}

			function valPassword() {
				var username = document.forms["regform"]["username"].value;
				var password = document.forms["regform"]["password"].value;
				var email = document.forms["regform"]["email"].value;

				if ((password.length < 8) && (password.length > 0)) {
					document.getElementById("pass").innerHTML = "Password minimal 8 karakter";
				}
				else if ((password == username) && (password.length > 0)) {
					document.getElementById("pass").innerHTML = "Password tidak boleh sama dengan username";
				}
				else if ((password == email) && (password.length > 0)) {
					document.getElementById("pass").innerHTML = "Password tidak boleh sama dengan email";
				}
				else {
					document.getElementById("pass").innerHTML = "";
				}
			}

			function valConfirm() {
				var confirm = document.forms["regform"]["confirm"].value;
				var password = document.forms["regform"]["password"].value;

				if ((confirm != password) && (confirm.length > 0)) {
					document.getElementById("conf").innerHTML = "Password tidak sama";
				}
				else {
					document.getElementById("conf").innerHTML = "";
				}
			}

			function valNama() {
				var nama = document.forms["regform"]["nama"].value;
				var regex = /^[\S.]+ [\S.]+$/;
				var validnama = nama.match(regex);
				if ((validnama == null) && (nama.length > 0)) {
					document.getElementById("nama").innerHTML = "Harus terdiri dari minimal 2 kata";
				}
				else {
					document.getElementById("nama").innerHTML = "";
				}
			}

			function valEmail() {
				var email = document.forms["regform"]["email"].value;
				var password = document.forms["regform"]["password"].value;
				var regex = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]{2,}$/;
				var validemail = email.match(regex);
				if ((validemail == null) && (email.length > 0)) {
					document.getElementById("email").innerHTML = "Bukan Email yang valid";
				}
				else if ((password == email) && (email.length > 0)) {
					document.getElementById("email").innerHTML = "Email tidak boleh sama dengan Password";
				}
				else {
					var xmlhttp; 
					if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
		  				xmlhttp=new XMLHttpRequest();
		  			}
					else {// code for IE6, IE5
		  			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  			}
					xmlhttp.onreadystatechange=function() {
						if (xmlhttp.readyState==4 && xmlhttp.status==200) {
							document.getElementById("email").innerHTML = xmlhttp.responseText;
						}
					}
					xmlhttp.open("GET","Validate-Register.php?type=2&value="+email,true);
					xmlhttp.send();
					document.getElementById("email").innerHTML = "";
				}

				
			}
		</script>

	</body>
</HTML>
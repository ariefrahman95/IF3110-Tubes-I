<!doctype html>
<html>
    <head>
        <title>Ruko Serba Ada</title> <!--judul di tab browser-->
        <link type="text/css" rel="stylesheet" href="style.css"/> <!--link ke css-->
    </head>
    
    <header>
            <p>  
                <a href="#"> <img id="logo" src = "shopping_cart.jpg"/> </a> <!--link shopping cart-->
                <a href="ruserba.php"> <img src = "ruserba.png"/> </a> <!--logo, link ke home-->
                <img src = "milo_animated.gif"/>
				
				<script>
					if(typeof(Storage)!=="undefined") {
						// Isi dengan pengecekan login
					}
					else {
						document.getElementById("result").innerHTML="Sorry, your browser does not support web storage...";
					}
				</script>
				
                <?php
                    if (false) { //dummy dulu, udah login ceritanya
                        echo 'Selamat datang,&nbsp;
                            <a href="myprofile.php">Nama</a>!
                            Lihat <a href="myshoppingbag.php">shopping bag</a>';
                    } else {
                        echo '<a href="login.php">Login</a> &nbsp; Belum terdaftar? &nbsp; 
                        <a href="daftar.php">Daftar</a>  &nbsp;';
                    }

                ?>
            </p>
    </header>

    <body>
        <!-- Navigation -->
        <nav>
            <?php
                include 'connect-mysql.php';
                $sql = "SELECT DISTINCT category FROM product";
                $result = mysql_query($sql,$connect);
                if (!$result) {
                    die("Error : " . mysql_error());
                }
                echo '<ul>';
                $i = 1;
                while($row = mysql_fetch_row($result)) {
                    foreach($row as $key=>$value) {
                        if($i<=5) {
                            echo '<li> <a href="#">', $value, '</a> </li>';    
                        }
                        $i++;
                    }
                }
            echo '</ul>';
            ?>    
        </nav>

        <!-- Introduction -->
        <section id="intro"> 
           
        </section>
    </body>
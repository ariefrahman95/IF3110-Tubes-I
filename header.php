<!doctype html>
<html>
    <head>
        <title>Ruko Serba Ada</title> <!--judul di tab browser-->
        <link type="text/css" rel="stylesheet" href="style.css"/> <!--link ke css-->
    </head>
    
    <header>
        <a href="#"> <img src = "shopping_cart.png"/> </a> <!--link shopping cart-->
        <a href="index.php"> <img src = "ruserba.png"/> </a> <!--logo, link ke home-->
        <div align="right">
            <section id="welcome-user">
                <?php
                    if (false) { //KERJAANNYA ARIEF NIH
                        echo 'Selamat datang,&nbsp;
                        <a href="profile.php">Nama</a>!
                        Lihat <a href="shoppingcart.php">shopping bag</a> &nbsp;
                        <button onclick="logout()">Logout</button>';

                    } else {
                        echo '<button onclick="login()">Login</button> &nbsp; Belum punya akun? &nbsp;
                        <a href="Register.php">Daftar</a>';
                    }
                ?>
            </section>

            <section id="search">
                Cari barang: 
                <input type="text" id="searchText"/>
                <select name="dropdown-category">
                    <option value="Category">Category</option>
                    <?php
                        include('connect-mysql.php');
                        $sql = "SELECT DISTINCT category FROM product";
                        $result = mysql_query($sql,$connect);
                        if (!$result) {
                            die("Error : " . mysql_error());
                        }
                        echo '<ul>';
                        while($row = mysql_fetch_row($result)) {
                            foreach($row as $key=>$value) {
                                echo '<option value=', $value,'>',$value,'</option>';
                            }
                        }
                        echo '</ul>';
                    ?>
                </select>
                <select name="dropdown-price">
                    <option value="Price">Price</option>
                    <option value="500">Rp500,- ++</option>
                    <option value="10000">Rp10.000,- ++</option>
                    <option value="50000">Rp50.000,- ++</option>
                    <option value="100000">Rp100.000,- ++</option>
                </select>
                <input type="submit" value="Search"/>
            </section>
            <br>
        </div>
    </header>

    <body>
        <!-- Navigation -->
        <nav>
            <ul>
                <li> <a href="#">All Categories</a>
                    <?php
                        include('connect-mysql.php');
                        $sql = "SELECT DISTINCT category FROM product";
                        $result = mysql_query($sql,$connect);
                        if (!$result) {
                            die("Error : " . mysql_error());
                        }
                        echo '<ul>';
                        while($row = mysql_fetch_row($result)) {
                            foreach($row as $key=>$value) {
                                echo '<li> <a href="#">', $value, '</a> 
                                </li>';    
                            }
                        }
                        echo '</ul>';
                    ?>    
                </li>
            </ul>
        </nav>

        <!-- Introduction -->
        <section id="intro"> 
           
        </section>
    </body>

    <script>
        function login() {
            var x;
            var person=prompt("Username: ");
        }
        function logout() {
        }
    </script>

</html>
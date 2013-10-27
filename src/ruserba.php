<!doctype html>
<html>
    <head>
        <title>Ruko Serba Ada</title> <!--judul di tab browser-->
        <link type="text/css" rel="stylesheet" href="style.css"/> <!--link ke css-->
    </head>
    
    <body>  
        <!-- Header -->
        <header>
            <p>  
                <a href="#"> <img src = "shopping_cart.png"/> </a> <!--link shopping cart-->
                <a href="ruserba.php"> <img src = "ruserba.png"/> </a> <!--logo, link ke home-->
                <?php
                    //LOGIN & SIGN UP
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

        <!-- Navigation -->
        <nav>
            <ul>  
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Login / Sign Up</a></li>
            </ul>    
        </nav>  
        
        <!-- Introduction -->
        <section id="intro"> 
           
        </section>  
        
        <div id="content">
            <!-- Main content area -->
            <div id="mainContent">  
                
                <section>  
                    <!-- Blog post --> 
                    <article class="blogPost">
                        <header> 
                            <h2> Top Three </h2>
                        </header>
                    </article>
                </section>  
                
                <section id="comments">  
                    <header>  
                        <h3>Sayur dan Buah</h3>
                    </header>  
                    <article>  
                        <p> Best three here </p>  
                    </article>

                    <header>  
                        <h3>Daging</h3>
                    </header>  
                    <article>  
                        <p> Best three here </p>  
                    </article>

                    <header>  
                        <h3>Susu</h3>
                    </header>  
                    <article>  
                        <p> Best three here </p>  
                    </article>

                    <header>  
                        <h3>Produk Olahan Susu</h3>
                    </header>  
                    <article>  
                        <p> Best three here </p>  
                    </article>

                    <header>  
                        <h3>Bumbu Dapur</h3>
                    </header>  
                    <article>  
                        <p> Best three here </p>  
                    </article> 
                </section>
            </div>  
        
            <!-- Sidebar -->
            <aside>
                <!--Search--> 
                <section>
                    <h3> Search </h3>
                    <input type="text" id="searchText"/>
                    <input type="submit" value="Search"/>
                </section>
                
                <!--Categories-->
                <section>
                    <header>
                        <h3> Categories </h3>
                    </header>
                    <ul>
                        <li> <a href="#"> Buah dan Sayur </a> </li>
                        <li> <a href="#"> Daging </a> </li>
                        <li> <a href="#"> Susu </a> </li>
                        <li> <a href="#"> Produk Olahan Susu </a> </li>
                        <li> <a href="#"> Bumbu Dapur </a> </li>
                    </ul>
                </section>
                </aside>
            </div>

        <!-- Footer -->
        <footer>
            <div>
                <section id="about">
                    <p> Kelompok TripleA : Arief Rahman 13511020 Azalea Fisitania 13511028 Akbar Syam 13511048 </p>
                </section>
            </div>
        </footer> 
    </body>  
</html>  
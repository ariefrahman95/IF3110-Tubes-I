<!doctype html>
<html>

    <?php
        // Header
        include("header.php");
    ?>
    
    <body>
        <div id="content">
            <!-- Main content area -->
            <div id="mainContent">  
                
                <section>  
                    <!-- Blog post --> 
                    <article class="blogPost">
                        <header> 
                            <h2> Top Three </h2>
                        </header>
                        <?php
                            include('connect-mysql-product.php');
                            $sql = "SELECT DISTINCT category FROM product";
                            $result = mysql_query($sql,$connect);
                            if (!$result) {
                                die("Error : " . mysql_error());
                            }
                            echo '<ul>';
                            while($row = mysql_fetch_row($result)) {
                                foreach($row as $key=>$value) {
                                    echo '<li> <h3> <a href="#">', $value, '</a> </h3> </li>';
                                    $sql = "SELECT name, price, picture FROM product WHERE category = '" .$value. "'";
                                    $result2 = mysql_query($sql,$connect);
                                    if (!$result2) {
                                        die("Error : " . mysql_error());
                                    }
                                    echo '<ul>';
                                    while($row2 = mysql_fetch_row($result2)) {
                                        foreach($row2 as $key2=>$value2) {
                                            echo '<li> <a href="#">', $value2, '</a> </li>';
                                        }
                                    }
                                    echo '</ul>';
                                }
                            }
                        echo '</ul>';
                        ?>
                    </article>
                </section>  
                
                <section id="comments">  
                        
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
                <!--Login, DUMMY LOGIN--> 
                <section>
                    <h3> Login </h3>
                    <pre> Username <input type="text" id="usernameText"/> </pre>
                    <pre> Password <input type="text" id="passwordText"/> </pre>
                        <form action="Register.php"> 
                            Belum punya akun? 
                            <input type="submit" value="Daftar"/>
                        </form>
                </section>

                <!--Search, DUMMY SEARCH--> 
                <section>
                    <h3> Search </h3>
                    <input type="text" id="searchText"/>
                    <input type="submit" value="Search"/>
                </section>
                
                <!--Categories-->
                <section>
                    <header>
                        <h3> All Categories </h3>
                    </header>
                    <?php
                        include 'connect-mysql-product.php';
                        $sql = "SELECT DISTINCT category FROM product";
                        $result = mysql_query($sql,$connect);
                        if (!$result) {
                            die("Error : " . mysql_error());
                        }
                        echo '<ul>';
                            while($row = mysql_fetch_row($result)) {
                                foreach($row as $key=>$value) {
                                    echo '<li> <a href="#">', $value, '</a> </li>';
                                }       
                            }
                        echo '</ul>';
                        ?>
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
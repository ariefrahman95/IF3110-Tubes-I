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
                            <h2> Most Bought Items </h2>
                        </header>
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
                                    echo '<li> <h3> <a href="#">', $value, '</a> </h3> </li>';
                                    $sql = "SELECT name FROM product WHERE category = '" .$value. "'";
                                    $result2 = mysql_query($sql,$connect);
                                    if (!$result2) {
                                        die("Error : " . mysql_error());
                                    }
                                    echo '<ul>';
                                    $i = 1;
                                    while($row2 = mysql_fetch_row($result2)) {
                                        foreach($row2 as $key2=>$value2) {
                                            if($i<=3) {
                                                echo '<li> <a href="#">', $value2, '</a> </li>';  
                                                  
                                            }
                                            $i++;
                                        }
                                    }
                                    echo '</ul>';
                                }
                            }
                        echo '</ul>';
                        ?>
                    </article>
                </section>
            </div>  
        
            <!-- Sidebar -->
            <aside>
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
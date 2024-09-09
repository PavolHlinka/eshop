
<!-- Header -->
<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/eshop/">Môj Eshop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Domov</a>
                    </li>
                    <?php include(dirname(__FILE__) ."/menu.php" ); ?>
                    <li class="nav-item">
                        <a class="nav-link" href="kosik.php">
                            <i class="fas fa-shopping-cart"></i> <!-- Shop Icon -->
                        </a>
                    </li>
                    <li class="nav-item">
                    <?php

                    if(isset($_SESSION["pouzivatel"])) {
                        ?>
                        <a class="nav-link" href="/eshop/akcie/odhlasit_sa.php">
                        <?php
                        
                        echo "ahoj ".$_SESSION["pouzivatel"]["meno"]." odhlásiť sa";
                        ?>
                        </a>
                        <?php


                    }
                    else{
                        ?>
                            <a class="nav-link" href="login.php">
                            <i class="fas fa-user"></i> <!-- Account Icon -->
                        </a>
                        <?php



                    }

                    ?>  




                      
                    </li>
                </ul>
            </div>
        </nav>
    </header>
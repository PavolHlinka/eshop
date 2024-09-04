<?php
include_once "config.php";


$sql = "SELECT * FROM `prokukt`";


$result = mysqli_query($db, $sql);



?>



<?php
include "komponenty/head.php";

include "komponenty/header.php";

?>
<!-- Content -->
<div class="container mt-5">
    <!-- Your content will go here -->












    <div class="container mt-5 mb-5">
        <div class="row">
            <!-- Hero Section with Image and Title -->
            <div class="col-md-12 text-center mb-5">
                <img src="https://via.placeholder.com/1200x400" class="img-fluid mb-4" alt="Main Banner">
                <h1 class="display-4">Welcome to Our E-shop</h1>
                <p class="lead">Discover the best products at unbeatable prices!</p>
            </div>
        </div>

        <!-- Row for Products -->
       <div class="row">
       <?php

        while ($produkt = mysqli_fetch_assoc($result)) {

            
            ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="/eshop/obrazky/<?php echo $produkt["obrazok_url"]; ?>" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $produkt["meno"]; ?> </h5>
                        <p class="card-text"><?php echo $produkt["cena"]; ?>€</p>
                        <a href="#" class="btn btn-dark">Pridať do košíka</a>
                        <a href="/eshop/produkt.php?id=<?php echo $produkt["produkt_ID"]; ?>" class="btn btn-dark">Zobraziť</a>
                    </div>
                </div>
            </div>
            <?php

        }

        ?>
        </div>
        
    </div>







    <?php
    include "komponenty/footer.php";
    ?>
    </body>

    </html>
<?php
include_once(dirname(__FILE__) . "/config.php");

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


                include(dirname(__FILE__) . "/komponenty/kartaproduktu.php");

            }

            ?>
        </div>

    </div>







    <?php
    include "komponenty/footer.php";
    ?>
    </body>

    </html>
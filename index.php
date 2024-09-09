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












<div class="container mt-3 mb-3">
    <div class="row">
        <!-- Hero Section with Image and Title -->
        <div class="col-md-12 text-center mb-3">
            <img src="/eshop/obrazky/opasok1.jpg" class="" alt="Main Banner">
            <h1 class="display-4">Vítajte v našom E-shope</h1>
            <p class="lead">Vyberte si z našej ponuky vyšívaných tričiek a mikín</p>
        </div>
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
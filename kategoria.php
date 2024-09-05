<?php
include_once "config.php";

$kategoria =$_GET["id"];
$sql = "SELECT * FROM `prokukt` WHERE `kategoria_ID` = ".$kategoria;


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
        
    <h1></h1>

        <!-- Row for Products -->
       <div class="row">
       <?php

        while ($produkt = mysqli_fetch_assoc($result)) {

         
         include(dirname(__FILE__)."/komponenty/kartaproduktu.php"); 

        }

        ?>
        </div>
        
    </div>







    <?php
    include "komponenty/footer.php";
    ?>
    </body>

    </html>
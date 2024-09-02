<?php
include_once "config.php";


$sql = "SELECT * FROM `prokukt`";

      
$result = mysqli_query($db,$sql);

$produkty=mysqli_fetch_assoc($result);

?>



<?php
include "komponenty/head.php";

include "komponenty/header.php";

?>
    <!-- Content -->
    <div class="container mt-5">
        <!-- Your content will go here -->

    <?php

    while ($produkt = mysqli_fetch_assoc($result)) {
    var_dump($produkt);
        echo $produkt["meno"];
    }

?>



<?php
include "komponenty/footer.php";
?>
</body>
</html>
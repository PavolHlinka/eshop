<?php
include_once "config.php";
include "komponenty/head.php";

include "komponenty/header.php";

$produkty_z_kosika = $_SESSION["kosik"];
$result=[];
if(!empty($produkty_z_kosika)) {
    $produkt_IDS = array_keys($produkty_z_kosika);
$produkt_IDS_retazec = implode(",", $produkt_IDS);

$sql = "SELECT * FROM `prokukt` WHERE produkt_ID IN (" . $produkt_IDS_retazec . ")";

$result = mysqli_query($db, $sql);
}
else{
    echo "nakupný košík je prázdny";
}


?>
<div class="container">
<div class="row">
    <?php
    if(!empty($result)) 
    while ($produkt = mysqli_fetch_assoc($result)) {


        ?>
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="/eshop/obrazky/<?php echo $produkt["obrazok_url"]; ?>" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $produkt["meno"]; ?> </h5>
                    <p class="card-text"><?php echo $produkt["cena"]; ?>€</p>
                    <a href="/eshop/odobrat_z_kosika.php?produkt_id=<?php echo $produkt["produkt_ID"]; ?>" class="btn btn-dark">Odobrať z košíka</a>
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
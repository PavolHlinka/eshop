<?php
include_once "config.php";
include "komponenty/head.php";

include "komponenty/header.php";

$produkty_z_kosika = $_SESSION["kosik"];
$result = [];
if (!empty($produkty_z_kosika)) {
    $produkt_IDS = array_keys($produkty_z_kosika);
    $produkt_IDS_retazec = implode(",", $produkt_IDS);

    $sql = "SELECT * FROM `prokukt` WHERE produkt_ID IN (" . $produkt_IDS_retazec . ")";

    $result = mysqli_query($db, $sql);
} else {
    echo "nakupný košík je prázdny";
}


?>
<div class="container">
    <div class="row">
        <?php
        $celkom_zaprodukty=0;
        if (!empty($result)) {
            
            while ($produkt = mysqli_fetch_assoc($result)) {

                $pocet_za_produkt = $produkty_z_kosika[$produkt["produkt_ID"]];
                $zratanie = $pocet_za_produkt * $produkt["cena"];
                $celkom_zaprodukty= $celkom_zaprodukty + $zratanie;
                ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="/eshop/obrazky/<?php echo $produkt["obrazok_url"]; ?>" class="card-img-top" alt="Product 1">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $produkt["meno"]; ?> </h5>
                            <p class="card-text"><?php echo $produkt["cena"]; ?>€/za kus</p>
                            <p class="card-text">Počet: <?php echo $pocet_za_produkt ?></p>
                            <p class="card-text">Celkom za produkt: <?php echo $zratanie ?>€ </p>
                            <a href="/eshop/odobrat_z_kosika.php?produkt_id=<?php echo $produkt["produkt_ID"]; ?>"
                                class="btn btn-dark">Odobrať z košíka</a>
                            <a href="/eshop/produkt.php?id=<?php echo $produkt["produkt_ID"]; ?>"
                                class="btn btn-dark">Zobraziť</a>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>

    </div>
    <h1>Súčet: <?php echo $celkom_zaprodukty ?>€</h1>
</div>


<?php
include "komponenty/footer.php";
?>
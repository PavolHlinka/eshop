<?php
include_once "config.php";
include "komponenty/head.php";

include "komponenty/header.php";
$produkt_id = $_GET["id"];

$sql = "SELECT * FROM `prokukt` WHERE produkt_ID=".$produkt_id ;


$result = mysqli_query($db, $sql);
$produkt = mysqli_fetch_assoc($result);
?>

<!-- Product section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0"
                    src="/eshop/obrazky/<?php echo $produkt["obrazok_url"]; ?>" alt="..." /></div>
            <div class="col-md-6">
                <div class="small mb-1">EAN: <?php echo $produkt["ean"]; ?></div>
                <h1 class="display-5 fw-bolder"><?php echo $produkt["meno"]; ?></h1>
                <div class="fs-5 mb-5">
                    <span class="text-decoration-line-through"><?php echo $produkt["stara_cena"]; ?></span>
                    <span><?php echo $produkt["cena"]; ?>€</span>
                </div>
                <p class="lead"><?php echo $produkt["popis"]; ?></p>
               
               
                <form action="/eshop/pridat_do_kosika.php">
                <div class="d-flex">
                <input name="produkt_id" value="<?php echo $produkt["produkt_ID"]; ?>" type="hidden" />
                <input class="form-control text-center me-3" name="pocet"  id="inputQuantity" type="num" value="1"
                        style="max-width: 3rem" />
                    <button class="btn btn-outline-dark flex-shrink-0" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Pridať do košíka
                    </button>
                </div>
                </form>


            </div>
        </div>
    </div>
</section>





<?php
include "komponenty/footer.php";
?>
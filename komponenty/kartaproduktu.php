<div class="col-md-4 mb-4">
    <div class="card">
        <img src="/eshop/obrazky/<?php echo $produkt["obrazok_url"]; ?>" class="card-img-top" alt="Product 1">
        <div class="card-body">
            <h5 class="card-title"><?php echo $produkt["meno"]; ?> </h5>
            <p class="card-text"><?php echo $produkt["cena"]; ?>€</p>
           <div class="d-flex justify-content-between"> 
            <form action="/eshop/pridat_do_kosika.php">
                <div class="d-flex ">
                <input name="produkt_id" value="<?php echo $produkt["produkt_ID"]; ?>" type="hidden" />
                <input class="form-control text-center me-3" name="pocet"  id="inputQuantity" type="hidden" value="1"
                        style="max-width: 3rem" />
                    <button class="btn btn-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Pridať do košíka
                    </button>
                </div>
                </form>

            <a href="/eshop/produkt.php?id=<?php echo $produkt["produkt_ID"]; ?>" class="btn btn-dark">Zobraziť</a>
            </div>
        </div>
    </div>
</div>
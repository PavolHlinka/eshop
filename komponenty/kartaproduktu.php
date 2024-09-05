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
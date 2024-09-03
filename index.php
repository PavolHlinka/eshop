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
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Product 1</h5>
                    <p class="card-text">$19.99</p>
                    <a href="#" class="btn btn-dark">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product 2">
                <div class="card-body">
                    <h5 class="card-title">Product 2</h5>
                    <p class="card-text">$29.99</p>
                    <a href="#" class="btn btn-dark">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product 3">
                <div class="card-body">
                    <h5 class="card-title">Product 3</h5>
                    <p class="card-text">$39.99</p>
                    <a href="#" class="btn btn-dark">Buy Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Row of Products -->
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">s
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product 10">
                <div class="card-body">
                    <h5 class="card-title">Product 10</h5>
                    <p class="card-text">$109.99</p>
                    <a href="#" class="btn btn-dark">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product 11">
                <div class="card-body">
                    <h5 class="card-title">Product 11</h5>
                    <p class="card-text">$119.99</p>
                    <a href="#" class="btn btn-dark">Buy Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product 12">
                <div class="card-body">
                    <h5 class="card-title">Product 12</h5>
                    <p class="card-text">$129.99</p>
                    <a href="#" class="btn btn-dark">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
</div>







<?php
include "komponenty/footer.php";
?>
</body>
</html>
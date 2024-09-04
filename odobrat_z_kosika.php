<?php
include(dirname(__FILE__)."/session.php");

$produkt_id=$_GET["produkt_id"];




if(isset($_SESSION["kosik"][$produkt_id])) {
    unset($_SESSION["kosik"][$produkt_id]);
}


header("Location: /eshop/kosik.php");


?>
<?php
include(dirname(__FILE__)."/session.php");

$produkt_id=$_GET["produkt_id"];
$pocet=$_GET["pocet"];
echo "".$produkt_id."".$pocet."";


if(isset($_SESSION["kosik"][$produkt_id])) {
    $_SESSION["kosik"][$produkt_id]=$_SESSION["kosik"][$produkt_id]+$pocet;
}
else{
    $_SESSION["kosik"][$produkt_id]=$pocet;
}

header("Location: /eshop/kosik.php");


?>
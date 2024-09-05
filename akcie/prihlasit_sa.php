<?php
include(dirname(__FILE__) ."/../config.php");
include(dirname(__FILE__) ."/../session.php");


$email=$_GET["email"];
$heslo=$_GET["heslo"];

$sql="SELECT * FROM `používatelia` WHERE `email` = '".$email."' AND `heslo` = '".$heslo."'";

$result = mysqli_query($db, $sql);
$pouzivatel = mysqli_fetch_assoc($result);

if(!empty($pouzivatel["email"])) {
    $_SESSION["pouzivatel"]=$pouzivatel;
}

header("Location: /eshop/");



?>
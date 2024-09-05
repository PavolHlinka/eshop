<?php
include(dirname(__FILE__) ."/../config.php");
include(dirname(__FILE__) ."/../session.php");

unset($_SESSION["pouzivatel"]);

header("Location: /eshop/");




?>
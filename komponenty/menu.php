<?php
include_once(dirname(__FILE__) ."/../config.php");
include_once(dirname(__FILE__) ."/../session.php");

$sqlmenu= "SELECT * FROM `kategorie`";
$resultmenu = mysqli_query($db, $sqlmenu);

while ($kategoria=mysqli_fetch_assoc($resultmenu)) {
    
    ?>
    <li class="nav-item">
        <a class="nav-link" href="/eshop/kategoria.php?id=<?php echo $kategoria["kategoria_ID"] ?>"><?php echo $kategoria["názov_kategórie"]; ?> </a>
    </li>
    <?php
}




?>
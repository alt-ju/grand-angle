<?php

session_start();

$title = "Liste des expositions";
require_once "./config/pdo.php";

include "includes/pages/header.php";
include "includes/pages/navbarr.php";
include "includes/pages/nav-head.php";

?>

<div class="gestion">
  <?php include "includes/components/expo-card.php" ;?>
</div>


<?php 
  include "includes/pages/footer.php";
;?>
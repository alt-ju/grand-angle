<?php

session_start();

$title = "Modifier une oeuvre";

include "includes/pages/header.php";
include "includes/pages/nav-head.php";
include "includes/pages/navbarr.php";

$id = $_GET["id"];

;?>

<div class="gestion gestion-add-oeuvre">
    <div class="oeuvre-unique-contain">

        <div class="oeuvre-unique-infos col">
        <?php include "includes/components/oeuvre-update-infos.php" ;?>
        </div> 

        <div class="oeuvre-unique-contenu col">
            <?php include "includes/components/oeuvre-update-description.php" ;?>
        </div>
        
    </div>
</div>

<?php

$title = "Mon tableau de bord";
include "includes/pages/header.php";
;?>


<div class="avatar-nav">
    <img src="assets/img/avatar.jpeg" alt="">
    <h1>Nom Prénom</h1>
    <ul>
        <li><a href="#">Paramètres</a></li>
        <li><a href="#">Grand Angle</a></li>
        <li><a href="#">Collaborateurs</a></li>
    </ul>
</div>

<div class="main-nav">
    <div id="calendar">
    
    </div>
    <div class="add-buttons">
        <input class="dash long" type="button" value="Liste des expositions">
        <input class="dash long" type="button" value="Liste des artistes">
        <input class="dash long" type="button" value="Listes des oeuvres">
        <input class="dash long" type="button" value="Implantation">
        <div>
            <input class="dash" type="button" value="Plan de l'exposition">
            <input class="short dash" type="button" value="+">
        </div>
    </div>
</div>

<div class="art-state">
    <h2>Etat des oeuvres :</h2>
    <div class="art-state-div">
        <div id="arrow-l" class="arrow">
            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg></a>
        </div>
        <div class="art-state-content">
            <div class="art">
                <a href="#">
                    <div>
                        <div class="first-art">
                            <img src="assets/img/freud_strawberries.jpg" alt="">
                            <p>id_oeuvre</p>
                            <p>Livrée</p>
                        </div> 
                    </div>
                </a>
            </div>
            <div class="art">
                <a href="#">
                    <div>
                        <div class="first-art">
                            <img src="assets/img/freud_strawberries.jpg" alt="">
                            <p>id_oeuvre</p>
                            <p>Livrée</p>
                        </div> 
                    </div>
                </a>
            </div>
            <div class="art">
                <a href="#">
                    <div>
                        <div class="first-art">
                            <img src="assets/img/freud_strawberries.jpg" alt="">
                            <p>id_oeuvre</p>
                            <p>Livrée</p>
                        </div> 
                    </div>
                </a>
            </div>
            <div class="art">
                <a href="#">
                    <div>
                        <div class="first-art">
                            <img src="assets/img/freud_strawberries.jpg" alt="">
                            <p>id_oeuvre</p>
                            <p>Livrée</p>
                        </div> 
                    </div>
                </a>
            </div>
            <div class="art">
                <a href="#">
                    <div>
                        <div class="first-art">
                            <img src="assets/img/freud_strawberries.jpg" alt="">
                            <p>id_oeuvre</p>
                            <p>Livrée</p>
                        </div> 
                    </div>
                </a>
            </div>
            <div class="art">
                <a href="#">
                    <div>
                        <div class="first-art">
                            <img src="assets/img/freud_strawberries.jpg" alt="">
                            <p>id_oeuvre</p>
                            <p>Livrée</p>
                        </div> 
                    </div>
                </a>
            </div>
            <div class="art">
                <a href="#">
                    <div>
                        <div class="first-art">
                            <img src="assets/img/freud_strawberries.jpg" alt="">
                            <p>id_oeuvre</p>
                            <p>Livrée</p>
                        </div> 
                    </div>
                </a>
            </div>
            <div class="art">
                <a href="#">
                    <div>
                        <div class="first-art">
                            <img src="assets/img/freud_strawberries.jpg" alt="">
                            <p>id_oeuvre</p>
                            <p>Livrée</p>
                        </div> 
                    </div>
                </a>
            </div>
            <div class="art">
                <a href="#">
                    <div>
                        <div class="first-art">
                            <img src="assets/img/freud_strawberries.jpg" alt="">
                            <p>id_oeuvre</p>
                            <p>Livrée</p>
                        </div> 
                    </div>
                </a>
            </div>
            <div class="art">
                <a href="#">
                    <div>
                        <div class="first-art">
                            <img src="assets/img/freud_strawberries.jpg" alt="">
                            <p>id_oeuvre</p>
                            <p>Livrée</p>
                        </div> 
                    </div>
                </a>
            </div>
        </div>
        <div id="arrow-r" class="arrow">
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg></a>
        </div>
    </div>
</div>

<?php 
include "includes/pages/footer.php";
;?>



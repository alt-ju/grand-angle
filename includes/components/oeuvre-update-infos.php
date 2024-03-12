<form action="" method="POST" enctype="multipart/form-data">

            <div class="div-libelle-add-oeuvre">
                <label for="libelle">Libellé de l'oeuvre :</label>
                <input type="text" name="libelle" id="libelle" class="field-add-oeuvre">
                <span>*</span>
            </div>

            <div class="div-photo-add-oeuvre">
                <div class="arrow-left-btn">
                    <button><svg  viewBox="0 0 448 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg></button>
                </div>
                <div class="container-img-oeuvre">
                    <span>*</span>
                    <div class="image-svg-container">
                        <img src="assets/img/imgvide.webp" alt="">
                        <img id="preview-image" src="" alt="" >
                        <!-- <div class="add-img-plus">
                            <svg  viewBox="0 0 512 512"><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344V280H168c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H280v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>
                        </div> -->
                    </div>
                </div>
                <div class="arrow-right-btn">
                    <button><svg viewBox="0 0 448 512"><path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"/></svg></button>
                </div>
            </div>
            <div>
                <input type="file" name="imgOeuvre" id="imgOeuvre" accept="image/*">
                <input type="text" name="libelleImg" id="libelleImg" placeholder="Libellé de l'image">
            </div>
            <div class="div-infos-oeuvre">
                <div class="select-type-add-oeuvre">
                    <label for="artiste">Artiste :</label>
                    <select name="artiste" id="artiste">
                        <?php foreach($artistes as $artiste) :?>
                        <option value="<?php echo $artiste["Id_Artiste"]?>"><?php echo $artiste["Nom_Artiste"]?> <?php echo $artiste["Prenom_Artiste"]?></option>
                        <?php endforeach;?>
                    </select>
                    <span>*</span>
                    <div class="add-type-plus">
                        <a href="#">
                            <svg  viewBox="0 0 512 512"><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344V280H168c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H280v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>
                            <span>Créer</span>
                        </a>
                    </div>
                </div>
            
                <div class="select-type-add-oeuvre">
                    <label for="type">Type d'oeuvre :</label>
                    <select name="type" id="type">
                        <?php foreach($types as $type) :?>
                        <option value="<?php echo$type["Id_Type"]?>"><?php echo $type["libelle_Type"]?></option>
                        <?php endforeach;?>
                    </select>
                    <span>*</span>
                    <div class="add-type-plus">
                        <a href="#">
                            <svg  viewBox="0 0 512 512"><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344V280H168c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H280v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>
                            <span>Créer</span>
                        </a>
                    </div>
                </div>

                <div class="select-type-add-oeuvre">
                    <label for="exposition">Exposition: </label>
                    <select name="exposition" id="exposition">
                        <?php foreach($expositions as $exposition) :?>
                        <option value="<?php echo $exposition["Id_Exposition"]?>"><?php echo $exposition["libelle_Exposition"]?></option>
                        <?php endforeach;?>
                    </select>
                    <span>*</span>
                    <div class="add-type-plus">
                        <a href="#">
                            <svg  viewBox="0 0 512 512"><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344V280H168c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H280v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>
                            <span>Créer</span>
                        </a>
                    </div>
                </div>
                <div class="select-type-add-oeuvre">
                    <label for="position">Position :</label>
                    <select name="position" id="position">
                        <?php foreach($positions as $position) :?>
                        <option value="<?php echo $position["Id_Position"]?>"><?php echo $position["libelle_Position"]?></option>
                        <?php endforeach;?>
                    </select>
                    <span>*</span>
                </div>
                
                <div class="input-dimensions multi">
                    <div class="haut-oeuvre-add position">
                        <label for="hauteur">Hauteur :</label>
                        <input type="text" class="dim-add-oeuvre" name="hauteur" id="hauteur" value="">
                    </div>
                    <div class="larg-oeuvre-add position">
                        <label for="largeur">Largeur :</label>
                        <input type="text" class="dim-add-oeuvre" name="largeur" id="largeur" value="">
                    </div>
                    <div class="prof-oeuvre-add position">
                        <label for="profondeur">Profondeur :</label>
                        <input type="text" class="dim-add-oeuvre" name="profondeur" id="profondeur" value="">
                    </div>
                </div>

                <div class="input-infos-supp multi">
                    <div class="info-poids-add">
                        <label for="poids">Poids :</label>
                        <input type="text"  class="dim-add-oeuvre" name="poids" id="poids" value="">
                    </div>
                    <div class="info-prix-add">
                        <label for="prix">Prix :</label>
                        <input type="text"  class="dim-add-oeuvre" name="prix" id="prix" value="">
                    </div>
                </div>

                <div>
                    <label for="state">Livrée</label>
                    <input type="checkbox" name="state" id="state">
                </div>
                
            </div>

            <div class="btn-submit-add-oeuvre">
                <input type="submit" name="infos-submit" id="infos-submit" value="Valider">
            </div>
        </form>
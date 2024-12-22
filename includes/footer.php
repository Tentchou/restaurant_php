

<!-- section footer -->
<section class="footer" id="footer">
    <div class="box-container">
        <div class="box">
            <h3>Emplacements</h3>
            <a href="#">Cameroun</a>
            <a href="#">Congo</a>
            <a href="#">Gabon</a>
            <a href="#">Nigeria</a>
            <a href="#">Guinee Equatorial</a>
        </div>

        <div class="box">
            <h3>Liens rapides</h3>
            <a href="index.php">Acceuil</a>
            <a href="plat.php">Plats</a>
            <a href="about.php">A propos</a>
            <a href="menu.php">Menu</a>
            <a href="temoignage.php">Revoirs</a>
            <a href="contact.php">Commandes</a>
            <a href="faqs.php">Faqs</a>
            <a href="expert.php">Experts</a>
            <a href="gallery.php">Gallery</a>
        </div>

        <div class="box">
            <h3>coordonnées</h3>
            <a href="#">(+237 678065506)</a>
            <a href="#">(+237 657727514)</a>
            <a href="#">tentchouromeo58@gmail.com</a>
            <a href="#">restaurantbresil@gmail.com</a>
            <a href="#">Douala-Cameroun(Ndogpassi 3)</a>
        </div>
        
        <div class="box">
            <h3>Suivez-nous</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
            <a href="#">linkedin</a>
            <!-- <a href="#">Douala-Cameroun(Ndogpassi 3)</a> -->
        </div>

        <div class="box">
        <?php
                require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'functions' . DIRECTORY_SEPARATOR . 'compteur.php';
                //appel a la fonction ajouter_vue
                ajouter_vue(); 
                $vues = nombre_vue();
                ?>
                <p style="color:#27ae60; font-size:1.5rem;  font-weight: bolder;">il y a <?=$vues?> visite<?php if ($vues > 1): ?>s<?php endif; ?> sur le site</p>
        </div>

    </div>

    <div class="credit">copyright @ 2021 by <span>Rom.Bresil.com</span></div>
 </section>
<!-- section footer -->
 <!-- footer -->

     <!-- footer -->
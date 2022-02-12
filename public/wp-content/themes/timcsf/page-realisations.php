<?php get_header();

/*Template name: Réalisations*/

echo "page-realisations.php";

if(is_active_sidebar("gauche")){?>
    <aside id="gauche" class="barregauche">
        <?php get_sidebar("gauche")?>
    </aside>
<?php } ?>
</header>
<main class="realisations">
    <div class="conteneur">
        <h1 class="realisations__titre">Réalisations 1re année</h1>
        <div class="realisations__boutons__navigation">
            <a class="realisations__boutons__navigation__1re" href="#">1re année</a>
            <a class="realisations__boutons__navigation__2e" href="#">2e année</a>
            <a class="realisations__boutons__navigation__3e" href="#">3e année</a>
        </div>
        <div class="realisations__galerie">
            <a href="#" class="realisations__galerie__realisation">
                <img
                        class="realisations__galerie__realisation__image"
                        src="https://via.placeholder.com/355x200"
                        alt="image d'une réalisation"
                >
                <p class="realisations__galerie__realisation__titre">Animation d’un logo - Cégep de Sainte-Foy</p>
                <p class="realisations__galerie__realisation__nom">Yves-Luc Bernier Bourdages</p>
            </a>
            <a href="#" class="realisations__galerie__realisation">
                <img
                        class="realisations__galerie__realisation__image"
                        src="https://via.placeholder.com/355x200"
                        alt="image d'une réalisation"
                >
                <p class="realisations__galerie__realisation__titre">Animation d’un logo - Cégep de Sainte-Foy</p>
                <p class="realisations__galerie__realisation__nom">Yves-Luc Bernier Bourdages</p>
            </a>
            <a href="#" class="realisations__galerie__realisation">
                <img
                        class="realisations__galerie__realisation__image"
                        src="https://via.placeholder.com/355x200"
                        alt="image d'une réalisation"
                >
                <p class="realisations__galerie__realisation__titre">Animation d’un logo - Cégep de Sainte-Foy</p>
                <p class="realisations__galerie__realisation__nom">Yves-Luc Bernier Bourdages</p>
            </a>
            <a href="#" class="realisations__galerie__realisation">
                <img
                        class="realisations__galerie__realisation__image"
                        src="https://via.placeholder.com/355x200"
                        alt="image d'une réalisation"
                >
                <p class="realisations__galerie__realisation__titre">Animation d’un logo - Cégep de Sainte-Foy</p>
                <p class="realisations__galerie__realisation__nom">Yves-Luc Bernier Bourdages</p>
            </a>
            <a href="#" class="realisations__galerie__realisation">
                <img
                        class="realisations__galerie__realisation__image"
                        src="https://via.placeholder.com/355x200"
                        alt="image d'une réalisation"
                >
                <p class="realisations__galerie__realisation__titre">Animation d’un logo - Cégep de Sainte-Foy</p>
                <p class="realisations__galerie__realisation__nom">Yves-Luc Bernier Bourdages</p>
            </a>
            <a href="#" class="realisations__galerie__realisation">
                <img
                        class="realisations__galerie__realisation__image"
                        src="https://via.placeholder.com/355x200"
                        alt="image d'une réalisation"
                >
                <p class="realisations__galerie__realisation__titre">Animation d’un logo - Cégep de Sainte-Foy</p>
                <p class="realisations__galerie__realisation__nom">Yves-Luc Bernier Bourdages</p>
            </a>
            <a class="realisations__boutons__voirPlus" href="#">Voir plus de réalisations</a>
        </div>
    </div>
</main>


<?php
if(is_active_sidebar("droite")){?>
    <aside id="droite" class="barredroite">
        <?php get_sidebar("droite")?>
    </aside>
<?php } ?>

<?php get_footer(); ?>
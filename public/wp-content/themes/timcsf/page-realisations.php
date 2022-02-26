<?php get_header();

/*Template name: Réalisations*/

//echo "page-realisations.php";

?>
    <div class="header__bandeau horsAccueil">
        <div class="header__bandeau__blockTitre">
            <h1 class="header__bandeau__blockTitre__titre"><?php echo get_post(468)->titre?></h1>
            <p class="header__bandeau__blockTitre__p"><?php echo get_post(468)->texte?></p>
        </div>
    </div>
</header>
<main class="realisations">
    <div class="conteneur">
        <h1 class="realisations__titre">Réalisations <br/>1re année</h1>
        <div class="realisations__boutons__navigation">
            <a class="realisations__boutons__navigation__lien boutonBleu" href="#">1re année</a>
            <a class="realisations__boutons__navigation__lien boutonBleu" href="#">2e année</a>
            <a class="realisations__boutons__navigation__lien boutonBleu" href="#">3e année</a>
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
            <a class="realisations__boutons boutonBleu" href="#">Voir plus de réalisations</a>
        </div>
        <div class="boutonHautPage">
            <a class="boutonHautPage__bouton fa fa-arrow-up" href="#top"></a>
        </div>
    </div>
</main>

<?php get_footer(); ?>
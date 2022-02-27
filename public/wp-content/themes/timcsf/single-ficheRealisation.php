<?php get_header();

/*Template name: Fiche Réalisation*/


//echo "single-ficheRealisation.php"; ?>
    <div class="header__bandeau horsAccueil">
        <div class="header__bandeau__blockTitre">
            <h1 class="header__bandeau__blockTitre__titre"><?php echo get_post(468)->titre?></h1>
            <p class="header__bandeau__blockTitre__p"><?php echo get_post(468)->texte?></p>
        </div>
    </div>
</header>
<main class="ficheRealisation">
    <div class="conteneur">
        <img
                class="ficheRealisation__photoPrincipale"
                src="https://via.placeholder.com/2000x1125"
                alt="image d'une réalisation"
        >
        <div class="ficheRealisation__infos">
            <div class="ficheRealisation__infos__infoRealisation">
                <h1 class="ficheRealisation__infos__infoRealisation__titre">Animation d’un logo - Cégep de Sainte-Foy</h1>
                <div class="ficheRealisation__infos__infoRealisation__nomAnnee">
                    <p class="ficheRealisation__infos__infoRealisation__nomAnnee__nom">Yves-Luc Bernier Bourdages</p>
                    <p class="ficheRealisation__infos__infoRealisation__nomAnnee__annee">1re année</p>
                </div>
                <p class="ficheRealisation__infos__infoRealisation__cours">Montage médiatique : plurimédia</p>
                <p class="ficheRealisation__infos__infoRealisation__description">
                    Notre mandat a été de concevoir une animation courte du logo d’un organisme réel de notre choix.
                    Pour ce projet, j’ai décidé de prendre celui du cégep de Sainte-Foy et de présenter en quelques secondes
                    toutes les différentes sphères d’activités auxquelles il participe.
                </p>
                <div class="ficheRealisation__infos__infoRealisation__technologies">
                    <p class="ficheRealisation__infos__infoRealisation__technologies__titreListe">Technologies utilisées</p>
                    <div class="ficheRealisation__infos__infoRealisation__technologies__listes">
                        <ul class="ficheRealisation__infos__infoRealisation__technologies__liste">
                            <li class="ficheRealisation__infos__infoRealisation__technologies__item">Adobe Illustrator</li>
                            <li class="ficheRealisation__infos__infoRealisation__technologies__item">Adobe After Effects</li>
                        </ul>
                        <ul class="ficheRealisation__infos__infoRealisation__technologies__liste">
                            <li class="ficheRealisation__infos__infoRealisation__technologies__item">Adobe Audition</li>
                            <li class="ficheRealisation__infos__infoRealisation__technologies__item">Vimeo</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="ficheRealisation__infos__autresImages">
                <img
                        class="ficheRealisation__infos__autresImages__image"
                        src="https://via.placeholder.com/355x200"
                        alt="image d'une réalisation"
                >
                <img
                        class="ficheRealisation__infos__autresImages__image"
                        src="https://via.placeholder.com/355x200"
                        alt="image d'une réalisation"
                >
            </div>
        </div>
        <div class="ficheRealisation__biographie">
            <div class="ficheRealisation__biographie__titreMedia">
                <h2 class="ficheRealisation__biographie__titreMedia__titre">Yves-Luc Bernier Bourdages</h2>
                <div class="ficheRealisation__biographie__titreMedia__media">
                    <a href="<?php echo get_post(126)->texte?>" class="ficheRealisation__biographie__titreMedia__media__lien fa fa-at"></a>
                    <a href="<?php echo get_post(127)->texte?>" class="ficheRealisation__biographie__titreMedia__media__lien fa fa-twitter"></a>
                    <a href="<?php echo get_post(128)->texte?>" class="ficheRealisation__biographie__titreMedia__media__lien fa fa-linkedin"></a>
                    <a href="<?php echo get_post(148)->texte?>" class="ficheRealisation__biographie__titreMedia__media__lien fa fa-globe"></a>
                </div>
            </div>
            <div class="ficheRealisation__biographie__imageTexte">
                <img
                        class="ficheRealisation__biographie__imageTexte__image"
                        src="https://via.placeholder.com/235x235"
                        alt="image d'une réalisation"
                >
                <p class="ficheRealisation__biographie__imageTexte__texte">
                    La troisième fois c’est la bonne!
                    N’ayant pas encore trouvé ma voie après avoir complété mes sciences de la nature et mon
                    baccalauréat en comptabilité, j’ai entrepris leprogramme des TIM déterminée à trouver un domaine
                    que j’allais vraiment aimer. Le dicton a eu bienraison. Après deux programmes qui n’ont pas allumé
                    d’étincelle, j’ai enfin trouvé ma vraie passion dans le développement web.
                    Dans ce domaine varié, je m’épanouis plus particulièrement lorsque je fais du design UX et UI et du
                    développement front-end. Aujourd’hui, j’aspire à trouver un emploi dans lequel je vais pouvoir mettre
                    à profit ma créativité et mon amour pour la résolution de problèmes.
                </p>
            </div>
        </div>
        <div class="ficheRealisation__biographie__mobile ">
            <h2 class="ficheRealisation__biographie__mobile__titre">Yves-Luc Bernier Bourdages</h2>
            <p class="ficheRealisation__biographie__mobile__texte">
                <img
                        class="ficheRealisation__biographie__mobile__image"
                        src="https://via.placeholder.com/168x168"
                        alt="image d'une réalisation"
                >
                La troisième fois c’est la bonne!
                N’ayant pas encore trouvé ma voie après avoir complété mes sciences de la nature et mon
                baccalauréat en comptabilité, j’ai entrepris le programme des TIM déterminée à trouver un domaine
                que j’allais vraiment aimer. Le dicton a eu bienraison. Après deux programmes qui n’ont pas allumé
                d’étincelle, j’ai enfin trouvé ma vraie passion dans le développement web.
                Dans ce domaine varié, je m’épanouis plus particulièrement lorsque je fais du design UX et UI et du
                développement front-end. Aujourd’hui, j’aspire à trouver un emploi dans lequel je vais pouvoir mettre
                à profit ma créativité et mon amour pour la résolution de problèmes.
            </p>
            <div class="ficheRealisation__biographie__mobile__media">
                <a href="<?php echo get_post(126)->texte?>" class="ficheRealisation__biographie__mobile__media__lien fa fa-at"></a>
                <a href="<?php echo get_post(127)->texte?>" class="ficheRealisation__biographie__mobile__media__lien fa fa-twitter"></a>
                <a href="<?php echo get_post(128)->texte?>" class="ficheRealisation__biographie__mobile__media__lien fa fa-linkedin"></a>
                <a href="<?php echo get_post(148)->texte?>" class="ficheRealisation__biographie__mobile__media__lien fa fa-globe"></a>
            </div>
        </div>
        <div class="ficheRealisation__autresProjets">
            <h2 class="ficheRealisation__autresProjets__titre">Autres projets de Yves-Luc Bernier Bourdages</h2>
            <div class="ficheRealisation__autresProjets__flex">
                <div class="ficheRealisation__autresProjets__galerie">
                    <a class="ficheRealisation__autresProjets__galerie__realisation" href="#">
                        <img
                                class="ficheRealisation__autresProjets__galerie__realisation__image"
                                src="https://via.placeholder.com/355x200"
                                alt="image d'une réalisation"
                        >
                        <p class="ficheRealisation__autresProjets__galerie__realisation__titre">Festival OFF</p>
                        <p class="ficheRealisation__autresProjets__galerie__realisation__nom">Yves-Luc Bernier Bourdages</p>
                    </a>
                </div>
                <div class="ficheRealisation__autresProjets__galerie">
                    <a class="ficheRealisation__autresProjets__galerie__realisation" href="#">
                        <img
                                class="ficheRealisation__autresProjets__galerie__realisation__image"
                                src="https://via.placeholder.com/355x200"
                                alt="image d'une réalisation"
                        >
                        <p class="ficheRealisation__autresProjets__galerie__realisation__titre">Festival OFF</p>
                        <p class="ficheRealisation__autresProjets__galerie__realisation__nom">Yves-Luc Bernier Bourdages</p>
                    </a>
                </div>
            </div>
        </div>
        <a class="ficheRealisation__boutonRetour boutonBleu" href="#"><i class="fa fa-arrow-left"></i>Retour aux réalisations</a>
        <div class="boutonHautPage">
            <a class="boutonHautPage__bouton fa fa-arrow-up" href="#top"></a>
        </div>
    </div>
</main>

<?php get_footer();?>
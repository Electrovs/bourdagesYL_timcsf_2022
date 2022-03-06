<?php get_header();

/*Template name: Fiche Projets*/

//echo "single-projets.php";

$idProjetVue = $post->ID;




//Les Finissants
//**************************************************

//Requête pour obtenir les infos des finissants
$args = array(
    'post_type' => 'diplômés',
    'posts_per_page' => -1,
    'post_status' => 'publish',
    'meta_key' => 'id',
    'meta_value' => get_field("diplome_id"),

);

$the_query = new WP_Query($args);

$arrFinissants=array();
if( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        array_push($arrFinissants, $post);
    }
}
wp_reset_postdata();

//Les Cours
//**************************************************

//Requête pour obtenir les infos des finissants
$args = array(
    'post_type' => 'cours',
    'posts_per_page' => -1,
    'post_status' => 'publish',
    'meta_key' => 'id',
    'meta_value' => get_field("cours_id"),

);

$the_query = new WP_Query($args);

$arrCours=array();
if( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        array_push($arrCours, $post);
    }
}
wp_reset_postdata();
$sessionAnnee = "";
if(get_field("session", $arrCours[0]->ID) == "1" || get_field("session", $arrCours[0]->ID) == "2"){
    $sessionAnnee = "1re";
}elseif (get_field("session", $arrCours[0]->ID) == "3" || get_field("session", $arrCours[0]->ID) == "4"){
    $sessionAnnee = "2e";
}else{
    $sessionAnnee = "3e";
}
?>
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
                src="<?php echo get_field("photo_1")["sizes"]["large"]; ?>"
                alt="image d'une réalisation"
        >
        <div class="ficheRealisation__infos">
            <div class="ficheRealisation__infos__infoRealisation">
                <h1 class="ficheRealisation__infos__infoRealisation__titre"><?php echo get_field("titre") ?></h1>
                <div class="ficheRealisation__infos__infoRealisation__nomAnnee">
                    <p class="ficheRealisation__infos__infoRealisation__nomAnnee__nom">
                        <?php echo get_field("prenom", $arrFinissants[0]->ID) ?> <?php echo get_field("nom", $arrFinissants[0]->ID) ?>
                    </p>
                    <p class="ficheRealisation__infos__infoRealisation__nomAnnee__annee"><?php echo $sessionAnnee?> année</p>
                </div>
                <p class="ficheRealisation__infos__infoRealisation__cours"><?php echo get_field("nom", $arrCours[0]->ID) ?></p>
                <div class="ficheRealisation__infos__infoRealisation__description"><?php echo get_field("description") ?></div>
                <div class="ficheRealisation__infos__infoRealisation__technologies">
                    <p class="ficheRealisation__infos__infoRealisation__technologies__titreListe"><?php echo get_post(841)->titre?></p>
                    <div class="ficheRealisation__infos__infoRealisation__technologies__listes">
                        <ul class="ficheRealisation__infos__infoRealisation__technologies__liste">
                            <li class="ficheRealisation__infos__infoRealisation__technologies__item"><?php echo get_field("technologies") ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="ficheRealisation__infos__autresImages">
            <?php
            if(get_field("photo_2")["sizes"]["large"] != null) { ?>
                <img
                        class="ficheRealisation__infos__autresImages__image"
                        src="<?php echo get_field("photo_2")["sizes"]["large"] ?>"
                        alt="image d'une réalisation"
                >
            <?php }
            if(get_field("photo_3")["sizes"]["large"] != null) { ?>
                <img
                        class="ficheRealisation__infos__autresImages__image"
                        src="<?php echo get_field("photo_3")["sizes"]["large"] ?>"
                        alt="image d'une réalisation"
                >
            <?php } ?>
            </div>
        </div>
        <div class="ficheRealisation__biographie">
            <div class="ficheRealisation__biographie__titreMedia">
                <h2 class="ficheRealisation__biographie__titreMedia__titre"><?php echo get_field("prenom", $arrFinissants[0]->ID) ?> <?php echo get_field("nom", $arrFinissants[0]->ID) ?></h2>
                <div class="ficheRealisation__biographie__titreMedia__media">
                    <a href="mailto:<?php echo get_field("courriel", $arrFinissants[0]->ID) ?>" class="ficheRealisation__biographie__titreMedia__media__lien fa fa-at"></a>
<?php
if(get_field("pseudo_twitter", $arrFinissants[0]->ID) != null){?>
    <a href="https://twitter.com/<?php echo get_field("pseudo_twitter", $arrFinissants[0]->ID) ?>" class="ficheRealisation__biographie__titreMedia__media__lien fa fa-twitter"></a>
<?php }
?>
                    <a href="<?php echo get_field("linkedin", $arrFinissants[0]->ID) ?>" class="ficheRealisation__biographie__titreMedia__media__lien fa fa-linkedin"></a>
                    <a href="<?php echo get_field("site_web", $arrFinissants[0]->ID) ?>" class="ficheRealisation__biographie__titreMedia__media__lien fa fa-globe"></a>
                </div>
            </div>
            <div class="ficheRealisation__biographie__imageTexte">
                <img
                        class="ficheRealisation__biographie__imageTexte__image"
                        src="<?php echo get_field("photo", $arrFinissants[0]->ID)["sizes"]["large"]  ?>"
                        alt="portrait de l'étudiant"
                >
                <div class="ficheRealisation__biographie__imageTexte__texte">
                    <?php echo get_field("presentation", $arrFinissants[0]->ID) ?>
                </div>
            </div>
        </div>
        <div class="ficheRealisation__biographie__mobile ">
            <h2 class="ficheRealisation__biographie__mobile__titre"><?php echo get_field("prenom", $arrFinissants[0]->ID) ?> <?php echo get_field("nom", $arrFinissants[0]->ID) ?></h2>
            <div class="ficheRealisation__biographie__mobile__texte">
                <img
                        class="ficheRealisation__biographie__mobile__image"
                        src="<?php echo get_field("photo", $arrFinissants[0]->ID)["sizes"]["large"]  ?>"
                        alt="image d'une réalisation"
                >
                <?php echo get_field("presentation", $arrFinissants[0]->ID) ?>
            </div>
            <div class="ficheRealisation__biographie__mobile__media">
                <a href="mailto:<?php echo get_field("courriel", $arrFinissants[0]->ID) ?>" class="ficheRealisation__biographie__mobile__media__lien fa fa-at"></a>
<?php
if (get_field("pseudo_twitter", $arrFinissants[0]->ID) != null){?>
                <a href="https://twitter.com/<?php echo get_field("pseudo_twitter", $arrFinissants[0]->ID) ?>" class="ficheRealisation__biographie__mobile__media__lien fa fa-twitter"></a>
<?php }
?>              <a href="<?php echo get_field("linkedin", $arrFinissants[0]->ID) ?>" class="ficheRealisation__biographie__mobile__media__lien fa fa-linkedin"></a>
                <a href="<?php echo get_field("site_web", $arrFinissants[0]->ID) ?>" class="ficheRealisation__biographie__mobile__media__lien fa fa-globe"></a>
            </div>
        </div>
        <div class="ficheRealisation__autresProjets">
            <h2 class="ficheRealisation__autresProjets__titre"><?php echo get_post(841)->texte?> <?php echo get_field("prenom", $arrFinissants[0]->ID) ?> <?php echo get_field("nom", $arrFinissants[0]->ID) ?></h2>
            <div class="ficheRealisation__autresProjets__flex">
            <?php
            //Les Projets
            //**************************************************

            //Requête pour obtenir les infos des finissants
            $args = array(
                'post_type' => 'projets',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                "meta_key" => "diplome_id",
                "meta_value" => get_field("diplome_id"),
            );

            $the_query = new WP_Query($args);

            if($the_query->have_posts()){
                while ($the_query->have_posts()){
                    $the_query->the_post();
                    if($post->ID != $idProjetVue) { ?>
                        <div class="ficheRealisation__autresProjets__galerie">
                            <a class="ficheRealisation__autresProjets__galerie__realisation" href="<?php the_permalink();?>">
                                <img
                                        class="ficheRealisation__autresProjets__galerie__realisation__image"
                                        src="<?php echo get_field("photo_1")["sizes"]["large"]; ?>"
                                        alt="image d'une réalisation"
                                >
                                <p class="ficheRealisation__autresProjets__galerie__realisation__titre"><?php echo get_field("titre") ?></p>
                                <p class="ficheRealisation__autresProjets__galerie__realisation__nom"><?php echo get_field("technologies") ?></p>
                            </a>
                        </div>
                    <?php }
                }
            } ?>
            </div>
        </div>
        <a class="ficheRealisation__boutonRetour boutonBleu" href="<?php echo get_permalink(388)?>"><i class="fa fa-arrow-left"></i><?php echo get_post(842)->titre?></a>
        <div class="boutonHautPage">
            <a class="boutonHautPage__bouton fa fa-arrow-up" href="#top"></a>
        </div>
    </div>
</main>

<?php get_footer();?>
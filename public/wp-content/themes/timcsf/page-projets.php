<?php get_header();

/*Template name: Projets*/

//echo "page-projets.php";

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
        <?php
        //Les Finissants
        //**************************************************

        //Requête pour obtenir les infos des finissants
        $args = array(
            'post_type' => 'diplômés',
            'posts_per_page' => -1,
            'post_status' => 'publish',
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

        //Les cours
        //**************************************************

        switch (true) {
            case isset($_POST["btn_01"]):
                $metaValue = array("1", "2");
                $anneeTitre = "1re";
                break;
            case isset($_POST["btn_02"]):
                $metaValue = array("3", "4");
                $anneeTitre = "2e";
                break;
            case isset($_POST["btn_03"]):
                $metaValue = array("5", "6");
                $anneeTitre = "3e";
                break;
            default:
                $metaValue = array("1", "2");
                $anneeTitre = "1re";
        }

        //Requête pour obtenir les infos des finissants
        $args = array(
            'post_type' => 'cours',
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'meta_key' => 'session',
            'meta_value' => $metaValue,
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

        ?>
        <h1 class="realisations__titre"><?php echo get_post(838)->titre?> <br/><span class="realisations__titre__annee"><?php echo $anneeTitre?> année</span></h1>
        <?php
        if($anneeTitre === "1re") { ?>
            <form class="realisations__boutons__navigation" action="" method="post">
                <button class="realisations__boutons__navigation__lien boutonBleu deactivate" disabled name="btn_01">1re année</button>
                <button class="realisations__boutons__navigation__lien boutonBleu" name="btn_02">2e année</button>
                <button class="realisations__boutons__navigation__lien boutonBleu" name="btn_03">3e année</button>
            </form>
    <?php } elseif ($anneeTitre === "2e") { ?>
            <form class="realisations__boutons__navigation" action="" method="post">
                <button class="realisations__boutons__navigation__lien boutonBleu" name="btn_01">1re année</button>
                <button class="realisations__boutons__navigation__lien boutonBleu deactivate" disabled  name="btn_02">2e année</button>
                <button class="realisations__boutons__navigation__lien boutonBleu" name="btn_03">3e année</button>
            </form>
    <?php } elseif ($anneeTitre === "3e") { ?>
            <form class="realisations__boutons__navigation" action="" method="post">
                <button class="realisations__boutons__navigation__lien boutonBleu" name="btn_01">1re année</button>
                <button class="realisations__boutons__navigation__lien boutonBleu" name="btn_02">2e année</button>
                <button class="realisations__boutons__navigation__lien boutonBleu deactivate" disabled name="btn_03">3e année</button>
            </form>
        <?php } ?>
        <div class="realisations__galerie">
            <?php
            //Les Projets
            //**************************************************

            //Requête pour obtenir les infos des finissants
            $args = array(
                'post_type' => 'projets',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                "meta_key" => "titre",
                "orderby" => "meta_value",
                "order" => "ASC"
            );

            $the_query = new WP_Query($args);

            $intpost = 1;

            if($the_query->have_posts()){
                while($the_query->have_posts()) {
                    $the_query->the_post();
                    //Photo obtient un tableau (sizes) contenant les différentes tailles d'image
                    $photo=get_field("photo_1");
                    //ici on affiche seulement la taille thumbnail

                    for($intcpt=0; $intcpt<count($arrCours); $intcpt++){

                        if(get_field("cours_id")==get_field("id", $arrCours[$intcpt]->ID)){?>
                            <a href="<?php the_permalink();?>" class="realisations__galerie__realisation">
                                <img
                                        class="realisations__galerie__realisation__image"
                                        src="<?php echo $photo["sizes"]["large"]; ?>"
                                        alt="image d'une réalisation"
                                >
                                <p class="realisations__galerie__realisation__titre"><?php the_field("titre");?></p>
                                <?php
                                for($cpt=0; $cpt<count($arrFinissants); $cpt++){

                                    if(get_field("diplome_id")==get_field("id", $arrFinissants[$cpt]->ID)){ ?>
                                        <p class="realisations__galerie__realisation__nom"><?php echo get_field("prenom", $arrFinissants[$cpt]->ID)?> <?php echo get_field("nom", $arrFinissants[$cpt]->ID)?></p>
                                    <?php } ?>
                                <?php } ?>
                            </a>
                 <?php } ?>
              <?php } ?>
          <?php }
            } ?>
        </div>
        <a class="realisations__boutons boutonBleu" href="#"><?php echo get_post(840)->titre?></a>
        <div class="boutonHautPage">
            <a class="boutonHautPage__bouton fa fa-arrow-up" href="#top"></a>
        </div>
    </div>
</main>

<?php get_footer(); ?>
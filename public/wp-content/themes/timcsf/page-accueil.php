<?php get_header();

/*Template name: Accueil*/

/*echo "page-accueil.php";*/
?>
    <div class="header__bandeau">
        <div class="header__bandeau__blockTitre">
            <h1 class="header__bandeau__blockTitre__titre"><?php echo get_post(468)->titre?></h1>
            <p class="header__bandeau__blockTitre__p"><?php echo get_post(468)->texte?></p>
        </div>
        <img
                class="header__bandeau__image"
                src="<?php echo get_template_directory_uri();?>/liaisons/images/heroTable.jpg"
                alt="photo d'une scène en classe"
        >
    </div>
</header>
<main class="formation">
    <div class="formation__top">
        <div class="conteneur">
            <div class="formation__top__info">
                <?php echo get_post(130)->texte?>
            </div>
            <div class="formation__top__fichesInfo">
                <h2 class="formation__top__fichesInfo__titre"><?php echo get_post(473)->titre?></h2>
                <div class="formation__top__fichesInfo__fiches">
                    <div class="formation__top__fichesInfo__fiches__fiche programmation">
                        <div class="formation__top__fichesInfo__fiches__entete">
                            <h2 class="formation__top__fichesInfo__fiches__entete__h2"><?php echo get_post(134)->titre?></h2>
                            <p class="formation__top__fichesInfo__fiches__entete__-">-</p>
                        </div>
                        <?php echo get_post(134)->texte?>
                    </div>
                    <div class="formation__top__fichesInfo__fiches__fiche integration">
                        <div class="formation__top__fichesInfo__fiches__entete">
                            <h2 class="formation__top__fichesInfo__fiches__entete__h2"><?php echo get_post(133)->titre?></h2>
                            <p class="formation__top__fichesInfo__fiches__entete__-">-</p>
                        </div>
                        <?php echo get_post(133)->texte?>
                    </div>
                    <div class="formation__top__fichesInfo__fiches__fiche conception">
                        <div class="formation__top__fichesInfo__fiches__entete">
                            <h2 class="formation__top__fichesInfo__fiches__entete__h2"><?php echo get_post(131)->titre?></h2>
                            <p class="formation__top__fichesInfo__fiches__entete__-">-</p>
                        </div>
                        <?php echo get_post(131)->texte?>
                    </div>
                    <div class="formation__top__fichesInfo__fiches__fiche media">
                        <div class="formation__top__fichesInfo__fiches__entete">
                            <h2 class="formation__top__fichesInfo__fiches__entete__h2"><?php echo get_post(132)->titre?></h2>
                            <p class="formation__top__fichesInfo__fiches__entete__-">-</p>
                        </div>
                        <?php echo get_post(132)->texte?>
                    </div>
                    <div class="formation__top__fichesInfo__fiches__fiche autres">
                        <div class="formation__top__fichesInfo__fiches__entete">
                            <h2 class="formation__top__fichesInfo__fiches__entete__h2"><?php echo get_post(135)->titre?></h2>
                            <p class="formation__top__fichesInfo__fiches__entete__-">-</p>
                        </div>
                        <?php echo get_post(135)->texte?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="formation__bourses">
        <div class="conteneur">
            <h2 class="formation__bourses__titre"><?php echo get_post(479)->titre?></h2>
            <p class="formation__bourses__texte">
                <?php echo get_post(479)->texte?>
            </p>
            <div class="formation__bourses__bouton__alignRight">
                <a class="formation__bourses__bouton boutonInscrit" href="<?php echo get_post(480)->titre?>"><?php echo get_post(480)->texte?></a>
            </div>
        </div>
    </div>
    <div class="formation__bottom">
        <div class="conteneur">
            <div class="formation__bottom__grille">
                <div>
                    <h2 class="formation__bottom__grille__h2"><?php echo get_post(136)->titre?></h2>
                    <p class="formation__bottom__grille__p">
                        <?php echo get_post(136)->texte?>
                    </p>
                    <div class="formation__bottom__grille__boutons">
                        <a class="formation__bottom__grille__boutons__grille boutonBleu" href="<?php echo get_post(481)->texte?>"><?php echo get_post(481)->titre?></a>
                        <p class="formation__bottom__grille__boutons__p">Ou</p>
                        <a class="formation__bottom__grille__boutons__telecharger boutonBleu" href="<?php echo get_post(484)->texte?>" download><?php echo get_post(484)->titre?></a>
                    </div>
                </div>
            </div>
            <div class="formation__bottom__temoignages">
                <h2 class="formation__bottom__temoignages__titre"><?php echo get_post(485)->titre?></h2>
                <?php
                //à mettre dans la page pour afficher les responsables
                //**************************************************



                //Requête pour obtenir les infos des responsables
                $args = array(
                    'post_type' => 'témoignages',
                    'posts_per_page' => 1,
                    'post_status' => 'publish',
                    'orderby' => 'rand',
                    'order' => 'ASC',
                );

                $the_query = new WP_Query( $args );

                if($the_query->have_posts()){
                    while($the_query->have_posts()) {
                        $the_query->the_post();?>
                        <?php //Photo obtient un tableau (sizes) contenant les différentes tailles d'image
                        $photo=get_field("photo");
                        //ici on affiche seulement la taille thumbnail
                        ?>
                        <div class="formation__bottom__temoignages__temoignage">
                            <div class="formation__bottom__temoignages__photoInfo">
                                <div class="formation__bottom__temoignages__photoInfo__photo">
                                    <img
                                            class="formation__bottom__temoignages__photoInfo__photo__image"
                                            src="<?php echo $photo["sizes"]["large"]; ?>"
                                            alt="photo de du témoin"
                                    >
                                    <p class="formation__bottom__temoignages__photoInfo__photo__annee">Diplomé.e <?php echo get_field("annee_diplomation");?></p>
                                </div>
                                <div class="formation__bottom__temoignages__photoInfo__info">
                                    <p class="formation__bottom__temoignages__photoInfo__info__nom"><?php echo get_field("temoin");?></p>
                                    <p class="formation__bottom__temoignages__photoInfo__info__emploi"><?php echo get_field("titre_poste");?></p>
                                </div>
                            </div>
                            <p class="formation__bottom__temoignages__texte">
                                <?php echo get_field("temoignage");?>
                            </p>
                        </div>
                    <?php }
                } ?>
                <?php
                //à mettre dans la page pour afficher les responsables
                //**************************************************



                //Requête pour obtenir les infos des responsables
                $args = array(
                    'post_type' => 'témoignages',
                    'posts_per_page' => 1,
                    'post_status' => 'publish',
                    'orderby' => 'rand',
                    'order' => 'ASC',
                );

                $the_query = new WP_Query( $args );

                if($the_query->have_posts()){
                    while($the_query->have_posts()) {
                        $the_query->the_post();?>
                        <?php //Photo obtient un tableau (sizes) contenant les différentes tailles d'image
                        $photo=get_field("photo");
                        //ici on affiche seulement la taille thumbnail
                        ?>
                        <div class="formation__bottom__temoignages__temoignage">
                            <div class="formation__bottom__temoignages__photoInfo">
                                <div class="formation__bottom__temoignages__photoInfo__info">
                                    <p class="formation__bottom__temoignages__photoInfo__info__nom"><?php echo get_field("temoin");?></p>
                                    <p class="formation__bottom__temoignages__photoInfo__info__emploi"><?php echo get_field("titre_poste");?></p>
                                </div>
                                <div class="formation__bottom__temoignages__photoInfo__photo">
                                    <img
                                            class="formation__bottom__temoignages__photoInfo__photo__image"
                                            src="<?php echo $photo["sizes"]["large"]; ?>"
                                            alt="photo de du témoin"
                                    >
                                    <p class="formation__bottom__temoignages__photoInfo__photo__annee">Diplomé.e <?php echo get_field("annee_diplomation");?></p>
                                </div>
                            </div>
                            <p class="formation__bottom__temoignages__texte">
                                <?php echo get_field("temoignage");?>
                            </p>
                        </div>
                    <?php }
                } ?>
                <?php
                //à mettre dans la page pour afficher les responsables
                //**************************************************



                //Requête pour obtenir les infos des responsables
                $args = array(
                    'post_type' => 'témoignages',
                    'posts_per_page' => 1,
                    'post_status' => 'publish',
                    'orderby' => 'rand',
                    'order' => 'ASC',
                );

                $the_query = new WP_Query( $args );

                if($the_query->have_posts()){
                    while($the_query->have_posts()) {
                        $the_query->the_post();?>
                        <?php //Photo obtient un tableau (sizes) contenant les différentes tailles d'image
                        $photo=get_field("photo");
                        //ici on affiche seulement la taille thumbnail
                        ?>
                        <div class="formation__bottom__temoignages__temoignage">
                            <div class="formation__bottom__temoignages__photoInfo">
                                <div class="formation__bottom__temoignages__photoInfo__photo">
                                    <img
                                            class="formation__bottom__temoignages__photoInfo__photo__image"
                                            src="<?php echo $photo["sizes"]["large"]; ?>"
                                            alt="photo de du témoin"
                                    >
                                    <p class="formation__bottom__temoignages__photoInfo__photo__annee">Diplomé.e <?php echo get_field("annee_diplomation");?></p>
                                </div>
                                <div class="formation__bottom__temoignages__photoInfo__info">
                                    <p class="formation__bottom__temoignages__photoInfo__info__nom"><?php echo get_field("temoin");?></p>
                                    <p class="formation__bottom__temoignages__photoInfo__info__emploi"><?php echo get_field("titre_poste");?></p>
                                </div>
                            </div>
                            <p class="formation__bottom__temoignages__texte">
                                <?php echo get_field("temoignage");?>
                            </p>
                        </div>
                    <?php }
                } ?>
            </div>
            <div class="formation__bottom__inscription">
                <div class="formation__bottom__inscription__flex">
                    <h2 class="formation__bottom__inscription__titre"><?php echo get_post(121)->titre?></h2>
                    <p class="formation__bottom__inscription__info">
                        <?php echo get_post(121)->texte?>
                    </p>
                    <h3 class="formation__bottom__inscription__sousTitre"><?php echo get_post(486)->titre?></h3>
                    <div class="formation__bottom__inscription__tours">
                        <?php echo get_post(486)->texte?>
                    </div>
                    <div class="formation__bottom__inscription__bouton__alignRight">
                        <a class="formation__bottom__inscription__bouton boutonInscrit" href="<?php echo get_post(470)->texte?>"><?php echo get_post(470)->titre?></a>
                    </div>
                </div>
            </div>
            <div class="formation__bottom__question">
                <div>
                    <h2 class="formation__bottom__question__titre"><?php echo get_post(120)->titre?></h2>
                    <?php echo get_post(120)->texte?>
                    <a class="formation__bottom__question__boutonsSylvain boutonBleu" href="<?php echo get_permalink(7)?>"><?php echo get_post(487)->texte?></a>
                </div>
            </div>
            <div class="formation__bottom__etudiantJour">
                <div class="formation__bottom__etudiantJour__info">
                    <h2 class="formation__bottom__etudiantJour__info__titre"><?php echo get_post(118)->titre?></h2>
                    <?php echo get_post(118)->texte?>
                    <a class="formation__bottom__etudiantJour__info__boutonsBenoit boutonBleu" href="<?php echo get_permalink(7)?>"><?php echo get_post(488)->texte?></a>
                    <img
                        class="formation__bottom__etudiantJour__image"
                        src="<?php echo get_template_directory_uri();?>/liaisons/images/etuJourTable.jpg"
                        alt="photo d'une scène en classe"
                    >
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
<?php get_header();

/*Template name: Accueil*/

/*echo "page-accueil.php";*/
?>
    <div class="header__bandeau">
        <div class="header__bandeau__blockTitre">
            <h1 class="header__bandeau__blockTitre__titre">Techniques d'intégration multimédias</h1>
            <p class="header__bandeau__blockTitre__p">Web & App</p>
        </div>
        <div class="header__bandeau__image"/>
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
                    <div class="formation__top__fichesInfo__fiches__programmation">
                        <div class="formation__top__fichesInfo__fiches__entete">
                            <h2 class="formation__top__fichesInfo__fiches__entete__h2"><?php echo get_post(134)->titre?></h2>
                            <p class="formation__top__fichesInfo__fiches__entete__-">-</p>
                        </div>
                        <?php echo get_post(134)->texte?>
                    </div>
                    <div class="formation__top__fichesInfo__fiches__integration">
                        <div class="formation__top__fichesInfo__fiches__entete">
                            <h2 class="formation__top__fichesInfo__fiches__entete__h2"><?php echo get_post(133)->titre?></h2>
                            <p class="formation__top__fichesInfo__fiches__entete__-">-</p>
                        </div>
                        <?php echo get_post(133)->texte?>
                    </div>
                    <div class="formation__top__fichesInfo__fiches__conception">
                        <div class="formation__top__fichesInfo__fiches__entete">
                            <h2 class="formation__top__fichesInfo__fiches__entete__h2"><?php echo get_post(131)->titre?></h2>
                            <p class="formation__top__fichesInfo__fiches__entete__-">-</p>
                        </div>
                        <?php echo get_post(131)->texte?>
                    </div>
                    <div class="formation__top__fichesInfo__fiches__media">
                        <div class="formation__top__fichesInfo__fiches__entete">
                            <h2 class="formation__top__fichesInfo__fiches__entete__h2"><?php echo get_post(132)->titre?></h2>
                            <p class="formation__top__fichesInfo__fiches__entete__-">-</p>
                        </div>
                        <?php echo get_post(132)->texte?>
                    </div>
                    <div class="formation__top__fichesInfo__fiches__autres">
                        <div class="formation__top__fichesInfo__fiches__entete">
                            <h2 class="formation__top__fichesInfo__fiches__entete__h2">10% Autres</h2>
                            <p class="formation__top__fichesInfo__fiches__entete__-">-</p>
                        </div>
                        <p class="formation__top__fichesInfo__fiches__p">
                            Gérer des projets, réaliser des stages en milieu professionnel. Gestion Agile, outils
                            de gestion de projet, réalisation de projets d’envergure, stage crédité et stage en
                            alternance travail-études (ATE).
                        </p>
                        <p class="formation__top__fichesInfo__fiches__titreListe">Compétences et logiciels en lien</p>
                        <div class="formation__top__fichesInfo__fiches__listes">
                            <ul class="formation__top__fichesInfo__fiches__liste">
                                <li class="formation__top__fichesInfo__fiches__item">Gestion agil / scrum</li>
                                <li class="formation__top__fichesInfo__fiches__item">Autonomie</li>
                                <li class="formation__top__fichesInfo__fiches__item">Veille technologique</li>
                            </ul>
                            <ul class="formation__top__fichesInfo__fiches__liste">
                                <li class="formation__top__fichesInfo__fiches__item">Travail collaboratif: Git, planner</li>
                                <li class="formation__top__fichesInfo__fiches__item">stages</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="formation__bourses">
        <div class="conteneur">
            <h2 class="formation__bourses__titre">Nouveau!</br> 9000$ en bourses</h2>
            <p class="formation__bourses__texte">
                Dès l’automne 2022, le programme de bourses perspective québec
                t’offre 1 500 $ de bourses par session inscrit, pour un total de 9 000 $
                pour les 3 années du programme TIM.
            </p>
            <a class="formation__bourses__bouton boutonInscrit" href="#">Renseigne toi ici</a>
        </div>
    </div>
    <div class="formation__bottom">
        <div class="conteneur">
            <div class="formation__bottom__grille">
                <h2 class="formation__bottom__grille__h2">Grille de cours</h2>
                <p class="formation__bottom__grille__p">
                    Pour avoir de l’information plus spécifique sur
                    les cours, visite le site du Cégep de Sainte-Foy.
                </p>
                <div class="formation__bottom__grille__boutons">
                    <a class="formation__bottom__grille__boutons__grille boutonBleu" href="#">Grille de cours</a>
                    <p class="formation__bottom__grille__boutons__p">Ou</p>
                    <a class="formation__bottom__grille__boutons__telecharger boutonBleu" href="#">Télécharger</a>
                </div>
            </div>
            <div class="formation__bottom__temoignages">
                <h2 class="formation__bottom__temoignages__titre">Témoignages</h2>
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
            </div>
            <div class="formation__bottom__inscription">
                <h2 class="formation__bottom__inscription__titre">Inscription</h2>
                <p class="formation__bottom__inscription__info">
                    Pour compléter ta demande d'admission à notre programme, tu dois t'adresser au Service régional d'admission au collégial
                    de Québec <span class="formation__bottom__inscription__info__span">(SRACQ).</span>
                </p>
                <h3 class="formation__bottom__inscription__sousTitre">Périodes d'inscription</h3>
                <div class="formation__bottom__inscription__tours">
                    <div class="formation__bottom__inscription__tours__tour t1">
                        <p class="formation__bottom__inscription__tours__tour__xTour">1er tour</p>
                        <p class="formation__bottom__inscription__tours__tour__dateTour">1e mars</p>
                    </div>
                    <div class="formation__bottom__inscription__tours__tour t2">
                        <p class="formation__bottom__inscription__tours__tour__xTour">2e tour</p>
                        <p class="formation__bottom__inscription__tours__tour__dateTour">1e mai</p>
                    </div>
                    <div class="formation__bottom__inscription__tours__tour t3">
                        <p class="formation__bottom__inscription__tours__tour__xTour">3e tour</p>
                        <p class="formation__bottom__inscription__tours__tour__dateTour">1e juin</p>
                    </div>
                    <div class="formation__bottom__inscription__tours__tour t4">
                        <p class="formation__bottom__inscription__tours__tour__xTour">4e tour</p>
                        <p class="formation__bottom__inscription__tours__tour__dateTour">1e août</p>
                    </div>
                </div>
                <a class="formation__bottom__inscription__bouton boutonInscrit" href="#">Je m'inscris</a>
            </div>
            <div class="formation__bottom__question">
                <h2 class="formation__bottom__question__titre">Questions</h2>
                <p class="formation__bottom__question__p">
                    Tu as des questions et aimerais en apprendre plus sur notre programme ?
                </p>
                <p class="formation__bottom__question__p">
                    N’hésite pas à contacter <span class="formation__bottom__question__p__span">Sylvain Lamoureux</span>, le coordonnateur du programme, pour obtenir des réponses.
                </p>
                <a class="formation__bottom__question__boutonsSylvain boutonBleu" href="#">Écris à Sylvain Lamoureux</a>
            </div>
            <div class="formation__bottom__etudiantJour">
                <div class="formation__bottom__etudiantJour__info">
                    <h2 class="formation__bottom__etudiantJour__info__titre">Étudiant d'un jour</h2>
                    <p class="formation__bottom__etudiantJour__info__p">
                        Tu veux en apprendre plus sur le programme? Tu veux assister à un ou plusieurs cours?
                        Viens passer une journée avec nous, en Techniques d'intégration multimédia!
                    </p>
                    <p class="formation__bottom__etudiantJour__info__p">
                        Contacte <span class="formation__bottom__etudiantJour__info__p__span">Benoît Frigon</span> pour en savoir plus.
                    </p>
                    <a class="formation__bottom__etudiantJour__info__boutonsBenoit boutonBleu" href="#">Écris à Benoît Frigon</a>
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
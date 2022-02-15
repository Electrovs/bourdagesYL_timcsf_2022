<?php get_header();

/*Template name: Accueil*/

/*echo "page-accueil.php";*/

if(is_active_sidebar("gauche")){?>
    <aside id="gauche" class="barregauche">
        <?php get_sidebar("gauche")?>
    </aside>
<?php } ?>
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
                <p class="formation__top__info__p1">
                    Utilisabilité, accessibilité, portabilité sont les trois piliers du programme TIM-Web et apps.
                </p>
                <p class="formation__top__info__p2">Deux axes de formation:
                    <ul class="formation__top__info__p2__liste">
                        <li class="formation__top__info__p2__item">Conception + traitement des médias</li>
                        <li class="formation__top__info__p2__item">Intégration + programmation</li>
                    </ul>
                </p>
                <p class="formation__top__info__p3">
                    Un seul but, former des technicien.ne.s polyvalent.e.s, aptes à réaliser des sites et des applications Web de A à Z.
                </p>
            </div>
            <div class="formation__top__fichesInfo">
                <h2 class="formation__top__fichesInfo__titre">Axes de la formation</h2>
                <div class="formation__top__fichesInfo__fiches">
                    <div class="formation__top__fichesInfo__fiches__programmation">
                        <div class="formation__top__fichesInfo__fiches__entete">
                            <h2 class="formation__top__fichesInfo__fiches__entete__h2">25% Programmation</h2>
                            <p class="formation__top__fichesInfo__fiches__entete__-">-</p>
                        </div>
                        <p class="formation__top__fichesInfo__fiches__p">
                            Rendre fonctionnel un produit numérique interactif du côté back-end.
                            Manipulation de bases de données pour l’affichage dynamique, le tout de façon sémantique
                            dans un code documenté, portable et robuste.
                        </p>
                        <p class="formation__top__fichesInfo__fiches__titreListe">Compétences et logiciels en lien</p>
                        <div class="formation__top__fichesInfo__fiches__listes">
                            <ul class="formation__top__fichesInfo__fiches__liste">
                                <li class="formation__top__fichesInfo__fiches__item">Php</li>
                                <li class="formation__top__fichesInfo__fiches__item">Sql / My sql</li>
                                <li class="formation__top__fichesInfo__fiches__item">Orienté objet</li>
                            </ul>
                            <ul class="formation__top__fichesInfo__fiches__liste">
                                <li class="formation__top__fichesInfo__fiches__item">Mvc</li>
                                <li class="formation__top__fichesInfo__fiches__item">Phpstorm</li>
                            </ul>
                        </div>
                    </div>
                    <div class="formation__top__fichesInfo__fiches__integration">
                        <div class="formation__top__fichesInfo__fiches__entete">
                            <h2 class="formation__top__fichesInfo__fiches__entete__h2">25% Intégration</h2>
                            <p class="formation__top__fichesInfo__fiches__entete__-">-</p>
                        </div>
                        <p class="formation__top__fichesInfo__fiches__p">
                            Transposer les médias et le design en code sémantique et programmer l’interactivité du côté front-end.
                            S’assurer de l’accessibilité de l’interface.
                        </p>
                        <p class="formation__top__fichesInfo__fiches__titreListe">Compétences et logiciels en lien</p>
                        <div class="formation__top__fichesInfo__fiches__listes">
                            <ul class="formation__top__fichesInfo__fiches__liste">
                                <li class="formation__top__fichesInfo__fiches__item">Html</li>
                                <li class="formation__top__fichesInfo__fiches__item">Sass</li>
                                <li class="formation__top__fichesInfo__fiches__item">Css</li>
                                <li class="formation__top__fichesInfo__fiches__item">Ajax</li>
                                <li class="formation__top__fichesInfo__fiches__item">Responsive Web</li>
                            </ul>
                            <ul class="formation__top__fichesInfo__fiches__liste">
                                <li class="formation__top__fichesInfo__fiches__item">Flex et grid</li>
                                <li class="formation__top__fichesInfo__fiches__item">Json</li>
                                <li class="formation__top__fichesInfo__fiches__item">Javascript</li>
                                <li class="formation__top__fichesInfo__fiches__item">TypeScript</li>
                                <li class="formation__top__fichesInfo__fiches__item">Mobil first</li>
                            </ul>
                        </div>
                    </div>
                    <div class="formation__top__fichesInfo__fiches__conception">
                        <div class="formation__top__fichesInfo__fiches__entete">
                            <h2 class="formation__top__fichesInfo__fiches__entete__h2">25% Conception</h2>
                            <p class="formation__top__fichesInfo__fiches__entete__-">-</p>
                        </div>
                        <p class="formation__top__fichesInfo__fiches__p">
                            Analyser les besoins du client, puis concevoir des interfaces efficientes
                            et attrayantes. Tester les fonctionnalités conçues. Design inclusif (accessibilité).
                        </p>
                        <p class="formation__top__fichesInfo__fiches__titreListe">Compétences et logiciels en lien</p>
                        <div class="formation__top__fichesInfo__fiches__listes">
                            <ul class="formation__top__fichesInfo__fiches__liste__01">
                                <li class="formation__top__fichesInfo__fiches__item">Design d’interface web</li>
                                <li class="formation__top__fichesInfo__fiches__item">Expérience utilisateur</li>
                                <li class="formation__top__fichesInfo__fiches__item">Axure</li>
                            </ul>
                            <ul class="formation__top__fichesInfo__fiches__liste">
                                <li class="formation__top__fichesInfo__fiches__item">Utilisabilité</li>
                                <li class="formation__top__fichesInfo__fiches__item">Ergonomie</li>
                                <li class="formation__top__fichesInfo__fiches__item">Accessibilité</li>
                                <li class="formation__top__fichesInfo__fiches__item">Figma</li>
                            </ul>
                        </div>
                    </div>
                    <div class="formation__top__fichesInfo__fiches__media">
                        <div class="formation__top__fichesInfo__fiches__entete">
                            <h2 class="formation__top__fichesInfo__fiches__entete__h2">15% Média</h2>
                            <p class="formation__top__fichesInfo__fiches__entete__-">-</p>
                        </div>
                        <p class="formation__top__fichesInfo__fiches__p">
                            Traitement et création de médias tel que : textes, images
                            matricielles et vectorielles, photos, vidéos, sons.
                        </p>
                        <p class="formation__top__fichesInfo__fiches__titreListe">Compétences et logiciels en lien</p>
                        <div class="formation__top__fichesInfo__fiches__listes">
                            <ul class="formation__top__fichesInfo__fiches__liste">
                                <li class="formation__top__fichesInfo__fiches__item">Suite Adobe CC</li>
                                <li class="formation__top__fichesInfo__fiches__item">Photomontages</li>
                                <li class="formation__top__fichesInfo__fiches__item">Effets spéciaux</li>
                                <li class="formation__top__fichesInfo__fiches__item">Son</li>
                            </ul>
                            <ul class="formation__top__fichesInfo__fiches__liste">
                                <li class="formation__top__fichesInfo__fiches__item">Tournage et montage vidéo</li>
                                <li class="formation__top__fichesInfo__fiches__item">Design cinétique</li>
                            </ul>
                        </div>
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
                <div class="formation__bottom__temoignages__temoignage">
                    <div class="formation__bottom__temoignages__photoInfo">
                        <div class="formation__bottom__temoignages__photoInfo__photo">
                            <img
                                class="formation__bottom__temoignages__photoInfo__photo__image"
                                src="https://via.placeholder.com/168"
                                alt="photo de du témoin"
                            >
                            <p class="formation__bottom__temoignages__photoInfo__photo__annee">Diplomé.e 2013</p>
                        </div>
                        <div class="formation__bottom__temoignages__photoInfo__info">
                            <p class="formation__bottom__temoignages__photoInfo__info__nom">Frédérique Fortier</p>
                            <p class="formation__bottom__temoignages__photoInfo__info__emploi">Développeuse Web Front-End chez Spektrum Média</p>
                        </div>
                    </div>
                    <p class="formation__bottom__temoignages__texte">
                        Surfant sur le web depuis toujours, j’ai choisi TIM pour son mélange de design et de programmation qui permet
                        d’allier le côté créatif au côté logique. Mon choix s’est confirmé lors de mon premier cours de programmation, où
                        j’ai eu la piqûre dès que j’ai vu mon code se transformer sous mes yeux en élément interactif ! J’adore la diversité
                        des projets et des nouveaux défis qui se présentent chaque jour. Grâce à eux, mes connaissances sont constamment enrichies.
                    </p>
                </div>
                <div class="formation__bottom__temoignages__temoignage">
                    <div class="formation__bottom__temoignages__photoInfo">
                        <div class="formation__bottom__temoignages__photoInfo__info">
                            <p class="formation__bottom__temoignages__photoInfo__info__nom">Stéphanie Parcel</p>
                            <p class="formation__bottom__temoignages__photoInfo__info__emploi">Développeuse Web</p>
                        </div>
                        <div class="formation__bottom__temoignages__photoInfo__photo">
                            <img
                                class="formation__bottom__temoignages__photoInfo__photo__image"
                                src="https://via.placeholder.com/168"
                                alt="photo de du témoin"
                            >
                            <p class="formation__bottom__temoignages__photoInfo__photo__annee">Diplomé.e 2014</p>
                        </div>
                    </div>
                    <p class="formation__bottom__temoignages__texte">
                        Je savais que voulais créer à l’aide d’un ordinateur, mais je ne savais pas quoi. Le design m’intéressait
                        autant que la programmation. La TIM a donc été un un excellent moyen de toucher à plusieurs facettes du domaine
                        et ainsi trouver ma passion. Aujourd’hui, que ce soit d’un client, d’un patron ou d’un collègue, entendre la
                        phrase: « tu viens de me simplifier la vie », ça vaut de l’or!
                    </p>
                </div>
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
                        src="https://via.placeholder.com/375x171"
                        alt="photo d'une scène en classe"
                    >
                </div>
            </div>
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
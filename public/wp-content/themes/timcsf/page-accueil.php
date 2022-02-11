<?php get_header();

/*Template name: Accueil*/

echo "page-accueil.php";

if(is_active_sidebar("gauche")){?>
    <aside id="gauche" class="barregauche">
        <?php get_sidebar("gauche")?>
    </aside>
<?php } ?>

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
            <div class="formation__top__fichesInfos">
                <h2 class="formation__top__fichesInfo__titre"></h2>
                <div class="formation__top__fichesInfo__fiches">
                    <div class="formation__top__fichesInfo__fiches__programmation">
                        <h2 class="formation__top__fichesInfo__fiches__programmation__h2"></h2>
                        <p class="formation__top__fichesInfo__fiches__programmation__p"></p>
                        <p class="formation__top__fichesInfo__fiches__programmation__titreListe">Deux axes de formation:
                            <ul class="formation__top__fichesInfo__fiches__programmation__liste">
                                <li class="formation__top__fichesInfo__fiches__programmation__item">Conception + traitement des médias</li>
                                <li class="formation__top__fichesInfo__fiches__programmation__item">Conception + traitement des médias</li>
                                <li class="formation__top__fichesInfo__fiches__programmation__item">Conception + traitement des médias</li>
                                <li class="formation__top__fichesInfo__fiches__programmation__item">Conception + traitement des médias</li>
                                <li class="formation__top__fichesInfo__fiches__programmation__item">Conception + traitement des médias</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="formation__bourses">
        <div class="conteneur">

        </div>
    </div>
    <div class="formation__bottom">
        <div class="conteneur">

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
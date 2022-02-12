<?php get_header();

/*Template name: Stages*/

echo "page-stages.php";

if(is_active_sidebar("gauche")){?>
    <aside id="gauche" class="barregauche">
        <?php get_sidebar("gauche")?>
    </aside>
<?php } ?>
</header>
<main class="stages">
    <div class="conteneur">
        <h1 class="stages__titre">Stages</h1>
        <p class="stages__texteIntro">
            console.log()Le programme TIM du Cégep de Sainte-Foy offre des stages
            en Alternance travail études (ATE) pendant l’été et un
            stage crédité en session terminale qui peut être réalisé en France.
        </p>
        <div class="stages__stagesInfo">
            <div class="stages__stagesInfo__stageATE">
                <h2 class="stages__stagesInfo__stageATE__titre">Stage ATE</h2>
                <p class="stages__stagesInfo__stageATE__texte">
                    Stages en alternance travail-études optionnels, rémunérés,
                    à l’été pour les étudiant.e.s de 1re et 2e année.
                </p>
                <div class="stages__stagesInfo__stageATE__dureeDate">
                    <p class="stages__stagesInfo__stageATE__date">
                        Débute le 24 mai 2022
                    </p>
                    <p class="stages__stagesInfo__stageATE__duree">
                        Durée de 8 semaines minimum
                    </p>
                </div>
            </div>
            <div class="stages__stagesInfo__stageFE">
                <h2 class="stages__stagesInfo__stageFE__titre">Stage de fin d’études</h2>
                <p class="stages__stagesInfo__stageFE__texte">
                    La dernière session de la formation est divisée en deux parties.
                    La première comporte des cours réalisés en mode intensif d’une durée de sept semaines.
                    La seconde est entièrement consacrée à un stage rénuméré en entreprise.
                </p>
                <div class="stages__stagesInfo__stageFE__dureeDate">
                    <p class="stages__stagesInfo__stageFE__date">
                        Débute le 21 mars 2022
                    </p>
                    <p class="stages__stagesInfo__stageFE__duree">
                        Durée de 8 semaines
                    </p>
                </div>
            </div>
        </div>
        <div class="stages__employeurs">
            <h2 class="stages__employeurs__titre">Employeurs</h2>
            <p class="stages__employeurs__texte">Consultez le profil des compétences des étudiants pour déterminer le stage à offrir.</p>
        </div>
        <div class="stages__contactezPascal">
            <div class="stages__contactezPascal__infos">
                <p class="stages__contactezPascal__infos__texte">Contactez Pascal Larose pour en savoir plus.</p>
                <p class="stages__contactezPascal__infos__telephone">Téléphone : (418) 659-6600 poste 6653</p>
            </div>
            <a class="stages__contactezPascal__boutonPascal" href="#">Écris à Pascal Larrose</a>
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
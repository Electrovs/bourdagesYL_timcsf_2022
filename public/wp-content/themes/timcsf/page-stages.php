<?php get_header();

/*Template name: Stages*/

//echo "page-stages.php";?>

    <div class="header__bandeau horsAccueil">
        <div class="header__bandeau__blockTitre">
            <h1 class="header__bandeau__blockTitre__titre"><?php echo get_post(468)->titre?></h1>
            <p class="header__bandeau__blockTitre__p"><?php echo get_post(468)->texte?></p>
        </div>
    </div>
</header>
<main class="stages">
    <div class="conteneur">
        <h1 class="stages__titre">Stages</h1>
        <p class="stages__texteIntro">
            Le programme TIM du Cégep de Sainte-Foy offre des stages
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
                        <span class="stages__stagesInfo__stageATE__date__span">Débute le</span> 24 mai 2022
                    </p>
                    <p class="stages__stagesInfo__stageATE__duree">
                        <span class="stages__stagesInfo__stageATE__duree__span">Durée</span> de 8 semaines minimum
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
                        <span class="stages__stagesInfo__stageFE__date__span">Débute le</span> 21 mars 2022
                    </p>
                    <p class="stages__stagesInfo__stageFE__duree">
                        <span class="stages__stagesInfo__stageFE__duree__span">Durée</span> de 8 semaines
                    </p>
                </div>
            </div>
        </div>
        <div class="stages__employeurs">
            <h2 class="stages__employeurs__titre">Employeurs</h2>
            <div class="stages__employeurs__texte">
                <p class="stages__employeurs__texte__01">Les stages rémunérés sont admissibles à des crédits d’impôt avantageux.</p>
                <p class="stages__employeurs__texte__02">Consultez le <span class="stages__employeurs__texte__span">profil des compétences des étudiants</span> pour déterminer le stage à offrir.</p>
            </div>
        </div>
        <div class="stages__contactezPascal">
            <div class="stages__contactezPascal__infos">
                <p class="stages__contactezPascal__infos__texte">Contactez Pascal Larose pour en savoir plus.</p>
                <p class="stages__contactezPascal__infos__telephone">Téléphone : <span class="stages__contactezPascal__infos__telephone__span">(418) 659-6600 poste 6653</span></p>
            </div>
            <a class="stages__contactezPascal__boutonPascal boutonBleu" href="#">Écris à Pascal Larrose</a>
        </div>
        <div class="boutonHautPage">
            <a class="boutonHautPage__bouton fa fa-arrow-up" href="#top"></a>
        </div>
    </div>
</main>

<?php get_footer(); ?>
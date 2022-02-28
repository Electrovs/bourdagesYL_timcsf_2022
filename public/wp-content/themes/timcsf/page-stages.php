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
        <h1 class="stages__titre"><?php echo get_post(122)->titre?></h1>
        <p class="stages__texteIntro">
            <?php echo get_post(122)->texte?>
        </p>
        <div class="stages__stagesInfo">
            <div class="stages__stagesInfo__stageATE">
                <h2 class="stages__stagesInfo__stageATE__titre"><?php echo get_post(119)->titre?></h2>
                <?php echo get_post(119)->texte?>
            </div>
            <div class="stages__stagesInfo__stageFE">
                <h2 class="stages__stagesInfo__stageFE__titre"><?php echo get_post(835)->titre?></h2>
                <?php echo get_post(835)->texte?>
            </div>
        </div>
        <div class="stages__employeurs">
            <h2 class="stages__employeurs__titre"><?php echo get_post(836)->titre?></h2>
            <div class="stages__employeurs__texte">
                <?php echo get_post(836)->texte?>
            </div>
        </div>
        <div class="stages__contactezPascal">
            <div class="stages__contactezPascal__infos">
                <?php echo get_post(837)->texte?>
            </div>
            <a class="stages__contactezPascal__boutonPascal boutonBleu" href="#"><?php echo get_post(837)->titre?></a>
        </div>
        <div class="boutonHautPage">
            <a class="boutonHautPage__bouton fa fa-arrow-up" href="#top"></a>
        </div>
    </div>
</main>

<?php get_footer(); ?>
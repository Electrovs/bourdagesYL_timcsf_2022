<?php get_header();

/*Template name: 3e Année*/

echo "page-3eAnnee.php";

if(is_active_sidebar("gauche")){?>
    <aside id="gauche" class="barregauche">
        <?php get_sidebar("gauche")?>
    </aside>
<?php } ?>

    <main class="page">
        <?php the_post();?>
        <div class="entetePage">
            <h2><?php the_title()?></h2>
        </div>
        <p>
            <?php the_content();?>
        </p>
    </main>


<?php
if(is_active_sidebar("droite")){?>
    <aside id="droite" class="barredroite">
        <?php get_sidebar("droite")?>
    </aside>
<?php } ?>

<?php get_footer(); ?>
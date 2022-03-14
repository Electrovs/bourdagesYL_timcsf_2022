<?php get_header();
//echo "404.php"; ?>

    <main class="page">
        <div class="conteneur">
            <h2>Erreur 404! Oups! la page demandée n'existe pas!</h2>

        <img src="<?php echo get_template_directory_uri();?>/liaisons/images/point_exclamation.png" alt="Erreur 404!">

        <p>
            On as-tu mal nommé quelque chose?
        </p>
        </div>
    </main>

<?php get_footer();?>
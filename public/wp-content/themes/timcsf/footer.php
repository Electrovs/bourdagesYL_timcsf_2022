<footer class="footer">
    <div class="conteneur conteneurFooter">
        <div class="footer__flex__top">
            <div class="footer__logo__TIM"><a href="<?php echo get_permalink(14)?>" class="footer__logo__TIM__lien"><?php echo get_post(476)->titre?></a></div>
            <a class="footer__bouton boutonInscrit" href="<?php echo get_post(470)->texte?>"><?php echo get_post(470)->titre?></a>
            <div class="footer__media">
                <a href="<?php echo get_post(126)->texte?>" class="footer__media__bouton fa fa-facebook"></a>
                <a href="<?php echo get_post(127)->texte?>" class="footer__media__bouton fa fa-twitter"></a>
                <a href="<?php echo get_post(128)->texte?>" class="footer__media__bouton fa fa-linkedin"></a>
                <a href="<?php echo get_post(148)->texte?>" class="footer__media__bouton fa fa-instagram"></a>
            </div>
        </div>
        <div class="footer__flex__bottom">
            <div class="footer__logo__CSF"><a href="<?php echo get_post(124)->texte?>" class="footer__logo__CSF__lien"></a></div>
            <div class="footer__copyright">
                <small class="footer__copyright__small__01"><?php echo get_post(471)->titre?></small>
                <small class="footer__copyright__small__02"><?php echo get_post(471)->texte?></small>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer();?>

<script src="<?php echo get_template_directory_uri();?>/liaisons/js/menuwp.js"></script>
<script>
    //ajout de la classe js, pour la gestion de la feuille de style, si le JavaScript est actif
    document.body.classList.add('js');
</script>
</body>
</html>
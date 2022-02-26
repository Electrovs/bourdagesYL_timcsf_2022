<?php get_header();

/*Template name: Contact*/

//echo "page-contact.php";

?>
    <div class="header__bandeau horsAccueil">
        <div class="header__bandeau__blockTitre">
            <h1 class="header__bandeau__blockTitre__titre"><?php echo get_post(468)->titre?></h1>
            <p class="header__bandeau__blockTitre__p"><?php echo get_post(468)->texte?></p>
        </div>
    </div>
</header>
<main class="contact">
    <div class="conteneur">
        <h1 class="contact__titre"><?php echo get_post(469)->titre?></h1>
        <div class="contact__responsables">
            <?php
            $args = array(
                'post_type' => 'responsables',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'order_by' => 'post_date',
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
                    <div class="contact__responsables__responsable">
                        <img
                                class="contact__responsables__responsable__image"
                                src="<?php echo $photo["sizes"]["large"]; ?>"
                                alt="<?php echo get_field("prenom"); ?> <?php echo get_field("nom"); ?>"
                        >
                        <h2 class="contact__responsables__responsable__nom"><?php echo get_field("prenom");?> <?php echo get_field("nom");?></h2>
                        <p class="contact__responsables__responsable__poste"><?php echo get_field("responsabilite");?></p>
                        <h3 class="contact__responsables__responsable__titreTelephone">Téléphone</h3>
                        <p class="contact__responsables__responsable__numeroTelephone"><?php echo get_field("telephone");?></p>
                    </div>
                <?php }
            } ?>
        </div>
        <form class="contact__formulaire">
            <div class="contact__formulaire__groupInput">
                <label for="prenom" class="contact__formulaire__label">Prénom</label>
                <input name="prenom" id="prenom" type="text" class="contact__formulaire__input" required>
                <div class="contact__formulaire__erreur">
                    <i class="contact__formulaire__erreur__icon">icon Warning</i>
                    <p class="contact__formulaire__erreur__p">Entrez votre prénom complet</p>
                </div>
            </div>
            <div class="contact__formulaire__groupInput">
                <label for="nom" class="contact__formulaire__label">Nom</label>
                <input name="nom" id="nom" type="text" class="contact__formulaire__input" required>
                <div class="contact__formulaire__erreur">
                    <i class="contact__formulaire__erreur__icon">icon Warning</i>
                    <p class="contact__formulaire__erreur__p">Entrez votre nom complet</p>
                </div>
            </div>
            <div class="contact__formulaire__groupInput">
                <label for="courriel" class="contact__formulaire__label">Courriel</label>
                <input name="courriel" id="courriel" type="email" class="contact__formulaire__input" required>
                <div class="contact__formulaire__erreur">
                    <i class="contact__formulaire__erreur__icon">icon Warning</i>
                    <p class="contact__formulaire__erreur__p">Entrez un adresse courriel valide.</p>
                </div>
            </div>
            <div class="contact__formulaire__groupInput">
                <label for="destinataire" class="contact__formulaire__label">Destinataire</label>
                <select name="destinataire" id="destinataire" class="contact__formulaire__input" required>
                    <option disabled selected>Choisir un destinataire</option>
                    <option value="<?php echo get_post(411)->prenom?>"><?php echo get_post(411)->prenom?> <?php echo get_post(411)->nom?>(<?php echo get_post(411)->responsabilite?>)</option>
                    <option value="<?php echo get_post(412)->prenom?>"><?php echo get_post(412)->prenom?> <?php echo get_post(412)->nom?>(<?php echo get_post(412)->responsabilite?>)</option>
                    <option value="<?php echo get_post(413)->prenom?>"><?php echo get_post(413)->prenom?> <?php echo get_post(413)->nom?>(<?php echo get_post(413)->responsabilite?>)</option>
                    <option value="<?php echo get_post(414)->prenom?>"><?php echo get_post(414)->prenom?> <?php echo get_post(414)->nom?>(<?php echo get_post(414)->responsabilite?>)</option>
                </select>
                <div class="contact__formulaire__erreur">
                    <i class="contact__formulaire__erreur__icon">icon Warning</i>
                    <p class="contact__formulaire__erreur__p">Sélectionnez un destinataire.</p>
                </div>
            </div>
            <div class="contact__formulaire__groupInput">
                <label for="telephone" class="contact__formulaire__label">Téléphone</label>
                <p class="contact__formulaire__exemple">Ex:123-456-7890</p>
                <input name="telephone" id="telephone" type="tel" class="contact__formulaire__input" pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$" required>
                <div class="contact__formulaire__erreur">
                    <i class="contact__formulaire__erreur__icon">icon Warning</i>
                    <p class="contact__formulaire__erreur__p">Entrez votre numéro de téléphone au format 123-456-7890.</p>
                </div>
                <div class="contact__formulaire__autorisation">
                    <input class="contact__formulaire__input__checkbox" type="checkbox" name="autorisation" id="autorisation">
                    <label class="contact__formulaire__label__labelCheckbox" for="autorisation">Autoriser le partage de votre numéro avec un étudiant-guide.</label>
                </div>
            </div>
            <div class="contact__formulaire__groupInput">
                <label for="sujet" class="contact__formulaire__label">Sujet</label>
                <input name="sujet" id="sujet" type="text" class="contact__formulaire__input" required>
                <div class="contact__formulaire__erreur">
                    <i class="contact__formulaire__erreur__icon">icon Warning</i>
                    <p class="contact__formulaire__erreur__p">Entrez le sujet du courriel.</p>
                </div>
            </div>
            <div class="contact__formulaire__groupInput">
                <label for="message" class="contact__formulaire__label">Message</label>
                <textarea name="message" id="message" class="contact__formulaire__input__message" required></textarea>
                <div class="contact__formulaire__erreur">
                    <i class="contact__formulaire__erreur__icon">icon Warning</i>
                    <p class="contact__formulaire__erreur__p">Votre message est absent.</p>
                </div>
            </div>
            <div class="contact__forrmulaire__captcha">Captcha</div>
            <button class="contact__formulaire__bouton boutonBleu" type="submit">Envoyer</button>
        </form>
        <div class="boutonHautPage">
            <a class="boutonHautPage__bouton fa fa-arrow-up" href="#top"></a>
        </div>
    </div>
</main>

<?php get_footer(); ?>
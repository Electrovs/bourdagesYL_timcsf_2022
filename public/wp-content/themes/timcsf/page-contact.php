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
        <form class="contact__formulaire" id="form" method="POST" novalidate>
            <div class="contact__formulaire__groupInput" id="divPrenom">
                <label for="prenom" class="contact__formulaire__label">Prénom</label>
                <input name="prenom" id="prenom" type="text" class="contact__formulaire__input" required aria-describedby="erreur_prenom"  pattern="^[-a-zA-Zàâçéèêëîïôûùüÿñæœ ]+$">
                <div class="contact__formulaire__erreur" id="erreur_prenom">
                    <i class="contact__formulaire__erreur__icon fa fa-exclamation-circle"></i>
                    <p class="contact__formulaire__erreur__p"></p>
                </div>
            </div>
            <div class="contact__formulaire__groupInput">
                <label for="nom" class="contact__formulaire__label">Nom</label>
                <input name="nom" id="nom" type="text" class="contact__formulaire__input" required aria-describedby="erreur_nom"  pattern="^[-a-zA-Zàâçéèêëîïôûùüÿñæœ ]+$">
                <div class="contact__formulaire__erreur" id="erreur_nom">
                    <i class="contact__formulaire__erreur__icon fa fa-exclamation-circle"></i>
                    <p class="contact__formulaire__erreur__p"></p>
                </div>
            </div>
            <div class="contact__formulaire__groupInput">
                <label for="courriel" class="contact__formulaire__label">Courriel</label>
                <input name="courriel" id="courriel" type="email" class="contact__formulaire__input" required aria-describedby="erreur_courriel"  pattern="^[a-zA-Z0-9][a-zA-Z0-9_-]+([.][a-zA-Z0-9_-]+)*[@][a-zA-Z0-9_-]+([.][a-zA-Z0-9_-]+)*[.][a-zA-Z]{2,}$">
                <div class="contact__formulaire__erreur" id="erreur_courriel">
                    <i class="contact__formulaire__erreur__icon fa fa-exclamation-circle"></i>
                    <p class="contact__formulaire__erreur__p">Entrez un adresse courriel valide.</p>
                </div>
            </div>
            <div class="contact__formulaire__groupInput">
                <label for="destinataire" class="contact__formulaire__label">Destinataire</label>
                <?php
                if (isset($_GET["idResponsable"])){
                    if($_GET["idResponsable"] == 1) { ?>
                        <select name="destinataire" id="destinataire" class="contact__formulaire__input" required>
                            <option value="" disabled >Choisir un destinataire</option>
                            <option value="1" selected><?php echo get_post(411)->prenom?> <?php echo get_post(411)->nom?>(<?php echo get_post(411)->responsabilite?>)</option>
                            <option value="2"><?php echo get_post(412)->prenom?> <?php echo get_post(412)->nom?>(<?php echo get_post(412)->responsabilite?>)</option>
                            <option value="3"><?php echo get_post(413)->prenom?> <?php echo get_post(413)->nom?>(<?php echo get_post(413)->responsabilite?>)</option>
                            <option value="4"><?php echo get_post(414)->prenom?> <?php echo get_post(414)->nom?>(<?php echo get_post(414)->responsabilite?>)</option>
                        </select>
                   <?php } elseif ($_GET["idResponsable"] == 2) { ?>
                        <select name="destinataire" id="destinataire" class="contact__formulaire__input" required>
                            <option value="" disabled >Choisir un destinataire</option>
                            <option value="1"><?php echo get_post(411)->prenom?> <?php echo get_post(411)->nom?>(<?php echo get_post(411)->responsabilite?>)</option>
                            <option value="2" selected><?php echo get_post(412)->prenom?> <?php echo get_post(412)->nom?>(<?php echo get_post(412)->responsabilite?>)</option>
                            <option value="3"><?php echo get_post(413)->prenom?> <?php echo get_post(413)->nom?>(<?php echo get_post(413)->responsabilite?>)</option>
                            <option value="4"><?php echo get_post(414)->prenom?> <?php echo get_post(414)->nom?>(<?php echo get_post(414)->responsabilite?>)</option>
                        </select>
                    <?php } elseif ($_GET["idResponsable"] == 3) { ?>
                        <select name="destinataire" id="destinataire" class="contact__formulaire__input" required>
                            <option value="" disabled >Choisir un destinataire</option>
                            <option value="1"><?php echo get_post(411)->prenom?> <?php echo get_post(411)->nom?>(<?php echo get_post(411)->responsabilite?>)</option>
                            <option value="2"><?php echo get_post(412)->prenom?> <?php echo get_post(412)->nom?>(<?php echo get_post(412)->responsabilite?>)</option>
                            <option value="3" selected><?php echo get_post(413)->prenom?> <?php echo get_post(413)->nom?>(<?php echo get_post(413)->responsabilite?>)</option>
                            <option value="4"><?php echo get_post(414)->prenom?> <?php echo get_post(414)->nom?>(<?php echo get_post(414)->responsabilite?>)</option>
                        </select>
                    <?php } elseif ($_GET["idResponsable"] == 4) { ?>
                        <select name="destinataire" id="destinataire" class="contact__formulaire__input" required>
                            <option value="" disabled >Choisir un destinataire</option>
                            <option value="1"><?php echo get_post(411)->prenom?> <?php echo get_post(411)->nom?>(<?php echo get_post(411)->responsabilite?>)</option>
                            <option value="2"><?php echo get_post(412)->prenom?> <?php echo get_post(412)->nom?>(<?php echo get_post(412)->responsabilite?>)</option>
                            <option value="3"><?php echo get_post(413)->prenom?> <?php echo get_post(413)->nom?>(<?php echo get_post(413)->responsabilite?>)</option>
                            <option value="4" selected><?php echo get_post(414)->prenom?> <?php echo get_post(414)->nom?>(<?php echo get_post(414)->responsabilite?>)</option>
                        </select>
                    <?php } ?>
                <?php }else{ ?>
                    <select name="destinataire" id="destinataire" class="contact__formulaire__input" required>
                        <option value="" disabled selected>Choisir un destinataire</option>
                        <option value="1"><?php echo get_post(411)->prenom?> <?php echo get_post(411)->nom?>(<?php echo get_post(411)->responsabilite?>)</option>
                        <option value="2"><?php echo get_post(412)->prenom?> <?php echo get_post(412)->nom?>(<?php echo get_post(412)->responsabilite?>)</option>
                        <option value="3"><?php echo get_post(413)->prenom?> <?php echo get_post(413)->nom?>(<?php echo get_post(413)->responsabilite?>)</option>
                        <option value="4"><?php echo get_post(414)->prenom?> <?php echo get_post(414)->nom?>(<?php echo get_post(414)->responsabilite?>)</option>
                    </select>
                <?php } ?>
                <div class="contact__formulaire__erreur" id="erreur_destinataire">
                    <i class="contact__formulaire__erreur__icon fa fa-exclamation-circle"></i>
                    <p class="contact__formulaire__erreur__p">Sélectionnez un destinataire.</p>
                </div>
            </div>
            <div class="contact__formulaire__groupInput telephone">
                <label for="telephone" class="contact__formulaire__label">Téléphone</label>
                <p class="contact__formulaire__exemple">Ex:123-456-7890</p>
                <input name="telephone" id="telephone" type="tel" class="contact__formulaire__input" required aria-describedby="erreur_telephone"  pattern="^[1-9]\d{2}-\d{3}-\d{4}$">
                <div class="contact__formulaire__erreur" id="erreur_telephone">
                    <i class="contact__formulaire__erreur__icon fa fa-exclamation-circle"></i>
                    <p class="contact__formulaire__erreur__p">Entrez votre numéro de téléphone au format 123-456-7890.</p>
                </div>
                <div class="contact__formulaire__autorisation">
                    <input class="contact__formulaire__input__checkbox" type="checkbox" name="autorisation" id="autorisation">
                    <label class="contact__formulaire__label__labelCheckbox" for="autorisation">Autoriser le partage de votre numéro avec un étudiant-guide.</label>
                </div>
            </div>
            <div class="contact__formulaire__groupInput">
                <label for="sujet" class="contact__formulaire__label">Sujet</label>
                <input name="sujet" id="sujet" type="text" class="contact__formulaire__input" required aria-describedby="erreur_sujet"  pattern="^[a-zA-Z0-9_.!@#$%^&*()?-]+$">
                <div class="contact__formulaire__erreur" id="erreur_sujet">
                    <i class="contact__formulaire__erreur__icon fa fa-exclamation-circle"></i>
                    <p class="contact__formulaire__erreur__p">Entrez le sujet du courriel.</p>
                </div>
            </div>
            <div class="contact__formulaire__groupInput">
                <label for="message" class="contact__formulaire__label">Message</label>
                <textarea name="message" id="message" class="contact__formulaire__input__message" required aria-describedby="erreur_message"></textarea>
                <div class="contact__formulaire__erreur" id="erreur_message">
                    <i class="contact__formulaire__erreur__icon fa fa-exclamation-circle"></i>
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
    <script src="<?php echo get_template_directory_uri();?>/liaisons/js/validationFormulaire.js"></script>
<?php get_footer(); ?>
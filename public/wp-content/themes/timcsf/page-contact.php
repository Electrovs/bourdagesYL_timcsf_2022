<?php get_header();

/*Template name: Contact*/

echo "page-contact.php";

if(is_active_sidebar("gauche")){?>
    <aside id="gauche" class="barregauche">
        <?php get_sidebar("gauche")?>
    </aside>
<?php } ?>
</header>
<main class="contact">
    <div class="conteneur">
        <h1 class="contact__titre">Nous joindre</h1>
        <div class="contact__responsables">
            <div class="contact__responsables__responsable">
                <img
                        class="contact__responsables__responsable__image"
                        src="https://via.placeholder.com/235x235"
                        alt="photo d'un responsable"
                >
                <h2 class="contact__responsables__responsable__nom">Sylvain Lamoureux</h2>
                <p class="contact__responsables__responsable__poste">Coordonnateur départemental</p>
                <h3 class="contact__responsables__responsable__titreTelephone">Téléphone</h3>
                <p class="contact__responsables__responsable__numeroTelephone">(418)-659-6600 poste 6662</p>
            </div>
            <div class="contact__responsables__responsable">
                <img
                        class="contact__responsables__responsable__image"
                        src="https://via.placeholder.com/235x235"
                        alt="photo d'un responsable"
                >
                <h2 class="contact__responsables__responsable__nom">Sylvain Lamoureux</h2>
                <p class="contact__responsables__responsable__poste">Coordonnateur départemental</p>
                <h3 class="contact__responsables__responsable__titreTelephone">Téléphone</h3>
                <p class="contact__responsables__responsable__numeroTelephone">(418)-659-6600 poste 6662</p>
            </div>
            <div class="contact__responsables__responsable">
                <img
                        class="contact__responsables__responsable__image"
                        src="https://via.placeholder.com/235x235"
                        alt="photo d'un responsable"
                >
                <h2 class="contact__responsables__responsable__nom">Sylvain Lamoureux</h2>
                <p class="contact__responsables__responsable__poste">Coordonnateur départemental</p>
                <h3 class="contact__responsables__responsable__titreTelephone">Téléphone</h3>
                <p class="contact__responsables__responsable__numeroTelephone">(418)-659-6600 poste 6662</p>
            </div>
            <div class="contact__responsables__responsable">
                <img
                        class="contact__responsables__responsable__image"
                        src="https://via.placeholder.com/235x235"
                        alt="photo d'un responsable"
                >
                <h2 class="contact__responsables__responsable__nom">Sylvain Lamoureux</h2>
                <p class="contact__responsables__responsable__poste">Coordonnateur départemental</p>
                <h3 class="contact__responsables__responsable__titreTelephone">Téléphone</h3>
                <p class="contact__responsables__responsable__numeroTelephone">(418)-659-6600 poste 6662</p>
            </div>
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
                    <option value="sylvain">Sylvain Lamoureux (Coordonnateur départemental)</option>
                    <option value="michel">Michel RRrouleau (Webmestre)</option>
                    <option value="pascal">Pascal Larose (Responsable des stages)</option>
                    <option value="benoit">Benoît Frigon (Responsable "Étudiant d'un jour")</option>
                </select>
                <div class="contact__formulaire__erreur">
                    <i class="contact__formulaire__erreur__icon">icon Warning</i>
                    <p class="contact__formulaire__erreur__p">Sélectionnez un destinataire.</p>
                </div>
            </div>
            <div class="contact__formulaire__groupInput">
                <label for="telephone" class="contact__formulaire__label">Téléphone</label>
                <p class="contact__formulaire__exemple">123-456-7890</p>
                <input name="telephone" id="telephone" type="tel" class="contact__formulaire__input" pattern="^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$" required>
                <div class="contact__formulaire__erreur">
                    <i class="contact__formulaire__erreur__icon">icon Warning</i>
                    <p class="contact__formulaire__erreur__p">Entrez votre numéro de téléphone au format 123-456-7890.</p>
                </div>
                <input class="contact__formulaire__autorisation" type="checkbox" name="autorisation" id="autorisation">
                <label for="autorisation">Autoriser le partage de votre numéro avec un étudiant-guide.</label>
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
                <textarea name="message" id="message" class="contact__formulaire__input" required></textarea>
                <div class="contact__formulaire__erreur">
                    <i class="contact__formulaire__erreur__icon">icon Warning</i>
                    <p class="contact__formulaire__erreur__p">Votre message est absent.</p>
                </div>
            </div>
            <div class="contact__forrmulaire__captcha">Captcha</div>
            <button type="submit">Envoyer</button>
        </form>
    </div>
</main>


<?php
if(is_active_sidebar("droite")){?>
    <aside id="droite" class="barredroite">
        <?php get_sidebar("droite")?>
    </aside>
<?php } ?>

<?php get_footer(); ?>
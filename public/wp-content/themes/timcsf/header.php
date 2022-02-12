<!doctype>
<html <?php language_attributes();?>>
<head>
    <title><?php bloginfo("name");
        if(is_home() || is_front_page()){ ?>
            | <?php bloginfo("description");
        } else { ?>
            | <?php wp_title("", true);
        }?>
    </title>
    <meta charset="<?php bloginfo('charset');?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="Site Web de les TIM 2022">
    <meta name="keywords" content="HTML, CSS, JavaScript, programmation, intégration, conception, média, vidéo, animation">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/liaisons/css/styles.css"/>
    <?php wp_head();?>
</head>

<body>
<header class="header">
    <div class="header__top">
        <div class="conteneur">
            <div class="header__top__logo"><a href="http://localhost/timcsf_2022/public/" class="header__top__logo__lien">{TIM}</a></div>
            <nav class="menu menu-ferme">
                <ul class="menu__liste">
                    <li class="menu__item">
                        <a class="menu__lien">Réalisations</a>
                        <ul class="menu__sousListe">
                            <li class="menu__sousItem"><a href="http://localhost/timcsf_2022/public/realisations/" class="menu__sousLien">1re Année</a></li>
                            <li class="menu__sousItem"><a href="#" class="menu__sousLien">2e Année</a></li>
                            <li class="menu__sousItem"><a href="http://localhost/timcsf_2022/public/fiche-realisation/" class="menu__sousLien">3e Année</a></li>
                        </ul>
                    </li>
                    <li><a href="http://localhost/timcsf_2022/public/stages/" class="menu__sousLien">Stages</a></li>
                    <li><a href="http://localhost/timcsf_2022/public/nousjoindre/" class="menu__sousLien">Nous Joindre</a></li>
                </ul>
            </nav>
            <a class="header__bouton boutonInscrit" href="#">Je m'inscris</a>
            <div class="header__mobileHeader">
                <div class="header__mobileHeader__titre">
                    <h1 class="header__mobileHeader__titre__h1">TECHNIQUES D'INTÉGRATION MULTIMÉDIAS</h1>
                    <p class="header__mobileHeader__titre__p">WEB & APPS</p>
                </div>
                <i class="header__mobileHeader__icon">Icon ordinateur</i>
            </div>
        </div>
    </div>
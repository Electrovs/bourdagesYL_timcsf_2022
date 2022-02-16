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
    <?php echo get_post(477)->texte?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/liaisons/css/styles.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php wp_head();?>
</head>

<body>
<header class="header">
    <div class="header__top">
        <div class="conteneurHeader">
            <div class="header__top__logo"><a href="<?php echo get_permalink(14)?>" class="header__top__logo__lien"><?php echo get_post(476)->titre?></a></div>
            <?php if(has_nav_menu("principal")){?>
                <nav class="header__navigation">
                    <?php wp_nav_menu(array("theme_location"=>"principal"));?>
                </nav>
            <?php } ?>
            <a class="header__top__bouton boutonInscrit" href="<?php echo get_post(470)->texte?>"><?php echo get_post(470)->titre?></a>
        </div>
    </div>
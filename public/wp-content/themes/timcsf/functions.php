<?php


add_filter( "intermediate_image_sizes_advanced", "prefix_remove_default_images" );
function prefix_remove_default_images( $sizes ) {
    unset( $sizes["medium_large"]);
    unset( $sizes["1536x1536"]);
    return $sizes;
}

function my_jquery_enqueue() {
    wp_deregister_script( 'jquery' );
}

add_action( 'wp_enqueue_scripts', 'my_jquery_enqueue' );



function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
}
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );



add_action( 'wp_print_styles',     'my_deregister_styles', 100 );

function my_deregister_styles()    {
    //wp_deregister_style( 'amethyst-dashicons-style' );
    wp_deregister_style( 'dashicons' );


}




if (function_exists("register_sidebar")){
    $args = array(
        "name"=> __("Ma barre latérale", "theme_text_domain"),
        "id"=> "unique-sidebar-id",
        "description"=>"Emplacement de gauche de widgets",
        "class"=> "",
        "before_widget"=> '<li id="%1$s" class="widget %2$s">',
        "after_widget"=> '</li>',
        "before_title" => '<h2 class="widgettitle">',
        "after_title"=> '</h2>',
    );
    register_sidebar($args);
}

if (function_exists('register_nav_menus')) {
    register_nav_menus(
        array(
            'principal'=>'Menu principal'
        )
    );
}
?>

<?php
//**************************************************à mettre dans le fichier functions.php
//Déclaration du type d'article personnalisé des cours****************************
function tim_cour_custom_post() {

    //On rentre les différentes dénominations de notre article personnalisé type
    //qui seront affichées dans l'interface administrative...
    $labels = array(
        // Le nom au pluriel
        'name'                => _x( 'Cours de la TIM', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x( 'Cours', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __( 'Cours'),
        //Les différents libellés de l'interface administrative
        'all_items'           => __( 'Tous les cours'),
        'view_item'           => __( 'Voir les cours'),
        'add_new_item'        => __( 'Ajouter un nouveau cour'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer un cour'),
        'update_item'         => __( 'Modifier un cour'),
        'search_items'        => __( 'Rechercher un cour'),
        'not_found'           => __( 'Non trouvé'),
        'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
    );

    //On peut définir ici d'autres options pour notre type d'article personnalisé
    $args = array(
        'label'               => __( 'Les cours'),
        'description'         => __( 'Tous sur les cours'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail'),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'cours'),
    );

    // On enregistre notre type d'article personnalisé qu'on nomme ici "responsables" et ses arguments
    register_post_type( 'cours', $args );
}

add_action( 'init', 'tim_cour_custom_post', 0 );
//***************************************************************************************************
?>

<?php
//**************************************************à mettre dans le fichier functions.php
//Déclaration du type d'article personnalisé des diplôme****************************
function tim_diplome_custom_post() {

    //On rentre les différentes dénominations de notre article personnalisé type
    //qui seront affichées dans l'interface administrative...
    $labels = array(
        // Le nom au pluriel
        'name'                => _x( 'Diplômés de la TIM', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x( 'Diplômés', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __( 'Diplômés'),
        //Les différents libellés de l'interface administrative
        'all_items'           => __( 'Tous les diplômés'),
        'view_item'           => __( 'Voir les diplômés'),
        'add_new_item'        => __( 'Ajouter un nouveau diplômé'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer un diplômé'),
        'update_item'         => __( 'Modifier un diplômé'),
        'search_items'        => __( 'Rechercher un diplômé'),
        'not_found'           => __( 'Non trouvé'),
        'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
    );

    //On peut définir ici d'autres options pour notre type d'article personnalisé
    $args = array(
        'label'               => __( 'Les diplômés'),
        'description'         => __( 'Tous sur les diplômés'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail'),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'diplomes'),
    );

    // On enregistre notre type d'article personnalisé qu'on nomme ici "responsables" et ses arguments
    register_post_type( 'diplômés', $args );
}

add_action( 'init', 'tim_diplome_custom_post', 0 );
//***************************************************************************************************
?>

<?php
//**************************************************à mettre dans le fichier functions.php
//Déclaration du type d'article personnalisé des faqTheme****************************
function tim_faq_custom_post() {

    //On rentre les différentes dénominations de notre article personnalisé type
    //qui seront affichées dans l'interface administrative...
    $labels = array(
        // Le nom au pluriel
        'name'                => _x( 'Faq de la TIM', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x( 'Faq', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __( 'Faq'),
        //Les différents libellés de l'interface administrative
        'all_items'           => __( 'Tous les faq'),
        'view_item'           => __( 'Voir les faq'),
        'add_new_item'        => __( 'Ajouter un nouveau faq'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer un faq'),
        'update_item'         => __( 'Modifier un faq'),
        'search_items'        => __( 'Rechercher un faq'),
        'not_found'           => __( 'Non trouvé'),
        'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
    );

    //On peut définir ici d'autres options pour notre type d'article personnalisé
    $args = array(
        'label'               => __( 'Les faq'),
        'description'         => __( 'Tous sur les faq'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail'),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'faq'),
    );

    // On enregistre notre type d'article personnalisé qu'on nomme ici "responsables" et ses arguments
    register_post_type( 'faq', $args );
}

add_action( 'init', 'tim_faq_custom_post', 0 );
//***************************************************************************************************
?>

<?php
//**************************************************à mettre dans le fichier functions.php
//Déclaration du type d'article personnalisé des faqTheme****************************
function tim_faqTheme_custom_post() {

    //On rentre les différentes dénominations de notre article personnalisé type
    //qui seront affichées dans l'interface administrative...
    $labels = array(
        // Le nom au pluriel
        'name'                => _x( 'FaqThemes de la TIM', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x( 'FaqThemes', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __( 'FaqThemes'),
        //Les différents libellés de l'interface administrative
        'all_items'           => __( 'Tous les faqThemes'),
        'view_item'           => __( 'Voir les faqThemes'),
        'add_new_item'        => __( 'Ajouter un nouveau faqTheme'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer un faqTheme'),
        'update_item'         => __( 'Modifier un faqTheme'),
        'search_items'        => __( 'Rechercher un faqTheme'),
        'not_found'           => __( 'Non trouvé'),
        'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
    );

    //On peut définir ici d'autres options pour notre type d'article personnalisé
    $args = array(
        'label'               => __( 'Les faqThemes'),
        'description'         => __( 'Tous sur les faqThemes'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail'),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'faqThemes'),
    );

    // On enregistre notre type d'article personnalisé qu'on nomme ici "responsables" et ses arguments
    register_post_type( 'faqThemes', $args );
}

add_action( 'init', 'tim_faqTheme_custom_post', 0 );
//***************************************************************************************************
?>

<?php
//**************************************************à mettre dans le fichier functions.php
//Déclaration du type d'article personnalisé des projets****************************
function tim_projet_custom_post() {

    //On rentre les différentes dénominations de notre article personnalisé type
    //qui seront affichées dans l'interface administrative...
    $labels = array(
        // Le nom au pluriel
        'name'                => _x( 'Projets de la TIM', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x( 'Projets', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __( 'Projets'),
        //Les différents libellés de l'interface administrative
        'all_items'           => __( 'Tous les projets'),
        'view_item'           => __( 'Voir les projets'),
        'add_new_item'        => __( 'Ajouter un nouveau projet'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer un projet'),
        'update_item'         => __( 'Modifier un projet'),
        'search_items'        => __( 'Rechercher un projet'),
        'not_found'           => __( 'Non trouvé'),
        'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
    );

    //On peut définir ici d'autres options pour notre type d'article personnalisé
    $args = array(
        'label'               => __( 'Les projets'),
        'description'         => __( 'Tous sur les projets'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail'),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'projets'),
    );

    // On enregistre notre type d'article personnalisé qu'on nomme ici "responsables" et ses arguments
    register_post_type( 'projets', $args );
}

add_action( 'init', 'tim_projet_custom_post', 0 );
//***************************************************************************************************
?>

<?php
//**************************************************à mettre dans le fichier functions.php
//Déclaration du type d'article personnalisé des responsables****************************
function tim_responsable_custom_post() {

    //On rentre les différentes dénominations de notre article personnalisé type
    //qui seront affichées dans l'interface administrative...
    $labels = array(
        // Le nom au pluriel
        'name'                => _x( 'Responsables de la TIM', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x( 'Responsables', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __( 'Responsables'),
        //Les différents libellés de l'interface administrative
        'all_items'           => __( 'Tous nos responsables'),
        'view_item'           => __( 'Voir nos responsables'),
        'add_new_item'        => __( 'Ajouter un nouveau responsable'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer un responsable'),
        'update_item'         => __( 'Modifier un responsable'),
        'search_items'        => __( 'Rechercher un responsable'),
        'not_found'           => __( 'Non trouvé'),
        'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
    );

    //On peut définir ici d'autres options pour notre type d'article personnalisé
    $args = array(
        'label'               => __( 'Nos responsables'),
        'description'         => __( 'Tous sur nos responsables'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail'),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'responsables'),
    );

    // On enregistre notre type d'article personnalisé qu'on nomme ici "responsables" et ses arguments
    register_post_type( 'responsables', $args );
}

add_action( 'init', 'tim_responsable_custom_post', 0 );
//***************************************************************************************************
?>

<?php
//**************************************************à mettre dans le fichier functions.php
//Déclaration du type d'article personnalisé des témoignages****************************
function tim_temoignage_custom_post() {

    //On rentre les différentes dénominations de notre article personnalisé type
    //qui seront affichées dans l'interface administrative...
    $labels = array(
        // Le nom au pluriel
        'name'                => _x( 'Témoignages de la TIM', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x( 'Témoignages', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __( 'Témoignages'),
        //Les différents libellés de l'interface administrative
        'all_items'           => __( 'Tous les témoignages'),
        'view_item'           => __( 'Voir les témoignages'),
        'add_new_item'        => __( 'Ajouter un nouveau témoignage'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer un témoignage'),
        'update_item'         => __( 'Modifier un témoignage'),
        'search_items'        => __( 'Rechercher un témoignage'),
        'not_found'           => __( 'Non trouvé'),
        'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
    );

    //On peut définir ici d'autres options pour notre type d'article personnalisé
    $args = array(
        'label'               => __( 'Les responsables'),
        'description'         => __( 'Tous sur les témoignages'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail'),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'temoignages'),
    );

    // On enregistre notre type d'article personnalisé qu'on nomme ici "responsables" et ses arguments
    register_post_type( 'témoignages', $args );
}

add_action( 'init', 'tim_temoignage_custom_post', 0 );
//***************************************************************************************************
?>

<?php
//**************************************************à mettre dans le fichier functions.php
//Déclaration du type d'article personnalisé des textes****************************
function tim_texte_custom_post() {

    //On rentre les différentes dénominations de notre article personnalisé type
    //qui seront affichées dans l'interface administrative...
    $labels = array(
        // Le nom au pluriel
        'name'                => _x( 'Textes de la TIM', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x( 'Textes', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __( 'Textes'),
        //Les différents libellés de l'interface administrative
        'all_items'           => __( 'Tous les textes'),
        'view_item'           => __( 'Voir les textes'),
        'add_new_item'        => __( 'Ajouter un nouveau texte'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer un texte'),
        'update_item'         => __( 'Modifier un texte'),
        'search_items'        => __( 'Rechercher un texte'),
        'not_found'           => __( 'Non trouvé'),
        'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
    );

    //On peut définir ici d'autres options pour notre type d'article personnalisé
    $args = array(
        'label'               => __( 'Les textes'),
        'description'         => __( 'Tous sur les textes'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail'),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'textes'),
    );

    // On enregistre notre type d'article personnalisé qu'on nomme ici "responsables" et ses arguments
    register_post_type( 'textes', $args );
}

add_action( 'init', 'tim_texte_custom_post', 0 );
//***************************************************************************************************
?>

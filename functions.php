<?php

require_once("options/apparence.php");


function cidw_4w4_enqueue(){
    // wp_enqueue_style('style_css', get_stylesheet_uri());
    wp_enqueue_style('cidw-4w4-le-style',
                    get_template_directory_uri() . '/style.css',
                    array(), filemtime(get_template_directory() . '/style.css'),
                    false);

    wp_enqueue_style('cidw-4w4-google-font', "https://fonts.googleapis.com/css2?family=Karla:wght@300&display=swap", false);

    wp_register_script('cidw-4w4-boite-modale',
                        get_template_directory_uri() . '/javascript/boite-modale.js',
                        array(), filemtime(get_template_directory() . '/javascript/boite-modale.js'),
                        true); // true pour intégrer le .js en bas du document

    wp_register_script('cidw-4w4-carrousel',
                        get_template_directory_uri() . '/javascript/carrousel.js',
                        array(), filemtime(get_template_directory() . '/javascript/carrousel.js'),
                        true); // true pour intégrer le .js en bas du document

    if(is_category('cours')){ // on se trouve dans la page de liste de cours
        wp_enqueue_script('cidw-4w4-boite-modale');
    }

    if(is_front_page()){ // si on se trouve dans la page d'acceuil
        wp_enqueue_script('cidw-4w4-carrousel');
    }
    
}

add_action("wp_enqueue_scripts", "cidw_4w4_enqueue");

/* -------------------------------------------------- Enregistré le menu */
function cidw_4w4_register_nav_menu(){
    register_nav_menus( array(
        'menu_principal' => __( 'Menu principal', 'cidw_4w4' ),
        'menu_footer'  => __( 'Menu footer', 'cidw_4w4' ),
        'footer_colonne'  => __( 'Menu footer colonne', 'cidw_4w4' ),
        'menu_cours'  => __( 'Menu cours', 'cidw_4w4' ),
        'menu_accueil'  => __( 'Menu accueil', 'cidw_4w4' )
    ) );
}
add_action( 'after_setup_theme', 'cidw_4w4_register_nav_menu', 0 );

/* ---------------------------------------------------- afficher une description de choix de menu */
/* Cette nouvelle version permet de ne pas avoir de warning */
function prefix_nav_description( $item_output, $item) {
    if ( !empty( $item->description ) ) {
        $item_output = str_replace( '</a>',
        '<span class="menu-item-description">' . '</span> <div class ="menu-item-icone"></div>' .  '</a>',
              $item_output );
    }
    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 3 );

/* ---------------------------------------------------------------------- filtré les choix du menu principal */
function cidw_4w4_filtre_choix_menu($obj_menu){
    //var_dump($obj_menu);
    foreach($obj_menu as $cle => $value)
    {
       // print_r($value);
       //$value->title = substr($value->title,0,7);
       $value->title = wp_trim_words($value->title,3,"...");
       // echo $value->title . '<br>';
    }
    return $obj_menu;
}
add_filter("wp_nav_menu_objects","cidw_4w4_filtre_choix_menu");
/* ____________________________________________________________________________________ add_theme_support()*/
function cidw_4w4_add_theme_support(){
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array(
    'height' => 100,
    'width'  => 100,
) );
}

add_action('after_setup_theme', 'cidw_4w4_add_theme_support');

/* ____________________________________________________________________________ Enregistrement des sidebars */
add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'entete_1',
            'name'          => __( 'Entête 1' ),
            'description'   => __( 'Ce sidebar s\'affiche dans l\'entete du site' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
        );

    register_sidebar(
        array(
            'id'            => 'footer_colonne_1',
            'name'          => __( 'Footer colonne 1' ),
            'description'   => __( 'Ce sidebar s\'affiche dans une colonne du pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'footer_colonne_2',
            'name'          => __( 'Footer colonne 2' ),
            'description'   => __( 'Ce sidebar s\'affiche dans une colonne du pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    
    register_sidebar(
        array(
            'id'            => 'footer_colonne_3',
            'name'          => __( 'Footer colonne 3' ),
            'description'   => __( 'Ce sidebar s\'affiche dans une colonne du pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'id'            => 'footer_ligne_1',
            'name'          => __( 'Footer ligne 1' ),
            'description'   => __( 'Ce sidebar s\'affiche dans une ligne du pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );

/**
     * $query contient la requête mysql qui permet d'extraire le contenu de la nouvelle page que l'on tente d'accéder
     * @param : WP_Query $query : Objet contenant 
     * @return l'objet WP_query $query
     */
    function cidw_4w4_pre_get_posts(WP_Query $query)
    {
        if (is_admin() 
        || !$query->is_main_query()
        || !$query->is_category(array('cours', 'web', 'jeu', 'design', 'utilitaire', 'video', 'creation-3d')))
        {
            return $query;
        }
        else {
            $ordre = get_query_var('ordre');
            $cle = get_query_var('cletri');
            $query->set('order',  $ordre);
            $query->set('orderby', $cle);

            $query->set('postperpage', '-1');
            return $query;
        }
    }


    // if (!is_admin() && is_main_query() && is_category(array('web','cours','design','video','utilitaire','creation-3d','jeu'))) 
    //     {
    //     //$ordre = get_query_var('ordre');
        // $query->set('posts_per_page', -1);
    //     // $query->set('orderby', $cle);
        // $query->set('orderby', 'title');
    //     // $query->set('order',  $ordre);
        // $query->set('order',  'ASC');
    //     // var_dump($query);
    //     // die();
    //     }
    
    function cidw_4w4_query_vars($params){
        $params[] = "cletri";
        $params[] = "ordre";
        //$params["cletri"] = "title";
        //var_dump($params); die();
        return $params;
    }
    add_action('pre_get_posts', 'cidw_4w4_pre_get_posts');
    // pre_get_posts est un hook qui marque l'instant se situant entre la création de requête $query et son exécution
    // pre_get_posts est notre dernière chance (oh noes!) de modifier la requête $query
    // IMPORTANT
    add_filter('query_vars', 'cidw_4w4_query_vars' );
    /**
     * Extraire le slug de la catégorie de l'URL
     * @param $tableau: liste des slugs de catégorie
     * @return string 
     */
     function trouve_la_categorie($tableau) {
         foreach($tableau as $cle) {
             if(is_category($cle)) return ($cle);
         }
     }


}
?>
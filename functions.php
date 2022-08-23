<?php


function register_my_menu()
{
    register_nav_menu('main', "Menu principal");
    register_nav_menu('footer', "Menu footer");
}
add_action('after_setup_theme', 'register_my_menu');

function wp_get_menu_array($current_menu)
{
    $menu_name = $current_menu;
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $array_menu = wp_get_nav_menu_items($menu->term_id);
    $menu = array();
    foreach ($array_menu as $m) {
        if (empty($m->menu_item_parent)) {
            $menu[$m->ID] = array();
            $menu[$m->ID]['ID']      =   $m->ID;
            $menu[$m->ID]['title']       =   $m->title;
            $menu[$m->ID]['url']         =   $m->url;
            $menu[$m->ID]['children']    =   array();
        }
    }
    $submenu = array();
    foreach ($array_menu as $m) {
        if ($m->menu_item_parent) {
            $submenu[$m->ID] = array();
            $submenu[$m->ID]['ID']       =   $m->ID;
            $submenu[$m->ID]['title']    =   $m->title;
            $submenu[$m->ID]['url']  =   $m->url;
            $menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
        }
    }
    return $menu;
}


function register_my_sidebars()
{
    register_sidebar(
        array(
            'name' => "Sidebar principale",
            'id' => 'main-sidebar',
            'description' => "La sidebar principale",
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>'
        )
    );

    register_sidebar(
        array(
            'name' => "Menu du footer",
            'id' => 'footer-menu',
            'description' => "La sidebar principale",
            'before_widget' => '<div id="%1$s" class="widget %2$s col-lg-4 mb-5">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="text-uppercase text-white mb-4">',
            'after_title'   => '</h4>'
        )
    );

    register_sidebar(
        array(
            'name' => "Réseaux sociaux",
            'id' => 'footer-socials',
            'description' => "La sidebar principale",
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h6 class="text-uppercase text-white mb-4">',
            'after_title'   => '</h6>'
        )
    );
    register_sidebar(
        array(
            'name' => "Contact infos",
            'id' => 'footer-contact',
            'description' => "La sidebar principale",
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="text-uppercase text-white mb-4">',
            'after_title'   => '</h4>'
        )
    );
}
add_action('widgets_init', 'register_my_sidebars');


function my_excerpt_length($length)
{
    return 20;
}
add_filter('excerpt_length', 'my_excerpt_length');

<?php
    function enqueue_theme_scripts(){
        wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), false, '1');
    };
    add_action( 'wp_enqueue_scripts', 'enqueue_theme_scripts' );

    register_nav_menus(
        array(
            'menu_header' =>'header', /* cria a primeira estrutura de menu */
            'footer_menu' =>'Footer',/*  Cria a segunda estrutura de menu */
        )
    );
?>


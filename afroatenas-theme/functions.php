<?php

function afroatenas_setup_theme(){
    $supports=
    [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ];

    add_theme_support( 'html5', $supports );

    //tittle dentro del head
    add_theme_support( 'title-tag' );

    //imagenes destacadas
    add_theme_support( 'post-thumbnauils' );

    //feed automatico
    add_theme_support( 'automatic-feed-links' );

    //anchura del contenido
    $GLOBALS['content_width']=1130;    
}
add_action( 'after_setup_theme', 'afroatenas_setup_theme');

function afroatenas_enqueque_scripts()
{
    //https://afroatenas.org/wp-content/themes/afroatenas-theme/style.css
    wp_enqueue_style( 'afroatenas-style',get_stylesheet_uri());    
}
add_action( 'wp_enqueue_scripts','afroatenas_enqueque_scripts');
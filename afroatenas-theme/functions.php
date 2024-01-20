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

function afroatenas_setup_widgets()
{
    register_sidebar( 
        [
            'id'=>'sidebar-widgets',
            'name'=> 'Sidebar Widgets',
            'description'=>'Drag widgets to this sidebar container',
            'before_widget'=>'<section id="%1$s" class="widget %2$s">',
            'after_widget'=>'</section>',
            'before_title'=>'<h4 class="widget-title h5">',
            'after_title'=>'</h4>'
        ]
        );

        register_sidebar( 
            [
                'id'=>'footer-widgets',
                'name'=> 'Footer Widgets',
                'description'=>'Drag widgets to this footer container',
                'before_widget'=>'<section id="%1$s" class="widget %2$s">',
                'after_widget'=>'</section>',
                'before_title'=>'<h4 class="widget-title h5">',
                'after_title'=>'</h4>'
            ]
            );
}
add_action('widgets_init','afroatenas_setup_widgets');
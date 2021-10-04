<?php

//Consultas reutilizables
require get_template_directory() . '/inc/queries.php';
require get_template_directory() . '/inc/shortcodes.php';

//Cuando el tema es activado
function gymfitness_setup() {

    //Habilitar imagenes destacadas
    add_theme_support('post-thumbnails');

    //Títulos SEO
    add_theme_support('title-tag');

    //Agregar imágenes de tamaño personalizado
    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('cajas', 400, 375, true);
    add_image_size('mediano', 700, 400, true);
    add_image_size('blog', 966, 644, true);
}
add_action('after_setup_theme', 'gymfitness_setup');

//Menús de navegación, agregar más utilizando el arreglo
function gymfitness_menus() {
    register_nav_menus(array(
        'menu-principal' => __('Menú Principal', 'gymfitness')
    ));
}
add_action('init', 'gymfitness_menus');

//Scripts y Styles
function gymfitness_scripts_styles() {

    //Normalize
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

    //SlickNav CSS
    wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.0');

    //LightBox CSS
    if(is_page('galeria')):
        wp_enqueue_style('lightboxCSS', get_template_directory_uri() . '/css/lightbox.min.css', array(), '2.11.3');
    endif;

    //Leaflet CSS
    if(is_page('contacto')):
        wp_enqueue_style('leafletCSS', 'https://unpkg.com/leaflet@1.7.1/dist/leaflet.css', array(), '1.7.1');
    endif;

    //Google fonts
    wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@400;700;900&family=Staatliches&display=swap', array(), '1.0.0');

    //La hoja de estilos principal
    wp_enqueue_style('style', get_stylesheet_uri('normalize', 'googleFont'), array(), '1.0.0');

    //SlickNav JS
    wp_enqueue_script('slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true);

    //LightBox JS
    if(is_page('galeria')):
        wp_enqueue_script('lightboxJS', get_template_directory_uri() . '/js/jquery.lightbox.min.js', array('jquery'), '2.11.3', true);
    endif;

    //Leaflet JS
    if(is_page('contacto')):
        wp_enqueue_script('leafletJS', 'https://unpkg.com/leaflet@1.7.1/dist/leaflet.js', array(), '1.7.1', true);
    endif;
    
    //Scripts
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'slicknavJS'), '1.0.0', true);
}    
add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');

//Definir zona de Widgets
function gymfitness_widgets() {
    register_sidebar( array(
        'name' => 'Sidebar 1',
        'id' => 'sidebar_1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center texto-primario">',
        'after_title' => '</h3>'
    ));
    register_sidebar( array(
        'name' => 'Sidebar 2',
        'id' => 'sidebar_2',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center texto-primario">',
        'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'gymfitness_widgets');

// Deshabilitar el manejo de widgets desde el editor de bloques de Gutenberg
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false', 100 );
 
// Deshabilitar el editor de bloques para el manejo de widgets
add_filter( 'use_widgets_block_editor', '__return_false' );

?>
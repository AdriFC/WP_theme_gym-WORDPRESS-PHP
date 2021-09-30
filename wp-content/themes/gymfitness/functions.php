<?php

//Consultas reutilizables
require get_template_directory() . '/inc/queries.php';

//Cuando el tema es activado
function gymfitness_setup() {

    //Habilitar imagenes destacadas
    add_theme_support('post-thumbnails');

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
    //Google fonts
    wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@400;700;900&family=Staatliches&display=swap', array(), '1.0.0');
    //La hoja de estilos principal
    wp_enqueue_style('style', get_stylesheet_uri('normalize', 'googleFont'), array(), '1.0.0');
    //SlickNav JS
    wp_enqueue_script('slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true);
    //Scripts
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'slicknavJS'), '1.0.0', true);
}    
add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');

?>
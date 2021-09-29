<?php

//Menús de navegación, agregar más utilizando el arreglo
function gymfitness_menus() {
    register_nav_menus(array(
        'menu-principal' => __('Menú Principal', 'gymfitness')
    ));
}
add_action('init', 'gymfitness_menus');

//Scripts y Styles
function gymfitness_scripts_styles() {
    //La hoja de estilos principal
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');

?>
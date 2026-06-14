<?php

/**
 * Chargement des styles et scripts du thème enfant Portfolio.
 *
 * On utilise get_stylesheet_directory_uri() (et non get_template_directory_uri())
 * pour que le style.css du thème ENFANT soit bien chargé depuis son propre dossier.
 */
function theme_enqueue_style()
{
  wp_enqueue_style(
    'theme-style',
    get_stylesheet_directory_uri() . '/style.css',
    array(),
    wp_get_theme()->get('Version')
  );

  wp_enqueue_script(
    'theme-scroll-top',
    get_stylesheet_directory_uri() . '/js/scroll-top.js',
    array(),
    wp_get_theme()->get('Version'),
    true
  );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_style');

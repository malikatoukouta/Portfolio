<?php

/**
 * Fonctions du thème enfant Portfolio.
 *
 * @package Portfolio
 */

if (! defined('ABSPATH')) {
  exit; // Empêche l'accès direct au fichier.
}

/**
 * Charge les fichiers de traduction du thème enfant.
 *
 * Les fichiers .mo/.pot sont attendus dans le dossier /languages.
 */
function portfolio_setup()
{
  load_child_theme_textdomain('portfolio', get_stylesheet_directory() . '/languages');
}
add_action('after_setup_theme', 'portfolio_setup');

/**
 * Charge les styles et scripts du thème enfant.
 *
 * On utilise get_stylesheet_directory_uri() (et non get_template_directory_uri())
 * pour que le style.css du thème ENFANT soit bien chargé depuis son propre dossier.
 */
function theme_enqueue_style()
{
  $version = wp_get_theme()->get('Version');

  wp_enqueue_style(
    'theme-style',
    get_stylesheet_directory_uri() . '/style.css',
    array(),
    $version
  );

  wp_enqueue_script(
    'theme-scroll-top',
    get_stylesheet_directory_uri() . '/js/scroll-top.js',
    array(),
    $version,
    true
  );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_style');

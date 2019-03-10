<?php

//TÍTULO
add_theme_support('title-tag');

// SCRIPTS
function scripts() {
	wp_enqueue_script('js-jquery', get_template_directory_uri() . '/scripts/jquery-3.2.1.js');
	wp_enqueue_script('js-bootstrap', get_template_directory_uri() . '/scripts/bootstrap.min.js');
	wp_enqueue_script('js-funcoes', get_template_directory_uri() . '/scripts/funcoes.js');
}

add_action('wp_enqueue_scripts', 'scripts');

// STYLES (CSS)
function styles() {
	wp_enqueue_style('css-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('css-default', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}

add_action('wp_enqueue_scripts', 'styles');

// BACKGROUND (ativa a opção no menu do tema)
add_custom_background();

// MENUS
function menus() {

  register_nav_menus(array(
		'primary'	=> __('Menu Único')
  ));

}

add_action('init', 'menus');

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'menu-item-ativo ';
  }
  return $classes;
}

// LOGOTIPO
function logotipo() {

	$defaults = array(
		'width'		=> 300,
		'height'	=> 100,
		'flex-height'	=> true,
		'flex-width'	=> true,
		'header-text'	=> array('site-title', 'site-description')
	);
	add_theme_support('custom-logo');
}

add_action('init', 'logotipo');

// REMOVE OS EMOJIS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

?>

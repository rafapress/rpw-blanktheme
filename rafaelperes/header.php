<?php
/*
 * Cabeçalho (header) do tema
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) : ?>
		<?php if ( get_theme_mod( 'site_favicon' ) ) : ?>
			<link rel="shortcut icon" href="<?php echo esc_url( get_theme_mod( 'site_favicon' ) ); ?>" />
		<?php endif; ?>
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php

	$id_logotipo = get_theme_mod('custom_logo');
	$imagem = wp_get_attachment_image_src($id_logotipo, 'full')[0];

?>

<header>

	<!--
	* DEV: LOGOTIPO
	* Usar o style.css para definir a posição ideal do mesmo
	 -->
	<div id="logotipo"><img src="<?php echo $imagem; ?>"></div>

	<!--
	* DEV: MENU
	* Usar o style.css para definir a posição e 'estilo' (fonte, cores, inline etc.) do mesmo
	 -->
	<div id="menu">
		<?php wp_nav_menu($args); ?>
	</div>

</header>

<div class="container-fluid">
	<div class="row">
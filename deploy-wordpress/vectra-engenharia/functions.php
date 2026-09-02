<?php
/**
 * Vectra Engenharia e Construcoes — funcoes do tema.
 *
 * @package Vectra
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'VECTRA_VERSION', '1.0.0' );
define( 'VECTRA_URI', get_template_directory_uri() );

/**
 * Suportes do tema.
 */
function vectra_setup() {
	load_theme_textdomain( 'vectra', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'custom-logo', array(
		'height'      => 64,
		'width'       => 280,
		'flex-height' => true,
		'flex-width'  => true,
	) );

	register_nav_menus( array(
		'principal' => __( 'Menu principal', 'vectra' ),
		'rodape'    => __( 'Menu do rodape', 'vectra' ),
	) );
}
add_action( 'after_setup_theme', 'vectra_setup' );

/**
 * CSS e JS.
 *
 * O motor de movimento e o app sao os mesmos arquivos do site estatico.
 * Ambos entram com `defer` — o motion.js depende do gate `data-motion`,
 * impresso no <head> pelo header.php.
 */
function vectra_assets() {
	wp_enqueue_style(
		'vectra-fonts',
		'https://fonts.googleapis.com/css2?family=Archivo:wght@300;500;700&family=IBM+Plex+Sans:wght@400;500&family=IBM+Plex+Mono:wght@400;500&display=swap',
		array(),
		null
	);

	// A folha real: css/styles.css. O style.css da raiz existe so pelo cabecalho.
	wp_enqueue_style(
		'vectra-main',
		VECTRA_URI . '/css/styles.css',
		array( 'vectra-fonts' ),
		VECTRA_VERSION
	);

	wp_enqueue_script( 'vectra-motion', VECTRA_URI . '/js/motion.js', array(), VECTRA_VERSION, true );
	wp_enqueue_script( 'vectra-app', VECTRA_URI . '/js/app.js', array(), VECTRA_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'vectra_assets' );

/**
 * Preconnect para o Google Fonts (o enqueue nao emite isso sozinho).
 */
function vectra_resource_hints( $hints, $relation ) {
	if ( 'preconnect' === $relation ) {
		$hints[] = array( 'href' => 'https://fonts.googleapis.com' );
		$hints[] = array( 'href' => 'https://fonts.gstatic.com', 'crossorigin' => 'anonymous' );
	}
	return $hints;
}
add_filter( 'wp_resource_hints', 'vectra_resource_hints', 10, 2 );

/**
 * Numero de WhatsApp e contatos, num lugar so.
 * Editaveis em Aparencia > Personalizar.
 */
function vectra_contato( $chave = '' ) {
	$dados = array(
		'whatsapp'      => get_theme_mod( 'vectra_whatsapp', '5541998292317' ),
		'tel_projetos'  => get_theme_mod( 'vectra_tel_projetos', '+5541998292317' ),
		'tel_obras'     => get_theme_mod( 'vectra_tel_obras', '+5541988665477' ),
		'endereco'      => get_theme_mod( 'vectra_endereco', 'Rua Saldanha Marinho, 1753' ),
		'bairro_cidade' => get_theme_mod( 'vectra_bairro', 'Bigorrilho, Curitiba/PR' ),
	);
	if ( $chave ) {
		return isset( $dados[ $chave ] ) ? $dados[ $chave ] : '';
	}
	return $dados;
}

/**
 * Campos no Personalizador.
 */
function vectra_customize( $wp_customize ) {
	$wp_customize->add_section( 'vectra_contato', array(
		'title'    => __( 'Contato Vectra', 'vectra' ),
		'priority' => 30,
	) );

	$campos = array(
		'vectra_whatsapp'      => array( __( 'WhatsApp (so digitos, com 55)', 'vectra' ), '5541998292317' ),
		'vectra_tel_projetos'  => array( __( 'Telefone — Projetos', 'vectra' ), '+5541998292317' ),
		'vectra_tel_obras'     => array( __( 'Telefone — Obras', 'vectra' ), '+5541988665477' ),
		'vectra_endereco'      => array( __( 'Endereco', 'vectra' ), 'Rua Saldanha Marinho, 1753' ),
		'vectra_bairro'        => array( __( 'Bairro e cidade', 'vectra' ), 'Bigorrilho, Curitiba/PR' ),
	);

	foreach ( $campos as $id => $cfg ) {
		$wp_customize->add_setting( $id, array(
			'default'           => $cfg[1],
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		) );
		$wp_customize->add_control( $id, array(
			'label'   => $cfg[0],
			'section' => 'vectra_contato',
			'type'    => 'text',
		) );
	}
}
add_action( 'customize_register', 'vectra_customize' );

/**
 * Link de uma pagina interna pelo slug.
 *
 * Cai para /<slug>/ quando a pagina ainda nao foi criada, para o rodape nunca
 * apontar para lugar nenhum durante a implantacao.
 *
 * @param string $slug Slug da pagina.
 * @return string URL.
 */
function vectra_link_pagina( $slug ) {
	$pagina = get_page_by_path( $slug );
	if ( $pagina ) {
		return get_permalink( $pagina );
	}
	return home_url( '/' . $slug . '/' );
}

/**
 * O site nao tem formulario e nao usa emoji: remove o script de emoji do WP
 * (peso morto) sem tocar em nada mais.
 */
function vectra_limpa_head() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'wp_generator' );
}
add_action( 'init', 'vectra_limpa_head' );

/**
 * Classe no <body> para as paginas internas herdarem o espacamento do doc.
 */
function vectra_body_class( $classes ) {
	if ( ! is_front_page() ) {
		$classes[] = 'vectra-interna';
	}
	return $classes;
}
add_filter( 'body_class', 'vectra_body_class' );

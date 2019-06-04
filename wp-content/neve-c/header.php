<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the page header div.
 *
 * @package Neve
 * @since   1.0.0
 */

$header_classes = apply_filters( 'nv_header_classes', 'header' );
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<script src="menu.js"></script>
	<link href="menu.css" rel="stylesheet" />
</head>

<body <?php body_class(); ?> <?php echo wp_kses( apply_filters( 'neve_body_data_attrs', '' ), array( '[class]' => true ) ); ?>>
<?php wp_body_open(); ?>
<div class="wrapper">
	<nav>
        <div class="float-panel" data-top="0" data-scroll="500">
            <div style="text-align:right;max-width:1360px;margin:0 auto;">
                <a href="#" style="float:left;">
                    <i class="fa fa-gg"></i>
                    <em style="font:bold 20px Verdana, Arial;letter-spacing:1px;">MENUCOOL</em>
                </a>
                <a href="#"><i class="fa fa-tint"></i> Free trial</a>
                <a href="#">Subscribe</a>
                <a href="#">Services</a>
                <a href="#"><i class="fa fa-search"></i></a>
            </div>
        </div>
    </nav>
	<?php do_action( 'neve_before_primary' ); ?>

	<main id="content" class="neve-main" role="main">

<?php
do_action( 'neve_after_primary_start' );


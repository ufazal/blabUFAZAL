<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage blueliner-responsive
 * @since blueliner 1.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Blueliner">
        <meta name="author" content="Blueliner">  
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>  

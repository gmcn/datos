<?php
/**
 * Template Name: News Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

<?php
//include(locate_template("inc/page-elements/header.php"));
?>

<div class="container-fluid content__wrapper">

<?php
include(locate_template("inc/page-news/parent-content.php"));
?>

</div>

<?php
include(locate_template("inc/page-news/loop.php"));
?>

<?php
//get_sidebar();
get_footer();

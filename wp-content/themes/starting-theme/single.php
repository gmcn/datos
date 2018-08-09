<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Starting_Theme
 */

get_header(); ?>

<?php
include(locate_template("inc/page-elements/header.php"));
?>

<div class="container-fluid content__wrapper">

<?php
include(locate_template("inc/page-news/content.php"));
//include(locate_template("inc/page-industry/child-loop.php"));
?>

</div>

<?php
//get_sidebar();
get_footer();

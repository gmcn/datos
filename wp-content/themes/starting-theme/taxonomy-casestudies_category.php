<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

<div class="container-fluid content__wrapper">

<?php
include(locate_template("inc/page-casestudies/parent-content.php"));
?>

</div>

<?php
include(locate_template("inc/page-casestudies/loop.php"));
?>

<?php
//get_sidebar();
get_footer();

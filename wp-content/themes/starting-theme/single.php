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
?>

</div>

<?php
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

if (strpos($url,'casestudies')) {
    include(locate_template("inc/page-casestudies/related.php"));
} else {
    include(locate_template("inc/page-news/related.php"));
}

?>

<?php
//get_sidebar();
get_footer();

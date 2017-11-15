<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package BetProp
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

    <!-- HEADER AND VALUE PROP SECTION -->

    <div class="grid_12 omega fullpage"
         style="background-image: linear-gradient(45deg, rgba(72,80,89,0.75) 0%, rgba(40,43,48,0.95) 100%), url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>">
        <?php require 'header-content.php' ?>
        <div class="container-small">
            <div class="grid_12 omega padding60">

                <h1 class="fade-in one"><?php echo get_the_title() ?></h1>
                <span class="fade-in one subhead"><?php get_the_subtitle(get_the_ID()) ?></span><br><br>
                <span class="fade-in one author">Written by <?php echo get_user_by('id', get_post()->post_author)->display_name ?></span>
                <a data-scroll href="#article" class="noul">
                    <div class="start-reading fade-in one">Start reading post</div>
                </a>

            </div> <!-- end grid 12 center -->

        </div> <!-- end container -->
    </div> <!-- end grid 12 bg valueprop -->


    <!-- white block -->

    <div class="grid_12">
        <a id="article"></a>
        <div class="container-small padding60 body-copy">
            <?php echo get_post()->post_content; ?>
        </div> <!-- end container-small -->
    </div>


    <div class="grid_12 cta nobottom">
        <div class="container-small">
            <div class="padding60">

                <h1>Join the smartest entrepreneurs by sending proposals the better way</h1>
                <h3>Beautiful, interactive proposals that 'wow' your clients, and win you more work at a higher
                    price.</h3>
                <a href="/signup" class="noul">
                    <div class="start-reading">Try it free</div>
                </a>

            </div> <!-- padding60 -->
        </div> <!-- container-small -->
    </div> <!-- grid 12 -->

<?php
$categoryObjectForThisPost = get_the_category()[0];
$categoryForPostQuerySlug = $categoryObjectForThisPost->slug;

require 'footer.php';
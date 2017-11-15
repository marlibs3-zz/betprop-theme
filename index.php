<?php
/**
 * Created by PhpStorm.
 * User: martabeveridge
 * Date: 12/11/2017
 * Time: 13:42
 */

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BetProp
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

    <!-- HEADER AND VALUE PROP SECTION -->

    <div class="grid_12 omega cta">
        <?php require 'header-content.php'; ?>
        <div class="container">
            <div class="grid_12 omega padding60" style="padding-top: 0">

                <h1 class="fade-in one">The largest proposal writing resource in the world</h1>
                <span class="fade-in one subhead">Detailed, step-by-step articles on all-things proposal writing.</span>

            </div> <!-- end grid 12 center -->

        </div> <!-- end container -->
    </div> <!-- end grid 12 bg valueprop -->

    <!-- LEFT COLUMN -->

    <div class="container">
        <div class="padding60">
            <?php

            // The Query
            $the_query = new WP_Query(['posts_per_page' => 1, 'order' => 'ASC']);

            // The Loop
            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    ?>

                    <div class="grid_8">
                        <a href="<?php echo get_permalink(get_the_ID()) ?>" class="grid_12 omega blog-card big">
                            <div class="blog-card-image big"
                                 style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"></div>
                            <div class="padding30box">
                                <span class="blog-card-title"><?php echo get_the_title() ?></span>
                                <span class="blog-card-subtitle"><?php get_the_subtitle(get_the_ID()) ?></span>
                            </div>
                        </>
                        </a>
                    </div> <!-- end grid 8 -->

                    <?php
                }
            }
            ?>

            <!-- RIGHT COLUMN -->

            <div class="grid_4 omega">
                <?php

                // The Query
                $the_query = new WP_Query(['posts_per_page' => 4, 'order' => 'ASC']);

                // The Loop
                if ($the_query->have_posts()) {
                    $the_query->the_post();
                    while ($the_query->have_posts()) {
                        $the_query->the_post();
                        ?>

                        <a href="<?php echo get_permalink(get_the_ID()) ?>" class="grid_12 blog-card">
                            <div class="padding30box">
                                <span class="blog-card-title"><?php echo get_the_title() ?></span>
                                <span class="blog-card-subtitle"><?php get_the_subtitle(get_the_ID()) ?></span>
                            </div>
                        </a>

                        <?php
                    }
                }
                ?>
            </div> <!-- end grid 8 -->

        </div> <!-- end padding 60 -->
    </div> <!-- end container -->

    <div class="clear"></div>

    <!-- CATEGORIES -->

    <hr>
    <div class="container">
        <h1 class="dark" style="margin-bottom: 0">Categories</h1>

        <div class="padding60">

            <a href="https://betterproposalstest.martabeveridge.uk/category/proposal-writing-tips/"
               class="grid_3 category-card bg-fire">
                <div class="padding30box">
                    <h3 style="margin-top: 0"><?php echo get_category_by_slug('proposal-writing-tips')->name; ?></h3>
                    <span class="blog-card-subtitle light"><?php echo get_category_by_slug('proposal-writing-tips')->description; ?></span>
                </div>
            </a>

            <a href="https://betterproposalstest.martabeveridge.uk/category/proposal-breakdown-videos/"
               class="grid_3 category-card bg-nature">
                <div class="padding30box">
                    <h3 style="margin-top: 0"><?php echo get_category_by_slug('proposal-breakdown-videos')->name; ?></h3>
                    <span class="blog-card-subtitle light"><?php echo get_category_by_slug('proposal-breakdown-videos')->description; ?></span>
                </div>
            </a>

            <a href="https://betterproposalstest.martabeveridge.uk/category/product-updates/"
               class="grid_3 category-card bg-partylights">
                <div class="padding30box">
                    <h3 style="margin-top: 0"><?php echo get_category_by_slug('product-updates')->name; ?></h3>
                    <span class="blog-card-subtitle light"><?php echo get_category_by_slug('product-updates')->description; ?></span>
                </div>
            </a>

            <a href="https://betterproposalstest.martabeveridge.uk/category/running-a-business/"
               class="grid_3 category-card omega bg-peaches">
                <div class="padding30box">
                    <h3 style="margin-top: 0"><?php echo get_category_by_slug('running-a-business')->name; ?></h3>
                    <span class="blog-card-subtitle light"><?php echo get_category_by_slug('running-a-business')->description; ?></span>
                </div>
            </a>


        </div> <!-- end padding60 -->
    </div> <!-- end container -->

    <div class="clear"></div>

<?php
require 'footer.php';
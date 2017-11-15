<?php
/**
 * The template for displaying a single category taxonomy page
 *
 * @package BetProp
 * @since 1.0
 * @version 1.0
 */

get_header();

$categorySlug = get_the_category()[0]->slug;

switch ($categorySlug) {
    case 'proposal-writing-tips':
        $slugBgColour = 'bg-fire';
        break;
    case 'proposal-breakdown-videos':
        $slugBgColour = 'bg-nature';
        break;
    case 'product-updates':
        $slugBgColour = 'bg-partylights';
        break;
    case 'running-a-business':
        $slugBgColour = 'bg-peaches';
        break;
}
?>
<!-- HEADER AND VALUE PROP SECTION -->

<div class="grid_12 omega <?php echo $slugBgColour ?> center">
    <?php require 'header-content.php'; ?>
    <div class="container">
        <div class="grid_12 omega padding60" style="padding-top: 0">

            <h1 class="fade-in one"><?php echo get_the_category()[0]->name; ?></h1>
            <span class="fade-in one subhead"><?php echo get_the_category()[0]->description; ?></span>

        </div> <!-- end grid 12 center -->

    </div> <!-- end container -->
</div> <!-- end grid 12 bg valueprop -->

<!-- POSTS -->

<div class="container-small">
    <div class="padding60">
        <?php
            /*
                Set up "Repeater Template" in Ajax Load More plugin to output the following for each post:

            <a href="<?php the_permalink(); ?>">
                <div class="grid_12 omega blog-card">
                    <div class="blog-card-image"
                         style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>"></div>
                    <div class="padding30box">
                        <span class="blog-card-title"><?php the_title(); ?></span>
                        <span class="blog-card-subtitle"><?php get_the_subtitle(get_the_ID()) ?> </span>
                    </div>
                </div>
            </a>

             */
            echo do_shortcode('[ajax_load_more seo="true" category="' . get_the_category()[0]->slug . '"]');
        ?>
    </div> <!-- padding60 -->

</div> <!-- container-small -->

<?php
$hideCategoryMoreReadingSection = true;
require 'footer.php';
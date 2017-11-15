<?php
require 'top-section.php';

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
        <?php require __DIR__ . '/header.php'; ?>
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

            // The Query
            $the_query = new WP_Query(
                    array(
                            'category_name' => get_the_category()[0]->slug
                    )
            );

            // The Loop
            if ( $the_query->have_posts() ) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    ?>

                    <a href="<?php echo get_permalink( get_the_ID() ) ?>"><div class="grid_12 omega blog-card">
                            <div class="blog-card-image" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>"></div>
                            <div class="padding30box">
                                <span class="blog-card-title"><?php echo get_the_title() ?></span>
                                <span class="blog-card-subtitle"><?php echo(get_the_subtitle( get_the_ID(), '', '', false )) ?> </span>
                            </div>
                        </div></a>
                    <?php
                }
            }
            ?>
        </div> <!-- padding60 -->
    </div> <!-- container-small -->

<?php require __DIR__ . '/footer.php'; ?>


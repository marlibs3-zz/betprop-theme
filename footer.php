
        <?php if(!isset($hideCategoryMoreReadingSection) OR !$hideCategoryMoreReadingSection) { ?>
        <!-- MORE READING -->

        <hr>
        <div class="container">
            <h1 class="dark">More reading...</h1>

            <?php

            $queryParameters = ['posts_per_page' => 3, 'order' => 'ASC'];

            if(isset($categoryForPostQuerySlug))
            {
                $queryParameters['category_name'] = $categoryForPostQuerySlug;
            }

            $the_query = new WP_Query($queryParameters);

            // The Loop
            if ( $the_query->have_posts() ) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    ?>

                    <a href="<?php echo get_permalink( get_the_ID() ) ?>" class="grid_4 blog-card">
                        <div class="blog-card-image" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>"></div>
                        <div class="padding30box">
                            <span class="blog-card-title"><?php echo get_the_title() ?></span>
                            <span class="blog-card-subtitle"><?php get_the_subtitle(get_the_ID()) ?></span>
                        </div>
                    </a>

                    <?php
                }
            }
            ?>
        </div> <!-- end container -->

        <?php } ?>

        <div class="grid_12 omega">

            <hr>
            <div class="padding30 center" style="opacity: 0.3">
                <h3 class="dark">betterproposals.io</h3>
            </div> <!-- end padding90 -->

        </div> <!-- end grid 12 -->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">

        <!-- Standard iPhone -->
        <link rel="apple-touch-icon" sizes="57x57" href="https://betterproposals.io/img/icons/favicon_57.png" />
        <!-- Retina iPhone -->
        <link rel="apple-touch-icon" sizes="114x114" href="https://betterproposals.io/img/icons/favicon_114.png" />
        <!-- Standard iPad -->
        <link rel="apple-touch-icon" sizes="72x72" href="https://betterproposals.io/img/icons/favicon_72.png" />
        <!-- Retina iPad -->
        <link rel="apple-touch-icon" sizes="144x144" href="https://betterproposals.io/img/icons/favicon_144.png" />

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

        <!-- Slide in sidebar -->
        <script type="text/javascript" src="/hosted_scripts/jquery-slidereveal/jquery.slidereveal.min.js" defer></script>
        <script type="text/javascript">
            $(function(){

        // Slide in nav on mobile
                var slider = $('#nav-slider').slideReveal({
                    position: "left",
                    push: false,
                    overlay: true
                });

        // Open the settings sidebar when we click on the settings icon
                $(document).on("click", "#mobile-nav-trigger", function(event) {
                    event.preventDefault();
                    $('#nav-slider').slideReveal("show");
                });

            });
        </script>

        <!-- INTERCOM -->

        <script>
            window.intercomSettings = {
                app_id: "gwbxscf7"
            };
        </script>
        <script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/gwbxscf7';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>

        <!-- end Intercom -->

        <!-- Facebook Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
                n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
                document,'script','https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '1015789581848856');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=1015789581848856&ev=PageView&noscript=1" alt="Facebook"
            /></noscript>
        <!-- DO NOT MODIFY -->
        <!-- End Facebook Pixel Code -->

        <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"d190a70136","applicationID":"82509464","transactionName":"NQZTYEVYCxBQVEENWAxMZEZeFgcPXlBqClIVTFhaU1wdTUFfRQ==","queueTime":0,"applicationTime":1,"atts":"GUFQFg1CGB4=","errorBeacon":"bam.nr-data.net","agent":""}</script>

        <script>
            var scroll = new SmoothScroll('a[href*="#"]');
        </script>

        <?php wp_footer(); ?>
    </body>
</html>
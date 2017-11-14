<?php
/**
 * Created by PhpStorm.
 * User: martabeveridge
 * Date: 12/11/2017
 * Time: 13:42
 */
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(2),u=e(3),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}finally{f.emit("fn-end",[c.now()],t)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now()])}},{}],2:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],3:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],4:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=m(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){v[e]=m(e).concat(n)}function m(e){return v[e]||[]}function w(e){return p[e]=p[e]||o(t)}function g(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var v={},y={},b={on:l,emit:t,get:w,listeners:m,context:n,buffer:g,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(2),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!x++){var e=h.info=NREUM.info,n=d.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+h.offset],null,"api");var t=d.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===d.readyState&&i()}function i(){f("mark",["domContent",a()+h.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-h.offset}var u=(new Date).getTime(),f=e("handle"),c=e(2),s=e("ee"),p=window,d=p.document,l="addEventListener",m="attachEvent",w=p.XMLHttpRequest,g=w&&w.prototype;NREUM.o={ST:setTimeout,SI:p.setImmediate,CT:clearTimeout,XHR:w,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1044.min.js"},b=w&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),h=n.exports={offset:u,now:a,origin:v,features:{},xhrWrappable:b};e(1),d[l]?(d[l]("DOMContentLoaded",i,!1),p[l]("load",r,!1)):(d[m]("onreadystatechange",o),p[m]("onload",r)),f("mark",["firstbyte",u],null,"api");var x=0,E=e(4)},{}]},{},["loader"]);</script>
    <title>Blog - Better Proposals</title>

    <!--<meta name="description" content="This free brand design proposal template is written for anyone that offers logo or brand design services. Use it to save time writing better proposals." />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@betterproposals" />
    <meta name="twitter:creator" content="@betterproposals" />
    <meta name="twitter:image" content="https://betterproposals.io/img/proposal-templates/design/company-branding-big.jpg" />

    <meta property="og:image" content="https://betterproposals.io/img/proposal-templates/design/company-branding-big.jpg" />
    <meta property="og:url" content="https://betterproposals.io/brand-design-proposal-template" />
    <meta property="og:title" content="Brand Design Proposal Template - Better Proposals" />
    <meta property="og:description" content="This free brand design proposal template is written for anyone that offers logo or brand design services. Use it to save time writing better proposals." />-->

    <!-- HEAD -->

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <link href="https://betterproposals.io/css/normalize-min.css" rel="stylesheet" type="text/css" />
    <link href="https://betterproposals.io/css/grid.css" rel="stylesheet" type="text/css" />
    <link href="https://betterproposals.io/css/style.css" rel="stylesheet" type="text/css" />

    <!-- Icons -->
    <link rel="shortcut icon" href="https://betterproposals.io/img/icons/favicon.png" type="image/x-icon">
    <link rel="icon" href="https://betterproposals.io/img/icons/favicon.png" type="image/x-icon">

    <!-- First Promoter -->
    <script type="text/javascript">
        (function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src='https://cdn.firstpromoter.com/fprom.js',t.onload=t.onreadystatechange=function(){var t=this.readyState;if(!t||"complete"==t||"loaded"==t)try{$FPROM.init("d83zlqh9",".betterproposals.io")}catch(t){}};var e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(t,e)})();</script>

    <link href="/wp-content/themes/betprop/style.css" rel="stylesheet" type="text/css" />
    <link rel="canonical" href="https://betterproposalstest.martabeveridge.uk" />
    <script src="https://use.typekit.net/ivt4obp.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>
<body>

<!-- HEADER AND VALUE PROP SECTION -->

<div class="grid_12 omega cta">
    <?php require __DIR__ . '/header.php'; ?>
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
        $the_query = new WP_Query(['posts_per_page' => 1]);

        // The Loop
        if ( $the_query->have_posts() ) {
            while ($the_query->have_posts()) {
                $the_query->the_post();
                ?>

                <div class="grid_8">
                    <a href="<?php echo get_permalink( get_the_ID() ) ?>" class="grid_12 omega blog-card big">
                            <div class="blog-card-image big" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>"></div>
                            <div class="padding30box">
                                <span class="blog-card-title"><?php echo get_the_title() ?></span>
                                <span class="blog-card-subtitle"><?php echo(get_the_subtitle( get_the_ID(), '', '', false )) ?></span>
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
            $the_query = new WP_Query(['posts_per_page' => 4]);

            // The Loop
            if ( $the_query->have_posts() ) {
                $the_query->the_post();
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    ?>

                    <a href="<?php echo get_permalink( get_the_ID() ) ?>" class="grid_12 blog-card">
                        <div class="padding30box">
                            <span class="blog-card-title"><?php echo get_the_title() ?></span>
                            <span class="blog-card-subtitle"><?php echo(get_the_subtitle( get_the_ID(), '', '', false )) ?></span>
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

        <a href="https://betterproposalstest.martabeveridge.uk/category/proposal-writing-tips/" class="grid_3 category-card bg-fire">
            <div class="padding30box">
                <h3 style="margin-top: 0">Proposal Writing Tips</h3>
                <span class="blog-card-subtitle light">Insights, ideas and guides on the art of proposal writing.</span>
            </div>
        </a>

        <a href="https://betterproposalstest.martabeveridge.uk/category/proposal-breakdown-videos/" class="grid_3 category-card bg-nature">
            <div class="padding30box">
                <h3 style="margin-top: 0">Proposal Breakdown Videos</h3>
                <span class="blog-card-subtitle light">8-10 minute live critique of real life proposals.</span>
            </div>
        </a>

        <a href="https://betterproposalstest.martabeveridge.uk/category/product-updates/" class="grid_3 category-card bg-partylights">
            <div class="padding30box">
                <h3 style="margin-top: 0">Product Updates</h3>
                <span class="blog-card-subtitle light">Learn all about the new Better Proposals features and updates.</span>
            </div>
        </a>

        <a href="https://betterproposalstest.martabeveridge.uk/category/running-a-business/" class="grid_3 category-card omega bg-peaches">
            <div class="padding30box">
                <h3 style="margin-top: 0">Running a Business</h3>
                <span class="blog-card-subtitle light">16 years of running a business teaches you a few things. These are our lessons.</span>
            </div>
        </a>


    </div> <!-- end padding60 -->
</div> <!-- end container -->

<div class="clear"></div>



<!-- MORE READING -->

<hr>
<div class="container">
    <h1 class="dark">More reading...</h1>

    <?php

    // The Query
    $the_query = new WP_Query(['posts_per_page' => 3]);

    // The Loop
    if ( $the_query->have_posts() ) {
        while ($the_query->have_posts()) {
            $the_query->the_post();
            ?>

            <a href="<?php echo get_permalink( get_the_ID() ) ?>" class="grid_4 blog-card">
                <div class="blog-card-image" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>"></div>
                <div class="padding30box">
                    <span class="blog-card-title"><?php echo get_the_title() ?></span>
                    <span class="blog-card-subtitle"><?php echo(get_the_subtitle( get_the_ID(), '', '', false )) ?></span>
                </div>
            </a>

            <?php
        }
    }
    ?>
</div> <!-- end container -->

<?php require __DIR__ . '/footer.php'; ?>

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

<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"d190a70136","applicationID":"82509464","transactionName":"NQZTYEVYCxBQVEENWAxMZEZeFgcPXlBqClIVTFhaU1wdTUFfRQ==","queueTime":0,"applicationTime":1,"atts":"GUFQFg1CGB4=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>

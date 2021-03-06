<?php
/*
  Template Name: Blank Landing Page
*/
?>
<html>
  <head>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <title><?php wp_title( '|', true, 'right' ); bloginfo('url'); ?></title>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- We participate in the US government's analytics program. See the data at analytics.usa.gov. -->
    <script async type="text/javascript" src="https://dap.digitalgov.gov/Universal-Federated-Analytics-Min.js?agency=DOS&siteplatform=ShareAmerica" id="_fed_an_ua_tag"></script>
  </head>

  <body class="blank"> 
    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MCRX2G"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MCRX2G');</script>
    <!-- End Google Tag Manager -->
    <?php while (have_posts()) : the_post(); ?>
    <div id="td-outer-wrap">
      <div class="td-main-content-wrap td-main-page-wrap">
        <div class="td-container">
          <?php the_content(); endwhile; ?>
        </div>
      </div>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>
<?php
  if ( empty( $_SERVER['HTTPS'] ) || $_SERVER['HTTPS'] === 'off' ) {
    $protocol = 'http://';
  } else {
    $protocol = 'https://';
  }
  $BASE_URL = $protocol . $_SERVER['SERVER_NAME'] . dirname( $_SERVER['PHP_SELF'] );

  $isHomepage = ( basename( $_SERVER['PHP_SELF'] ) == 'index.php' );
  $title = $isHomepage ? $siteName : $pageName . ' : ' . $siteName;
?>
<!doctype html>
<html class="l-html no-js" lang="">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title><?php echo $title; ?></title>
  <meta name="description" content="" />

  <!-- <meta property="og:image" content="<?php echo $BASE_URL; ?>/img/userfiles/og-image.png" /> -->

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sintony&family=Source+Sans+Pro:wght@900&display=swap" rel="stylesheet">

  <!--<meta name="theme-color" content="#ed1c24" />-->

  <link rel="stylesheet" href="assets/css/main.min.css?<?php echo filemtime( 'assets/css/main.min.css' ); ?>" />
</head>
<body class="l-body -page_<?php echo $uri; ?><?php echo ( ! $isHomepage ) ? ' -page_inner' : ''; ?>">

  <div class="l-wrapper">
    <header class="l-siteHeader">
      <div class="b-siteHeader">
        <div class="l-siteLogo">
          <?php
            $siteLogo__tag  = $isHomepage ? 'h1' : 'div';
            $siteLogo__link = $isHomepage ? '' : ' href="index.html"';
          ?>
          <<?php echo $siteLogo__tag; ?> class="b-siteLogo" itemscope itemtype="http://schema.org/Organization">
            <a class="b-siteLogo__link"<?php echo $siteLogo__link; ?> itemprop="url">
              <img class="b-siteLogo__icon" src="assets/img/blocks/siteLogo/siteLogo-logo.svg" alt="<?php echo $siteName; ?>" title="<?php echo $siteName; ?>" itemprop="logo" />
            </a>
          </<?php echo $siteLogo__tag; ?>>
        </div>


        <nav class="l-mainNavigation">
          <ul class="b-mainNavigation">
            <li class="b-mainNavigation__item<?php echo ( $uri == 'home' ) ? ' -state_active' : ''; ?>">
              <a class="b-mainNavigation__link hvr-underline-from-center" href="index.html">Products</a>
            </li>
            <li class="b-mainNavigation__item<?php echo ( $uri == 'services' ) ? ' -state_active' : ''; ?>">
              <a class="b-mainNavigation__link hvr-underline-from-center" href="index.html">Services</a>
            </li>
            <li class="b-mainNavigation__item<?php echo ( $uri == 'features' ) ? ' -state_active' : ''; ?>">
              <a class="b-mainNavigation__link hvr-underline-from-center" href="index.html">Features</a>
            </li>
            <li class="b-mainNavigation__item<?php echo ( $uri == 'plans&pricing' ) ? ' -state_active' : ''; ?>">
              <a class="b-mainNavigation__link hvr-underline-from-center" href="index.html">Plans & Pricing</a>
            </li>
          </ul>
          <ul class="b-siteAuth">
            <li class="b-siteAuth__item">
              <a class="b-siteAuth__link hvr-underline-from-center" href="index.html">Sign in</a>
            </li>
            <li class="b-siteAuth__item">
              <a class="b-siteAuth__link -button hvr-glow" href="index.html">Sign Up</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <div class="l-content">

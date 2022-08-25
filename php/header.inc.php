<!doctype html>

<?php
    $staticMenu = array_slice($staticContent, 0, 4);
    $currentPageUrl = 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
?>

<!--
=============================================
  Developed by: Pixacura.com
  Website:      https://www.pixacura.com
  
  Simple, easy edit website solutions for healthcare, education, charities and business.
=============================================
-->

<html class="no-js" lang="en">

<head>

    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php echo Theme::metaTags('title');?>

    <!-- CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <?php echo Theme::css("css/main.css"); ?>
    <?php echo Theme::css("css/push.css"); ?>
    <?php echo Theme::css("css/style.css"); ?>


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Javascript -->


    <?php echo Theme::js('js/jquery-3.6.0.min.js'); ?>
    <?php echo Theme::js('js/scrollCheck.js'); ?>
 

    <!-- Google Analytics below -->
    <link rel="canonical" href="http://www.yoursite.co.uk/">


    <!-- Facebook og settings -->
    <meta property="og:title" content="title" />
    <meta property="og:url" content="http://www.yoursite.co.uk" />
    <meta property="og:image" content="http://www.yoursite.co.uk/images/logo.png" />
    <meta property="og:type" content="company" />



    <!-- twitter code below -->


    <!-- Load plugins with the hook siteHead -->
    <?php Theme::plugins('siteHead') ?></head>

<body id="<?php echo $WHERE_AM_I; ?>">
<?php Theme::plugins('siteBodyBegin') ?>

  <nav class="navContainer <?php if($WHERE_AM_I == 'page'){echo 'navShrinkPage';} ?>">
    <a id="logo" href="<?php echo Theme::siteUrl(); ?>"><img src="<?php echo $site->logo() ?>" alt="logo" /></a>  
    <a id="burger" href="javascript:void(0);" class="icon" onclick="navFunction()">
      <img src="<?php echo Theme::src('img/burger.svg');?>" alt="logo" />
    </a>
    <div class="topNav" id="topNav">
      <!-- Nav section -->
      <?php 
      include(THEME_DIR_PHP.'navSection.php'); ?>
    </div>
  </nav>

  <!-- ==================================================================================== -->


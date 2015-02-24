<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head>
<?php print $head; ?>
<title><?php print $head_title; ?></title>
<?php print $styles; ?>
<?php print $scripts; ?>
<!--[if lt IE 9]><script src="<?php print base_path() . drupal_get_path('theme', 'nexus') . '/js/html5.js'; ?>"></script><![endif]-->
</head>

  <?php if ($is_front): ?>
  <?php if (theme_get_setting('slideshow_display','nexus')): ?>
  <?php 
    $slide1_head = check_plain(theme_get_setting('slide1_head','nexus'));   $slide1_desc = check_markup(theme_get_setting('slide1_desc','nexus'), 'full_html'); $slide1_url = check_plain(theme_get_setting('slide1_url','nexus'));
    $slide2_head = check_plain(theme_get_setting('slide2_head','nexus'));   $slide2_desc = check_markup(theme_get_setting('slide2_desc','nexus'), 'full_html'); $slide2_url = check_plain(theme_get_setting('slide2_url','nexus'));
    $slide3_head = check_plain(theme_get_setting('slide3_head','nexus'));   $slide3_desc = check_markup(theme_get_setting('slide3_desc','nexus'), 'full_html'); $slide3_url = check_plain(theme_get_setting('slide3_url','nexus'));
  ?>
  <div id="slidebox" class="flexslider">
    <ul class="slides">
      <li>
        <img src="<?php print base_path() . drupal_get_path('theme', 'nexus') . '/images/slide-image-1.jpg'; ?>"/>
        <?php if($slide1_head || $slide1_desc) : ?>
          <div class="flex-caption">
            <h2><?php print $slide1_head; ?></h2><?php print $slide1_desc; ?>
            <a class="frmore" href="<?php print url($slide1_url); ?>"> <?php print t('READ MORE'); ?> </a>
          </div>
        <?php endif; ?>
      </li>
      <li>
        <img src="<?php print base_path() . drupal_get_path('theme', 'nexus') . '/images/slide-image-2.jpg'; ?>"/>
        <?php if($slide2_head || $slide2_desc) : ?>
          <div class="flex-caption">
            <h2><?php print $slide2_head; ?></h2><?php print $slide2_desc; ?>
            <a class="frmore" href="<?php print url($slide2_url); ?>"> <?php print t('READ MORE'); ?> </a>
          </div>
        <?php endif; ?>
      </li>
      <li>
        <img src="<?php print base_path() . drupal_get_path('theme', 'nexus') . '/images/slide-image-3.jpg'; ?>"/>
        <?php if($slide3_head || $slide3_desc) : ?>
          <div class="flex-caption">
            <h2><?php print $slide3_head; ?></h2><?php print $slide3_desc; ?>
            <a class="frmore" href="<?php print url($slide3_url); ?>"> <?php print t('READ MORE'); ?> </a>
          </div>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
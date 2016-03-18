<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language ?>" xml:lang="<?php print $language ?>">
<head>
  <title><?php print $head_title ?></title>
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <?php print $head ?>
  <?php print theme('stylesheet_import', base_path() . path_to_theme() . '/style.css'); ?>
</head>
<body <?php print theme("onload_attribute"); ?>>
<div id="container">
 <div id="top">
  <?php if ($site_name) : ?>
    <h1 id="site-name"><a href="<?php print base_path() ?>" title="Index Page"><?php print($site_name) ?></a></h1>
  <?php endif;?>
  <?php if ($site_slogan) : ?>
    <span id="site-slogan"><?php print($site_slogan) ?></span>
  <?php endif;?>

  <?php if ($header) : ?>
  <div id="header">
   <?php print $header ?>
  </div>
  <?php endif;?>

  <div id="navigation">
  <?php if (count($primary_links)) : ?>
    <ul id="primary">
    <?php foreach ($primary_links as $link): ?>
      <li><?php print $link?></li>
    <?php endforeach; ?>
    </ul>
  <?php endif; ?>
  <?php if (count($secondary_links)) : ?>
  <br class="clear" />
    <ul id="secondary">
    <?php foreach ($secondary_links as $link): ?>
      <li><?php print $link?></li>
    <?php endforeach; ?>
    </ul>
  <?php endif; ?>
  </div>
 </div>

 <br class="clear" />

 <div id="leftnav">
   <?php print $sidebar_left ?>
 </div>

 <!--Static blocks-->
 <div id="rightnav">
    <?php print $sidebar_right ?>
 </div>
 <div id="content">
   <?php print $breadcrumb ?>
   <?php if ($title != ""): ?>
   <h2 class="content-title"><?php print $title ?></h2>
   <?php endif; ?>
   <?php if ($tabs != ""): ?>
     <?php print $tabs ?>
   <?php endif; ?>

   <?php if ($mission != ""): ?>
     <div id="mission"><?php print $mission ?></div>
   <?php endif; ?>

   <?php if ($help != ""): ?>
     <p id="help"><?php print $help ?></p>
   <?php endif; ?>

   <?php if ($messages != ""): ?>
     <div id="message"><?php print $messages ?></div>
   <?php endif; ?>

   <!-- start main content -->
   <?php print($content) ?>
   <!-- end main content -->
 </div>
 <div id="footer">
 <?php print $footer_message;?>
 </div>
</div>
<?php print $closure;?>
</body>
</html>


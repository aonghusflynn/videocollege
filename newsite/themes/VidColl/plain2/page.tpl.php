<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language ?>" xml:lang="<?php print $language ?>">

<head>
  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
</head>

<body>
  <div id="header">
    <div id="header-container">
      <p><?php if (isset($secondary_links)) { ?> <?php print theme('links', $secondary_links) ?> <?php } ?></p>
      <?php if ($logo) { ?><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a><?php } ?>
      <?php if ($site_name) { ?><h1><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h1><?php } ?>
      <?php if (isset($primary_links)) { ?> <?php print plain2_primary_links() ?> <?php } ?>
      <br class="clear" />
    </div>
  </div>

  <?php if ($mission) { ?><div id="description"><?php print $mission ?></div><?php } ?>

  <div id="container">
    <?php if ($sidebar_left) { ?>
      <div id="sidebar">
        <?php print $search_box ?>
        <?php print $sidebar_left ?>
      </div>
    <?php } ?>

    <div id="content">
      <?php print $breadcrumb ?>
      <?php print $title ?>
      <div class="tabs"><?php print $tabs ?></div>
      <?php print $help ?>
      <?php print $messages ?>
      <?php print $content; ?>
    </div>
  </div>

  <div id="footer">
    <div id="footercontent">
      <?php print $footer_message ?>
    </div>
  </div>
<?php print $closure ?>
</body>
</html>

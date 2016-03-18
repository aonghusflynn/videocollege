  <div class="node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
    <?php if ($page == 0) { ?><h1><a href="<?php print $node_url?>"><?php print $title?></a></h1><?php }; ?>
    <div style="float:right;"><?php if ($picture) {
      print $picture;
    }?></div>
    <h3><?php print $submitted?></h3>
    <?php if ($terms) { ?><span id="taxonomy">Tags: <?php print $terms?></span><?php }; ?>
    <div class="content"><?php print $content?></div>
    <?php if ($links) { ?><div class="articlemenu">&raquo; <?php print $links?></div><?php }; ?>
  </div>

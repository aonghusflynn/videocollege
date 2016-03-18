  <div class="comment<?php if ($comment->status == COMMENT_NOT_PUBLISHED) print ' comment-unpublished'; ?>">
    <?php if ($picture) {
    print $picture;
    } ?>
    <h2 class="title"><?php print $title; ?></h2><?php if ($new != '') { ?><span class="new"><?php print $new; ?></span><?php } ?>
    <div id="submitted"><?php print $submitted; ?></div>
    <div class="content"><?php print $content; ?></div>
    <div class="links">&raquo; <?php print $links; ?></div>
  </div>

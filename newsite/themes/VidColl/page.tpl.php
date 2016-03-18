<?php global $base_url;?>
<?php
	//$color = 'blue'; //set to blue, black, green, orange, purple, or red
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <style type="text/css" media="all">@import "<?php print $base_url . '/' . $directory . '/colorcss/' . $color ?>.css";</style>
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>


<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<meta name="author" content="Original design by Andreas Viklund - http://andreasviklund.com / Ported by Matt Koglin - http://antinomia.com" />
</head>

<body>
	<div id="container">
		<div id="sitename">

<img src="/newsite/files/images/mastheadnew.gif" />

		</div>


        <!--div id="breadcrumb"-->
                <?php //print $breadcrumb; ?> 
        <!--/div-->

		<div id="wrap">

			<div id="leftside">
				<?php if ($sidebar_left) {
	      			  print $sidebar_left;
		    		  } ?>
			</div>



			<div id="content">
				<?php if ($title) { ?><h1><?php print $title ?></h1><?php } ?>
				<div class="tabs"><?php print $tabs ?></div>
				<?php print $help ?>
				<?php print $messages ?>
				<?php print $content; ?>
			</div>

			<div class="clearingdiv">&nbsp;</div>

		</div>

	<div id="footer">
		<?php if (strlen($footer_message) > 2) { print $footer_message; } ?>
		<!--Design by <a href="http://andreasviklund.com">Andreas Viklund</a-->
	</div>
	<?php print $closure ?>
</body>
</html>

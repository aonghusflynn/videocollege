<?php

function phptemplate_links($links) {
  if (!is_array($links)) {
    return '';
  }
	$output = '<ul>';
	foreach ($links as $primarylink) {
		$output .= '<li>' . $primarylink . '</li>';
	}
	$output .= '</ul>';
	return $output;
}

?>
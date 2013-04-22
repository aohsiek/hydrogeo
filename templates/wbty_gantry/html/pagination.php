<?php
function pagination_list_footer($list)
{
    $html = "<div class=\"list-footer pagination\">\n";

	$html .= "\n<div class=\"limit\">" . JText::_('JGLOBAL_DISPLAY_NUM') . $list['limitfield'] . "</div>";
	$html .= $list['pageslinks'];
	$html .= "\n<div class=\"counter\">" . $list['pagescounter'] . "</div>";

	$html .= "\n<input type=\"hidden\" name=\"" . $list['prefix'] . "limitstart\" value=\"" . $list['limitstart'] . "\" />";
	$html .= "\n</div>";

	return $html;
}

function pagination_list_render($list) {
	// Reverse output rendering for right-to-left display.
	$html = '<ul class="counter">';
	$html .= '<li class="pagination-start">' . $list['start']['data'] . '</li>';
	$html .= '<li class="pagination-prev">' . $list['previous']['data'] . '</li>';
	foreach ($list['pages'] as $page)
	{
		$html .= '<li>' . $page['data'] . '</li>';
	}
	$html .= '<li class="pagination-next">' . $list['next']['data'] . '</li>';
	$html .= '<li class="pagination-end">' . $list['end']['data'] . '</li>';
	$html .= '</ul>';

	return $html;
}

?>

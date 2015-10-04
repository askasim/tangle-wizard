<?php
function pagination($total, $per_page, $type,$pageno) {
	$url=$type;
	$adjacents = "2";
	$page = $pageno;
	$prevlabel = "&lsaquo; Prev";
	$nextlabel = "Next &rsaquo;";

	$page = ($page == 0 ? 1 : $page);
	$start = ($page - 1) * $per_page;

	$prev = $page - 1;
	$next = $page + 1;
	$lastpage = ceil($total / $per_page);

	$lpm1 = $lastpage - 1;
	// //last page minus 1

	$pagination = "";
	if ($lastpage > 1) {
		$pagination .= "<div class='col-md-4 col-sm-4 items-info'>Page {$page} of {$lastpage}</div>";
		$pagination .= "<ul class='pagination pull-right'>";
		if ($page > 1)
			$pagination .= "<li><a href='{$url}/{$prev}'>{$prevlabel}</a></li>";

		if ($lastpage < 7 + ($adjacents * 2)) {
			for ($counter = 1; $counter <= $lastpage; $counter++) {
				if ($counter == $page)
					$pagination .= "<li><a class='current'>{$counter}</a></li>";
				else
					$pagination .= "<li><a href='{$url}/{$counter}'>{$counter}</a></li>";
			}

		} elseif ($lastpage > 5 + ($adjacents * 2)) {

			if ($page < 1 + ($adjacents * 2)) {

				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++) {
					if ($counter == $page)
						$pagination .= "<li><a class='current'>{$counter}</a></li>";
					else
						$pagination .= "<li><a href='{$url}/{$counter}'>{$counter}</a></li>";
				}
				$pagination .= "<li class='dot'>...</li>";
				$pagination .= "<li><a href='{$url}/{$lpm1}'>{$lpm1}</a></li>";
				$pagination .= "<li><a href='{$url}/{$lastpage}'>{$lastpage}</a></li>";

			} elseif ($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2)) {

				$pagination .= "<li><a href='{$url}/1'>1</a></li>";
				$pagination .= "<li><a href='{$url}/2'>2</a></li>";
				$pagination .= "<li class='dot'>...</li>";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++) {
					if ($counter == $page)
						$pagination .= "<li><a class='current'>{$counter}</a></li>";
					else
						$pagination .= "<li><a href='{$url}/{$counter}'>{$counter}</a></li>";
				}
				$pagination .= "<li class='dot'>..</li>";
				$pagination .= "<li><a href='{$url}/{$lpm1}'>{$lpm1}</a></li>";
				$pagination .= "<li><a href='{$url}/{$lastpage}'>{$lastpage}</a></li>";

			} else {

				$pagination .= "<li><a href='{$url}/1'>1</a></li>";
				$pagination .= "<li><a href='{$url}/'>2</a></li>";
				$pagination .= "<li class='dot'>..</li>";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++) {
					if ($counter == $page)
						$pagination .= "<li><a class='current'>{$counter}</a></li>";
					else
						$pagination .= "<li><a href='{$url}/{$counter}'>{$counter}</a></li>";
				}
			}
		}

		if ($page < $counter - 1)
			$pagination .= "<li><a href='{$url}/{$next}'><i class='fa fa-angle-right'></i></a></li>";

		$pagination .= "</ul>";
	}

	return $pagination;
}
?>
<?php 
require "simple_html_dom.php";
$html = file_get_html("http://www.muabannhadat.vn/dat-ban-dat-tho-cu-3532");

$tins = $html->find("div.resultItem div.col-xs-9 div.col-md-9 a.title-filter-link");
$hinhs = $html->find("div.resultItem  div.listing-list-img div.image-list")
 
foreach ($tins as $t){
	echo $t->innertext;
	echo "---";
	echo $t->href;
	echo "<hr />";
}

?>

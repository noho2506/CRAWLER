<?php 
require "simple_html_dom.php";
$html = file_get_html("http://www.muabannhadat.vn/dat-ban-dat-tho-cu-3532");

$tins = $html->find("div.resultItem div.col-xs-9 div.col-md-9 a.title-filter-link");
$hinhs = $html->find("div.resultItem  div.listing-list-img div.image-list");
 
$dientichs = $html->find("div.resultItem div.col-xs-9 div.col-xs-12 ",1);

echo count($dientichs);
foreach ($dientichs as $t){
	echo $t;
	echo "<hr />";
}

/*foreach ($hinhs as $t){
	echo $title = $t->attr["style"];
	echo "<hr />";
}*/

?>

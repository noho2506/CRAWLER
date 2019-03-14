<?php
require "dbCon.php";
require "simple_html_dom.php";

$html = file_get_html("http://vivireal.com/ban-dat-nen.html");
$tins = $html->find("div#container section.san-pham div.container div.row10 div.col-md-9 div.list-product div.item-product");

echo count($tins);
echo "<br />";

foreach ($tins as $t) {
	// echo $title = $t->find("div.col-xs-10 div.info a h4",0)->innertext;

	// echo $price = $t->find("div.col-xs-10 div.info div.gia-le div.price span",0)->innertext;

	// echo $desc = $t->find("div.col-xs-10 div.info div.quote",0)->innertext;
	// echo $time = $t->find("div.col-xs-10 div.info div.user-info span",1)->innertext;

	$img = $t->find("div.col-xs-2 div.img a img",0)->src;
	

	echo "<br />";
	$u = 'vivireal/'.basename($img);
	file_put_contents($u, file_get_contents($img));
	$tenFile = basename($img);
	echo "<img src='$u'/>";
}
?>
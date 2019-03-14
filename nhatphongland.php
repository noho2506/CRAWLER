<?php
require "dbCon.php";
require "simple_html_dom.php";

$html = file_get_html("http://nhatphongland.com/tag/dat-nen");

$tins = $html->find("div.content_body div.container div.section div.col div.post_item");

foreach($tins as $t){
	// $img = $t->find("div.pic a img",0)->src;
	// echo "<img src='$img' />";

	// $title = $t->find("div.post_list_right h3.post_title a",0)->innertext;
	// echo $title;

	// echo $mota = $t->find("div.post_list_right div.post_description p",0)->innertext;

	echo $link = $t->find("div.post_list_right h3.post_title a",0)->href;

	echo "<hr />";
}
?>
<?php 
require "dbCon.php";
require "simple_html_dom.php";
$html = file_get_html("https://ancu.me/mua-ban-dat-nen-thanh-pho-da-nang");

$tins = $html->find("div.container div.inner div.main-col div.category div.aspect-ratio ul li a.image span img.lazy");

echo $html;
//echo count($tins);
foreach ($tins as $t) {
	$img =$t->src;
	//echo "<img src='$img'/>";
}

?>
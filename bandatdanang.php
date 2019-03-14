<?php 
require "dbCon.php";
require "simple_html_dom.php";
$html = file_get_html("http://homedy.com/ban-dat-da-nang");
echo $html;

$tins = $html->find("div.wrapper div.product div.container div.box-content div.col-sm-8 div.content div.tab-content div.item div.info");

$hinhs =$html->find("div.wrapper div.product div.container div.box-content div.col-sm-8 div.content div.tab-content div.item div.thumb-image a img.lazy");

foreach($hinhs as $t){
	/*$title = $t->find("a",0)->attr["title"];
	echo $title;*/

	/*$price = $t->find("div.detail div.col",0)->innertext;
	echo $price;*/

	/*$area = $t->find("div.detail div.col",1)->innertext;
	echo $area;*/

	/*$own = $t->find("a",1)->attr["title"];
	echo $own;*/

	/*$phone = $t->find("a",3)->attr["title"];
	echo $phone;*/

	/*$address = $t->find("div.address",0)->innertext;
	echo $address;*/

	/*$time = $t->find("div.date",0)->innertext;
	echo $time;*/

	/*$i = $t->find("a",0);
	$im = $i->find("img",0);*/
	// $img = $t->src;
	// echo "<img src='$img' />";


	//echo "<hr />";
}
 


//https://homedy.com/ban-dat-da-nang-l15-c31	X
//https://cafeland.vn/du-an/khu-do-thi-lakeside-palace-1786.html
//https://nhatphongland.com/tag/dat-nen
//https://ancu.me/mua-ban-dat-nen-thanh-pho-da-nang		X
//https://kenhbds.vn/can-ban
//https://muaban.net/ban-dat-da-nang-l15-c31		X
//http://batdongsanvenbiendanang.com/bat-dong-san-ven-bien-da-nang-ptd/danh-sach-cac-lo-dat-bien-ven-bien-da-nang/?gclid=Cj0KCQiAm5viBRD4ARIsADGUT25mwBfgFZOI2nk2XgsM-CLfUf0FDcsUQa0VozsspumrYBQF6gaX6_AaAkdrEALw_wcB		X
//muabannhadat.vn
?>


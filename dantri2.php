<?php 
require "dbCon.php";
require "TheGioi.php";
require "simple_html_dom.php";
$html = file_get_html("http://dantri.com.vn/the-gioi.htm");

$tins = $html->find("[data-boxtype='timelineposition']");

$mang = array();


foreach ($tins as $t) {
	$a = $t->find("a",0);
	$title = $a->attr["title"];
	$href = $a->href;
	
	$img =$a->find("img",0)->src;
	$u = 'dantri/'.basename($img);
	file_put_contents($u, file_get_contents($img));

	echo $desc = $t->find("div.mr1 div",0);
	echo "<hr />";

	//Xuat ra dang JSON -> android doc tin nay
	//lap trinh huong doi tuong
	$new = new TheGioi($title, $desc, basename($img));
	array_push($mang, $new);
}

echo json_encode($mang);
?>
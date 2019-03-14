<?php 
require "dbCon.php";
require "simple_html_dom.php";

$html = file_get_html("https://kenhbds.vn/can-ban/dat-nen-dat-tho-cu-l7/da-nang-t15");

$tins = $html->find("div.contai div.container div.left_cont div.center div.box1 div.tt_dong1");
print_r($tins);
die();

echo count($tins);
echo "<br />";
foreach ($tins as $t) {
	$title = $t->find("div a.tooltip",0)->plaintext;

	$area =$t->find("span.span_dien_tich",0)->innertext;

	$price = $t->find("span.span_gia",0)->innertext;

	$location = $t->find("span.span_tinh_thanh",0)->innertext;

	$time = $t->find("span.span_ngay",0)->innertext;

	$link = $t->find("div a.tooltip",0)->href;
	echo "<hr />";

	$title = htmlentities($title, ENT_QUOTES, "UTF-8");
	$area = htmlentities($area, ENT_QUOTES, "UTF-8");
	$price = htmlentities($price, ENT_QUOTES, "UTF-8");
	$location = htmlentities($location, ENT_QUOTES, "UTF-8");
	$time = htmlentities($time, ENT_QUOTES, "UTF-8");
	$link = htmlentities($link, ENT_QUOTES, "UTF-8");

	
	$qr ="INSERT INTO test(title, description, price, image, create_day, link, area, location) VALUES ('$title', null ,'$price', null ,'$time','$link','$area','$location')";

 	$result2 = mysqli_query($mysqli, $qr);
}

?>
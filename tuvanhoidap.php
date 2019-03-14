<?php
require "dbCon.php";
require "simple_html_dom.php";

$html = file_get_html("https://cafeland.vn/kien-thuc/tu-van-hoi-dap/18/page-4/");

$tins = $html->find("div.page-content div.box-content ul.list-type-14 li");

// echo $html;
echo count($tins);
echo "<br />";

foreach ($tins as $t) {
	$img = $t->find("a.wrap-img img",0)->src;
	// echo "<img src='$img'/>";

	$title = $t->find("h3 a",0)->innertext;

	$desc = $t->find("p",0)->innertext;

	$time = $t->find("span.news-date",0)->innertext;
	$link = $t->find("h3 a",0)->href;

	echo "<hr />";

	$u = 'tuvanhoidap/'.basename($img);
	file_put_contents($u, file_get_contents($img));
	$tenFile = basename($img);
	$title = htmlentities($title, ENT_QUOTES, "UTF-8");
	$desc = htmlentities($desc, ENT_QUOTES,"UTF-8");
	$time = htmlentities($time, ENT_QUOTES, "UTF-8");
	$link = htmlentities($link, ENT_QUOTES, "UTF-8");

	
	$qr ="INSERT INTO tuvanhoidap(title, description, image, time, link) VALUES ('$title','$desc','$tenFile','$time','$link')";

 	$result2 = mysqli_query($mysqli, $qr);


}
?>
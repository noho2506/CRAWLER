<?php 
require "simple_html_dom.php";
require "dbCon.php";
$html = file_get_html("https://kenhbds.vn/thong-tin/tin-tuc-su-kien");

$tins = $html->find("div#main div#page_content div#pg_content_center div.pg_content_ct_11");

echo count($tins);
echo "<hr />";
foreach ($tins as $t) {
	$title = $t->find("h2.h_tt_h2 a",0)->innertext;
	

	$time = $t->find("div.article_time",0)->innertext;

	$desc = $t->find("h3.h_tt_h3 p",0)->innertext;

	$img =$t->find("a img",0)->src;

	$link = $t->find("h2.h_tt_h2 a",0)->href;
	echo "<hr />";

	$u = 'tintuc/'.basename($img);
	file_put_contents($u, file_get_contents($img));
	$tenFile = basename($img);
	$title = htmlentities($title, ENT_QUOTES, "UTF-8");
	$desc = htmlentities($desc, ENT_QUOTES, "UTF-8");
	$time = htmlentities($time, ENT_QUOTES, "UTF-8");
	$link = htmlentities($link, ENT_QUOTES, "UTF-8");

	
	$qr ="INSERT INTO tintuc(title, description, image, time, link) VALUES ('$title','$desc','$tenFile','$time','$link')";

 	$result2 = mysqli_query($mysqli, $qr);

 	$id = mysqli_insert_id($mysqli);
 	if($result2){
 		$get = file_get_html($link); // cho nay bi sai. chay lai thu
 		$detail = $get->find("div#site div#wrap div#main div#page_content div#pg_content_center div.article_wrap div.article_content p",2)->innertext;
 		$update = "UPDATE tintuc set detail ='$detail' where id='$id'";
 		$result123 = mysqli_query($mysqli, $update);
 	}
}

?>
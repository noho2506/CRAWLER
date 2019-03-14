<?php 
require "dbCon.php";
require "simple_html_dom.php";
$html = file_get_html("http://kenhbds.vn/cho-thue/dat-nen-dat-tho-cu-l7/da-nang-t15");

$tins = $html->find(" div.tt_dong1 div.content_tooltip span.span_ngay");

echo count($tins);

// foreach ($tins as $t) {
	
	// $div2 = $t->find("div",1);
	// $a = $div2->find("a",0);
	// echo $href = $a->href;
	// echo "<hr />";

	// $div3 = $t->find("div",2);
	// $span = $div3->find("span",1);
	// echo count($span);
	// echo "<hr />";

	// echo $quan = $div3->find(".span_tinh_thanh");

	// echo $dientich = $div3->find(".span_dien_tich");

	// echo $gia = $div3->find(".span_gia");

	// $a = $t->find("a",0);
	// $title = $a->attr["title"];
	// $href = $a->href;
	
	// $img =$a->find("img",0)->src;
	// $u = 'dantri/'.basename($img);
	// file_put_contents($u, file_get_contents($img));

	// echo $desc = $t->find("div.mr1 div",0);
	// echo "<hr />";

	// //Insert database
	// $tenFile = basename($img);
	// $id =null;
	// $title = htmlentities($title, ENT_QUOTES, "UTF-8");
	// $desc = htmlentities($desc, ENT_QUOTES, "UTF-8");
	// $qr ="INSERT INTO test VALUES('$id', '$title' ,'$desc' ,'$tenFile')";
	// $ketqua = $mysqli->query($qr);
	// while($ar = mysqli_fetch_assoc($ketqua)){
	// 	$id = $ar['id'];
	// 	$title = $ar['title'];
	// 	$desc = $ar['description'];
	// 	$tenFile = $ar['image'];
	// }
// }
?>
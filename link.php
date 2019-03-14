<?php 
require "dbCon.php";
require "simple_html_dom.php";

$html = file_get_html("https://kenhbds.vn/thong-tin/ha-noi-xin-y-kien-quy-hoach-phu-xuyen-thanh-khu-do-thi-ve-tinh.html");
//echo $html;

echo $detail = $html->find("div#site div#wrap div#main div#page_content div#pg_content_center div.article_wrap div.article_content p",2)->innertext;

//echo "<img src='$img1' />";

//echo $detail = $html->find("div.row div.description-area div.col-xs-12 div.box-description",0)->innertext;
// foreach ($tins as $t) {
// 	echo $title = $t->innertext;
// 	echo "<hr />";
// 	$title = htmlentities($title, ENT_QUOTES, "UTF-8");
// 	$qr ="INSERT INTO district(name) VALUES('$title')";
// 	$ketqua = $mysqli->query($qr);
// 	if($ketqua){
// 		$sel_qr = 'SELECT * from district';
// 		$sel_res = $mysqli->query($sel_qr);
// 		while($ar = $sel_res->fetch_assoc()){
// 			$id = $ar['id'];
// 			$title = $ar['name'];
// 			echo $title;
// 		}
// 	}
// 	if($mysqli->query($qr) == TRUE){
// 		echo "<br /> Thêm data thành công";
// 	}else{
// 		echo "Lỗi: ".$qr."<br />".$mysqli->error;
// 	}
// }
?>

<!-- https://kenhbds.vn/thong-tin/tin-tuc-su-kien -->
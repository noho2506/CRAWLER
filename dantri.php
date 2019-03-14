<?php 
require "dbCon.php";
require "simple_html_dom.php";
$html = file_get_html("http://dantri.com.vn/the-gioi.htm");

$tins = $html->find("[data-boxtype='timelineposition']");

foreach ($tins as $t) {
	$a = $t->find("a",0);
	$title = $a->attr["title"];
	$href = $a->href;
	
	$img =$a->find("img",0)->src;
	$u = 'dantri/'.basename($img);
	file_put_contents($u, file_get_contents($img));

	echo $desc = $t->find("div.mr1 div",0);
	echo "<hr />";

	//Insert database
	$tenFile = basename($img);
	$id =null;
	$title = htmlentities($title, ENT_QUOTES, "UTF-8");
	$desc = htmlentities($desc, ENT_QUOTES, "UTF-8");
	$qr ="INSERT INTO test VALUES('$id', '$title' ,'$desc' ,'$tenFile')";
	$ketqua = $mysqli->query($qr);
	while($ar = mysqli_fetch_assoc($ketqua)){
		$id = $ar['id'];
		$title = $ar['title'];
		$desc = $ar['description'];
		$tenFile = $ar['image'];
	}
}
?>
<?php 
require "simple_html_dom.php";

$html = file_get_html("http://vnexpress.vn/");


$tins = $html->find("section.sidebar_home_1 article.list_news h4.title_news a");

// find luon tra ve mang
// <a href="xxxxx">yyyyy</a> ($tins la ARRAY co 53 ptu)
// yyyy $t->innertext;
// xxxx $t->href;

foreach ($tins as $t) {
	echo $t->innertext;
	echo "---";
	echo $t->href;
	echo "<hr />";
}

?>
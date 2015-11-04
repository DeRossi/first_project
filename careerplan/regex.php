<?php
// bt 1
$s1 = microtime(true);
$cba = file_get_contents("cba.html");
$pattern_cba = '/user_(.+?).jpg/'; // use greedy 
echo "BAI TAP 1";
preg_match_all($pattern_cba, $cba, $matches1);
echo '<pre>';
print_r($matches1);
echo '</pre>';

$e1 = microtime(true);
echo "<h3>".($e1-$s1)."</h3>";

// bt 2 - Hãy lấy nội dung nằm trong thẻ p với id ="weather"
$s2 = microtime(true);
$html = '<html><head><title>Greedy và Ungeedy</title></head><body><p id="weather">Nội dung cần lấy nằm ở đây</p><p>Nội dung khác</p></body></html>';

$parttern_1 = '/<p id="weather">(.*?)<\/p>/s';
$parttern_2 = '/(?<=<p id="weather">)(.*?)(?=<\/p>)/s'; // use lookahead and lookbehind
echo "BAI TAP 2";
if (preg_match($parttern_1, $html, $matches2)){
		echo '<pre>';
		print_r($matches2); 
		echo '</pre>';
}

$e2 = microtime(true);
echo "<h3>".($e2-$s2)."</h3>";

// bt 3 - lấy giá trị của tham số  espv trong url :
$s3 = microtime(true);
$url = 'https://www.google.com/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#q=b%C3%A0i%20t%E1%BA%ADp%20regular%20expression'; //
echo "BAI TAP 3";
$pattern_pos = '/[^\s]+(?=&espv)/';
$pattern_neg = '/espv[^,]+/';
$pattern_neg2 = '/espv=(.+?)&ie/'; // use greedy 
preg_match_all($pattern_neg2, $url, $matches3);
		echo '<pre>';
		print_r($matches3);
		echo '</pre>';

$e3 = microtime(true);
echo "<h3>".($e3-$s3)."</h3>";

// bt 4 - hãy bắt nội dung của thẻ href nhưng chỉ lấy những href khác (#) hoặc khác rỗng ""
$s4 = microtime(true);
$html4 = '<ul><li><a href="google.com">google.com</a></li><li><a href="facebook.com">facebook.com</a></li><li><a href="#">nothing</a></li><li><a href="twitter.com">twitter.com</a></li><li><a href="">nothing</a></li><li><a href="likedin.com">likedin.com</a></li></ul>';
//$html4 = preg_replace('/#/', '', $html4);
echo "BAI TAP 4";
/*preg_match_all('/<a href="(.*?)">(.*?)<\/a>/S', $html4, $matches4);
for ($i=0; $i < count($matches4); $i++) { 
		echo($matches4[1][$i]);
		if ($matches4[1][$i]==='') {
				unset($matches4[1][$i]);
				unset($matches4[1][4]);
		}
}*/
preg_match_all('/<a href="(.*?)">(.*?)<\/a>/s', $html4, $matches4);
preg_match_all('/<a href="(.*?)">(.*?)<\/a>/s', $html4, $matches4_copy);
$matches4_1[1]  = preg_grep('/^#/', $matches4[1]);
$matches4_2[1]  = preg_grep('/^$/', $matches4_copy[1]);
$matches4_12[1] = array_merge($matches4_1[1], $matches4_2[1]);
$matches4[1]    = array_diff($matches4[1], $matches4_12[1]);

echo '<pre>';
print_r($matches4_1[1]);
echo '</pre>';
echo '<pre>';
print_r($matches4_2[1]);
echo '</pre>';
echo '<pre>';
print_r($matches4[1]);
echo '</pre>';

$e4 = microtime(true);
echo "<h3>".($e4-$s4)."</h3>";

?>
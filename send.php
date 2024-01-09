<?php
// ob_start(); bu kod head erin üstünde bir şey bastırılırsa hata veriyor onu engellemek için var şu an kapalı çünkü üstünde echo kullanmadım.
touch("../index.html"); //Dosya oluşturma silmek için unlink kullanılıyor
date_default_timezone_set('Europe/Istanbul');
$title = $_GET['title'];
$section = $_GET['section'];
$content = $_GET['content'];
$date = date('d.m.Y H:i:s');
$dosya = fopen('index.html' , 'a+');

fwrite($dosya , '
		<div class="out">
			<div class="in"><h3>'.$title.'</h3><br><br><span id="date">'.$date.'</span><span id="konu">'.$section.'</span></div>
			<p>'.$content.'</p>
			<br>
		</div><br>
');

header('Location: index.html');
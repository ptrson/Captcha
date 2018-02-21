<?php
	header("Content-type: image/png"); 
	
	$n1 = rand(1,9); 
	$n2 = rand(1,9);
	$n3 = $n1 + $n2;
	$string = strval($n1) . '+' . strval($n2);

	$obrazek = ImageCreate(60, 20) or die("Serwer posiada biblioteke GD?");
	//255, 255, 255 - czyli kolor bialy
	$kolor_tla = ImageColorAllocate($obrazek, rand(150,255), rand(150,255), rand(150,255));
	//0, 0, 0 - czyli kolor czarny
	$kolor_tekstu = ImageColorAllocate($obrazek, rand(0,130), rand(0,130), rand(0,130));

	ImageString($obrazek, 32, 5, 0, $string, $kolor_tekstu);


	$cBlack=ImageColorAllocate($obrazek,0,0,0); 

	ImageLine($obrazek, rand(2,10), rand(7,14), rand(21,48), rand(12,17),$cBlack);

	Imagepng($obrazek);

	session_start();
	$_SESSION['captcha'] = strval($n3);

?>

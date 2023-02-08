<?php

$q = @$_GET["q"];

$messageURL = urldecode( $q );

if(!$messageURL) {
    $messageURL = "DepremStory";
}

// resmin boyutlarını belirleyin
$width = 1080;
$height = 1920;

// resmi oluşturun
$image = imagecreatetruecolor($width, $height);

// resmin arka plan rengini belirleyin
$background_color = imagecolorallocate($image, 255, 22, 22);
imagefill($image, 0, 0, $background_color);

// resmin üstüne yazıyı belirleyin
$text = $messageURL;
$text_color = imagecolorallocate($image, 255, 255, 255);
$font_file = 'fonts/r.ttf';
$font_size = 60;
$text_width = $width - 100; // 20px sola ve sağa margin verin
$lines = explode("\n", wordwrap($text, $text_width / $font_size, "\n"));

// yazıyı resmin üstüne satır satır yazın
$line_height = $font_size + 20;
$y = ($height - count($lines) * $line_height) / 2;
foreach ($lines as $line) {
  $text_box = imagettfbbox($font_size, 0, $font_file, $line);
  $x = ($width - $text_box[4]) / 2;
  imagettftext($image, $font_size, 0, $x, $y, $text_color, $font_file, $line);
  $y += $line_height;
}

// resmi tarayıcıya gönderin
header('Content-Type: image/jpeg');
imagejpeg($image);

// bellekteki resmi serbest bırakın
imagedestroy($image);
?>

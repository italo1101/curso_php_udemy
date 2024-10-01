<?php
$image = imagecreatefromjpeg("image" . DIRECTORY_SEPARATOR . "certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext(
    $image,
    32,
    0,
    320,
    150,
    $titleColor,
    "fonts" . DIRECTORY_SEPARATOR . "Bevan" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf",
    "CERTIFICADO"
);

imagettftext(
    $image,
    32,
    0,
    400,
    350,
    $titleColor,
    "fonts" . DIRECTORY_SEPARATOR . "Playball" . DIRECTORY_SEPARATOR . "Playball-Regular.ttf",
    "Marcelo"
);

$completionText = "Concluído em: " . date("d/m/Y");
imagettftext(
    $image,
    16,
    0,
    330,
    380,
    $titleColor,
    "fonts" . DIRECTORY_SEPARATOR . "Bevan" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf",
    $completionText
);

header("Content-type: image/jpeg");
imagejpeg($image);
imagedestroy($image);

<?php
    $image = imagecreatefromjpeg("image/certificado.jpg");

    $titleColor = imagecolorallocate($image, 0, 0, 0);
    $gray = imagecolorallocate($image, 100, 100, 100);

    imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
    imagestring($image, 5, 440, 350, "Marcelo", $titleColor);
    $texto = "Concluido em: ";
    imagestring($image, 3, 440, 370, mb_convert_encoding($texto, 'UTF-8', 'ISO-8859-1') . date("d/m/Y"), $titleColor);

    header("Content-type: image/jpeg");
    
    imagejpeg($image);

    imagedestroy($image);
?>
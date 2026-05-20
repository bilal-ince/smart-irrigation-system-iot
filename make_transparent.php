    <?php
$file = '/Applications/XAMPP/xamppfiles/htdocs/smart-irrigation-system-iot/favicon.png';
$img = imagecreatefromjpeg($file);
if (!$img) {
    die("Resim yuklenemedi");
}

$width = imagesx($img);
$height = imagesy($img);

$newImg = imagecreatetruecolor($width, $height);
imagealphablending($newImg, false);
imagesavealpha($newImg, true);
$transparent = imagecolorallocatealpha($newImg, 255, 255, 255, 127);
imagefilledrectangle($newImg, 0, 0, $width, $height, $transparent);

for ($x = 0; $x < $width; $x++) {
    for ($y = 0; $y < $height; $y++) {
        $rgb = imagecolorat($img, $x, $y);
        $r = ($rgb >> 16) & 0xFF;
        $g = ($rgb >> 8) & 0xFF;
        $b = $rgb & 0xFF;
        
        // If it's very close to white, make it transparent
        if ($r > 240 && $g > 240 && $b > 240) {
            imagesetpixel($newImg, $x, $y, $transparent);
        } else {
            // Keep original pixel but preserve alpha (alpha 0 = fully opaque in GD)
            $color = imagecolorallocatealpha($newImg, $r, $g, $b, 0);
            imagesetpixel($newImg, $x, $y, $color);
        }
    }
}

imagepng($newImg, $file);
imagedestroy($img);
imagedestroy($newImg);
echo "Basariyla PNG olarak kaydedildi ve arkaplan silindi.";
?>

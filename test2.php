<?php
mb_internal_encoding('utf-8');

// 2 задание

$path = ''; // Текущий каталог
$file = 'pic.png';

$banner_width = 200;
$banner_height = 100;

if (imagetypes() & IMG_PNG) {
    header("Content-type: image/png");

    photo_to_banner($path, $file, $banner_width, $banner_height);

}else{
    die(mb_convert_encoding("Поддержки PNG нет", 'cp-1251', 'utf-8'));
}


function photo_to_banner($path, $file, $banner_width, $banner_height){
    list($width, $height) = getimagesize($path.$file);
    $new_width =  $banner_width;
    $new_height = $banner_height;

// ресэмплирование
    $image_p = imagecreatetruecolor($new_width, $new_height);
    $image = imagecreatefrompng($path. $file);
    imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

    imagepng($image_p, null, 9, PNG_NO_FILTER); //Сохраняем созданное изображение по указанному пути в формате png
    imagedestroy($image_p);// Очищаем память, занятую рисунком. Это актуально, т.к. рисунок имеет большие размеры

 }















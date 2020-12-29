<?php

$image = imagecreatefromjpeg("./php-test-colors.jpg");

$width = imagesx($image);
$height = imagesy($image);
$colors_indexes = [];
$colors_rate = [];

for($x = 0; $x < $width; $x++)
{
    for($y = 0; $y < $height; $y++)
    {
        $color_index = imagecolorat($image, $x, $y);
        $rgba = imagecolorsforindex($image, $color_index);
        $colors_array[$x][$y] = dechex($rgba['red']).dechex($rgba['green']).dechex($rgba['blue']);
    }
}

for($x = 0; $x < $width; $x++)
{
    for($y = 0; $y < $height; $y++)
    {
        $hex = (string)$colors_array[$x][$y];
        if(!empty($colors_rate[$hex]))
        {
            $colors_rate[$hex] += 1;
        } else {
            $colors_rate[$hex] = 1;
        }
    }
}

array_multisort($colors_rate, SORT_ASC);
$color = array_key_last($colors_rate);
$times = end($colors_rate);
echo "Цвет #{$color} встретился {$times}";
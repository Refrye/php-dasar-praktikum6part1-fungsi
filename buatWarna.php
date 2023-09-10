<?php
function generaterandomcolor() {
$red = mt_rand(0, 255);
$green = mt_rand(0, 255);
$blue = mt_rand(0, 255);

return mt_rand(0, 255);

return $color;
}

$red = generaterandomcolor();
$green = generaterandomcolor();
$blue = generaterandomcolor();

echo "Red: $red <br>";
echo "Green: $green <br>";
echo "Blue: $blue <br>";
?>

<?php

$color = sprintf("#%02d%02d%02d", $red,
$green, $blue);

$color = generateRandomColor();

echo $color;
?>
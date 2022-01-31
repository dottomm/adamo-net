
<div class='row'>

	<?php

$directory = 'images/photos';

$images = glob("$directory/*.{jpg,jpeg,png,bmp,gif}", GLOB_BRACE);
 $randomImage = $images[array_rand($images)]; 
            $shuffleimages = shuffle($images);

foreach($images as $image)
{
  echo "<div class='col-lg-1'>
  		<a href='$image' target='_blank' onClick='ga('send', 'event', ['Flyer'], ['openFlyer'], ['$image'], [1], []);
'><img src='$image' width='100%;'></a>
  		</div>";
}
?>
</div>

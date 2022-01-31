
<div class='row'>
<?php

$directory = 'images/flyers';
$images = glob("$directory/*.{jpg,jpeg,png,bmp,gif}", GLOB_BRACE);foreach($images as $image)
{
  echo "<div class='col-lg-3'>
  		<p><a href='$image' target='_blank' onClick='ga('send', 'event', ['Flyer'], ['openFlyer'], ['$image'], [1], []);
'><img src='$image' width='100%;'></a></p>
  		</div>";
}
?>
</div>

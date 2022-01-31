

	<?php

$directory = 'images/photos';

$images = glob("$directory/*.{jpg,JPG,jpeg,png,bmp,gif}", GLOB_BRACE);
 $randomImage = $images[array_rand($images)]; 
            $shuffleimages = shuffle($images);

$a = 0;


foreach($images as $image)
{
$myImg = $a++;
  echo "
  <div class='col-lg-1' id=''>
  	<!-- Trigger the Modal -->
	<img id='myImg$a' src='$image' alt='The Chicken Thieves' style='width:100%;max-width:300px'>

		<!-- The Modal -->
		<div id='myImg$a' class='modal'>

		 	<!-- The Close Button -->
		  	<span class='close' >&times;</span>

		  	<!-- Modal Content (The Image) -->
		  	<img class='modal-content' id='$image'>

	  		<!-- Modal Caption (Image Text) -->
	  		<div id='caption'>Fuck Yeah!</div>
		</div>
	</div>



<div id='myModal$a' class='modal' >
  <span class='close $a' type='button' data-dismiss='myImg$a'>&times;</span>
  <img class='modal-content' id='$a'>
  <div id='caption'></div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal$a');

// Get the image and insert it inside the modal - use its 'alt' text as a caption
var img = document.getElementById('myImg$a');
var modalImg = document.getElementById('$a');
var captionText = document.getElementById('caption');
img.onclick = function(){
  modal.style.display = 'block';
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName('close $a')[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = 'none';

}
</script>


";
}
?>



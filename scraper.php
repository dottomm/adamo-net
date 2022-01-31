<?php
# create and load the HTML
include('simple_html_dom.php');
$html = new simple_html_dom();
// $html->load("<html><body>
// 			<p>Hello World!</p>
// 			<p>We're here</p>
// 			</body></html>");

// Load a file
$html->load_file('http://calstat.org/edgenewsletter.html');
 
# get an element representing the second paragraph
$element = $html->find("");
 
# modify it
$element[0]->innertext .= "";
 
# output it!
echo $html->save();
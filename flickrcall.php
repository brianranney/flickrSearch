<?php

echo    '<form action="flickrcall.php" method="post">
            <input type="text" name="search" placeholder="S&ouml;k Flickr">
            <input type="submit">
        </form>';

require_once('flickr.php'); 
$Flickr = new Flickr; 
$data = $Flickr->search($_POST["search"]); 
foreach($data['photos']['photo'] as $photo) { 
	echo '<img src="' . 'http://farm' . $photo["farm"] . '.static.flickr.com/' . $photo["server"] . '/' . $photo["id"] . '_' . $photo["secret"] . '.jpg">'; 
}

?>
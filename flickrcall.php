<?php
require_once('flickr.php'); 
?>

<!DOCTYPE html>
<html>
    <head>

        <title>Flickr Gallery Creator</title>


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="style.css" type="text/css" />
        <link href="http://fonts.googleapis.com/css?family=Rochester" rel="stylesheet" type="text/css">

    </head>
    <body>
    <div class="resultHeader">
        <form action="flickrcall.php" method="post" class="centerHeaderForm" autocomplete="off">
            <input type="text" class="searchBar" name="search" placeholder="Search"><br>
            <input id="submit" type="submit">
        </form>
        <a href="index.php" class="home"><h2>Home</h2></a>
    </div>
    <div class="resultWrap">
    <div id="backToResults" class="resultsContainer">
        <button class="backToResults">Back to Results</button> 
    </div>
    <div class="resultsContainer">
    <p id="resultsText" class="instructions">Select the images you want to put in the gallery then click "Show Gallery" below.</p>
        
<?php

    $Flickr = new Flickr; 
    $data = $Flickr->search($_POST["search"]);
    $counter = 0;

    foreach($data['photos']['photo'] as $photo) { 
        $counter++;
        echo '<a href="#img' . $counter . '" class="imgLink" onclick="return false;"><img class="large" onclick="select(this);" src="' . 'http://farm' . $photo["farm"] . '.static.flickr.com/' . $photo["server"] . '/' . $photo["id"] . '_' . $photo["secret"] . '.jpg"></a>'; 
        echo '<a href="#_" class="lightbox" id="img' . $counter . '"><img src="' . 'http://farm' . $photo["farm"] . '.static.flickr.com/' . $photo["server"] . '/' . $photo["id"] . '_' . $photo["secret"] . '.jpg"></a>'; 
    }
?>
    </div>
    <div class="resultsContainer">
        <button id="showGallery" class="showGallery">Show Gallery</button> 
    </div>
    </div>
    
    <script type="text/javascript" src="imageSelector.js"></script>
    <script type="text/javascript" src="showGallery.js"></script>
    <script type="text/javascript" src="backToResults.js"></script>
    </body>
</html>
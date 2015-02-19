document.getElementById("showGallery").addEventListener("click", show);
document.getElementById("showGallery").addEventListener("click", hideShow);
document.getElementById("showGallery").addEventListener("click", disableSelect);
document.getElementById("showGallery").addEventListener("click", enableLightbox);
document.getElementById("showGallery").addEventListener("click", removeBG);
document.getElementById("showGallery").addEventListener("click", hideInstructions);

function show() {
    var img = document.getElementsByTagName("img");
    for (var i = 0; i < img.length; i++) {
        if (img[i].classList.contains("large")) {
            img[i].style.display = "none";
        } else if (img[i].classList.contains("selected")) {
            img[i].classList.toggle("selected");
            img[i].classList.toggle("small");
        }
    }
}

function hideShow() {
    document.getElementById("showGallery").style.display = "none";
}

function disableSelect() {
    enabled = false;
}

function enableLightbox() {
    var link = document.getElementsByTagName("a");
    for (var i = 0; i < link.length; i++) {
        link[i].onclick = null;
    }
}

function removeBG() {
    var html = document.getElementsByTagName("html");
    for (var i = 0; i < html.length; i++) {
        html[i].style.background = "#ffffff";
    }
}

function hideInstructions() {
    document.getElementById("resultsText").style.display = "none";
}
    
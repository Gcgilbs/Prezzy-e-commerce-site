let slideindex = 1;
showslides(slideindex);

function plusslides(n) {
    showslides((slideindex += n));
}

function currentslide(n) {
    showslides((slideindex = n));
}

function showslides(n) {
    let i;
    let slides = document.getElementsByClassName("itemimagemain");
    let itemimage2 = document.getElementsByClassName("itemimage2");
    if (n > slides.length) {
        slideindex = 1;
    }
    if (n < 1) {
        slideindex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < itemimage2.length; i++) {
        itemimage2[i].className = itemimage2[i].className.replace("active", "");
    }
    slides[slideindex - 1].style.display = "block";
    itemimage2[slideindex - 1].className += " active";
}

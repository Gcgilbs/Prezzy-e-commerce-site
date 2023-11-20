const itemimages = document.querySelectorAll('.itemimage');

itemimages.forEach((itemimageall) => {
    let slideindex = 1;
    showslides(slideindex);

    const prevButton = itemimageall.querySelector('.prev');
    const nextButton = itemimageall.querySelector('.next');
    const itemimage2 = itemimageall.querySelectorAll('.itemimage2'); // Select all image elements

    prevButton.addEventListener('click', () => plusslides(-1));
    nextButton.addEventListener('click', () => plusslides(1));

    // Add a click event listener to each itemimage2
    itemimage2.forEach((img, index) => {
        img.addEventListener('click', () => {
            // Set slideindex to the clicked image's index + 1
            slideindex = index + 1;
            // Call currentslide with the updated slideindex
            currentslide(slideindex);
            
            for (i = 0; i < itemimage2.length; i++) {
                itemimage2[i].className = itemimage2[i].className.replace("active", "");
            }
            itemimage2[slideindex - 1].className += " active";
        });
    });

    function plusslides(n) {
        showslides((slideindex += n));
    }

    function currentslide(n) {
        showslides((slideindex = n));
    }

    function showslides(n) {
        let i;
        let slides = itemimageall.getElementsByClassName("itemimagemain");

        if (n > slides.length) {
            slideindex = 1;
        }
        if (n < 1) {
            slideindex = slides.length;
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideindex - 1].style.display = "block";
        
    }

});

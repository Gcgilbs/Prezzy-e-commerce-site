const select = document.querySelectorAll('.select');
// const optionup = document.querySelector('.optionup');
// const optiondown = document.querySelector('.optiondown');


select.forEach((selectall) => {

    // Find the corresponding optionup and optiondown elements. Both are same thing

    // const optionup = this.parentElement.querySelector('.optionup');
    // const optiondown = this.parentElement.querySelector('.optiondown');

    //OR
    const optionup = selectall.querySelector('.optionup');
    const optiondown = selectall.querySelector('.optiondown');
    const desc3 = selectall.querySelector('.desc3');

    // diplay the order cart for select option
    desc3.addEventListener("click", function (event) {

        select.forEach((otherSelect) => {
            if (otherSelect !== selectall) {
                const otherOptionUp = otherSelect.querySelector('.optionup');
                const otherOptionDown = otherSelect.querySelector('.optiondown');

                otherOptionUp.style.top = ''; // Change this to the initial state
                otherOptionUp.style.opacity = ''; // Change this to the initial state
                otherSelect.style.backgroundColor = ''; // Change this to the initial state
                otherOptionDown.style.bottom = ''; // Change this to the initial state
                otherOptionDown.style.opacity = ''; // Change this to the initial state
            }
        });

        if (!optiondown.contains(event.target)) {
            optionup.style.top = '-155px';
            optionup.style.opacity = '1';
            selectall.style.backgroundColor = '#050521';
            optiondown.style.bottom = '0px';
            optiondown.style.opacity = '1';

            // console.log(20)
        }
        event.stopPropagation(); // Prevent the click event from propagating to document
    });



    
    const minus = selectall.querySelector('.minus');
    const plus = selectall.querySelector('.plus');
    const number = selectall.querySelector('.number');

    // increasing and reducing the order number
    plus.addEventListener("click", function () {
        // Increment the number when the "+" button is clicked
        number.textContent = parseInt(number.textContent) + 1;
    });

    minus.addEventListener("click", function () {
        // Decrement the number when the "-" button is clicked, but ensure it doesn't go below 1
        const currentNumber = parseInt(number.textContent);
        if (currentNumber > 1) {
            number.textContent = currentNumber - 1;
        }
    });



    // const border = selectall.querySelectorAll('.border');

    // border.forEach((borderall) => {
    // borderall.addEventListener("click", function () {

    // borderall.style.border = '1px solid #050521';
    // });
// });




});



// Add a click event listener to the document to close all .select elements
document.addEventListener("click", function (event) {

    select.forEach((selectall) => {

        const optionup = selectall.querySelector('.optionup');
        const optiondown = selectall.querySelector('.optiondown');

        if (!selectall.contains(event.target)) {

            optionup.style.top = '-79px';
            optionup.style.opacity = '-1';
            selectall.style.backgroundColor = 'inherit';
            optiondown.style.bottom = '-32px';
            optiondown.style.opacity = '-1';

        }
    });
});


    

const itemimage = document.querySelector('.itemimage');



function ajaxRequest(method, url) {

    const xhr = new XMLHttpRequest();

    xhr.open(method, url)

    xhr.addEventListener('load', () => {
        // const {data} = JSON.parse(xhr.response);
        if (xhr.responseText == 'success') {
            swal("Good job!", "Post published!", "success");
        }
    })

    xhr.send();


}



const minus = itemimage.querySelector('.minus');
const plus = itemimage.querySelector('.plus');
const number = itemimage.querySelector('.number');

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



const border = itemimage.querySelectorAll('.border');
let selectedElement = null; // Initialize the selected element

// Initialize a counter for unique IDs
let inputCounter = 0;

border.forEach((borderall) => { 
    borderall.addEventListener("click", function () { 
        if (borderall !== selectedElement) {
            // Check if there is a selected element
            if (selectedElement) {
                // Remove the hidden input from the previously selected element
                const hiddenInput = selectedElement.querySelector('input[name="totalsize"]');
                if (hiddenInput) {
                    selectedElement.removeChild(hiddenInput);
                }

                // Restore the border style of the previously selected element
                selectedElement.style.border = '1px solid #05052180';
                selectedElement.style.backgroundColor = '#fff';
            }

            // Extract the number from the text content
            const textContent = borderall.textContent;
            const number = parseInt(textContent.match(/\d+/));

            // Check if a number was found
            if (!isNaN(number)) {
                // Create a hidden input and set its value to the extracted number
                const newInputBorder = document.createElement('input');
                newInputBorder.type = 'hidden';
                newInputBorder.name = 'totalsize';
                newInputBorder.value = number;
                newInputBorder.id = `uniqueInputId_${inputCounter}`; // Set a unique id for the input

                // Increment the counter for the next input
                inputCounter++;

                // Append the hidden input to the clicked element
                borderall.appendChild(newInputBorder);

                // console.log(borderall.appendChild(newInputBorder))

                // Change the border style
                borderall.style.border = '1px solid #050521';
                borderall.style.backgroundColor = '#05052130';

                // Update the selected element
                selectedElement = borderall;

                lastSelectedTotalSize = number; // Store the last selected totalsize

                // To fetch the specific hidden input later
                const fetchedInput = document.getElementById('uniqueInputId_0');

                if (fetchedInput) {
                    itemimage.addEventListener('click', (e) => {
                        if (e.target.classList.contains('titleitem5')) {
                            const postId = itemimage.getAttribute('data-id');
                            // const targetBtn = e.target;

                            // create input(hidden) for the number to submit data
                            const newnumber = itemimage.querySelector('.number');
                            const newinput = document.createElement('input');

                            newinput.type = 'hidden';
                            newinput.name = 'totalnumber';
                            newinput.value = newnumber.textContent;

                            newnumber.appendChild(newinput);

                            const ordernumber = newinput.value;
                            // const ordersize = newInputBorder.value;

                            ajaxRequest('GET', `?cartlist_id=${postId}&totalnumber=${ordernumber}&totalsize=${lastSelectedTotalSize}`);
                            // console.log(newInputBorder.value)
                            // console.log(newinput.value)

                            window.location.reload();
                           
                        }
                    });
                }
            }
        }
    });
});



const carterror = document.querySelector('.error');

if(border !== selectedElement){
itemimage.addEventListener('click', (e) => {
          
    if (e.target.classList.contains('titleitem5')) {
        carterror.style.display = 'block'; 
    }
});


// Add a click event listener to the document to close all elements
carterror.addEventListener("click", function (event) {
        if (carterror.style.display = 'block') {

            carterror.style.display = 'none'; 
        }
});
}




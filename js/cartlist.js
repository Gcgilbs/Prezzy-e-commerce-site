const selects = document.querySelectorAll('.select');


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



selects.forEach((select) => {

    const border = select.querySelectorAll('.border');
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

                    select.addEventListener('click', (e) => {
                        if (e.target.classList.contains('fa-shopping-cart')) {
                            const postId = e.target.parentElement.parentElement.getAttribute('data-id');
                            // const targetBtn = e.target;

                            // create input(hidden) for the number to submit data
                            const newnumber = select.querySelector('.number');
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

                            const thenumber2 = document.getElementById('thenumber2');
                            // Add +1 to cartlist when clicked on fa-shopping-cart
                            thenumber2.textContent = parseInt(thenumber2.textContent) + 1;

                            const optionup = select.querySelector('.optionup');
                            const optiondown = select.querySelector('.optiondown');

                            optionup.style.top = '-79px';
                            optionup.style.opacity = '-1';
                            select.style.backgroundColor = 'inherit';
                            optiondown.style.bottom = '-32px';
                            optiondown.style.opacity = '-1';

                            window.location.reload();

                            
                            // const cartbody1a = document.querySelector('.cartbody1');
                            // const cartbody2a = document.querySelector('.cartbody2a');
                            // const cartbody2b = document.querySelector('.cartbody2b');
                            // const cartbody2c = document.querySelector('.cartbody2c');
                            // const cartnumber = document.querySelector('.cartnumber');

                            // cartbody2b.innerHTML = 'This is me here';
                            
                            // console.log(79)
                            // image.forEach((imageall) => {
                            // const imageup = imageall.querySelector('.imageup');

                            // imageup.style.backgroundColor = '#ACA9BB';
                            // });

                        }
                    });
                }
                }
            }
        });
    });
});




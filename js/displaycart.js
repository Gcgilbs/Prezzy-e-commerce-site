const cartbars = document.getElementById('cartbars');
const viewcart = document.getElementById('viewcart');


// function ajaxRequest(method, url) {

//     const xhr = new XMLHttpRequest();

//     xhr.open(method, url)

//     xhr.addEventListener('load', () => {
//         // const {data} = JSON.parse(xhr.response);
//         if (xhr.responseText == 'success') {
//             swal("Good job!", "Post published!", "success");
//         }
//     })

//     xhr.send();


// }


viewcart.addEventListener("click", function () {
    
    if (cartbars.style.right = '-350px') {
        cartbars.style.right = '0px';
    }
});

document.addEventListener("click", function (event) {
    if (!viewcart.contains(event.target) && !cartbars.contains(event.target)) {
        cartbars.style.right = '-350px';
    }
});


const cartbody = document.querySelectorAll('.cartbody');


cartbody.forEach((cartbodyall) => {

const minus = cartbodyall.querySelector('.cartminus');
const plus = cartbodyall.querySelector('.cartplus');
const number = cartbodyall.querySelector('.cartnumber');

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


// const cartbody3 = cartbodyall.querySelector('.cartbody3');

// cartbody3.addEventListener("click", () => {

//     const newinput = document.createElement('input');

//     newinput.type = 'hidden';
//     newinput.name = 'productremove';
//     // newinput.value = newnumber.textContent;

//     // newnumber.appendChild(newinput);

//     // console.log(postId)
//     // ajaxRequest('POST', `?removecart_id=${postId}`);

// });

});



// Function to update the subtotal
function updateSubtotal() {
    const subtotalElement = document.getElementById('subtotalAmount');
    const totalAmountContainer = document.getElementById('cartTotalAmountContainer');
    const totalAmountElements = totalAmountContainer.querySelectorAll('.cartbody2c');

    let totalAmount = 0;

    // Loop through each cart item's total amount element
    totalAmountElements.forEach(element => {
        // Extract the numerical value and add it to the total
        const priceText = element.textContent.replace(/[^0-9.-]+/g, ''); // Remove non-numeric characters
        const priceValue = parseFloat(priceText);
        totalAmount += priceValue;
    });

    // Update the subtotal element with the calculated total amount
    subtotalElement.textContent = totalAmount.toLocaleString(); // Display with 2 decimal places
}
// Call the updateSubtotal function initially and whenever needed
updateSubtotal();









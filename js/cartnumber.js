const thenumber1 = document.getElementById('thenumber1');
const high1 = document.getElementById('high1');
const thenumber2 = document.getElementById('thenumber2');
const high2 = document.getElementById('high2');



window.addEventListener("load", function () {

    // Get the current value from the content of the 'thenumber1' element
    const value = parseInt(thenumber1.textContent, 10);
    const value2 = parseInt(thenumber2.textContent, 10);

    if (value > 9 & value < 99) {
        high1.style.padding = '2px 2px';
    } else if (value > 99) {
        high1.style.padding = '2.5px 0';
        high1.style.width = '17px';
        high1.style.height = '17px';
    }

    if (value2 > 9 & value2 < 99) {
        high2.style.padding = '2px 2px';
    } else if (value2 > 99) {
        high2.style.padding = '2.5px 0';
        high2.style.width = '17px';
        high2.style.height = '17px';
    }

});


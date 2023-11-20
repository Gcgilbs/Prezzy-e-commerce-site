const thenumber1 = document.getElementById('thenumber1');
const high1 = document.getElementById('high1');



window.addEventListener("load", function () {

    // Get the current value from the content of the 'thenumber1' element
    const value = parseInt(thenumber1.textContent, 10);


    if (value > 9 & value < 100) {
        high1.style.padding = '2px 2px';
    } else if (value > 99 & value < 1000) {
        high1.style.padding = '2.5px 0';
        high1.style.width = '17px';
        high1.style.height = '17px';
    }  else if (value > 999) {
        high1.style.padding = '6px 0';
        high1.style.width = '23px';
        high1.style.height = '23px';
        high1.style.top = '-8px';
    }

});








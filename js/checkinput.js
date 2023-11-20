

document.addEventListener('DOMContentLoaded', function() {
    const checkforms = document.querySelectorAll('.checkform');

    checkforms.forEach(function(checkform) {
      const checkbox = checkform.querySelector('input[type="checkbox"]');
      
      checkform.addEventListener('click', function() {
        // Toggle the checkbox when the .checkform div is clicked
        checkbox.checked = !checkbox.checked;

        // Change the background color based on the checkbox state
        if (checkbox.checked) {
          checkform.style.backgroundColor = '#00cc00'; /* Change to your desired background color */
        } else {
          checkform.style.backgroundColor = ''; /* Reset background color when unchecked */
        }
      });
    });
  });

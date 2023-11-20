const imagedowns = document.querySelectorAll('.imagedown');



function ajaxRequest(method,url){
         
    const xhr = new XMLHttpRequest();

       xhr.open(method,url)

       xhr.addEventListener('load', ()=>{
           // const {data} = JSON.parse(xhr.response);
            if(xhr.responseText == 'success'){
               swal("Good job!", "Post published!", "success");
            }
       })

       xhr.send();


}

imagedowns.forEach((imagedown) => {
    imagedown.addEventListener('click', (e) => {
      if (e.target.classList.contains('fa-heart')) {
        const postId = e.target.parentElement.parentElement.getAttribute('data-id');
        const targetBtn = e.target;
        console.log(postId)
        ajaxRequest('GET', `?wishlist_id=${postId}`);

        // Toggle the classes
        targetBtn.classList.toggle('addwishlist');
        targetBtn.classList.toggle('removewishlist');

        
        const thenumber1 = document.getElementById('thenumber1');
        // Add +1 to wishlist when clicked on fa-heart
        if(targetBtn.classList.contains('addwishlist')){
          thenumber1.textContent = parseInt(thenumber1.textContent) + 1;
        }
        
        // Remove -1 from wishlist when clicked on fa-heart
        if(targetBtn.classList.contains('removewishlist')){
            thenumber1.textContent = parseInt(thenumber1.textContent) - 1;
        }
      }
    });
  });




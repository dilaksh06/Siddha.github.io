/* let searchbox= document.querySelector ('#searchInput');
let images=document.querySelectorAll('.product .container .card');

searchbox.oninput = () => {
    images.forEach(hide=>hide.style.display='none');
    let value=searchbox.value;
    images.forEach(filter=>{
        let title =filter.getAttribute ('data-title');
        if (value==title){
            filter.style.display='block';

        }
if(searchbox.value==''){
    filter.style.display='block';
}
    });
};

*/

let searchbox = document.querySelector('#searchInput');
let images = document.querySelectorAll('.product .container .card');

searchbox.oninput = () => {
    let value = searchbox.value.toLowerCase();

    images.forEach(filter => {
        let title = filter.getAttribute('data-title');
        if (title) { // Check if data-title attribute exists
            title = title.toLowerCase(); // Convert to lowercase if it's not null
            if (title.includes(value)) {
                filter.style.display = 'block';
            } else {
                filter.style.display = 'none';
            }
        }
    });
};



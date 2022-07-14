let iconFavor = document.querySelector('.fa-scale-balanced'); 
iconFavor.addEventListener('click', selectFavor);
function selectFavor(){
    let listFavorit = document.querySelector('.favorList'); 
    listFavorit.classList.toggle("favorListVision");
}
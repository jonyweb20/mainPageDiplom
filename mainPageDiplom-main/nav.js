let labPhone = document.querySelector('.labelPhone');
let phoneListNumber = document.querySelector('.phoneNumber');

//Эффект телефона

labPhone.addEventListener('click', function (){
        phoneListNumber.classList.toggle("phoneBlock");
        console.log(phoneListNumber);
  })

//Стрелки навигации
let moveLeft = document.querySelector('.moveLeft');
let arrowRight = document.querySelector('.arrowRight');
let arrowCenter = document.querySelector('.arrowCenter');
  let start = Date.now();
let timer = setInterval(function(){
   let timebebin = Date.now() -  start;
    if(timebebin > 3000){
        
        clearInterval(timer);
        return
    }
    draw(timebebin);
},2000);
function draw(timebebin){
    let title = document.getElementsByTagName('title');
    
    if(moveLeft || arrowRight || arrowCenter){
        let x;
        if( window.innerWidth >= 972 ){
            x = 200;
 } else {
     x=100;
    
 } 
        
        console.log(x);
         moveLeft.style.transform = 'translate('+ x + 'px, 0)';
    arrowRight.style.transform = 'translate('+ -x + 'px, 0)';
    if(title[0].innerHTML ==="Index"){
        arrowCenter.style.opacity = 1; 
    }   
       
    }
}

//Выпадающее список из меню-гамбургера
 let dm =document.querySelector ('.navbar-menuIcon');
 dm.addEventListener('click', dropdownMenu);
function dropdownMenu(){
    let menu = document.querySelector('.navbar-menuDropdown');
    let usermenu=document.querySelector('.navbarUser');
   
    
    menu.classList.toggle("dropMenuShow");
    usermenu.classList.toggle("dropUserShow");
}
    

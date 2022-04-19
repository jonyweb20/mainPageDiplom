//let phoneBlock = document.querySelector('.breadcrumb-phone');
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
       moveLeft.style.transform = 'translate('+ 200 + 'px, 0)';
    arrowRight.style.transform = 'translate('+ -200 + 'px, 0)';
    if(title[0].innerHTML ==="Index"){
        arrowCenter.style.opacity = 1; 
    }   
    }
}

//Выпадающее список из меню-гамбургера
 let dm =document.querySelector ('.navbar-menuIcon');
 dm.addEventListener('click', dropdownMenu);
function dropdownMenu(){
    let menu = document.querySelector('.navbar-collapse');
    menu.classList.toggle("dropMenuShow");
    console.log(menu);
}
    

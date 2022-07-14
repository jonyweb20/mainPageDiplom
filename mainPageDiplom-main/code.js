let phoneBlock = document.querySelector('.breadcrumb-phone');
let phoneCheckBox = document.querySelector('#checkIcon');
let phoneIcon = document.querySelector('.fa-phone');
let phoneListNumber = document.querySelector('.phoneNumber');

phoneCheckBox.addEventListener('click', function (){
    if(phoneCheckBox.checked){
      phoneCheckBox.classList.add('dn');
      phoneBlock.classList.add('i-show');
      phoneListNumber.classList.add('b-show');
    
    }
    
      else{
        phoneBlock.classList.remove('i-show');
      phoneListNumber.classList.remove('.chb');
      } 
  })


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
},2000)
function draw(timebebin){
    moveLeft.style.transform = 'translate('+ 200 + 'px, 0)';
    arrowRight.style.transform = 'translate('+ -200 + 'px, 0)';
    arrowCenter.style.opacity = 1;
    
}
    
  
  



//btn[0].addEventListener('click', showBlock);
//btn.addEventListener('click', showBlock);
/* function showBlock(){
  block.classList.add('b-show');
} */



/*let boxElemLength = boxElem.length, i;
for(i=0; i <boxElemLength; i++){
  boxElem[i].classList.add('move');  
}*/

/*let animation = boxElem.animate([
  {transform: 'translate(0)'},
  {transform: 'translate(150px, 200px)'}
], 500);
animation.addEventListener('finish', function() {
  boxElem.style.transform = 'translate(150px, 200px)';
});

function clicken(){
    
}*/
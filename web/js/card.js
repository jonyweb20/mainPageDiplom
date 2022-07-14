


let readme = document.querySelectorAll('.cardInfoIcon');
for (let i = 0; i < readme.length; i++) {
  readme[i].addEventListener('click', selectIcon);
}

function selectIcon() {
  let itemClass = this.parentNode.className;
  let itemNode = this.parentNode;
  if (itemClass === 'cardInfo-Readme') {
    dropDownReadme(itemNode);
  } else {
    dropDownBuy(itemNode);
  }
}

function dropDownReadme(item) {
  let descrip = item.querySelector('#DropdownReadme');
  let readmeOut = descrip.classList.toggle("readme-description");
}

function dropDownBuy(item) {
  let descrip = item.querySelector('#DropdownBuy');
  let readmeOut = descrip.classList.toggle("readme-description");
  console.log(item);
}

let imgcard = document.querySelector('.cardInfo-Img').innerHTML;
const words = imgcard.split('/');
let words5= words[5].split('.')
console.log(words5[0]);


function switchImg() {
  if (x == 1) { //if the counter is at 1
    document.getElementById("imgToSwitch").src = "https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcR7pz7PYv3YJ1R391uzau_CS-kXxgpWG8zrDtam-LsUK50KEAM4_wIgKg";
    x++; //increments the counter to 2
  } else if (x == 2) { //if this is the 2nd click
    document.getElementById("imgToSwitch").src = "https://www.mozilla.org/media/img/styleguide/identity/firefox/guidelines-logo.7ea045a4e288.png";
    x++; //increments counter to 3
  } else if (x == 3) { //if the counter is 3
    document.getElementById("imgToSwitch").src = "https://www.wired.com/wp-content/uploads/2015/09/google-logo-1200x630.jpg";
    x = 1; //resets counter to 1
  }
}



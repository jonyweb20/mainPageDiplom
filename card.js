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

/*   if(!descrip.classList.contains('readme-description')){
    descrip.classList.toggle("readmeActiv");
    console.log(descrip);
  } */

/* window.onclick = function (event) {
  if (!event.target.matches('cardInfo-Readme')) {
    let dropdowns = document.getElementById("DropdownReadme");
    console.log(dropdowns);
    for (let i = 0; i < dropdowns.length; i++) {
      if (dropdowns[i].classList.contains('readme-description')) {


        dropdowns[i].classList.remove('readme-description');
      }
    }
  }
}  */



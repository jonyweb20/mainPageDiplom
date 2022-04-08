let readme = document.querySelectorAll('.cardInfoIcon');
//console.log(readme[0].className);
for (let i = 0; i < readme.length; i++) {
    readme[i].addEventListener('click', selectIcon);
}

function selectIcon() {
    let itemClass = this.parentNode.className;
    let itemNode = this.parentNode;
    console.log(itemNode);
    if (itemClass === 'cardInfo-Readme') {
        dropDownReadme(itemNode);
    } else {
        dropDownBuy(itemNode);
    }
}

function dropDownReadme(item) {
    let descrip = item.querySelector('#DropdownReadme');
    let selectDrop = descrip.classList.toggle("readmeDescriptionShow"); 
    console.log(descrip);
    console.log(selectDrop);
}
window.onclick = function(event) {
  if (!event.target.matches('cardInfo-Readme')) {
    let dropdowns = document.getElementsByClassName("readme-description");
       console.log(dropdowns);
    for (let i = 0; i < dropdowns.length; i++) {
      if (dropdowns[i].classList.contains('readmeDescriptionShow')) {
        dropdowns[i].classList.remove('readmeDescriptionShow');
      }
    }
  }
}






/*else  {item.classList.remove ('readme-DescriptionFunction')};*/


//console.log(item);
function dropDownBuy(item) {
    console.log(item);
}

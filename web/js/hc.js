let textIntro = document.querySelectorAll('.intro');
//определяем время задержки
document.addEventListener("DOMContentLoaded", function () {
    let j = n = 0;
    let text = textIntro[j].innerHTML;
    console.log(text);
    textInSpan(textIntro[j], n);
    setTimeout(function () {
        let text = textIntro[j++].innerHTML;
        textInSpan(textIntro[j], n);
       
    }, 7000);
    setTimeout(function () {
        let text = textIntro[j++].innerHTML;
        textInSpan(textIntro[j],n);
        
    }, 15000);
    
    setTimeout(function () {
        let text = textIntro[j++].innerHTML;
        textInSpan(textIntro[j],n);
        
    }, 22000);
})

function textInSpan(text, nb) {
    //debugger;
    let arrayWord = Array.from(text.innerHTML);
    //console.log(arrayWord);
    for(let i=0; i<arrayWord.length; i++){
        let rel = document.querySelector('.AboutInfo-rel');
        let span = document.createElement('span');
        let textNode = document.createTextNode(arrayWord[i]);
       // console.log(textNode);
          //на пробелы
    if (textNode.textContent === " ")
    {
        let nv = span.textContent = "&#032;";
       // console.log(nv);

    }
        if(even_or_odd(i)==="even"){
            span.setAttribute('class', 'even');   
        }
        //добавление символа

        span.innerHTML = textNode.textContent;
        rel.append(span);

    }
}
//проверка на четность
function even_or_odd(number) {
    return number % 2 === 0 ? "Odd" : "even"
}

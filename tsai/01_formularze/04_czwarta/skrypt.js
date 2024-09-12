const sizeE = document.getElementById('size')
const italicE = document.getElementById('italic')
const redE = document.getElementById('red')
const greenE = document.getElementById('green')
const orangeE = document.getElementById('orange')
const btnE = document.getElementById('btn')
const loremE = document.getElementById('lorem')
const btnItalicE = document.getElementById('btnItalic')



btnColorE = document.getElementById('btnColor')

btnE.addEventListener('click', (event) => {

    loremE.style.fontSize = `${sizeE.value}px`
})

btnItalicE.addEventListener("click", (event) => {
    if (italicE.checked) {
        loremE.style.fontStyle = `Italic`
    }
    else{
        loremE.style.fontStyle = `normal`
    }

})
btnColorE.addEventListener('click', (event)=>{
    if (redE.checked) {
        loremE.style.color = `red`
    }
    else if(greenE.checked){
        loremE.style.color = `green`
    }
    else if(orangeE.checked){
        loremE.style.color = `orange`
    }
    else{
        loremE.style.color = `black`
    }

});

const listE=document.getElementById('list');
const btnListE=document.getElementById('btnList');

btnListE.addEventListener('click', event=>{
    loremE.className=listE.value;
});


const goldCardE = document.getElementById('gold-card')
const silverCardE = document.getElementById('silver-card')
const noCardE = document.getElementById('no-card')
const priceE = document.getElementById('price')
const btn1E = document.getElementById('btn1')
const p1E = document.getElementById('p1')


btn1E.addEventListener('click',(event)=>{
    let price = Number(priceE.value)
if(goldCardE.checked){
    p1E.innerText = " cena pomniejszona o 20% wynosi "+ price*0.80
}
else if(silverCardE.checked){
    p1E.innerHTML = "cena pomniejszona o 10% wynosi "+ price*0.90
}
else if (noCardE.checked) {
    p1E.textContent = "brak zniżki, cena "+ price
}
})

const h1E = document.querySelector('h1')

h1E.addEventListener('mouseover', (event)=>{
    h1E.style.color = 'gray'
    h1E.textContent = 'Deszcz'
})
h1E.addEventListener('mouseout', (event)=>{
    h1E.style.color = 'black'
    h1E.textContent = 'Jaka pogoda'
})

const fontSizeE = document.getElementById('font-size')
const p2E = document.getElementById('p2')

fontSizeE.addEventListener('change', (event)=>{
     p2E.style.fontSize = fontSizeE.value +'%'
})

const fontStyleE = document.getElementById('font-style')

fontStyleE.addEventListener('change', (event)=>{
    p2E.style.fontStyle = fontStyleE.value
})
const redE =document.querySelector(".red")
const greenE =document.querySelector(".green")
const blueE =document.querySelector(".blue")
redE.addEventListener("click",(event)=>{
    p2E.style.color ="red";
})
greenE.addEventListener("click",(event)=>{
    p2E.style.color ="green";
})
blueE.addEventListener("click",(event)=>{
    p2E.style.color ="blue";
})







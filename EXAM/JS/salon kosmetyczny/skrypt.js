
const btnE = document.getElementById('btn')
const pilingE = document.getElementById('piling')
const maskE = document.getElementById('mask')
const faceMassageE = document.getElementById('face-massage')
const eyebrowE = document.getElementById('eyebrow') 
const resE = document.getElementById('res')


btnE.addEventListener('click', (event)=>{
 let price = 0;
 if(pilingE.checked){
    price = price+45;
 }
 if(maskE.checked){
    price = price+30;
 }
 if(faceMassageE.checked){
    price = price+20;
 }
 if(eyebrowE.checked){
    price = price+5;
 }
 resE.innerHTML = `Cena zabiegów: ${price}`
})
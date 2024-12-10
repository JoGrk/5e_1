const blurE = document.getElementById('blur');
const sepiaE = document.getElementById('sepia');
const negatywE = document.getElementById('negatyw');
const btn1E = document.getElementById('btn1');
const img1 = document.querySelector('.one img');
const img2 = document.querySelector('.two img');
const colorE = document.getElementById('color');
const bwE = document.getElementById('bw');
const img3 = document.querySelector('.three img');
const img4 = document.querySelector('.four img');
const zastosuj1E = document.getElementById('zastosuj1');
const zastosuj2E = document.getElementById('zastosuj2');
const rangeE = document.getElementById('range');
const range2E = document.getElementById('range2');

btn1E.addEventListener('click', (event)=>{
    if(blurE.checked){
        img1.style.filter='blur(5px)'
    }else if(sepiaE.checked){
        img1.style.filter='sepia(100%)'
    }else if(negatywE.checked){
        img1.style.filter='invert(100%)'
    }
})
bwE.addEventListener('click', (event)=>{
    img2.style.filter='grayscale(100%)'
})
colorE.addEventListener('click', (event)=>{
    img2.style.filter='none'
})
zastosuj1E.addEventListener('click', (event)=>{
    img3.style.filter=`opacity(${rangeE.value}%)`
})
zastosuj2E.addEventListener('click', (event)=>{
    img4.style.filter=`brightness(${range2E.value}%)`
})
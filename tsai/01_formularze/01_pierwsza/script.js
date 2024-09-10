const shortE = document.getElementById('short')
const midE = document.getElementById('mid')
const halfLongE = document.getElementById('half-long')
const longE = document.getElementById('long')
const btn1E = document.getElementById('btn1')
const result1E = document.getElementById('result1')


btn1E.addEventListener('click', (event)=>{
    var price;
    if(shortE.checked){
        price=25;
    }else if(midE.checked){
        price=30;
    }else if(halfLongE.checked){
        price=40;
    }else if(longE.checked){
        price=50;
    };
    result1E.innerHTML=`Cena strzyżenia: ${price}`;
});








const num1E = document.getElementById('num1')
const num2E = document.getElementById('num2')
const sendE = document.getElementById('send')
const resultE = document.getElementById('result')

sendE.addEventListener('click',(event)=>{
    let num1 = Number(num1E.value)
    let num2 = Number(num2E.value)
    resultE.textContent = `suma liczb to ${num1+num2}, a iloczyn to ${num1*num2}`
})

const h2E = document.querySelector('h2');

h2E.addEventListener('click',()=>{
    h2E.innerText = 'Janusz Kowalski'
})  
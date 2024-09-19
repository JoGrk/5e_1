const listE = document.getElementById('list')
const checkE = document.getElementById('check')
const btn1E = document.getElementById('btn1')
const p1E = document.getElementById('p1')

btn1E.addEventListener('click', (event)=>{
    //console.log(checkE.checked);
    if(checkE.checked){
        p1E.innerHTML = `cena po rabacie wynosi ${listE.value*0.9}`;

    }
    else{
        p1E.innerHTML = `cena wynosi ${listE.value}`;
    }
})
const perfectE = document.getElementById('perfect')
const centerE = document.getElementById('center')
const weakE = document.getElementById('weak')
const btn1E = document.getElementById('btn1')
const p1E = document.getElementById('p1')
const textE=document.querySelector('h1');




textE.addEventListener('click',(event)=>{
    textE.innerHTML=`Kolorowa jesien`;
    textE.style.color='green';
})

btn1E.addEventListener('click', (event)=>{
    if(perfectE.checked){
        
        p1E.innerHTML = `Twoje zdanie na ten temat to: doskonałe`;
    }
    else if(centerE.checked){
        p1E.innerHTML = `Twoje zdanie na ten temat to: średnie`;
    }
    else if (weakE.checked){
        p1E.innerHTML =`Twoje zdanie na ten temant to : słabe`
    }

    

});


// zadanie 3

const coffeeE=document.getElementById('coffee')
const weightE=document.getElementById('weight')
const btn2E=document.getElementById('btn2')
const p2E=document.getElementById('p2')



btn2E.addEventListener('click', (event)=>{
    let coffee = Number(coffeeE.value)
    let weight = weightE.value 
    let price

    switch(coffee){
        case 1: price = 5
                break
        case 2: price = 7
                break
        case 3: price = 6
                break
        default: price = 0
                break
    }
    
    p2E.innerHTML = `Koszt zamwienia wynosi ${price*weight}`
})
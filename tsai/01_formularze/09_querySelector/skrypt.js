const linkE = document.querySelector('input[type="text"]')
const imgE = document.querySelector('aside img')

linkE.addEventListener('change', (event)=>{
    imgE.src=linkE.value
})

const divTop = document.querySelector('nav div:first-child')
const divMid = document.querySelector('nav div:first-child + div')
const divBottom = document.querySelector('nav div:last-child')

divMid.addEventListener('change', (event)=>{
    let hue=document.querySelector('input[name="color"]:checked').value;
    divTop.style.backgroundColor=`hsl(${hue},50%,90%)`
    divMid.style.backgroundColor=`hsl(${hue},50%,70%)`
    divBottom.style.backgroundColor=`hsl(${hue},50%,50%)`

    const pE=document.querySelectorAll('aside div:last-child p')
    for(let i=0; i<pE.length; i++){
        pE[i].style.color=`hsl(${hue},50%, 15%)`
    }
})

const listE=document.querySelector('select[name="list"]')
imgList={
    spring:'https://static.prsa.pl/images/680bd27c-d602-45c9-9606-ac241e337e96.file?format=900',
    summer:'https://tvn24.pl/tvnmeteo/najnowsze/cdn-zdjecie-nndtb8-kalendarzowe-lato-5759290/lato+pogoda+slonce+shutterstock_681456862.jpeg',
    fall:'https://s.lubimyczytac.pl/upload/books/295000/295353/475855-352x500.jpg',
    winter:'https://i.iplsc.com/000JTISQF2124FTU-C322-F4.webp'

}
listE.addEventListener('change',(event)=>{
    let le=listE.value
    imgE.src=imgList[le]
})




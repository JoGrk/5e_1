const imgArray=document.querySelectorAll("#left img");
const mainImage=document.querySelector("main img");
const heartImage=document.querySelector("#right img");

imgArray.forEach((imgE) =>{
    imgE.addEventListener('click',(e)=>{
        mainImage.src=imgE.src;
    })
});

heartImage.addEventListener('click', (e)=>{
    const srcT=heartImage.src.slice(-5);
    console.log(srcT);
    if(srcT=='f.png'){
        heartImage.src='icon-on.png';
    }else{
        heartImage.src='icon-off.png';
    };
});

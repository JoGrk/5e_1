const inputE = document.getElementById('nazwisko');
const warnerE = document.getElementById('warner');

inputE.addEventListener('input',()=>{
    if(inputE.value.length<4){
        inputE.classList.add('warn');
        warnerE.innerText = "Twoje nazwisko jest za krótkie";
    }else{
        inputE.classList.remove('warn');
        warnerE.innerText = " ";
    }

});
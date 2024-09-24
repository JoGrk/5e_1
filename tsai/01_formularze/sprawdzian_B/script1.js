const btnE = document.querySelector("#btn")
const resultE = document.querySelector('#result')

btnE.addEventListener('click', () => {
    const smallerE = document.querySelector("#smaller");
    const standardE = document.querySelector("#standard");
    const biggerE = document.querySelector("#bigger");

    if(smallerE.checked) {
        resultE.style.fontSize = "50%";
    }else if (standardE.checked) {
        resultE.style.fontSize = "100%";
    }else if(biggerE.checked) {
        resultE.style.fontSize = "200%";
    }

})
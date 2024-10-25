const numE = document.getElementById('number');
const checkE = document.getElementById('checked');

btnE.addEventListener('click',()=>{
    let number = Number(numE.value);
    if(checkE.checked){
        result.innerHTML = `Potrzebujesz : `;
    }
});
const formE = document.querySelector('.left form');
const ulE = document.querySelector('.right ul');
const errorE = document.querySelector('#error')
formE.addEventListener('submit', (e)=>{
    e.preventDefault();
    // if (task.value.length > 2){
    //     let liE = document.createElement("li")
    //     liE.innerHTML = task.value
    //     ulE.appendChild(liE)
    //     task.value = ''
    //     task.classList.remove('error')
    //     errorE.innerHTML = ''
        
    // }else{
    //     errorE.innerHTML = 'TEKST JEST ZBYT KROTKI'
    //     task.classList.add('error')
    // }

    if(task.value.length>2){
        let divE=document.createElement('div');
        let h4E=document.createElement('h4');
        h4E.innerHTML=task.value;
        divE.appendChild(h4E);
        rightB.appendChild(divE);
        task.value = '';
        task.classList.remove('error');
        errorE.innerHTML = "";
    }else{
        errorE.innerHTML = 'TEKST JEST ZBYT KROTKI';
        task.classList.add('error');
    }

})





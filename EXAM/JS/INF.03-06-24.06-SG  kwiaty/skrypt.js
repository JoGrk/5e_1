const btn1E=document.querySelector('#btn1');
const btn2E=document.querySelector('#btn2');
const btn3E=document.querySelector('#btn3');
const block1E=document.querySelector('.block1');
const block2E=document.querySelector('.block2');
const block3E=document.querySelector('.block3');
const nameE=document.getElementById('name');
const surnameE=document.getElementById('surname');
const emailE=document.getElementById('email');
const telE=document.getElementById('tel');
const password1E=document.getElementById('password1');
const password2E=document.getElementById('password2');



btn1E.addEventListener('click', (event)=>{
    event.preventDefault()
    block1E.classList.add('hidden')
    block2E.classList.remove('hidden')
})
btn2E.addEventListener('click', (event)=>{
    event.preventDefault()
    block2E.classList.add('hidden')
    block3E.classList.remove('hidden')
})
btn3E.addEventListener('click', (event)=>{
    event.preventDefault()
    if(password1E.value != password2E.value){
        alert('Podane hasła różnią się')
    }
    console.log(`Witaj ${nameE.value} ${surnameE.value}`)
    
})
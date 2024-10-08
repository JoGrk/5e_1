const formE = document.querySelector('.left form');
const ulE = document.querySelector('.right ul')
formE.addEventListener('submit', (e)=>{
    e.preventDefault();
    console.log(task.value);
    let liE = document.createElement("li")
    liE.innerHTML = task.value
    ulE.appendChild(liE)
})




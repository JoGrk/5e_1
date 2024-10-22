const messageE = document.getElementById('message')
const chatE = document.querySelector('.chat')

btn1.addEventListener('click',(event)=>{
    let message = messageE.value
    let sectionE = document.createElement('section')
    sectionE.classList.add('jolka')
    let imgE = document.createElement('img')
    imgE.src = Jolka.jpg
    let pE = document.createElement('p')
    pE.innerHTML = message
    sectionE.appendChild(imgE)
    sectionE.appendChild(pE)
    chatE.appendChild(sectionE)
    sectionE.scrollIntoView()
})
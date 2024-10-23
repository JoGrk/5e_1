const messageE = document.getElementById('message')
const chatE = document.querySelector('.chat')

//person = jolka lub krzysiek
const sendMessage = (person,message) => {
    let sectionE = document.createElement('section')
    sectionE.classList.add(person)
    let imgE = document.createElement('img')
    imgE.src = `${person}.jpg`
    let pE = document.createElement('p')
    pE.innerHTML = message
    sectionE.appendChild(imgE)
    sectionE.appendChild(pE)
    chatE.appendChild(sectionE)
    sectionE.scrollIntoView()
}

btn1.addEventListener('click',(event)=>{
    let message = messageE.value
    sendMessage('jolka',message)
})

const answers = ["Świetnie!",
"Kto gra główną rolę?",
"Lubisz filmy Tego reżysera?",
"Będę 10 minut wcześniej",
"Może kupimy sobie popcorn?",
"Ja wolę Colę",
"Zaproszę jeszcze Grześka",
"Tydzień temu też byłem w kinie na Diunie",
"Ja funduję bilety"]

btn2.addEventListener('click', () => {
    const number = Math.floor(Math.random()* answers.length)
    const message = answers[number];
    sendMessage('krzysiek',message)
})
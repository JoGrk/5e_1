const emailE = document.getElementById('email')
const serviceE = document.getElementById('service')
const copyE = document.getElementById('copy')
const p1E = document.getElementById('p1')
const btn1E = document.getElementById('btn1')

btn1E.addEventListener('click', (event)=>{
    let p
    let email = emailE.value
    let service = serviceE.value
    
    if(copyE.checked){
        p = "Wysłano kopie";
    }
    p1E.innerHTML = `${email} <br> usługa: ${service} <br> ${p}`
    

})
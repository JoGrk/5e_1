const codeE = document.getElementById('code')
const pE = document.querySelector('#right p')




codeE.addEventListener('change', (event) => {
    if (codeE.checked) {
        pE.classList.add('codeC');
    }
    else {
        pE.classList.remove('codeC');
    }


})

const listE = document.getElementById('list')
const fontE = document.getElementById('font')
const sendE = document.getElementById('send')

sendE.addEventListener('click', (event)=>{
    let font = fontE.value
    let list = listE.value
    pE.style.fontSize = font+list;
})

const groupE = document.getElementById("color_group")

groupE.addEventListener('click', (e)=>{
    console.log('cc')
    let color = document.querySelector('input[name = "color"]:checked').value
    pE.className = color
})




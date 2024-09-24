const texts = {
    smaller:50,
    standard:100,
    bigger:200
}

document.querySelector("#btn").addEventListener('click',() => {
    const text = document.querySelector("input[name='text']:checked").value;
    document.querySelector('#result').style.fontSize = `${texts[text]}%`
})
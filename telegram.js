const form = document.querySelector('form')

form.addEventListener('submit', (e)=>{
    e.preventDefault()

    const text1 = document.getElementById('text1').value
    const text2 = document.getElementById('text2').value

    // console.log(text1,text2)

    const token = "6475840868:AAH94Ht2oFBDXpkU-aTClzU7sWUXAn_japM"

    const chat_id = "-1002101127687"

    const my_text = `Email: ${text1} Message : ${text2}`

    const url = `https://api.telegram.org/bot${token}/sendMessage?chat_id=${chat_id}&text=${my_text}`;

    let api = new XMLHttpRequest()

    api.open("GET", url, true)

    api.send()

    text1.value = ""
    text2.value = ""


})

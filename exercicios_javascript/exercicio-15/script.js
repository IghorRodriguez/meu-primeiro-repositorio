//Buscando no HTML

const addressInput = docoment.querySelector('#adress-input')
const ipInfoBtn = document.querySelector('#ip-info-btn')
const ipInfoField = document.querySelector('ip-info')

//Manipulando com Java Script

ipInfoBtn.addEventListener('click',() =>{
    ipInfoField.innerHTML = '<img src="img/loading.gif">'
    let adress = addreessInput.value
    let url = 'https://ipinfo.io/${address}/json'

})
//Criando funções em JS

fetch(url)
    .then(res => res.json())
    .then(ipInfo => {
        const creatRow = info => `<tr><td>${info[0]}</td><td>${info[1]}</td></tr>`
        let rows = Object.entries(ipInfo).map(createRow).join('')
        let thead = '<thead><tr><th>Field</th><th>Value</td></tr></thead>'
        let table =  `<table>${thead}<tbody>${rows}</tbody></table>`
        let mapURL = `` //entre as crase vc insere o endereço de URL do HTML
        let map = `<img src="${mapURL}">`

        ipInfoField.innerHTML = table+map 
    })


var person1 = {
    name: 'Monique',
    age: '31'
}
var person2 = {
    name:'Camila',
    age: '29'
}
var person3 = {
    name: 'Kelly',
    age: '27'
}
var person4 = {
    name: 'Bruno',
    age: '25'
}
var person5 = {
    name: 'Igor',
    age: '23'
}
 
function checkAge(person) {
    console.log('A idade de Monique é: ' + person.age)

    if (person.age == 31) {
        console.log('É a irmã mais velha')
    } 
    else {
        console .log('Não é a irma mais velha')
    }
}

checkAge(person1)
 
function checkAge2(person) {
    console.log('A idade de Camila é: ' + person.age)

    if (person.age >= 29) {
        console.log('É a segunda irmã mais velha')
    } 
    else {
        console .log('Não é a segunda irmã mais velha')
    }
}

checkAge2(person2)

function checkAge3(person) {
    console.log('A idade de Kelly é: ' + person.age)

    if (person.age < 28) {
        console.log('É a irmã do meio')
    } 
    else {
        console .log('Não é a irmã do meio')
    }
}

checkAge3 (person3)

function checkAge4(person) {
    console.log('A idade de Bruno é: ' + person.age)

    if (person.age != 24) {
        console.log('É o filho homem mais velho dos irmãos ')
    } 
    else {
        console .log('Não é o filho mais velho')
    }
}

checkAge4 (person4)

function checkAge5(person) {
    console.log('A idade de Igor é: ' + person.age)

    if (person.age >= 23) {
        console.log('É o irmão mais novo')
    } 
    else {
        console .log('Não é o irmão mais novo')
    }
}

checkAge5 (person5)
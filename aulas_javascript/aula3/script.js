//Condicionais

var me = {
    name: 'Igor',
    age: '27'
}

//function checkAge(person) {
//    console.log('A idade da pessoa é: ' + person.age)
//}

//function checkAge(person) {
//   console.log('A idade da pessoa é: ' + person.age)
//
//    if (person.age > 17) {
//        console.log('A pessoa é maior de idade')
//    }
//}

function checkAge(person) {
    console.log('A idade da pessoa é: ' + person.age)

    if (person.age == 17) { //igual
        console.log('Caiu dentro do bloco 1')
    }

    if (person.age != 17) {//diferente
       console.log('Caiu dentro do bloco 2')
    }

    if (person.age >= 16) {//maior ou igual
       console.log('Caiu dentro do bloco 3')
    }

    if (person.age > 17) {//maior
       console.log('Caiu dentro do bloco 4')
    }

    if (person.age > 30) { 
       console.log('Caiu dentro do bloco 5')
    } else {
        console.log('Bloco 6') // Se é falso 
    }
    
    if (person.age > 20 & person.age < 22) { //Ela tem  mais de 20 anos porém não é emancipada porque tem mais de 21 anos
       console.log('É uma pessoa emancipada 1') //& se a primeira condição for verdadeira ele ja identifica condição 
    } else {
        console.log('Não é uma pessoa emancipada 1.5') // Se é falso 
    }

    if (person.age > 20 && person.age < 22) { //&& após o 1º teste deu falso ele automaticamente ja cai no else (pra atender a condição os dois tem que ser verdadeiro)
       console.log('É uma pessoa emancipada 2') 
    } else {
        console.log('Não é uma pessoa emancipada 2.5') // Se é falso 
    }

    if (person.age > 20 || person.age < 22) { // || significa que pelo menos uma tem que ser verdadeira 
       console.log('É uma pessoa emancipada 3') 
    } else {
        console.log('Não é uma pessoa emancipada 3.5') // Se é falso 
    }
    
}
//checkAge(me)

function checkAge2(person) {
    console.log('A idade da pessoa é: ' + person.age)           //1=atribuição 2==condicional 3===condicional

    if (person.age == 28) { // não é testado o tipo da informação
        console.log('Caiu dentro do bloco 1')
    }

    if (person.age === '28') { //// é testado o tipo da informação
        console.log('Caiu dentro do bloco 2') //comparação estrita eu preciso que o meu dado além de ser =28 seja string
    }
}

checkAge2(me)

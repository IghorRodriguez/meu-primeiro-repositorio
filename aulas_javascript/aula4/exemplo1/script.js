//Aula - Programação Funcional vs Programação Imperativa
//var person = {
//    name: 'José',
//    age: 14
//}

//consoole.log(person.name)

//function pegarAnosParaAMaioridade(person) {
//     return 18 - person.age
//}

//var anosQueFaltam = pegarAnosParaAMaioridade(person)
//console.log(anosQueFaltam + ' anos')

//======================================================

var person = {
    name: 'José',
    age: 17
}

//console.log(person.name)

// função pura
function pegarAnosParaAMaioridade(person) {
    return 18 - person.age
}

// função impura || função imperativa
function adicionaIdade(person) {
    person.age = person.age + 1
}

adicionaIdade(person)
var anosQueFaltam = pegarAnosParaAMaioridade(person)
console.log(anosQueFaltam)
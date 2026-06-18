//Exercício 7

var nome = prompt("Digite seu nome: ");
var nota1 = parseFloat(prompt("Digite a primeira nota: "));
var nota2 = parseFloat(prompt("Digite a segunda nota: "));
var nota3 = parseFloat(prompt("Digite a terceira nota: "));
var media = (nota1 + nota2 + nota3) / 3;


if (media >=0 && media <=10) {
    document.write("<p> Nome: " + nome + "<br> Média: " + media + " <\p> <br>");

    if (media >= 7 && media != 10) {
        document.write("<p class='aprovado'> Aprovado com média " + media);
    } else if (media < 7) {
        document.write("<p class='reprovado'> Reprovado com média " + media);
    } else if (media == 10) {
        document.write(" <p class='aprovado'> Aprovado com distinção com média 10 <\p>");
    }
}
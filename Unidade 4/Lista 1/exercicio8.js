//Exercício 8

var nota1 = parseFloat(prompt("Digite a primeira nota:"));
var nota2 = parseFloat(prompt("Digite a segunda nota:"));

media = (nota1 + nota2) / 2;


if (media >= 0 && media <=10) {

    document.write("<p class='info'> Nota 1: " + nota1 +"<br> Nota 2: " + nota2 + "<br> Média: " + media + "<\p> <br>")
    
    if (media >= 9 && media <= 10) {
        var conceito = "A"
        document.write("Conceito: " + conceito);

    } else if (media >=7.5 || media < 9) {
        var conceito = "B"
        document.write("Conceito: " + conceito);

    } else if ( media >= 6 && media < 7.5) {
        var conceito = "C"
        document.write("Conceito: " + conceito);

    } else if (media >=4 && media <6) {
        var conceito = "D"
        document.write("Conceito: " + conceito);

    } else {
        var conceito = "E"
    }

    if (conceito == "A" || conceito == "B" || conceito == "C") {
        document.write("<br> <p class='aprovado'> Aprovado <\p>")
    } else if (conceito == "D" || conceito == "E") {
        document.write("<br> <p class='reprovado'>Reprovado <\p>")
    }
}
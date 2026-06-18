//Exercício 6
document.write("<br><br> Exercício 6 (média): <br><br>");
var nota1 = parseFloat(prompt("Digite a primeira nota: "))
var nota2 = parseFloat(prompt("Digite a segunda nota: "))
media = (nota1 + nota2) / 2

document.write ("Nota 1: " + nota1 + "<br> Nota 2: " + nota2 + "<br><br>")
if (media >= 7 && media != 10) {
    document.write("Aprovado")
} else if (media < 7) {
    document.write("Reprovado")
} else if (media == 10) {
    document.write("Aprovado com distinção")
}
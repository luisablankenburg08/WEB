//Exercício 3
document.write("<br><br> Exercício 3: <br><br>");
var idade = parseInt(prompt("Digite sua idade: "))

if (idade >= 0 && idade <=12) {
    document.write("Categoria: Criança")
} else if (idade >=13 && idade <=17) {
    document.write("Categoria: Adolescente")
} else if (idade >=18 && idade <=59) {
    document.write("Categoria: Adulto")
} else {
    document.write("Categoria: Idoso")
}

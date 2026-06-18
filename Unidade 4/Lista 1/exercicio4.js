//Exercício 4
document.write("<br><br> Exercício 4 (Compras): <br><br>");
var produto1 = parseFloat(prompt("Digite o preço do primeiro produto: "));
var produto2 = parseFloat(prompt("Digite o preço do segundo produto: "));
total = produto1 + produto2

if (total > 100) {
    total = total - (total * 1 / 10)
    document.write("Produto 1: R$ " + produto1 + "<br> Produto 2: R$ " + produto2 + "<br><br>")
    document.write("O valor total da compra é: R$ " + total + " (com desconto de 10%)")
} else {
    document.write("O valor total da compra é: R$ " + total)
}

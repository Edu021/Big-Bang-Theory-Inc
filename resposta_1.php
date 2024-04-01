<!-- 1. Utilizando PHP, escreva um algoritmo que calcule a média dos pedidos por dia e os exiba em um formato de tabela no HTML.  
Caso a média seja inferior a 3.000, a linha deve ficar vermelha, se for maior, deve ficar verde. E se for igual, deve ser cinza. -->

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta 1</title>
</head>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }
</style>
<body>
    <h1>Pedidos</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>USUARIO</th>
            <th>TOTAL</th>
            <th>DATA</th>
        </tr>
    </table>
</body>
</html>
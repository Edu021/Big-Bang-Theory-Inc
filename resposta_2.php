<!-- 2. Monte uma página que liste todos os pedidos em um formato de tabela, como um relatório. 
As cores de fundo devem alternar para facilitar a leitura. 
Um botão com a função de imprimir deve ser adicionado. -->

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta 2</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 3px solid black;
            padding: 10px;
            text-align: left;
            color: white;
        }
        .tr-titulo {
            background-color: #2e2e2e
        }
        .alternada:nth-child(odd) {
            background-color: #0b192d
        }
        .alternada:nth-child(even) {
            background-color: #111958
        }
    </style>
</head>
<body>
    <h1>Lista de Pedidos</h1>
    
    <table>
        <tr class=tr-titulo>
            <th>ID</th>
            <th>USUARIO</th>
            <th>TOTAL</th>
            <th>DATA</th>
        </tr>

    </table>
</body>
</html>
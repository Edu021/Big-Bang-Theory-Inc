<!-- 2. Monte uma página que liste todos os pedidos em um formato de tabela, como um relatório. 
As cores de fundo devem alternar para facilitar a leitura. 
Um botão com a função de imprimir deve ser adicionado. -->

<?php
    // Puxando pedidos do banco e colocando tudo em $pedidos
    include("./conexao.php");
    
    $resultado = mysqli_query($conexao, 'select o.order_id, u.user_name, o.order_total, o.order_date from orders o, user u where o.order_user_id = u.user_id;');
    while($linha = $resultado->fetch_object()) {
        foreach($linha as $chave => $coluna) {
            $coluna_array[$chave] = utf8_encode($coluna);
        }
        $pedidos[] =  $coluna_array;
    }
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta 2</title>
    <style>
        @media print {
            h1 {
                display: none;
            }
            button {
                display: none;
            }
        }
        button {
            padding: 15px;
            border-radius: 5px;
            border: 0px;
            background-color: green;
            color: white;
        }
        button:hover {
            cursor: pointer;
        }
        div {
            margin-top: 15px;
            width: 100%;
            text-align: center;
        }
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
        <?php
            // Adicionando linhas à tabela com valores de $pedidos
            foreach($pedidos as $pedido) {
                
                $linha_tabela = 
                "<tr class='alternada'>
                <td>$pedido[order_id]</td>
                <td>$pedido[user_name]</td>
                <td>$pedido[order_total]</td>
                <td>$pedido[order_date]</td>
                </tr>";
                echo $linha_tabela;
            }
        ?>
    </table>
    <div>
        <button onclick="window.print()">Imprimir</button>
    </div>
</body>
</html>
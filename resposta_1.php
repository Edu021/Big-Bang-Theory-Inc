<!-- 1. Utilizando PHP, escreva um algoritmo que calcule a média dos pedidos por dia e os exiba em um formato de tabela no HTML.  
Caso a média seja inferior a 3.000, a linha deve ficar vermelha, se for maior, deve ficar verde. E se for igual, deve ser cinza. -->

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

        <?php
            // Criando linha da tabela com os valores de $pedidos
            // Cor do fundo muda conforme valor de pedido[order_total]  
            foreach($pedidos as $pedido) {
                if($pedido['order_total'] == 3000) {
                    $linha_tabela = 
                    "<tr style='background-color: grey;'>
                    <td>$pedido[order_id]</td>
                    <td>$pedido[user_name]</td>
                    <td>$pedido[order_total]</td>
                    <td>$pedido[order_date]</td>
                    </tr>";
                    echo $linha_tabela;
                } elseif ($pedido['order_total'] > 3000) {
                    $linha_tabela = 
                    "<tr style='background-color: green;'>
                    <td>$pedido[order_id]</td>
                    <td>$pedido[user_name]</td>
                    <td>$pedido[order_total]</td>
                    <td>$pedido[order_date]</td>
                    </tr>";
                    echo $linha_tabela;
                } elseif ($pedido['order_total'] < 3000) {
                    $linha_tabela = 
                    "<tr style='background-color: red;'>
                    <td>$pedido[order_id]</td>
                    <td>$pedido[user_name]</td>
                    <td>$pedido[order_total]</td>
                    <td>$pedido[order_date]</td>
                    </tr>";
                    echo $linha_tabela;
                }
            }
        ?>
    </table>
</body>
</html>
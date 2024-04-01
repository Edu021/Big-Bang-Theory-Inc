<!-- 3. Desenvolva uma página que exiba a soma dos totais de venda por país. 
Nessa mesma página, insira uma forma de filtrar por um país desejado. -->

<?php
    // Puxando pedidos do banco e colocando tudo em $pedidos
    include("./conexao.php");
    
    $resultado = mysqli_query($conexao, 'select u.user_country pais, sum(o.order_total) total from orders o inner join user u on o.order_user_id = u.user_id group by u.user_country;');
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
    <title>Resposta 3</title>
    <style>
        .tabela {
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
        .filtrar {
            margin-bottom: 20px;
        }
        .filtrar label{
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Relatório de Vendas por País</h1>
    <div class="filtrar">
        <label for="pais">Filtrar por país:</label>
        <select name="pais" id="pais">
            <option value="todos">Todos os países</option>
            <?php
            // Adicionando país como opções com valores de $pedidos
                foreach($pedidos as $pedido) {
                    $opcao_select = 
                    "<option value='$pedido[pais]'>$pedido[pais]</option>";
                    echo $opcao_select;
                }
            ?>
        </select>
        <button onclick="filtrarPorPais()">Filtrar</button>
    </div>
    <div class="tabela">
        <table>
            <tr class=tr-titulo>
                <th>PAÍS</th>
                <th>VALOR TOTAL</th>
            </tr>
            <?php
            // Adicionando linhas à tabela com valores de $pedidos
                foreach($pedidos as $pedido) {
                    $linha_tabela = 
                    "<tr class='alternada'>
                    <td>$pedido[pais]</td>
                    <td>R$ $pedido[total]</td>
                    </tr>";
                    echo $linha_tabela;
                }
            ?>
        </table>
    </div>
    
    <script>
        // Função que filtra o país da tabela escolhido pelo elemento <select>
        function filtrarPorPais() {
            let paisSelecionado = document.getElementById('pais').value;
            let linhasTabela = document.querySelectorAll('.alternada');
            
            for(let i=0;i < linhasTabela.length; i++) {
                // Variável com nome do país na linha atual da tabela 
                let paisTabela = linhasTabela[i].getElementsByTagName('td')[0].textContent
                // Comparando o campo país da tabela com o valor do país escolhido
                if(paisTabela !== paisSelecionado && paisSelecionado !== 'todos') {
                    linhasTabela[i].style.display = 'none';
                } else {
                    linhasTabela[i].style.display = '';
                }
            }
        }
    </script>
</body>
</html>
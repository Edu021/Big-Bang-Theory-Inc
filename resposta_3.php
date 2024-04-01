<!-- 3. Desenvolva uma página que exiba a soma dos totais de venda por país. 
Nessa mesma página, insira uma forma de filtrar por um país desejado. -->

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
            <!-- Adicionar apenas os países existentes na tabela -->
        </select>
        <button onclick="">Filtrar</button>
    </div>
    <div class="tabela">
        <table>
            <tr class=tr-titulo>
                <th>PAÍS</th>
                <th>VALOR TOTAL</th>
            </tr>
            <!-- Lógica para popular a tabela -->

        </table>
    </div>
    
    <script>
        // Criar lógica para filtrar país
    </script>
</body>
</html>
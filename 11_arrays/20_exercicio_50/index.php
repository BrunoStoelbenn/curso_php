<!DOCTYPE html>
<html>
<head>
    <title>Tabela de Informações</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<?php
$pessoas = [
    'Matheus' => 20,
    'Bruno' => 21,
    'Igor' => 21,
    'Isabela' => 21,
    
];


// Criando a tabela em HTML
echo "<table>";
echo "<tr><th>Nome</th><th>Idade</th></tr>";

// Iterando pelas características e valores
foreach ($pessoas as $nome => $idade) {
    echo "<tr>";
    echo "<td>$nome</td>";
    echo "<td>$idade</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>

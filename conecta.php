<?php
$conexao = mysqli_connect('localhost', 'root', '', 'pcd');
mysqli_set_charset($conexao, 'UTF8');

if (!$conexao)
echo "Erro na conexao com o banco de dados.";
?>
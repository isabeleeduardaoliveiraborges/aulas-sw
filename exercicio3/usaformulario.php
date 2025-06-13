<?php
include_once 'Funcionario.class.php';

$func = new Funcionario("Anna Beatriz", 3000.00);

echo "<h3>Informações iniciais:</h3>";
$func->exibirInformacoes();

echo "<h3>Aumentando salário em 10%...</h3>";
$func->aumentarSalario(10);

echo "<h3>Informações atualizadas:</h3>";
$func->ExibirInformacoes();
?>
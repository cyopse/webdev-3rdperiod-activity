<?php

$nome = $_REQUEST['nome'];
$Snome = $_REQUEST['Snome'];
$data = $_REQUEST['data'];
$email = $_REQUEST['email'];
$senha = $_REQUEST['senha'];
$Csenha = $_REQUEST['Csenha'];
$tipo = $_REQUEST['tipo'];
$declaro = $_REQUEST['declaro'];
$receber = $_REQUEST['receber'];

echo 'Nome: ' . $nome;
echo '<br><br>';
echo 'Sobrenome: ' . $Snome;
echo '<br><br>';
echo 'Nascimento: ' . $data;
echo '<br><br>';
echo 'E-mail: ' . $email;
echo '<br><br>';
echo 'Senha: ' . $senha;
echo '<br><br>';
echo 'Confirmação de senha: ' . $Csenha;
echo '<br><br>';
echo 'tipo: ' . $tipo;
echo '<br><br>';
echo 'Termos de Uso: ' . $declaro;
echo '<br><br>';
echo 'Receber E-mails: ' . $receber;

?>
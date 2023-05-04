<?php

/*echo '<pre>';
var_dump($_POST);
echo '</pre>';*/

/*$result = 'Obrigado pelo cadastro!'; 
$dados = 'Os dados informados são' ;*/

/*echo $result . ' ' . $dados;*/

$name = $_POST['name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$telephone = $_POST ['telephone'];

header('Location: ../index.php?n='.$name.'&ln='.$last_name.'&em='.$email.'&tl='.$telephone);
?>
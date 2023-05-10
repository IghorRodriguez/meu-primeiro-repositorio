<?php

$name = $_POST['name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$telephone = $_POST ['telephone'];

header('Location: ../index_2.php?n='.$name.'&ln='.$last_name.'&em='.$email.'&tl='.$telephone. '#rolar-ate-aqui');
?>
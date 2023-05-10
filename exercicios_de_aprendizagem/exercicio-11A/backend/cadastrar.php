<?php

$full_name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$telephone = $_POST ['telephone'];

header('Location: ../index.php?n='.$full_name.'&un='.$username.'&em='.$email.'&tl='.$telephone. '#rolar-ate-aqui');
?>
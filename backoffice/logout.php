<?php
 
// inicia a sessão
session_start();
 
// muda o valor de logged_in para false
$_SESSION['logged_in'] = false;
 
// finaliza a sessão
session_destroy();
 
// retorna para index.php
header('Location: ../index.html');
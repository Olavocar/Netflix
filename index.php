
<?php

if(!isset($_SESSION['login'])){
  
  if(isset($_POST['acao'])){
  $login = 'luvadepedreiro';
  $senha = 'obrigadomeuDeus';

$loginform = $_POST['login'];
$senhaform = $_POST['senha'];

 if($login == $loginform && $senha == $senhaform) {
  //o usuário logará com sucesso

   $_SESSION['login'] = $login;
   header('Location: index.php');
   
 } else {
   echo 'Dados inválidos';
 }
}

  include('login.php');

} else {

  if(isset($_GET['logout'])){
  unset($_SESSION['login']);
  session_destroy();
  header('Location: index.php');  
    
  }
  include('home.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

</body>
</html>
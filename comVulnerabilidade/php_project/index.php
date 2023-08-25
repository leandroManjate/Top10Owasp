<?php

include_once('config.php');


if(isset($_GET['user_id'])&&!empty($_GET['user_id']))
{
    $user_id=$_GET['user_id'];

    $result=mysqli_query($conn,"Select * from users where user_id =".$user_id);

  

    while($row =mysqli_fetch_assoc($result))
    {
        echo $row['user_name']. "-".$row['user_email'];


    }



}





?>


<div style="text-align: center;">

<h1> College -Student FInder </h1>

<form method="GET" action="index.php">
    <input type="text" name="user_id"/>

    <button type="submit" class="btn btn-primary mt-3"> find</button>

</form>

<h1> Escreva qualquer coisa</h1>

<form method="GET" action="search.php">
    <input type="text" name="search"/>

    <button type="submit" class="btn btn-primary mt-3"> Escrever</button>

</form>

<a href="atualizarEmail.php">
    <button>Atualizar email</button>
  </a> 

  <a href="inserirFIcheiros.php">
    <button>Inserir ficheiros</button>
  </a> 


  <a href="registar.php">
    <button>Registar</button>
  </a> 

  <a href="login.php">
    <button>Fazer login</button>
  </a> 

  <a href="hijacking.php">
    <button>session hijacking and forgery</button>
  </a> 

  <a href="displayError.php">
    <button>Verificar erro</button>
  </a> 






<?php

//$dbuser="root";
//$dbpass="aluno123";




$dbuser = $_SERVER['MYSQL_USER3'];
$dbpass = $_SERVER['MYSQL_PASS3'];


$mysqli = new mysqli("localhost",$dbuser,$dbpass,"php_project");

//$mysqli = new mysqli("localhost","root","aluno123","php_project");

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) &&
   !empty($_POST['name'] && !empty($_POST['email']) && isset($_POST['password'])) )
   {

   $name = $mysqli->real_escape_string($_POST['name']);
   $email = $mysqli->real_escape_string($_POST['email']);
   $password = password_hash($_POST['password'],PASSWORD_DEFAULT );


   //$stmt = $mysqli->prepare('INSERT INTO users (user_name,user_email,user_password) VALUES (?,?,?) ');
   $stmt = $mysqli->prepare('CALL registar_estudante(?,?,?)');

   // bind parameters for markers 
   $stmt->bind_param("sss",$name,$email,$password);

   // execute query 
   $result = $stmt->execute();


        if($result)
        {
            echo "Criou a conta de uma forma bem sucedida";
        }else
            {
            echo 'Falhou criar a conta';
            }



   }




?>

<div style="text-align: center;">

<h1>Register</h1>

<form method="post" action="registar.php">
    <div style="margin:10px">
        Username: <input type="text" name="name" />
    </div>
    <div style="margin:10px">
        Email: <input type="text" name="email" />
    </div>
    <div style="margin:10px">
        Password: <input type="password" name="password" />
    </div>
   
  
    <button type="submit" class="btn btn-primary mt-3">register</button>
   
</form>
<a href="index.php">
    <button>Voltar</button>
  </a> 

</div>

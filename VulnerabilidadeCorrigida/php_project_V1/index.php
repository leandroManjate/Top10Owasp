<?php
  

//Solution 1 SQL Injection

//$dbuser="root";
//$dbpass="aluno123";

//ini_set('display_errors', 0);
//ini_set('display_startup_errors', 0);



$dbuser = $_SERVER['MYSQL_USER1'];
$dbpass = $_SERVER['MYSQL_PASS1'];



      $con = new PDO('mysql:dbname=php_project;host=localhost', $dbuser, $dbpass);
   // $con = new PDO('mysql:dbname=php_project;host=localhost', 'root', 'aluno123');


	
if(isset($_GET['user_id']) && !empty($_GET['user_id'])){


    $id = $_GET['user_id'];

   
    //create a prepared statement 
   // $stmt = $con->prepare("SELECT `user_name`, `user_email` from `users` WHERE `user_id` = :id");
    $stmt = $con->prepare("CALL procurar_utilizador(:id)");
    
    // bind parameters for markers 
    $stmt->bindParam(':id', $id);

    // execute query 
    $stmt->execute();


    $stmt->bindColumn(1,$user_name);
    $stmt->bindColumn(2,$user_email);
    
    print "NOME \t\t\t\t\t\t\t\t\t\t   Email <br>";

    while ($stmt->fetch(PDO::FETCH_BOUND)) {
        print $user_name . "- \t" . $user_email . "\n";
    }
    
   
        
        
    

  

}

 


/*

//SOlution2 SQL Injection

$mysqli = new mysqli("localhost","root","aluno123","php_project");

if(isset($_GET['user_id']) && !empty($_GET['user_id'])){


    $user_id = $_GET['user_id'];

    
     //create a prepared statement 
    $stmt = $mysqli->prepare("SELECT * FROM users WHERE user_id = ?");
    
    
    // bind parameters for markers 
    $stmt->bind_param("i",$user_id);

    
    //execute query 
    $stmt->execute();
    
    $result = $stmt->get_result();
    
    while($row = $result->fetch_assoc()){
       echo $row['user_email'] ." - ". $row['user_name'];
    }
    
    
    

  

}

*/



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





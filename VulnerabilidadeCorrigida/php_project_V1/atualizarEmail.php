
<?php

ini_set('display_errors', 0;
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);


header("X-XSS-Protection: 1;mode=block");

//$dbuser="root";
//$dbpass="aluno123";

$dbuser = $_SERVER['MYSQL_USER4'];
$dbpass = $_SERVER['MYSQL_PASS4'];


//$mysqli = new mysqli("localhost","root","aluno123","php_project");
$mysqli = new mysqli("localhost",$dbuser,$dbpass,"php_project");

if(isset($_POST['id']) && isset($_POST['email']))
{
    $id = $_POST['id'];

    //Proteeccao para insercao de dados na base de dados

    $email=$mysqli->real_escape_string( $_POST['email']);

    //PDP
    //$stmt = $mysqli->prepare('UPDATE users SET user_email=? WHERE user_id=? ');
    $stmt = $mysqli->prepare('CALL atualizarEmail(?,?)');

    $stmt->bind_param("si",$email,$id);

    $result =$stmt->execute();
 //COnverter os script para texto quando queres se aprensentar algo no ecra
    echo htmlentities($email);

}


?>



<div style="text-align: center;">

 <h1>UPDATE EMAIL</h1>

 <form method="post" action="atualizarEmail.php">
     <div style="margin: 10px;">ID: <input type="text" name="id" /></div>
     <div style="margin: 10px;">EMAIL: <input type="text" name="email" /></div>


    <button type="submit" class="btn btn-primary mt-3">Update</button>
 </form>

 </div> 
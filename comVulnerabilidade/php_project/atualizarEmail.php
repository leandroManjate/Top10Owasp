
<?php


$mysqli = new mysqli("localhost","root","aluno123","php_project");

if(isset($_POST['id']) && isset($_POST['email']))
{
    $id = $_POST['id'];

    $email=$_POST['email'];

    $stmt = $mysqli->prepare('UPDATE users SET user_email=? WHERE user_id=? ');


    $stmt->bind_param("si",$email,$id);

    $result =$stmt->execute();

    echo $email;

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
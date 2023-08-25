
<?php



//Codigo antes do logger

//$dbuser="root";
//$dbpass="aluno123";

//ini_set('display_errors', 0);
//ini_set('display_startup_errors', 0);
//error_reporting(E_ALL);


$dbuser = $_SERVER['MYSQL_USER2'];
$dbpass = $_SERVER['MYSQL_PASS2'];

$mysqli = new mysqli("localhost",$dbuser,$dbpass,"php_project");

// $mysqli = new mysqli("localhost","root","aluno123","php_project");


if(isset($_POST['email']) && isset($_POST['email']) && !empty($_POST['email']) && !empty($_POST['password'])){

          $email =  $mysqli->real_escape_string($_POST['email']);
          $password = $mysqli->real_escape_string($_POST['password']);

          //$stmt = $mysqli->prepare("SELECT user_name, user_email, user_password FROM users WHERE user_email = ?");
          $stmt = $mysqli->prepare("CALL login_utilizador( ?)");
          $stmt->bind_param('s', $email);

        
          $stmt->execute();
          $stmt->bind_result($user_name, $user_email,$user_password);
          $row = $stmt->fetch(); //fetch DB results




          if (!empty($row)) { // checks if the user actually exists(true/false returned)
              //Login com a encriptação da palavra chave
              if (password_verify($password, $user_password)) {
                  echo 'logged in successfully'; // password_verify success!
                  echo "<br/>";
                  echo htmlentities($user_email);
                  echo "<br/>";
                  echo htmlentities($user_name);
              } else {
              echo 'failed';
              }
          } else {
              echo "This user does not exist"; //email entered does not match any in DB
          }

          $stmt->close();
        


        }


?>


 <div style="text-align: center;">

<h1>Login</h1>

<form method="post" action="login.php">
   <div style="margin: 10px;">Email: <input type="text" name="email" /></div>
    <div style="margin: 10px;">Password: <input type="password" name="password" /></div>


    <button type="submit" class="btn btn-primary mt-3">Login</button>
</form>
<a href="index.php">
    <button>Voltar</button>
  </a> 

</div


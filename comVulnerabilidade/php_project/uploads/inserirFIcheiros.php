<?php

$target_dir="uploads/";

//Quando o ficheiro foi carregado a variavel fica com 1 e caso contrario fica 1
$uploadOk=1;


if(isset($_POST["submit"]))
{
    $target_file = $target_dir . basename($_FILES["picture"]["name"]);  //upload/filename.jpg
    $imageFileType =strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    //Se o utilizador carregar ficheiros com outra extensão que essas, então não vai aceitar

    if(move_uploaded_file($_FILES["picture"]["tmp_name"],$target_file))
        {
            $uploadOk=1;
            echo 'O ficheiro foi carregado de uma forma bem sucedida';

        }else
        {
            $uploadOk=0;

            echo 'Não foi carregada';

        }


}


?>


<form method="post" enctype="multipart/form-data" action="inserirFIcheiros.php">

    File: <input type="file" name="picture" >
	
	<input type="submit" name="submit">
	
</form>


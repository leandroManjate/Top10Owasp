<?php

$target_dir="uploads/";

//Quando o ficheiro foi carregado a variavel fica com 1 e caso contrario fica 1
$uploadOk=0;


if(isset($_POST["submit"]))
{
    $target_file = $target_dir . basename($_FILES["picture"]["name"]);  //upload/filename.jpg
    $imageFileType =strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    //Se o utilizador carregar ficheiros com outra extensão que essas, então não vai aceitar
    $allowed = array('gif','png','jpg','jpeg');
    $filename= $_FILES['picture']['name'];

    //get file extention
    $ext = pathinfo($filename,PATHINFO_EXTENSION);

    if(!in_array($ext,$allowed))
    {
        $uploadOk=0;
        echo 'Não é uma imagem';

    }else
    {
        //echo $_FILES["picture"]["size"];
        if($_FILES["picture"]["size"]>100000)
        {
            $uploadOk = 0;
            echo "Desculpa o ficheiro é demasiado grande";
            


        }
        else 
        {
            if(move_uploaded_file($_FILES["picture"]["tmp_name"],$target_file))
            {
                $uploadOk=1;
                echo 'O ficheiro foi carregado de uma forma bem sucedida';

            }
        }


    }


}


?>


<form method="post" enctype="multipart/form-data" action="inserirFIcheiros.php">

    File: <input type="file" name="picture" >
	
	<input type="submit" name="submit">
	
</form>


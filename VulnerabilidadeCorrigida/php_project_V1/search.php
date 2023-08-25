<?php

if(isset($_GET['search']))
{


    echo htmlentities($_GET['search']);

    // Convert speatial caracter to html
    //echo htmlspecialchars($_GET['search']);

}


?>

<html>
<form action ="" method="get">


    <input type="text" name="nombre">
    <button  type="submit">envoyer</button> 
    </form>




<?php

if(isset($_GET["nombre"])){
    if(($_GET["nombre"]) % 2 == 0){
        echo "nombre pair";
    }

else{ 
        echo "nombre impair";
    }

}


?>




</html>
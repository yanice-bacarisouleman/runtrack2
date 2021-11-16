<html>
<table>
<tr>
    <td>Arguments</td>
    <td>Values</td>
</tr>

<?php


foreach ($_GET as $key => $value) {
    echo "<tr><td>$key</td> 
    <td>$value</td></tr> ";
    
}


?>

</table>

<form action ="" method="get">


    <input type="text" name="Fam">
    <br><input type="text" name="Nam">
    <br><input type="text" name="Man">
   <br><input type="submit" value="Send">
    </form>

</html>
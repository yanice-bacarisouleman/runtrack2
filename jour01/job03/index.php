
<?php
$bol = True;
$entier = 4;
$chaine_character = "Hello LaPlateforme";
$int = 9.26;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Yes</title>
</head>
<body>
    <table>
        <tr>
            <td>Type</td>
            <td>Nom</td>
            <td>Valeur</td>
        </tr>
        <tr>
            <td>Booléen</td>
            <td>Bol</td>
            <td><?php echo $bol ?></td>
        </tr>
        <tr>
            <td>Entier</td>
            <td>Chiffre</td>
            <td><?php echo $entier ?></td>
        </tr>
        <tr>
            <td>Chaine de caracteres</td>
            <td>Phrase</td>
            <td><?php echo $chaine_character  ?></td>
        </tr>
        <tr>
            <td>Nombre à virgule</td>
            <td>Virgule</td>
            <td><?php echo $int ?></td>
        </tr>
    </table>

</body>
</html>
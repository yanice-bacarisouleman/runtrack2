<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
if(isset($_GET["submit"])){
    if($_GET["color"] == "rouge"){
        echo '<link rel="stylesheet" type="text/css" href="rouge.css" />';
    }
    elseif($_GET["color"] == "bleu"){
        echo '<link rel="stylesheet" type="text/css" href="bleu.css" />';
    }
    elseif($_GET["color"] == "vert"){
        echo '<link rel="stylesheet" type="text/css" href="vert.css" />';
    }
}
?>
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    <select name="color" id="color">
    <option value="">Selectionnez un style</option>
    <option value="rouge" required>Style 1</option>
    <option value="vert" required>Style 2</option>
    <option value="bleu" required>Style 3</option>
    </select>
    <button type="submit" name="submit">Valider</button>
</form>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="form.css" media="screen">
    <title>inicio</title>
</head>


<body>

    <?php
    require_once __DIR__ . '/vendor/autoload.php';
    ?>
    
    <form action="./src/Usuarios.php" method="get">

<fieldset class="grupo">
  
    <div class="campo">
        <label for="nome"><strong>Nome1</strong></label>
        <input type="text" name="name1">
    </div>

    <div class="campo">
        <label for="sobrenome"><strong>Nome2</strong></label>
        <input type="text" name="name2">
    </div>

    <div class="campo">
        <label for="sobrenome"><strong>Nome3</strong></label>
        <input type="text" name="name3">
    </div>
    <input type="submit" value="enviar">
</fieldset> 

    </form>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="public/css/estilo.css">
        <!--<link rel="stylesheet" href="../css/estilo.css">-->
    </head>
    <body>

        <nav>
            <ul>
                <?php
                    require '../rutas.php';
                    foreach ($rutas as $k => $v) : ?>
                        <?= "<li><a href='$v'>$k</a></li>"; ?>
                    <?php endforeach ?>
            </ul>
        </nav>



    </body>
</html>

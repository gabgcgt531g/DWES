<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" />
    <title>Llamada de funciones</title>
</head>

<body>
    <p>
        <?php

        echo "Reusltado de función aleHop(): ";
        include 'aleHop.php';
        aleHop(3, 6);

        ?>
    </p>

    <p>
        <?php

        echo "Reusltado de función holaMundo(): ";
        include 'holaMundo.php';
        holaMundo();

        ?>
    </p>

</body>

</html>
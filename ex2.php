<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF=8">
</head>

<body>
    <form method="POST">
        Número: <input type="number" name="n">
        <input type="submit" value="Enviar">
    </form>

    <?php

    if (isset($_POST["n"])) {

        $n = $_POST["n"];

        // resolver aqui
        echo ("<h3> numeros maiores que 5 ate N</h3>");
        $i = 5;

        while ($i >$n) {
            echo ($i);
            $i++;
        }
    }
    ?>



</body>

</html>
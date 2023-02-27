<!DOCTYPE html>
<head>
    <title>Cadastro de Genero</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        include_once("conn.php");
    ?>

    <form method="POST" action="Processa_cad_Genero.php">
        Genero: <input type="text" name="txtGen"> <br><br>
        <br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>
<!DOCTYPE html>
<head>
    <title>Cadastro de Atores</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        include_once("conn.php");
    ?>

    <form method="POST" action="Processa_cad_Ator.php">
        Ator: <input type="text" name="txtAtor"> <br><br>
        <br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>
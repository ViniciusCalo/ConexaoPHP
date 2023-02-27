<!DOCTYPE html>
<head>
    <title>Cadastro de Diretor</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        include_once("conn.php");
    ?>

    <form method="POST" action="Processa_cad_Diretor.php">
        Diretor: <input type="text" name="txtDir"> <br><br>
        <br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>
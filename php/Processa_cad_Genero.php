<?php
    include_once("conn.php");
    $gen = $_POST['txtGen'];

    $result_usuario = "INSERT INTO tbGeneroFilme(generoFilme) VALUES ('$gen')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

    if(mysqli_affected_rows($conn) !=  0){
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
            <script type=\"text/javascript\">
                alert(\"Genero cadastrado com Sucesso.\");
            </script>
        ";
    }else{
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadastroGenero.php'>
        <script type=\"text/javascript\">
            alert(\"Genero não foi cadastrado com Sucesso.\");
        </script>
        ";
    }
?>
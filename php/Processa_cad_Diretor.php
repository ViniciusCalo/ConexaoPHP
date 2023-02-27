<?php
    include_once("conn.php");
    $dir = $_POST['txtDir'];

    $result_usuario = "INSERT INTO tbDiretorFilme(nomeDiretor) VALUES ('$dir')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

    if(mysqli_affected_rows($conn) !=  0){
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
            <script type=\"text/javascript\">
                alert(\"Diretor cadastrado com Sucesso.\");
            </script>
        ";
    }else{
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadastroDiretor.php'>
        <script type=\"text/javascript\">
            alert(\"Diretor não foi cadastrado com Sucesso.\");
        </script>
        ";
    }
?>
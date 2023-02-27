<?php
    include_once("conn.php");
    $ator = $_POST['txtAtor'];

    $result_usuario = "INSERT INTO tbator(ator) VALUES ('$ator')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

    if(mysqli_affected_rows($conn) !=  0){
        echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=index.php'>
            <script type=\"text/javascript\">
                alert(\"Ator cadastrado com Sucesso.\");
            </script>
        ";
    }else{
        echo "
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=cadastroAtores.php'>
        <script type=\"text/javascript\">
            alert(\"Ator não foi cadastrado com Sucesso.\");
        </script>
        ";
    }
?>
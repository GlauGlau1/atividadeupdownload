

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="updown">
    
        <div class="card" id="card1">
            <form action="" method="post" enctype="multipart/form-data">
                <p><b>Up-</b>load</p>
                <input type="file" name="arquivoup">
                <input type="submit" value="Enviar">
                <?php
                        if (isset($_FILES['arquivoup'])) {
                            $arquivo = $_FILES['arquivoup'];
                            $file_tmp = $_FILES['arquivoup']['tmp_name'];
                            $file_ext = explode('.', $_FILES['arquivoup']['name']);
                            $file_ext = strtolower(end($file_ext));
                            $extensions = array("jpg");
                        
                            if ($arquivo['error'] !== UPLOAD_ERR_OK) {
                                die('Erro ao enviar arquivo');
                            }
                        
                            if(in_array($file_ext,$extensions) === false){
                                echo "Apenas arquivos JPG são permitidos.";
                            } else{
                                move_uploaded_file($file_tmp, "uploads/".$arquivo['name']);
                                echo "Upload realizado com sucesso!";
                            }
                        
                            $caminho_arquivo = 'uploads/' . $arquivo['name'];
                            if (!move_uploaded_file($arquivo['tmp_name'], $caminho_arquivo)) {
                                die(' Arquivo Salvo.');
                            }
                        }
                    ?>
            </form>
        </div>
        <br>
        <div class="card" id="card2">
            <form method="POST" action="">
                <label for="url_imagem">URL da imagem:</label>
                <input type="text" id="url_imagem" name="url_imagem">
                <button type="submit">Baixar</button>
            </form>
            <?php
                if(isset($_POST['url_imagem'])) {
                    $url_imagem = $_POST['url_imagem'];
                    
                    $nome_arquivo = basename($url_imagem);
                
                    $tipo_arquivo = "image/jpeg";
                
                    $tamanho_arquivo = get_headers($url_imagem, true)["Content-Length"];
                
                    header("Content-Type: ".$tipo_arquivo);
                    header("Content-Length: ".$tamanho_arquivo);
                    header("Content-Disposition: attachment; filename=".$nome_arquivo);
                
                    readfile($url_imagem);
                    exit;
                }
            ?>
        </div>
</section>
</body>
</html>

<?php

?>  
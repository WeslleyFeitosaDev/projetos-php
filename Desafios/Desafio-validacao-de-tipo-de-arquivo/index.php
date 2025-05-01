<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validacao de tipo de arquivo</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $arquivo =  $_FILES["upimagem"];
            if($arquivo["error"] ==0){
                $tmp=$arquivo["tmp_name"];
                $local_permante="upload/" .$arquivo["name"];
                if(move_uploaded_file($tmp,$local_permante)){
                    echo "Arquivo salvo";
                }
            }
        }
    
    ?>
    <header>
        <h1>Verificar o tipo de arquivo</h1>
    </header>

    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data">
            <div class="div">
                <input type="file" name="upimagem" id="upimagem">
                <i class='bx bxs-file-blank'></i>
                Enviar aquivo
            </div>
            <input type="submit" value="Upload">
        </form>
    </main>
    <section>
        <h2>Verificação</h2>
        <p>Analisando imagem</p>
    </section>
</body>
</html>
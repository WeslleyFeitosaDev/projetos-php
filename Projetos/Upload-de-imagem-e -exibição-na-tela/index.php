<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload imagem</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $numero_aleatorio=rand(0,99);
            $upimagem=$_FILES["upimagem"];
            if($upimagem["error"] == 0){

                $tmp=$upimagem["tmp_name"];
                $extasao_imagem=pathinfo($upimagem["name"], PATHINFO_EXTENSION);
                
                $renomear_nome="imagem-" . $numero_aleatorio . "." . $extasao_imagem;
                $Nome=$renomear_nome;

                $destino="upload/$renomear_nome";

                move_uploaded_file($tmp,$destino);
                
                
            }
        }else{
            $renomear_nome="imagem-default.jpg";
            $Nome="Coloque uma imagem";
        }

        
    
    ?>

   <header>
        <h1>Upload</h1>
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
        <h2>Imagens</h2>
        <div class="card">
            <div class="imagem">
                <img src="upload/<?=$renomear_nome?>" alt="" id="imagem" >
            </div>
            <div class="infomacao">
                <p><?=$Nome?></p>
            </div>
        </div>
        
    </section>


    
</body>
</html>
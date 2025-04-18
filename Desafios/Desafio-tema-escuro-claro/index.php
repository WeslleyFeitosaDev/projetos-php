<?php 
    session_start();
    if(isset($_POST["tema_escuro"])){
        $_SESSION["tema"]="escuro";
    }elseif(isset($_POST["tema_claro"])){
        $_SESSION["tema"]="claro";
    }

    if(isset($_SESSION["tema"])){
        if($_SESSION["tema"]=== "escuro"){
            $back="background-color: black;";
        }else{
            $back="background-color: white;";
        }
    }else{
        $back="";
    }
    

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>temas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="<?=$back?>">
    <header>
        <h1>Nome</h1>
    </header>

    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <input type="submit" value="Tema escuro" name="tema_escuro">
            <input type="submit" value="Tema claro" name="tema_claro">
        </form>
    </main>
    

</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de senhas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $qtidade=$_GET["qtidadec"] ?? "";
        if($qtidade!="" && $qtidade!=0){
            $Alfabetom=range("A","Z");
            $Alfabetomin=range("a","z");
            $numero=str_split((string) rand(0,99));
            $carectere=["@","-","/","_"];

            $juntar_tudo=array_merge($Alfabetom,$Alfabetomin,$numero,$carectere);
        
            shuffle($juntar_tudo);


            $transformar_sar=implode("",$juntar_tudo);

            $senha_gerada=substr($transformar_sar,0,$qtidade);
            if($qtidade>=8){
                $tipo_senha='<span style="color: green;">Senha forte</span>';
            }else{
                $tipo_senha = '<span style="color: red;">Com '.$qtidade.' caractere senha fraca</span>';
                
            }
            
        }
        if($qtidade=="" || $qtidade==0){
            if($qtidade==0){
                $tipo_senha="";
                $senha_gerada="Não existe senha com 0 carectere";
            }
            

            elseif($qtidade==""){
                $tipo_senha="";
                $senha_gerada="Digite uma quantidade de carectere, por favor!!!";
            }

            
        }
        
        

        

        
        
        
    
    
    ?>

    <header>
        <h1>Gerador de senhas </h1>
    </header>
    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="qtidadec">Digite quantas carecteres você quer:</label>
            <input type="number" name="qtidadec" id="qtidadec" value=" ">
            <input type="submit" value="Enviar">

        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <p id="tipo_senha"><?=$tipo_senha?></p>
        <p><?=$senha_gerada?></p>
        
    </section>

</body>
</html>
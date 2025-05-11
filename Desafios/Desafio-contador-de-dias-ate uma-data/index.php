<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Agenda</h1>
    </header>

    <main>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
            <label for="nome">Nome do compromisso</label>
            <input type="text" name="nome" id="nome">
            <input type="date" name="data" id="data">
            <input type="submit" value="Enviar">
        </form>
    </main>

    <?php 
        $data_informada=$_POST["data"] ?? "";
        $nome_envento=$_POST["nome"] ?? "";
        $timestemp_atual=strtotime(date("Y-m-d"));
        $timestemp_usuario=strtotime($data_informada);
        
        if($data_informada!="" && $nome_envento!=""){
            if($timestemp_usuario>=$timestemp_atual){
                $titulo="Evento";
                $nome="Nome: $nome_envento";
                $total_dias=($timestemp_usuario-$timestemp_atual) / (60 * 60 * 24);
                if($total_dias>0){
                    $qtidadias="Quantidades de dias: $total_dias";
                }else{
                    $qtidadias="Seu evento é hoje";
                }
            }else{
                $titulo="";
                $nome="";
                $qtidadias="Não existe eventos antes do dia ". date("d");
            }
        }else{
            $titulo="Evento";
            $nome="Ops nome ou data não informados!!!!!!";
            $qtidadias="";
        }
        
        
    ?>

    <section>
        <div>
            <h2><?=$titulo?></h2>
            <div class="detalhes">
                <p><?=$nome?></p>
                <p><?=$qtidadias?></p>
            </div>
        </div> 
    </section>
</body>
</html>
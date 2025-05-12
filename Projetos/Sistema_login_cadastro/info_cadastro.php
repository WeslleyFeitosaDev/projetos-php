<?php 
    $nome=$_POST["nome"] ?? "";
    $email=$_POST["email"] ?? "";
    $senha=$_POST["senha"] ?? "";
    $date=date("Y/m/d") ?? "";
    
    $conn=new mysqli("localhost","root","","sistema_cadastro");

    // verificação de error 
    if($conn->connect_error){
        die("Erro:: ".$conn->connect_error);
    }


    // verificação se o email ja existe
    


    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if($nome !="" && $email!="" && $senha!=""){
            $sqlverificacao="SELECT id FROM usuario WHERE email = ?";
            $stmt_verficacao=$conn->prepare($sqlverificacao);
            $stmt_verficacao->bind_param("s",$email);
            $stmt_verficacao->execute();
            $stmt_verficacao->store_result();
            if($stmt_verficacao->num_rows >0){
                $mensagem="Esse email já tem conta";
            }else{
                $mensagem="";
                $sql="INSERT INTO usuario(nome,email,senha,data) VALUES (?,?,?,?)";
                $stmt=$conn->prepare($sql);
                $stmt->bind_param("ssss",$nome,$email,$senha,$date);
                if($stmt->execute()){
                    ("location: https://www.youtube.com");
                    exit;
                }
            }
            
            
        }
        

    
    }
    $conn->close();
?>
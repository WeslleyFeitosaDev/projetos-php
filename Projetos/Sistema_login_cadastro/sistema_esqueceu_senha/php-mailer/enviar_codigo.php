<?php
    session_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require "vendor/autoload.php";
    require_once "../esqueceu_senha/conn.php";
    require_once "../esqueceu_senha/selecionar_os_dados.php";

    $mail = new PHPMailer(true);    

    if ($resultado->num_rows == 1) {

        require_once "../esqueceu_senha/codigo.php"; 

        
        $sql_codigo = "INSERT INTO codigo (codigo) VALUES(?)";
        $stmt_codigo = $conn->prepare($sql_codigo);
        $stmt_codigo->bind_param("s", $codigo_gerado);
        $stmt_codigo->execute();

        
        $_SESSION['codigo_enviado'] = $codigo_gerado;
        $_SESSION["id"]=$usuario["id"];

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'weslleybarbosa187@gmail.com';
            $mail->Password = 'fxmktrtgizvspgny';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom('weslleybarbosa187@gmail.com', 'Weslley Feitosa');
            $mail->addAddress($usuario["email"]);
            $mail->Subject = 'Codigo de recuperacao';
            $mail->Body = "Codigo gerado: " . $codigo_gerado;

            $mail->send();
            header("location: inserir_codigo.php");
            exit;
        } catch (Exception $e) {
            echo "Erro ao enviar o email: {$mail->ErrorInfo}";
        }
    } else {
        echo "Email nao cadastrado";
    }
?>

<?php 
    include_once "conn.php";

    $sql_codigo="SELECT * FROM codigo WHERE codigo = ?";
    $stmt_codigo=$conn->prepare($sql_codigo);
    $stmt_codigo->bind_param("s",$codigo);
    $stmt_codigo->execute();
    $resultado_codigo=$stmt_codigo->get_result();
    $user_codigo=$resultado_codigo->fetch_assoc();

?>
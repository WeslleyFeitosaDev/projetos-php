<?php 
    include "conn.php";
    $sql="SELECT * FROM usuario WHERE email = ?";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $resultado=$stmt->get_result();
    $usuario=$resultado->fetch_assoc();
    

    

?>
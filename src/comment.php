<?php
    $nome = $_REQUEST['Nome'];
    $email = $_REQUEST['Email'];
    $comentario = $_REQUEST['Comentario'];

    $db = new PDO(
        'mysql:host=127.0.0.1;dbname=comment;charset=utf8', 'root', '');

    $sql = "INSERT INTO comment".
            "(nome, email, comentario)".
            "VALUES ('$nome', '$email', '$comentario')";

    $db->exec($sql);
?>
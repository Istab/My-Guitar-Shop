<?php
    $dsn = 'mysql:host=sql2.njit.edu;dbname=ia238';
    $username = 'ia238';
    $password = 'qMSAi5hus';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>

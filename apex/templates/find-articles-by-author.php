<?php
$articles = $pdo->query('SELECT * FROM products WHERE authorId = :id');
$articles->execute(['id' => $_GET['id']]);
?>
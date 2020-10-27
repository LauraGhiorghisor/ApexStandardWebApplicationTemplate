<?php

$category = $pdo->prepare('SELECT category_name FROM categories WHERE category_id = :id');
$var = [
'id' => $_GET['id']
];
$category->execute($var);
$cat = $category->fetch();

$articles = $pdo->prepare('SELECT * FROM products WHERE category = :name');
$articles->execute(['name' => $cat['category_name'] ]);

?>
<?php
require '../templates/connect.php';
require '../templates/find-categories.php';



$title= 'Category list';


ob_start();
require '../templates/category-list.html.php';
$categories = ob_get_clean();


ob_start();
require '../templates/buttons-list.html.php';
$buttons = ob_get_clean();



ob_start();
require '../templates/buttons-dropdown-list.html.php';
$buttonsDrop = ob_get_clean();



ob_start();
require '../templates/find-articles-by-category.php';
require '../templates/article-list.html.php';
$content = ob_get_clean();


require '../templates/layout.html.php';


<?php

require '../templates/connect.php';
require '../templates/find-articles-latest.php';
require '../templates/find-categories.php';

$title= 'Apex';

ob_start();
require '../templates/article-list.html.php';
$content = ob_get_clean();

ob_start();
require '../templates/category-list.html.php';
$categories = ob_get_clean();


ob_start();
require '../templates/buttons-list.html.php';
$buttons = ob_get_clean();



ob_start();
require '../templates/buttons-dropdown-list.html.php';
$buttonsDrop = ob_get_clean();

require '../templates/layout.html.php';

?>
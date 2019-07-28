<?php

require './inc/classes/Article.php';
require './inc/classes/Category.php';
require './inc/classes/Author.php';
require './inc/classes/DBData.php';

$monObjetData = new DBData();

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
}
else {
    die('id non fourni');
}

$articles = $monObjetData->getAllPost();
$categories = $monObjetData->getAllCategory();
$authors = $monObjetData->getAllAuthor();

require './inc/templates/header.php';
require './inc/templates/article.php';
require './inc/templates/footer.php';
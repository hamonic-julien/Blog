<?php

require './inc/classes/Article.php';
require './inc/classes/Category.php';
require './inc/classes/Author.php';
require './inc/classes/DBData.php';

$monObjetData = new DBData();

require './inc/data.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
}
else {
    die('id non fourni');
}

$posts = $monObjetData->getAllPost();
$categories = $monObjetData->getAllCategory();
$authors = $monObjetData->getAllAuthor();

$currentCategory = $categories[$id];

$articles = [];
foreach ($posts as $currentArticleId=>$currentArticle) {
    if ($currentArticle->category == $currentCategory->name) {
        $articles[$currentArticleId] = $currentArticle;
    }
}

require './inc/templates/header.php';
require './inc/templates/category.php';
require './inc/templates/footer.php';
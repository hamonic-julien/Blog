<?php

require './inc/classes/Article.php';
require './inc/classes/Category.php';
require './inc/classes/Author.php';
require './inc/classes/DBData.php';

$monObjetData = new DBData();

$articles = $monObjetData->getAllPost();
$categories = $monObjetData->getAllCategory();
$authors = $monObjetData->getAllAuthor();


require './inc/templates/header.php';
require './inc/templates/home.php';
require './inc/templates/footer.php';
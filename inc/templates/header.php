<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Déclaration de notre font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,800" rel="stylesheet">

    <!-- -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <!-- Ma feuille de style pour mon blog -->
    <link rel="stylesheet" href="./css/blog.css">

    <title>oBlog</title>
</head>

<body>

    <!-- HEADER -->
    <header>
        <?php require './inc/templates/nav.php'; ?>
        <section class="text-center">
            <h1>A la dérive</h1>
            <hr />
            <p>
                Un blog collaboratif de développeurs web dérivant délibérément au milieu de l'espace
            </p>
        </section>
    </header>

    <!-- Mon container (avec une max-width) dans lequel mon contenu va être placé: https://getbootstrap.com/docs/4.1/layout/overview/#containers -->
    <div class="container">
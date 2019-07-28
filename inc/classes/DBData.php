<?php

class DBData {
    private $pdo;
    public function __construct () {
        //Ma fonction construct est appelée lors de l'instanciation de la classe
        //J'aiemerais créer un objet qui soit connecté à la BDD
        //Pour m'en servir et récupérer les articles, les catégories, etc...
        //Pour me connecter, j'ai besoin de paramètres
        $dsn = 'mysql:dbname=oblog;host=localhost;charset=UTF8';
        $user = 'oblog';
        $password = 'oblog';
        //J'ajoute une option pour avoir les erreurs en Warning
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        ];
        //J'ai besoin de me connecter avec ces paramètres
        //Pour me connecter avec PDO, j'instancie la classe PDO en lui donnant les paramètres

        //En retour j'obtiens un objet PDO qui me permet d'utiliser des méthodes (query, exec,...)

        //Cet objet doit etre accessible à toutes mes méthodes

        //Dans une classe, je peux créer des propriétés publiques ou privées
        //qui seront accessibles dans toute ma classe
        //Je peux donc utiliser ce principe pour stocker l'objet PDO (en privé pour la sécurité)
        $this->pdo = new PDO($dsn, $user, $password, $options);
    }

    //Récuperer tous les articles
    public function getAllPost() {
        //créer ma requete sql
        $sql = '
        SELECT post.*, category.name AS category, author.name AS author 
        FROM post
        INNER JOIN category ON post.category_id = category.id
        INNER JOIN author ON post.author_id = author.id
        ';
        //Utiliser pdo pour faire une query (renvoi pdoStatement)
        $pdoStatement = $this->pdo->query($sql);
        //Stocker dans une variable mes résultats de pdoStatement (avec la méthode fetchAll)
        $results = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
        //$results est un tableau contenant des tableaux
        //Je souhaite retourner un tableau d'objet fabriqué avec la classe Article
        //donc boucler sur les résultats en utilisant la classe Article et stocker le tout dans un tableau
        $tableauDObjet = [];
        foreach($results as $postArray) {
            $tableauDObjet [] = new Article(
                $postArray['title'], 
                $postArray['content'], 
                $postArray['author'], 
                $postArray['publish_date'], 
                $postArray['category']
            );
        }
        //et return le tableau d'objet (instance d'Article)
        return $tableauDObjet;
    }
   

    //Récupérer toutes les catégories
    public function getAllCategory() {
        //Je répète le même principe que pour getAllPost
        $sql = 'SELECT * FROM category';
        $pdoStatement = $this->pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
        $tableauDObjet = [];
        foreach($results as $categoryArray) {
            $tableauDObjet [] = new Category($categoryArray['name']);
        }
        return $tableauDObjet;
    }
    

    //Récupérer tous les auteurs
    public function getAllAuthor() {
         //Je répète le même principe que pour getAllPost
        $sql = 'SELECT * FROM author';
        $pdoStatement = $this->pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
        $tableauDObjet = [];
        foreach($results as $authorArray) {
            $tableauDObjet [] = new Author($authorArray['name']);
        }
        return $tableauDObjet;
    }
    
}
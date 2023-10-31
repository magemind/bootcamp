<?php

namespace App\Post;

use PDO;

class PostRepository 
{

    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    function fetchPosts()
    {
     
        $stmt = $this->pdo->query("SELECT * FROM `posts`");
        $posts = $stmt->fetchAll(PDO::FETCH_CLASS,  "App\\Post\\PostModel");
        var_dump($posts);

        return $posts;
    }
    
    
    function fetchPost($id) {

        $stmt = $this->pdo->prepare("SELECT * FROM `posts` WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "App\\Post\\PostModel");
        $post = $stmt->fetch(PDO::FETCH_CLASS);

        var_dump($post);



        return $post;

    }

}


?>
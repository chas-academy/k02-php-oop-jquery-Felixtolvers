<?php

class Tweet extends User {

    function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function tweets(){
       $stmt = $this->pdo->prerpare("SELECT * FROM `tweets`, `users` WHERE `tweetBy` = `id`");
       $stmt->execute();

       $tweets = $stmt->fetchAll(PDO::FETCH_OBJ);

       foreach($tweets as $tweet){
           echo ''
       }
    }
}

?>
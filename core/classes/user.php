<?php

class User {
    protected $pdo;

    function __construct($pdo){
        $this->pdo = $pdo;
    }

   public function checkInput($var){
       $var = htmlspecialchars($var);
       $var = trim($var);
       $var = stripcslashes($var);
       return $var;
   } 

   public function login($email, $password){
    $passwordHash = md5($password);
    $stmt = $this->pdo->prepare('SELECT `id` FROM `users` WHERE `email` = :email AND `password` = :password');
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':password', $passwordHash, PDO::PARAM_STR);
    $stmt->execute();

    $count = $stmt->rowCount();
    $user = $stmt->fetch(PDO::FETCH_OBJ);

    if($count > 0){
        $_SESSION['id'] = $user->id;
        header('Location: home.php');
    }else{
        return false;
    }
}
    public function userData($id){
        $stmt = $this->pdo->prepare("SELECT * FROM `users` WHERE `id` = :id");
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function logout(){
        $_SESSION = array();
        session_destroy();
        header('Location: ../index.php');    
    }
}

?>
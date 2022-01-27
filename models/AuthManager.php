<?php
require_once 'models/Manager.php';
class AuthManager extends Manager {

    public function connexionUser($User_Login) {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('SELECT * FROM users WHERE username = :username');
        $req->execute([
            'username' => $User_Login,
        ])or die(print_r($req->errorInfo()));
        return $req;
    }

    public function register($user_login, $password, $email, $admin) {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('INSERT INTO users (id, username, email, password, admin ) VALUES (NULL, :username, :password, :email, :admin)');
        $req->execute([
            'username' => $user_login,
            'password' => $password,
            'email' => $email,
            'admin' => $admin,
        ]) or die(print_r($req->errorInfo()));
    }


}
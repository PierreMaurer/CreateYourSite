<?php
require_once 'models/Manager.php';
class CommandManager extends Manager
{

    public function SendRequestCommand($name, $surname, $email, $adress, $city, $phone, $name_site, $type_site, $description ,$status) {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare ('INSERT INTO `creation_request` (`id`, `user_name`, `surname`, `email`, `adress`, `city`, `phone`, `name_site`, `type_site`, `description`, `status`) VALUES (NULL, :user_name, :surname, :email, :adress, :city, :phone, :name_site, :type_site, :description, :status)');
        $req->execute([
            'user_name' => $name,
            'surname' => $surname,
            'email' => $email,
            'adress' => $adress,
            'city' => $city,
            'phone' => $phone,
            'name_site' => $name_site,
            'type_site' => $type_site,
            'description' => $description,
            'status' => 0,
        ])
        or die(print_r($req->errorInfo()));
    }

    public function RecupRequestCommand() {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('SELECT * FROM creation_request');
        $req->execute();
        return $req;
    }

    public function SpecificRequest($id) {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('SELECT * FROM creation_request WHERE id = :id');
        $req->execute([
            'id' => $id
        ]);
        return $req;
    }

    public function ChangeStatus($id, $status) {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('UPDATE creation_request SET status = :status WHERE :id');
        $req->execute([
            'status' => $status,
            'id' => $id
        ])or die(print_r($req->errorInfo()));
    }

    public function DeleteContact($id) {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('DELETE FROM creation_request WHERE id = :id');
        $req->execute([
            'id' => $id
        ])or die(print_r($req->errorInfo()));
    }

}


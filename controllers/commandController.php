<?php

require_once 'models/CommandManager.php';

function commandForm() {
    require './views/commande_Form.php';
}

function RequestCommand($name, $surname, $email, $adress, $city, $phone, $name_site, $type_site, $description, $status) {
    $CommandManager = new CommandManager();

    $RequestCommand = $CommandManager->SendRequestCommand($name, $surname, $email, $adress, $city, $phone, $name_site, $type_site, $description, $status);

}

function ChangeStatus($id) {
    if(isset($_SESSION['id'])) {
        if ($_SESSION['admin']) {
            $CommandManager = new CommandManager();
            $commands = $CommandManager->SpecificRequest($id);
            $command = $commands->fetch();
            $status = $command['status'];

            if($status) {
                $changeStatus = 0;
            } else {
                $changeStatus = 1;
            }
            $commands = $CommandManager->ChangeStatus($id, $changeStatus);
            header('Location: index.php?action=contactAdmin');

        } else {
            http_response_code(403);
        }
    } else {
        http_response_code(403);
    }
}

function deleteContact($id) {
    if(isset($_SESSION['id'])) {
        if ($_SESSION['admin']) {
            $CommandManager = new CommandManager();
            $CommandManager->DeleteContact($id);
            header('Location: index.php?action=contactAdmin');

        } else {
            http_response_code(403);
        }
    } else {
        http_response_code(403);
    }
}
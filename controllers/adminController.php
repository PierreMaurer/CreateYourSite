<?php
session_start();
require_once 'models/CommandManager.php';
function adminMenu() {
    if(isset($_SESSION['id'])) {
        if ($_SESSION['admin']) {
            require './views/admin.php';
        } else {
            http_response_code(403);
        }
    } else {
        http_response_code(403);
    }
}

function contactShow() {
    if(isset($_SESSION['id'])) {
        if ($_SESSION['admin']) {
            $CommandManager = new CommandManager();
            $commands = $CommandManager->RecupRequestCommand();
            require './views/contactAdmin.php';
        } else {
            http_response_code(403);
        }
    } else {
        http_response_code(403);
    }
}


function CreationShow() {
    if(isset($_SESSION['id'])) {
        if ($_SESSION['admin']) {
            require './views/creationAdmin.php';
        } else {
            http_response_code(403);
        }
    } else {
        http_response_code(403);
    }
}
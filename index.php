<?php

require 'controllers/commandController.php';
require 'controllers/welcomeController.php';
require 'controllers/authController.php';
require 'controllers/adminController.php';

if(isset($_GET['action'])) {
    if($_GET['action'] == 'commandForm') {
        commandForm();
    } elseif ($_GET['action'] == 'login') {
        loginForm();
    } elseif ($_GET['action'] == 'register') {
        registerForm();
    } elseif ($_GET['action'] == 'addUser') {
        addUser(htmlspecialchars($_POST['username']), htmlspecialchars($_POST['email']), htmlspecialchars($_POST['password']), htmlspecialchars($_POST['admin']));
    } elseif ($_GET['action'] == 'admin') {
    adminMenu();
    } elseif ($_GET['action'] == 'connexion') {
        connexionUser(htmlspecialchars($_POST['username']), htmlspecialchars($_POST['password']));
    } elseif ($_GET['action'] == 'deconnexion') {
        deconnexion();
    } elseif ($_GET['action'] == 'contactAdmin') {
        contactShow();
    } elseif ($_GET['action'] == 'creationAdmin') {
        CreationShow();
    } elseif ($_GET['action'] == 'commandRequest') {
        RequestCommand(htmlspecialchars($_POST['name']), htmlspecialchars($_POST['surname']), htmlspecialchars($_POST['email']), htmlspecialchars($_POST['adress']), htmlspecialchars($_POST['city']), htmlspecialchars($_POST['phone']), htmlspecialchars($_POST['name_site']), htmlspecialchars($_POST['type_site']), htmlspecialchars($_POST['description_site']), 0);
    } elseif ($_GET['action'] == 'changestatus') {
        if(isset($_GET['id']))
        ChangeStatus(htmlspecialchars($_GET['id']));
    } elseif ($_GET['action'] == 'deleteContact') {
        if(isset($_GET['id']))
            deleteContact(htmlspecialchars($_GET['id']));
    }

} else {
    indexWelcome();
}
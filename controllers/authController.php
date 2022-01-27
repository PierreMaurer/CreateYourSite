<?php
require_once 'models/AuthManager.php';


function loginForm() {
    if(!isset($_SESSION['id'])) {
            require 'views/login.php';
    } else {
        http_response_code(403);
    }
}

function connexionUser($username, $password) {
    $authManager = new AuthManager();
    $users = $authManager->connexionUser($username);

    if($users->rowCount() >0) {
        $user = $users->fetch();

        if (password_verify($password, $user['password'])) {
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['admin'] = $user['admin'];
            if($_SESSION['admin']) {
                header('Location: index.php?action=admin');
            } else {
                header('Location: index.php?action=welcome');
            }

        } else {
            header('Location: index.php?action=login');
        }
    } else {
        header('Location: index.php?action=login');
    }
/*    if(password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['User_Id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['admin'] = $user['admin'];
        header('index.php?action=admin');
    } else {
        header('index.php?action=login');
    }
*/
}

function registerForm() {
    if(isset($_SESSION['id'])) {
        require 'views/registerForm.php';
        if ($_SESSION['admin']) {
            require 'views/registerForm.php';
        } else {
            http_response_code(403);
        }
    } else {
        http_response_code(403);
    }
}

//user: test, password: test, email test@test.fr
function addUser($username, $email, $password, $admin) {
    if(isset($_SESSION['id'])) {
        if ($_SESSION['admin']) {
            $userPassword = password_hash($password, PASSWORD_DEFAULT);
            $authManager = new AuthManager();
            $user = $authManager->register($username, $email, $userPassword, $admin);
            header('Location: index.php?action=login');
        } else {
            http_response_code(403);
        }
    } else {
        http_response_code(403);
    }
}

function deconnexion() {
    session_destroy();
    header('Location: index.php?action=login');
}


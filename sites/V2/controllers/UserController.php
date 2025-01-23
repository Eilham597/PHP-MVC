<?php
class UserController {
    public function list() {
        $route = 'list_users';
        $pageTitle = 'Liste des utilisateurs';
        require 'templates/layout.phtml';
    }

    public function show() {
        $route = 'show_user';
        $pageTitle = 'Détails d\'un utilisateur';
        require 'templates/layout.phtml';
    }

    public function create() {
        $route = 'create_user';
        $pageTitle = 'Créer un utilisateur';
        require 'templates/layout.phtml';
    }

    public function checkCreate() {
        // Redirection ou traitement
        header('Location: index.php?route=list_users');
        exit();
    }

    public function update() {
        $route = 'update_user';
        $pageTitle = 'Modifier un utilisateur';
        require 'templates/layout.phtml';
    }

    public function checkUpdate() {
        // Redirection ou traitement
        header('Location: index.php?route=list_users');
        exit();
    }

    public function delete() {
        // Redirection ou traitement
        header('Location: index.php?route=list_users');
        exit();
    }

    
}

<?php
class Router {
    private $controller;

    public function __construct() {
        // Récupération de la route
        $route = $_GET['route'] ?? 'list_users';

        // Création du contrôleur
        $this->controller = new UserController();

        // Routage
        if ($route === 'show_user') {
            $this->controller->show();
        } elseif ($route === 'create_user') {
            $this->controller->create();
        } elseif ($route === 'check_create_user') {
            $this->controller->checkCreate();
        } elseif ($route === 'update_user') {
            $this->controller->update();
        } elseif ($route === 'check_update_user') {
            $this->controller->checkUpdate();
        } elseif ($route === 'delete_user') {
            $this->controller->delete();
        } else {
            $this->controller->list();
        }
    }
}
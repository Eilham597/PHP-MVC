<?php
class Router {
    public function __construct() {
        // Récupération de la route
        $route = $_GET['route'] ?? 'list_users';

        // Création du contrôleur
        $controller = new UserController();

        // Routage
        if ($route === 'show_user') {
            // UserController->show()
            $controller->show();
        } elseif ($route === 'create_user') {
            // UserController->create()
            $controller->create();
        } elseif ($route === 'check_create_user') {
            // UserController->checkCreate()
            $controller->checkCreate();
        } elseif ($route === 'update_user') {
            // UserController->update()
            $controller->update();
        } elseif ($route === 'check_update_user') {
            // UserController->checkUpdate()
            $controller->checkUpdate();
        } elseif ($route === 'delete_user') {
            // UserController->delete()
            $controller->delete();
        } else {
            // UserController->list()
            $controller->list();
        }
    }
}
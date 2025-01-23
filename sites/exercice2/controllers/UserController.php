<?php
class UserController {
    public function list() {
        echo "Liste des utilisateurs";
    }

    public function show() {
        echo "Afficher un utilisateur";
    }

    public function create() {
        echo "Formulaire de création d'utilisateur";
    }

    public function checkCreate() {
        echo "Validation de la création d'utilisateur";
    }

    public function update() {
        echo "Formulaire de mise à jour d'utilisateur";
    }

    public function checkUpdate() {
        echo "Validation de la mise à jour d'utilisateur";
    }

    public function delete() {
        echo "Suppression d'utilisateur";
    }
}
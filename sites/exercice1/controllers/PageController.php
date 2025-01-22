<?php

/**
 * Contrôleur gérant les pages principales de l'application
 * Responsable de charger les différentes vues de l'application
 */
class PageController {
    /**
     * Méthode pour afficher la page d'accueil
     * Définit la route comme "home" et charge le layout principal
     */
    public function home(): void {
        // Définit la variable de route pour identifier la page courante
        $route = "home";
        
        // Inclut le fichier de mise en page principal qui utilisera la variable $route
        require "templates/layout.phtml";
    }

    /**
     * Méthode pour afficher la page "À propos"
     * Définit la route comme "about" et charge le layout principal
     */
    public function about(): void {
        // Définit la variable de route pour identifier la page courante
        $route = "about";
        
        // Inclut le fichier de mise en page principal qui utilisera la variable $route
        require "templates/layout.phtml";
    }
    /**
     * Méthode pour afficher la page "contact"
     * Définit la route comme "contact" et charge le layout principal
     */
    public function contact(): void {
        // Définit la variable de route pour identifier la page courante
        $route = "contact";
        
        // Inclut le fichier de mise en page principal qui utilisera la variable $route
        require "templates/layout.phtml";
    }

    /**
     * Méthode pour afficher la page d'erreur 404
     * Définit la route comme "notFound" et charge le layout principal
     */
    public function notFound(): void {
        // Définit la variable de route pour identifier la page courante
        $route = "notFound";
        
        // Inclut le fichier de mise en page principal qui utilisera la variable $route
        require "templates/layout.phtml";
    }
}
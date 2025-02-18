<?php

class Router {
    public function handleRequest(array $get): void {
        if (isset($get["route"]) && $get["route"] === "a-propos") {
            $pageController = new PageController();
            $pageController->about();
        } elseif (isset($get["route"]) && $get["route"] === "contact") {
            $pageController = new PageController();
            $pageController->contact();
            
        } elseif (!isset($get["route"])) {
            $pageController = new PageController();
            $pageController->home();
        } else {
            $pageController = new PageController();
            $pageController->notFound();
        }
    }
}
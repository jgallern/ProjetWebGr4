<?php

class Router {
    public function routeReq() {
        try {
            // Assuming your autoload function is already registered in index.php
            // so we remove the spl_autoload_register([$this, 'loadClass']) from here.

            $controllerName = "Accueil"; // Default controller
            $actionName = "index"; // Default action
            $params = [];

            if (isset($_GET['url'])) {
                $url = $this->parseUrl($_GET['url']);
                $controllerName = ucfirst(strtolower($url[0]));
                array_shift($url); // Remove controller from URL

                if (isset($url[0])) {
                    $actionName = strtolower($url[0]);
                    array_shift($url); // Remove action from URL
                }
                $params = $url;
            }

            $this->dispatch($controllerName, $actionName, $params);
        } catch (Exception $e) {
            // Improved error handling
            $this->loadErrorView($e);
        }
    }

    // Method parseUrl refined for clarity
    private function parseUrl($url) {
        return explode('/', filter_var(rtrim($url, '/'), FILTER_SANITIZE_URL));
    }

    private function dispatch($controllerName, $actionName, $params) {
        $controllerClass = "Controller" . $controllerName;
        $controllerFile = __DIR__ . "/../controllers/" . $controllerClass . ".php";

        if (!file_exists($controllerFile)) {
            throw new Exception("Controller $controllerName not found.");
        }

        require_once $controllerFile;
        if (!class_exists($controllerClass)) {
            throw new Exception("Class $controllerClass not found in file $controllerFile.");
        }

        $controller = new $controllerClass();
        if (!method_exists($controller, $actionName)) {
            throw new Exception("Action $actionName not found in controller $controllerName.");
        }

        call_user_func_array([$controller, $actionName], $params);
    }

    private function loadErrorView($e) {
        // Pass the exception object to the error view for more detailed error messages
        $errorMsg = $e->getMessage();
        require_once __DIR__ . '/../views/viewError.php';
    }
}

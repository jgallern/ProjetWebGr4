<?php

// Assuming no namespaces are used, but if your application uses namespaces, adjust accordingly.
class ControllerAccueil {

    // Constructor (optional, if you need to initialize anything specific for this controller)
    public function __construct() {
        // Initialization code here
    }

    // A default action, often called "index" or similar
    public function index() {
        // This method should load the default view or perform other default actions
        require_once 'views/accueilView.php'; // Adjust path as needed
    }
}

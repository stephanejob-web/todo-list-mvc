<?php
// controller.php - Contrôleur

require_once 'model.php';

// FONCTION 1 : Afficher la liste
function listTasks() {
    // Récupérer les données du modèle
    $tasks = getAllTasks();
    
    // Charger la vue
    require_once 'view.php';
}

// FONCTION 2 : Ajouter une tâche
function addTask() {
    // Si le formulaire est envoyé
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = trim($_POST['title'] ?? '');
        
        // Si le titre n'est pas vide
        if (!empty($title)) {
            // Ajouter dans le modèle
            createTask($title);
        }
        
        // Retourner à la liste
        header('Location: index.php');
        exit;
    }
}
?>

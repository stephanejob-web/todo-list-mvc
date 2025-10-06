<?php
// model.php - Modèle (gestion des données)

// Récupérer toutes les tâches
function getAllTasks() {
    if (!isset($_SESSION['tasks'])) {
        $_SESSION['tasks'] = [];
    }
    return $_SESSION['tasks'];
}

// Ajouter une tâche
function createTask($title) {
    if (!isset($_SESSION['tasks'])) {
        $_SESSION['tasks'] = [];
    }
    $_SESSION['tasks'][] = $title;
}
?>

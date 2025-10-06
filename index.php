<?php
// index.php - Point d'entrée

session_start();

// Inclure les fichiers
require_once 'controller.php';

// Router simple
$action = $_GET['action'] ?? 'list';

if ($action === 'add') {
    addTask();
} else {
    listTasks();
}
?>

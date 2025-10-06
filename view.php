<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini To-Do</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background: #f0f0f0;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        form {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
        input {
            flex: 1;
            padding: 10px;
            border: 2px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            padding: 10px 20px;
            background: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #45a049;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            background: white;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .empty {
            text-align: center;
            color: #999;
            padding: 20px;
        }
    </style>
</head>
<body>
    <h1>📝 Mini To-Do</h1>
    
    <!-- Formulaire d'ajout -->
    <form method="POST" action="index.php?action=add">
        <input type="text" name="title" placeholder="Nouvelle tâche..." required>
        <button type="submit">➕ Ajouter</button>
    </form>

    <!-- Liste des tâches -->
    <?php if (empty($tasks)): ?>
        <p class="empty">Aucune tâche. Ajoutez-en une ! 😊</p>
    <?php else: ?>
        <ul>
            <?php foreach ($tasks as $task): ?>
                <li><?= htmlspecialchars($task) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>

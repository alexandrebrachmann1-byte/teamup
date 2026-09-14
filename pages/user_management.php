<?php
session_start();

if (!isset($_SESSION["role"]) || $_SESSION["role"] !== "admin") {
    header("Location: ../index.php");
    exit;
}

require_once "../functions/users.php";

$users = get_all_users();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des utilisateurs</title>
    <link rel="stylesheet" href="/teamup/assets/css/style.css">
</head>
<body>
    <?php require_once "../partials/header.php"; ?>

    <div class="page-content">
        <h4 class="form-title">Gestion des utilisateurs</h4>

        <div class="admin-table-wrapper">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>Nom d'utilisateur</th>
                        <th>Mail</th>
                        <th>Rôle</th>
                        <th>Date de création</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) { ?>
                        <tr>
                            <td><?= htmlspecialchars($user["username"]) ?></td>
                            <td><?= htmlspecialchars($user["mail"]) ?></td>
                            <td>
                                <span class="role-badge role-badge-<?= htmlspecialchars($user["role"]) ?>">
                                    <?= htmlspecialchars($user["role"]) ?>
                                </span>
                            </td>
                            <td><?= htmlspecialchars($user["created_at"]) ?></td>
                            <td>
                                <a href="../traitements/traitement_user_delete.php?id=<?= $user["id"] ?>" 
                                   class="btn-card btn-card-delete"
                                   onclick="return confirm('Supprimer ce compte ? Cette action est irréversible.');">
                                   Supprimer
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
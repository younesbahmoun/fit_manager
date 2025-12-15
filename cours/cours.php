<?php
require "../connection.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Cours - SportFit Manager</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="header-content">
                <a href="dashboard.php" class="logo">
                    <i class="fas fa-dumbbell"></i>
                    <span>SportFit Manager</span>
                </a>
                <nav>
                    <ul>
                        <li><a href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                        <li><a href="cours.php" class="active"><i class="fas fa-calendar-alt"></i> Cours</a></li>
                        <li><a href="equipements.php"><i class="fas fa-dumbbell"></i> Équipements</a></li>
                        <li><a href="associations.php"><i class="fas fa-link"></i> Associations</a></li>
                    </ul>
                </nav>
                <div class="user-menu">
                    <div class="user-info">
                        <div class="avatar">AD</div>
                        <span>Admin</span>
                    </div>
                    <a href="logout.php" class="logout-btn">
                        <i class="fas fa-sign-out-alt"></i> Déconnexion
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="page-title">
                <h1><i class="fas fa-calendar-alt"></i> Gestion des Cours</h1>
                <a href="add_cours.php" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Nouveau cours
                </a>
            </div>

            <!-- Messages d'alerte (seront remplis par PHP) -->
            <div class="alert alert-success" style="display: none;">
                <i class="fas fa-check-circle"></i>
                <div>
                    <strong>Succès !</strong> Cours ajouté avec succès.
                </div>
            </div>

            <!-- Tableau des cours -->
            <div class="table-container">
                <div class="table-header">
                    <h2><i class="fas fa-list"></i> Liste des cours</h2>
                    <div class="table-actions">
                        <div class="search-box">
                            <i class="fas fa-search"></i>
                            <input type="text" placeholder="Rechercher un cours...">
                        </div>
                        <select class="btn-outline filter-select">
                            <option value="">Toutes les catégories</option>
                            <option value="Yoga">Yoga</option>
                            <option value="Musculation">Musculation</option>
                            <option value="Cardio">Cardio</option>
                            <option value="Pilates">Pilates</option>
                            <option value="CrossFit">CrossFit</option>
                            <option value="Zumba">Zumba</option>
                        </select>
                    </div>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Catégorie</th>
                            <th>Date</th>
                            <th>Heure</th>
                            <th>Durée</th>
                            <th>Max Participants</th>
                            <th>Inscrits</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM cours";
                        $result = $connection->query($sql);

                        if (!$result) {
                            $errorMessage = "Invalid query: " . $connection->error;
                            exit;
                        }

                        while ($row = $result->fetch_assoc()) {
                            echo "
                                <tr>
                                    <td>$row[nom]</td>
                                    <td><span class='badge badge-primary'>$row[categorie]</span></td>
                                    <td>$row[date_cours]</td>
                                    <td>$row[heure]</td>
                                    <td>$row[duree_minutes] min</td>
                                    <td>$row[nb_max_participants]</td>
                                    <td>15 (75%)</td>
                                    <td class='actions'>
                                        <a href='edit_cours.php?id=1' class='action-btn edit'>
                                            <i class='fas fa-edit'></i> Modifier
                                        </a>
                                        <a href='delete_cours.php?id=$row[cours_id]' class='action-btn delete'>
                                            <i class='fas fa-trash'></i> Supprimer
                                        </a>
                                    </td>
                                </tr>
                            ";
                        }
                        ?>
                    </tbody>
                </table>

                <!-- Pagination -->
                <div class="pagination">
                    <a href="#" class="prev"><i class="fas fa-chevron-left"></i> Précédent</a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <span>...</span>
                    <a href="#">10</a>
                    <a href="#" class="next">Suivant <i class="fas fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="logo">
                    <i class="fas fa-dumbbell"></i>
                    <span>SportFit Manager</span>
                </div>
                <div class="copyright">
                    &copy; 2024 SportFit Manager. Tous droits réservés.
                </div>
                <div>
                    <a href="#"><i class="fas fa-question-circle"></i> Aide</a>
                    <a href="#"><i class="fas fa-shield-alt"></i> Confidentialité</a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
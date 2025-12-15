<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un équipement - SportFit Manager</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
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
                        <li><a href="cours.php"><i class="fas fa-calendar-alt"></i> Cours</a></li>
                        <li><a href="equipements.php" class="active"><i class="fas fa-dumbbell"></i> Équipements</a></li>
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
                <h1><i class="fas fa-plus-circle"></i> Ajouter un nouvel équipement</h1>
                <a href="equipements.php" class="btn btn-outline">
                    <i class="fas fa-arrow-left"></i> Retour à la liste
                </a>
            </div>
            
            <div class="form-container">
                <form action="save_equipement.php" method="POST">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="nom">Nom de l'équipement *</label>
                            <input type="text" id="nom" name="nom" placeholder="Ex: Tapis de course ProForm" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="type">Type d'équipement *</label>
                            <select id="type" name="type" required>
                                <option value="">Sélectionner...</option>
                                <option value="Cardio">Cardio</option>
                                <option value="Musculation">Musculation</option>
                                <option value="Poids">Poids</option>
                                <option value="Accessoire">Accessoire</option>
                                <option value="Mobilier">Mobilier</option>
                                <option value="Autre">Autre</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="marque">Marque</label>
                            <input type="text" id="marque" name="marque" placeholder="Ex: ProForm, Life Fitness...">
                        </div>
                        
                        <div class="form-group">
                            <label for="modele">Modèle / Référence</label>
                            <input type="text" id="modele" name="modele" placeholder="Ex: Treadmill 500">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="quantite">Quantité totale *</label>
                            <input type="number" id="quantite" name="quantite" min="1" value="1" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="disponible">Quantité disponible *</label>
                            <input type="number" id="disponible" name="disponible" min="0" value="1" required>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="etat">État *</label>
                            <select id="etat" name="etat" required>
                                <option value="">Sélectionner...</option>
                                <option value="bon">Bon</option>
                                <option value="moyen">Moyen</option>
                                <option value="maintenance">En maintenance</option>
                                <option value="remplacer">À remplacer</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="date_achat">Date d'achat</label>
                            <input type="date" id="date_achat" name="date_achat">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="numero_serie">Numéro de série</label>
                            <input type="text" id="numero_serie" name="numero_serie" placeholder="Facultatif">
                        </div>
                        
                        <div class="form-group">
                            <label for="garantie">Garantie (mois)</label>
                            <input type="number" id="garantie" name="garantie" min="0" placeholder="Ex: 24">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Description / Notes</label>
                        <textarea id="description" name="description" rows="4" placeholder="Description de l'équipement, notes d'utilisation, particularités..."></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="emplacement">Emplacement dans la salle</label>
                        <input type="text" id="emplacement" name="emplacement" placeholder="Ex: Zone cardio, salle 2...">
                    </div>
                    
                    <div class="form-actions">
                        <button type="button" class="btn btn-outline" onclick="window.location.href='equipements.php'">
                            <i class="fas fa-times"></i> Annuler
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Ajouter l'équipement
                        </button>
                    </div>
                </form>
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
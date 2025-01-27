<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Pharmaceutique</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <h2>Admin Pharmaceutique</h2>
        </div>
        <ul class="nav-list">
            <li><a href="#">Tableau de bord</a></li>
            <li><a href="#">Gestion des Médicaments</a></li>
            <li><a href="#">Commandes</a></li>
            <li><a href="#">Clients</a></li>
            <li><a href="#">Statistiques</a></li>
            <li><a href="#">Paramètres</a></li>
        </ul>
    </div>

    <!-- Main content -->
    <div class="main-content">
        <header>
            <h1>Bienvenue dans le Tableau de Bord</h1>
        </header>
        
        <div class="stats-container">
            <div class="stats-box">
                <h3>Nombre de Médicaments</h3>
                <p>120</p>
            </div>
            <div class="stats-box">
                <h3>Commandes Récentes</h3>
                <p>45</p>
            </div>
            <div class="stats-box">
                <h3>Clients Inscrits</h3>
                <p>800</p>
            </div>
        </div>

        <footer>
            <p>&copy; 2025 Admin Pharmaceutique</p>
        </footer>
    </div>
</body>
</html>
<style>
    /* Style global */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    display: flex;
    height: 100vh;
}

.sidebar {
    width: 250px;
    background-color: #2c3e50;
    color: white;
    padding-top: 20px;
    position: fixed;
    height: 100%;
}

.sidebar-header {
    text-align: center;
    margin-bottom: 30px;
}

.sidebar-header h2 {
    font-size: 22px;
    color: #ecf0f1;
}

.nav-list {
    list-style: none;
    padding-left: 0;
}

.nav-list li {
    margin: 15px 0;
}

.nav-list li a {
    text-decoration: none;
    color: #bdc3c7;
    font-size: 18px;
    padding: 10px 20px;
    display: block;
}

.nav-list li a:hover {
    background-color: #34495e;
    color: #ecf0f1;
}

.main-content {
    margin-left: 250px;
    padding: 20px;
    width: calc(100% - 250px);
}

header {
    margin-bottom: 20px;
}

header h1 {
    font-size: 28px;
    color: #2c3e50;
}

.stats-container {
    display: flex;
    gap: 20px;
    margin-top: 20px;
}

.stats-box {
    background-color: #ecf0f1;
    border-radius: 8px;
    padding: 20px;
    width: 30%;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.stats-box h3 {
    font-size: 18px;
    color: #2c3e50;
}

.stats-box p {
    font-size: 24px;
    color: #2c3e50;
    font-weight: bold;
}

footer {
    margin-top: 40px;
    text-align: center;
    color: #bdc3c7;
}

</style>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de CRUD</title>
    <style>
        /* Ajoutez ici votre propre style CSS pour le header si nécessaire */
        header {
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body>
    <!-- CREATE BIEN -->
    <h2>Créer un joueur</h2>
    <form action="../crud/aiguilleur.php" method="POST">
        <input type="hidden" name="action" value="create_bien">
            <div>
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div>
                <label for="rue">Rue :</label>
                <input type="text" id="rue" name="rue" required>
            </div>
            <div>
                <label for="codep">Code Postal :</label>
                <input type="text" id="codep" name="codep" required>
            </div>
            <div>
                <label for="ville">Ville :</label>
                <input type="text" id="ville" name="ville" required>
            </div>
            <div>
                <label for="sup">Suplement d'adresse :</label>
                <input type="text" id="sup" name="sup" required>
            </div>
            <div>
                <label for="nbcou">Nombre de couchage :</label>
                <input type="text" id="nbcou" name="nbcou" required>
            </div>
            <div>
                <label for="nbpiece">Nombre de pieces :</label>
                <input type="text" id="nbpiece" name="nbpiece" required>
            </div>
            <div>
                <label for="nbcha">Nombre de chambre :</label>
                <input type="text" id="nbcha" name="nbcha" required>
            </div>
            <div>
                <label for="descri">Descriptif :</label>
                <input type="text" id="descri" name="descri" required>
            </div>
            <button type="submit">Créer</button>
    </form>
    <hr> <!-- séparation -->

    <!-- DELETE Bien -->
    <h2>Supprimer un bien</h2>
    <form action="aiguilleur.php" method="POST">
        <input type="hidden" name="action" value="delete_bien">
            <div>
                <label for="ID_bien">Bien :</label>
                <select id="ID_bien" name="ID_bien" required>
                    <option value="" selected disabled></option>
                    <?php 
                    if ($bien && is_array($bien)) {
                        foreach ($bien as $bien) {
                            echo "<option value='{$bien['ID_bien']}'>{$bien['Nom']}</option>";
                        }
                    } else {
                        echo "<option value=''>Erreur de récupération</option>";
                    }?>
                </select>
            </div>
            <button type="submit">Supprimer</button>
    </form>
    <hr> <!-- séparation -->


</body> 
</html>
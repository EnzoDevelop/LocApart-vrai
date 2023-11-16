<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Filtres de Location</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Filtres de Location</h1>
    <form id="filter-form" method="post">
        <label for="ville">Ville:</label>
        <input type="text" id="ville" name="ville"><br>
        
        <label for="distance">Kilomètres aux alentours:</label>
        <input type="number" id="distance" name="distance"><br>
        
        <label for="prix">Prix:</label>
        <input type="number" id="prix" name="prix"><br>
        
        <label for="couchage">Nombre de couchages:</label>
        <input type="number" id="couchage" name="couchage"><br>
        
        <label for="type-bien">Type de bien:</label>
        <select id="type-bien" name="type-bien">
            <option value="appartement">Appartement</option>
            <option value="maison">Maison</option>
            <option value="chambre">Chambre</option>
        </select><br>
        
        <input type="submit" value="Filtrer">
    </form>

    <div id="results">
        <!-- Les résultats filtrés seront affichés ici -->
    </div>

    <script>
        $(document).ready(function() {
            $('#filter-form').submit(function(e) {
                e.preventDefault();
                // Récupérer les valeurs des filtres
                var ville = $('#ville').val();
                var distance = $('#distance').val();
                var prix = $('#prix').val();
                var couchage = $('#couchage').val();
                var typeBien = $('#type-bien').val();

                // Effectuer une requête AJAX pour récupérer les résultats filtrés
                $.ajax({
                    method: 'POST',
                    url: 'filtre_location.php', // Remplacez par le nom du fichier PHP qui gère la requête et la base de données
                    data: {
                        ville: ville,
                        distance: distance,
                        prix: prix,
                        couchage: couchage,
                        typeBien: typeBien
                    },
                    success: function(response) {
                        // Mettre les résultats filtrés dans la div #results
                        $('#results').html(response);
                    }
                });
            });
        });
    </script>
</body>
</html>

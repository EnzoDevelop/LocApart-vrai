<?php

require_once("../include/connexion.inc.php");
require_once("../class/bien.class.php");

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type de biens - Loc'Appart</title>
</head>

<body>
    <?php include("../template/header.html"); ?>
    <main>
        <section class="conteneur" id="tableau_bien">
            <form action="../traitement/bien.trait.php" method="post">
                <table class="tableau">
                    <thead class="tableau_entete">
                        <tr>
                            <th>ID Bien</th>
                            <th>Nom</th>
                            <th>Rue</th>
                            <th>Code Postal</th>
                            <th>Ville</th>
                            <th>Superficie</th>
                            <th>Nombre de couchage</th>
                            <th>Nombre de piece</th>
                            <th>Nombre de chambre</th>
                            <th>Descriptif</th>
                            <th>Reference</th>
                            <th>Statut</th>
                            <th>ID type bien</th>
                        </tr>
                    </thead>
                    <tbody class="tableau_corps">
                        <?php
                        $oBiens = new bien($con);
                        $result = $oBiens->select();
                        if ($result->rowCount() > 0) {
                            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                                
                                $nob = 'nom_bien'.$row['id_bien'];
                                $r = 'rue_bien'.$row['id_bien'];
                                $cp = 'codeP_bien'.$row['id_bien'];
                                $v = 'vil_bien'.$row['id_bien'];
                                $s = 'sup_bien'.$row['id_bien'];
                                $nbco = 'nb_couchage'.$row['id_bien'];
                                $nbp = 'nb_piece'.$row['id_bien'];
                                $nbch = 'nb_chambre'.$row['id_bien'];
                                $d = 'descriptif'.$row['id_bien'];
                                $rb = 'ref_bien'.$row['id_bien'];
                                $sb = 'statut_bien'.$row['id_bien'];
                                $idt = 'id_type_bien'.$row['id_bien'];

                                echo "<tr>";
                                echo "<td>", $row['id_bien'], "</td>";
                                echo "<td><input type='text' name='$nob' value='", $row['nom_bien'], "'></td>";
                                echo "<td><input type='text' name='$r' value='", $row['rue_bien'], "'></td>";
                                echo "<td><input type='text' name='$cp' value='", $row['codeP_bien'], "'></td>";
                                echo "<td><input type='text' name='$v' value='", $row['vil_bien'], "'></td>";
                                echo "<td><input type='text' name='$s' value='", $row['sup_bien'], "'></td>";
                                echo "<td><input type='text' name='$nbco' value='", $row['nb_couchage'], "'></td>";
                                echo "<td><input type='text' name='$nbp' value='", $row['nb_piece'], "'></td>";
                                echo "<td><input type='text' name='$nbch' value='", $row['nb_chambre'], "'></td>";
                                echo "<td><input type='text' name='$d' value='", $row['descriptif'], "'></td>";
                                echo "<td><input type='text' name='$rb' value='", $row['ref_bien'], "'></td>";
                                echo "<td><input type='text' name='$sb' value='", $row['statut_bien'], "'></td>";
                                echo "<td><input type='text' name='$idt' value='", $row['id_type_bien'], "'></td>";
                                echo "<td><button class='btn btn-primary' name='update' value='", $row['id_bien'], "' type=submit'>Modifier</button>
                                <button class='btn btn-danger' name='delete' value='", $row['id_bien'], "' type=submit'>Supprimer</button></td>";
                                
                                echo "</tr>";

                            }
                        } else {
                            echo "<p>Aucun résultat trouvé.</p>";
                        }
                        ?>
                    </tbody>
                </table>
            </form>
            <form action="../insert/bien.ins.php" method="post" class="formulaire-insertion">
                <label for="nom_bien" class="formulaire-label">Nom bien : </label>
                <input type="text" name="nom_bien" id="nom_bien" class="formulaire-input">

                <label for="rue_bien" class="formulaire-label">Rue bien : </label>
                <input type="text" name="rue_bien" id="rue_bien" class="formulaire-input">

                <label for="codeP_bien" class="formulaire-label">Code Postal bien : </label>
                <input type="text" name="codeP_bien" id="codeP_bien" class="formulaire-input">
                
                <label for="vil_bien" class="formulaire-label">Ville bien : </label>
                <input type="text" name="vil_bien" id="vil_bien" class="formulaire-input">

                <label for="sup_bien" class="formulaire-label">Superficie bien : </label>
                <input type="text" name="sup_bien" id="sup_bien" class="formulaire-input">

                <label for="nb_couchage" class="formulaire-label">Nombre de couchage : </label>
                <input type="text" name="nb_couchage" id="nb_couchage" class="formulaire-input">

                <label for="nb_piece" class="formulaire-label">Nombre de pieces : </label>
                <input type="text" name="nb_piece" id="nb_piece" class="formulaire-input">

                <label for="nb_chambre" class="formulaire-label">Nombre de chambre : </label>
                <input type="text" name="nb_chambre" id="nb_chambre" class="formulaire-input">

                <label for="descriptif" class="formulaire-label">Descriptif : </label>
                <input type="text" name="descriptif" id="descriptif" class="formulaire-input">

                <label for="ref_bien" class="formulaire-label">Reference du bien : </label>
                <input type="text" name="ref_bien" id="ref_bien" class="formulaire-input">

                <label for="statut_bien" class="formulaire-label">Statut du bien : </label>
                <input type="text" name="statut_bien" id="statut_bien" class="formulaire-input">

                <label for="id_type_bien" class="formulaire-label">Type de bien : </label>
                <input type="text" name="id_type_bien" id="id_type_bien" class="formulaire-input">


                <input type="submit" value="Ajouter un bien" class="bouton-primaire">
            </form>
        </section>
    </main>
</body>
<style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        main {
            max-width:1500px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 16px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 6px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #323232;
            color: white;
        }

        input[type="text"] {
            padding: 4px;
            margin-right: 5px;
            width: 100%;
        }

        .formulaire-insertion {
            margin-top: 10px;
        }

        .formulaire-label {
            display: block;
            margin-bottom: 8px;
            
        }

        .formulaire-input {
            width: 25%;
            padding: 8px;
            margin-bottom: 20px;
        }

        .bouton-primaire {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .bouton-primaire:hover {
            background-color: #45a049;
        }

        .btn {
            padding: 8px 12px;
            margin-right: 5px;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #1b5eaf;
            color: white;
            border: none;
            border-radius: 4px;
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 4px;
        }

    </style>
</html>
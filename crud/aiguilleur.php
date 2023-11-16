<?php
require_once '../crud/include/conn.inc.php';

$action = $_POST['action'];

switch ($action) {
    case 'create_bien':
        // Récupération des valeurs du formulaire
        $nom = $_POST['nom'];
        $rue = $_POST['rue'];
        $codep = $_POST['codep'];
        $ville = $_POST['ville'];
        $sup = $_POST['sup'];
        $nbcou = $_POST['nbcou'];
        $nbpiece = $_POST['nbpiece'];
        $nbcha = $_POST['nbcha'];
        $descri = $_POST['descri'];

        // Création d'une nouvelle instance de la classe Bien
        $bien = new Bien($nom, $rue, $codep, $ville, $sup, $nbcou, $nbpiece, $nbcha, $descri);

        // Appel de la fonction pour créer un nouveau bien dans la base de données
        $result = create_bien($bien);

        if ($result) {
            echo "Le bien a été créé avec succès.";
        } else {
            echo "Une erreur est survenue : " . $result;
        }
        break;
        
    case 'delete_bien':
        $ID_bien = $_POST['ID_bien'];

        $result = delete_bien_by_id($ID_bien);

        if($result) {
            echo "Le bien a été supprimé avec succès.";
        } else {
            echo "Une erreur est survenue : " . $result;
        }
        break;



    default:
        echo "Action non reconnue.";
}
?>

<br>
<a href="main.php">
    <button type="button">Retourner à la page principale</button>
</a>
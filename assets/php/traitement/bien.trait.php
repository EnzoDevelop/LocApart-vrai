<?php
require_once("../include/connexion.inc.php");
require_once("../class/bien.class.php");

$oBiens = new bien($con);

if (isset($_POST['update'])) {


    $id_bien = $_POST['update'];

    $nob = 'nom_bien'.$id_bien;
    $nom_bien = $_POST[$nob];

    $r = 'rue_bien' .$id_bien;
    $rue_bien = $_POST[$r];

    $cp = 'codeP_bien' .$id_bien;
    $codeP_bien = $_POST[$cp];

    $v = 'vil_bien' .$id_bien;
    $vil_bien = $_POST[$v];

    $s = 'sup_bien' .$id_bien;
    $sup_bien = $_POST[$s];

    $nbco = 'nb_couchage' .$id_bien;
    $nb_couchage = $_POST[$nbco];

    $nbp = 'nb_piece' .$id_bien;
    $nb_piece = $_POST[$nbp];

    $nbch = 'nb_chambre' .$id_bien;
    $nb_chambre = $_POST[$nbch];

    $d = 'descriptif' .$id_bien;
    $descriptif = $_POST[$d];

    $rb = 'ref_bien' .$id_bien;
    $ref_bien = $_POST[$rb];

    $sb = 'statut_bien' .$id_bien;
    $statut_bien = $_POST[$sb];

    $idt = 'id_type_bien' .$id_bien;
    $id_type_bien = $_POST[$idt];

    header("location:../affichage/bien.aff.php");

    $id_bien = $_POST['update'];
    $oBiens->update($id_bien, $nom_bien, $rue_bien, $codeP_bien, $vil_bien, $sup_bien, $nb_couchage, $nb_piece, $nb_chambre, $descriptif, $ref_bien, $statut_bien, $id_type_bien);
    header("location:../affichage/bien.aff.php");
} elseif (isset($_POST['delete'])) {
    $id_bien = $_POST['delete'];
    $oBiens->delete($id_bien);
    header("location:../affichage/bien.aff.php");
}
?>
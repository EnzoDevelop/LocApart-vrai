<?php
require_once("../include/connexion.inc.php");
require_once("../class/tarif.class.php");

$oTarif = new tarif($con);

if (isset($_POST['update'])) {


    $id_tarif = $_POST['update'];

    $dd = 'dd_tarif'.$id_tarif;
    $dd_tarif = $_POST[$dd];

    $df = 'df_tarif' .$id_tarif;
    $df_tarif = $_POST[$df];

    $p = 'prix_loc' .$id_tarif;
    $prix_loc = $_POST[$p];

    $idb = 'id_bien' .$id_tarif;
    $id_bien = $_POST[$idb];

    header("location:../affichage/tarif.aff.php");

    $id_tarif = $_POST['update'];
    $oTarif->update($id_tarif, $dd_tarif, $df_tarif, $prix_loc, $id_bien);
    header("location:../affichage/tarif.aff.php");
} elseif (isset($_POST['delete'])) {
    $id_tarif = $_POST['delete'];
    $oTarif->delete($id_tarif);
    header("location:../affichage/tarif.aff.php");
}
?>
<?php
require_once __DIR__ . '/../include/conn.inc.php';

//CREATE

function create_bien(Bien $Bien){
    global $con;    
    $sql = "INSERT INTO biens (`nom_bien`, `rue_bien`, `codeP_bien`,`vil_bien`,`sup_bien`,`nb_couchage`,`nb_piece`,`nb_chambre`,`descriptif`) 
            VALUES (:Nom, :Rue, :Code, :Ville, :Sup, :NbCouchage , :NbPieces, :NbChambre, :Descriptif);";
    $req = $con->prepare($sql);
    $req->bindValue(':Nom', $Bien->getNom_Bien(), PDO::PARAM_STR);
    $req->bindValue(':Rue', $Bien->getRue_Bien(), PDO::PARAM_STR);
    $req->bindValue(':Code', $Bien->getCodeP_Bien(), PDO::PARAM_STR);
    $req->bindValue(':Ville', $Bien->getVille_Bien(), PDO::PARAM_STR);
    $req->bindValue(':Sup', $Bien->getSup_Bien(), PDO::PARAM_STR);
    $req->bindValue(':NbCouchage', $Bien->getNbCouchage_Bien(), PDO::PARAM_STR);
    $req->bindValue(':NbPieces', $Bien->getNbPieces_Bien(), PDO::PARAM_STR);
    $req->bindValue(':NbChambre', $Bien->getNbChambre_Bien(), PDO::PARAM_STR);
    $req->bindValue(':Descriptif', $Bien->getDescriptif_Bien(), PDO::PARAM_STR);
    try {
        $req->execute();
        return true;
    }
    catch (PDOException $e) {
        return $e->getMessage();
    }
}

//READ

function get_all_bien(){
    global $con;
        
    $req="SELECT * FROM biens";
    $sql=$con->prepare($req);
    try{
        $sql->execute();
        return $sql->fetchAll (PDO::FETCH_ASSOC);
    }
    catch(PDOException $e){
        return $e->getMessage();
    }
}

//READ 1

function get_one_bien(int $id){
    global $con;
    $sql = "SELECT * FROM biens WHERE id_bien = :id ;";
    $req = $con->prepare($sql);
    $req->bindValue(':id',$id,PDO::PARAM_INT);
    
    try {
        $req->execute();
        return $req->fetch();
   } catch (PDOException $e) {
       return $e->getMessage();
   }
}

//UPDATE

function update_Bien(Bien $Bien, int $id){
    global $con; 
    $sql =  "UPDATE biens SET  nom_bien = :Nom,
                                rue_bien = :Rue,
                                codeP_bien = :Code,
                                vil_bien = :Ville,
                                Sup_bien = :Sup,
                                nb_couchage = :NbCouchage,
                                nb_piece = :NbPieces,
                                nb_chambre = :NbChambre,
                                descriptif = :Descriptif,
            WHERE id_bien = :id ;";
    $req = $con->prepare($sql);
    $req->bindValue(':Nom', $Bien->getNom_Bien(), PDO::PARAM_STR);
    $req->bindValue(':Rue', $Bien->getRue_Bien(), PDO::PARAM_STR);
    $req->bindValue(':Code', $Bien->getCodeP_Bien(), PDO::PARAM_STR);
    $req->bindValue(':Ville', $Bien->getVille_Bien(), PDO::PARAM_STR);
    $req->bindValue(':Sup', $Bien->getSup_Bien(), PDO::PARAM_STR);
    $req->bindValue(':NbCouchage', $Bien->getNbCouchage_Bien(), PDO::PARAM_STR);
    $req->bindValue(':NbPieces', $Bien->getNbPieces_Bien(), PDO::PARAM_STR);
    $req->bindValue(':NbChambre', $Bien->getNbChambre_Bien(), PDO::PARAM_STR);
    $req->bindValue(':Descriptif', $Bien->getDescriptif_Bien(), PDO::PARAM_STR);
    $req->bindValue(':id', $id, PDO::PARAM_INT);
    try {
        $req->execute();
        return true;
    }
    catch (PDOException $e) {
        return $e->getMessage();
    }
}

//DELETE

function delete_bien_by_id(int $id){
    global $con;
    $sql = "DELETE FROM biens WHERE id_bien = :id ;";
    $req = $con->prepare($sql);
    $req->bindValue(':id',$id,PDO::PARAM_INT);
    
    try {
        $req->execute();
        return true;
   } 
   catch (PDOException $e) {
       return $e->getMessage();
   }
}

?>
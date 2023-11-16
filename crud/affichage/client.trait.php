<?php
require_once __DIR__ . '/../include/conn.inc.php';

//CREATE

function create_client(Client $client){
    global $con;    
    $sql = "INSERT INTO clients (`nom_client`, `prenom_client`, `rue_client`,`code_client`,`ville_client`,`mail_client`,`pass_client`,`statut_client`,`valid_client`) 
            VALUES (:Nom, :Prenom, :Rue, :Code, :Ville, :Mail, :Pass , :Statut, :Valid);";
    $req = $con->prepare($sql);
    $req->bindValue(':Nom', $client->getNom_client(), PDO::PARAM_STR);
    $req->bindValue(':Prenom', $client->getPrenom_client(), PDO::PARAM_STR);
    $req->bindValue(':Rue', $client->getRue_client(), PDO::PARAM_STR);
    $req->bindValue(':Code', $client->getCode_client(), PDO::PARAM_STR);
    $req->bindValue(':Ville', $client->getVille_client(), PDO::PARAM_STR);
    $req->bindValue(':Mail', $client->getMail_client(), PDO::PARAM_STR);
    $req->bindValue(':Pass', $client->getPass_client(), PDO::PARAM_STR);
    $req->bindValue(':Statut', $client->getStatut_client(), PDO::PARAM_STR);
    $req->bindValue(':Valid', $client->getValid_client(), PDO::PARAM_STR);
    try {
        $req->execute();
        return true;
    }
    catch (PDOException $e) {
        return $e->getMessage();
    }
}

//READ

function get_all_client(){
    global $con;
        
    $req="SELECT * FROM clients";
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

function get_one_client(int $id){
    global $con;
    $sql = "SELECT * FROM clients WHERE id_client = :id ;";
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

function update_client(Client $client, int $id){
    global $con; 
    $sql =  "UPDATE clients SET  nom_client = :Nom,
                                prenom_client = :Prenom,
                                rue_client = :DateNaissance,
                                code_client = :Code,
                                ville_client = :Ville,
                                mail_client = :Mail,
                                pass_client = :Pass,
                                statut_client = :Statut,
                                valid_client = :Valid,
            WHERE id_client = :id ;";
    $req = $con->prepare($sql);
    $req->bindValue(':Nom', $client->getNom_client(), PDO::PARAM_STR);
    $req->bindValue(':Prenom', $client->getPrenom_client(), PDO::PARAM_STR);
    $req->bindValue(':Rue', $client->getRue_client(), PDO::PARAM_STR);
    $req->bindValue(':Code', $client->getCode_client(), PDO::PARAM_STR);
    $req->bindValue(':Ville', $client->getVille_client(), PDO::PARAM_STR);
    $req->bindValue(':Mail', $client->getMail_client(), PDO::PARAM_STR);
    $req->bindValue(':Pass', $client->getPass_client(), PDO::PARAM_STR);
    $req->bindValue(':Statut', $client->getStatut_client(), PDO::PARAM_STR);
    $req->bindValue(':Valid', $client->getValid_client(), PDO::PARAM_STR);
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

function delete_client_by_id(int $id){
    global $con;
    $sql = "DELETE FROM clients WHERE id_client = :id ;";
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
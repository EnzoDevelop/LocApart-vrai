<?php

/* Class Bien */

class Bien{
    const errmessage = "Une erreur s'est produite \n";

    /*Propriété */
    private string $Nom;
    private string $Rue;
    private string $CodeP;
    private string $Ville;
    private string $Sup;
    private string $Nbcouchage;
    private string $Nbpieces;
    private string $Nbchambre;
    private string $Descriptif;
    
    
    /*Constructor */
    public function __construct($leNom, $laRue, $leCodeP, $laVille, $leSup, $leNbCouchage, $leNbpieces, $leNbchambre, $leDescriptif) {
        $this->Nom=$leNom;
        $this->Rue=$laRue;
        $this->CodeP=$leCodeP;
        $this->Ville=$laVille;
        $this->Sup=$leSup;
        $this->Nbcouchage=$leNbCouchage;
        $this->Nbpieces=$leNbpieces;
        $this->Nbchambre=$leNbchambre;
        $this->Descriptif=$leDescriptif;
    }

    public function setNom_Bien($leNom){
        $this->Nom=$leNom;
    }
    
    public function setRue_Bien($laRue){
        $this->Rue=$laRue;
    }
    
    public function setCodeP_Bien($leCodeP){
        $this->CodeP=$leCodeP;
    }

    public function setVille_Bien($laVille){
        $this->Ville=$laVille;
    }

    public function setSup_Bien($leSup){
        $this->Sup=$leSup;
    }

    public function setNbCouchage_Bien($leNbCouchage){
        $this->Nbcouchage=$leNbCouchage;
    }

    public function setNbpieces_Bien($leNbpieces){
        $this->Nbpieces=$leNbpieces;
    }

    public function setNbchambre_Bien($leNbchambre){
        $this->Nbchambre=$leNbchambre;
    }

    public function setDescriptif_Bien($leDescriptif){
        $this->Descriptif=$leDescriptif;
    }
    
    /*Getter */
    
    public function getNom_Bien(){
        return $this->Nom;
    }
    
    public function getRue_Bien(){
        return $this->Rue;
    }
    
    public function getCodeP_Bien(){
        return $this->CodeP;
    }

    public function getVille_Bien(){
        return $this->Ville;
    }

    public function getSup_Bien(){
        return $this->Sup;
    }

    public function getNbCouchage_Bien(){
        return $this->Nbcouchage;
    }

    public function getNbPieces_Bien(){
        return $this->Nbpieces;
    }

    public function getNbChambre_Bien(){
        return $this->Nbchambre;
    }

    public function getDescriptif_Bien(){
        return $this->Descriptif;
    }
}
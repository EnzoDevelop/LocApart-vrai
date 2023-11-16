<?php

/* Class lient */

class Client{
    const errmessage = "Une erreur s'est produite \n";

    /*Propriété */
    private string $nom_client;
    private string $prenom_client;
    private string $rue_client;
    private string $code_client;
    private string $ville_client;
    private string $mail_client;
    private string $pass_client;
    private string $statut_client;
    private string $valid_client;
    
    
    /*Constructor */
    public function __construct($leNom, $lePrenom, $laRue, $leCode, $laVille, $leMail, $lePass, $leStatut, $laValid) {
        $this->nom_client=$leNom;
        $this->prenom_client=$lePrenom;
        $this->rue_client=$laRue;
        $this->code_client=$leCode;
        $this->ville_client=$laVille;
        $this->mail_client=$leMail;
        $this->pass_client=$lePass;
        $this->statut_client=$leStatut;
        $this->valid_client=$laValid;
        
    }

    public function setNom_client($leNom){
        $this->nom_client=$leNom;
    }
    
    public function setPrenom_client($lePrenom){
        $this->prenom_client=$lePrenom;
    }
    
    public function setRue_client($laRue){
        $this->rue_client=$laRue;
    }

    public function setCode_client($leCode){
        $this->code_client=$leCode;
    }

    public function setVille_client($laVille){
        $this->ville_client=$laVille;
    }

    public function setMail_client($leMail){
        $this->mail_client=$leMail;
    }

    public function setPass_client($lePass){
        $this->pass_client=$lePass;
    }

    public function setStatut_client($leStatut){
        $this->statut_client=$leStatut;
    }

    public function setValid_client($laValid){
        $this->valid_client=$laValid;
    }
    
    /*Getter */
    
    public function getNom_client(){
        return $this->nom_client;
    }
    
    public function getPrenom_client(){
        return $this->prenom_client;
    }
    
    public function getRue_client(){
        return $this->rue_client;
    }

    public function getVille_client(){
        return $this->ville_client;
    }

    public function getCode_client(){
        return $this->code_client;
    }

    public function getMail_client(){
        return $this->mail_client;
    }

    public function getPass_client(){
        return $this->pass_client;
    }

    public function getStatut_client(){
        return $this->statut_client;
    }

    public function getValid_client(){
        return $this->valid_client;
    }
}
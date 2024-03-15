<?php

class Matiere
{
    private $id_matiere ;
    private $forme_meplat;
    private $forme_rond;
    private $longueur;
    private $largeur;
    private $epaisseur;
    private $diametre;
    private $ref_stock;
    private $nom_matiere;

    public function __construct(array $donnee)
    {
        $this->hydrate($donnee);
    }

    /**
     * @return mixed
     */
    public function getIdMatiere()
    {
        return $this->id_matiere;
    }

    /**
     * @param mixed $id_matiere
     */
    public function setIdMatiere($id_matiere)
    {
        $this->id_matiere = $id_matiere;
    }

    public function hydrate(array $donnee){
        foreach ($donnee as $key => $value){
            $method = 'set'.ucfirst($key);
            if(method_exists($this,$method)){
                $this->$method($value);
            }
        }
    }

    /**
     * @return mixed
     */
    public function getFormeMeplat()
    {
        return $this->forme_meplat;
    }

    /**
     * @param mixed $forme_meplat
     */
    public function setFormeMeplat($forme_meplat)
    {
        $this->forme_meplat = $forme_meplat;
    }

    /**
     * @return mixed
     */
    public function getFormeRond()
    {
        return $this->forme_rond;
    }

    /**
     * @param mixed $forme_rond
     */
    public function setFormeRond($forme_rond)
    {
        $this->forme_rond = $forme_rond;
    }

    /**
     * @return mixed
     */
    public function getLongueur()
    {
        return $this->longueur;
    }

    /**
     * @param mixed $longueur
     */
    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;
    }

    /**
     * @return mixed
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * @param mixed $largeur
     */
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;
    }

    /**
     * @return mixed
     */
    public function getEpaisseur()
    {
        return $this->epaisseur;
    }

    /**
     * @param mixed $epaisseur
     */
    public function setEpaisseur($epaisseur)
    {
        $this->epaisseur = $epaisseur;
    }

    /**
     * @return mixed
     */
    public function getDiametre()
    {
        return $this->diametre;
    }

    /**
     * @param mixed $diametre
     */
    public function setDiametre($diametre)
    {
        $this->diametre = $diametre;
    }

    /**
     * @return mixed
     */
    public function getRefStock()
    {
        return $this->ref_stock;
    }

    /**
     * @param mixed $ref_stock
     */
    public function setRefStock($ref_stock)
    {
        $this->ref_stock = $ref_stock;
    }

    /**
     * @return mixed
     */
    public function getNomMatiere()
    {
        return $this->nom_matiere;
    }

    /**
     * @param mixed $nom_matiere
     */
    public function setNomMatiere($nom_matiere)
    {
        $this->nom_matiere = $nom_matiere;
    }
    public function etatsDesStocks(){
        $bdd = new Bdd();
        $req = $bdd->getBdd()->prepare('SELECT id_matiere, forme_meplat,forme_rond, longueur,
       largeur,epaisseur, diametre, nom_matiere FROM `matiere`');
        $req->execute(array(
            "id_matiere" =>$this->getIdMatiere(),
            "forme_meplat" =>$this->getFormeMeplat(),
            "forme_rond" =>$this->getFormeRond(),
            "longueur" =>$this->getLongueur(),
            "largeur" =>$this->getLargeur(),
            "epaisseur" =>$this->getEpaisseur(),
            "diametre" =>$this->getDiametre(),
            "nom_matiere" =>$this->getNomMatiere(),

        ));
        $res = $req->fetch();
        if (is_array($res)){
            $this->setNom($res["nom"]);
            $this->setPrenom($res["prenom"]);
            $this->setFonction($res["fonction"]);
            session_start();

            $_SESSION["utilisateur"] = $this;
            header("Location: ../../vue/accueilid.php");
        }else{
            header("Location: ../../vue/connexion.php");
        }
    }
    }



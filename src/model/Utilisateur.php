<?php
class Utilisateur
{

    private $idutilisateur;
    private $nom;
    private $prenom;
    private $fonction;
    private $mdp;

    public function __construct(array $donnee)
    {
        $this->hydrate($donnee);
    }
    /**
     * @return mixed
     */
    public function getIdutilisateur()
    {
        return $this->idutilisateur;
    }
    /**
     * @param mixed $idutilisateur
     */
    public function setIdutilisateur($idutilisateur)
    {
        $this->idutilisateur = $idutilisateur;
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
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }


    /**
     * @return mixed
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * @param mixed $fonction
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;
    }

    /**
     * @return mixed
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * @param mixed $mdp
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }

    public function inscription(){
        $bdd = new Bdd();
        $req = $bdd->getBdd()->prepare('SELECT nom FROM `utilisateur` WHERE nom=:nom');
        $req->execute(array(
            "nom" =>$this->getNom()

        ));
        $res = $req->fetch();
        if (is_array($res)){
            header("Location: ../../vue/inscription.php?erreur=0");
        }else{
            $req = $bdd->getBdd()->prepare('INSERT INTO `utilisateur`( `nom`, `prenom`,`mdp`,  `fonction`) VALUES ( :nom, :prenom, :mdp, :fonction) ');
            $req->execute(array(
                'nom'=>$this->getNom(),
                'prenom'=>$this->getPrenom(),
                'fonction'=>$this->getFonction(),
                'mdp'=>$this->getMdp(),
            ));
            header("Location: ../../vue/inscription.php");
        }
    }
    public function connexion(){
        $bdd = new Bdd();
        $req = $bdd->getBdd()->prepare('SELECT * FROM `utilisateur` WHERE nom=:nom and mdp=:mdp');
        $req->execute(array(
            "nom" =>$this->getNom(),
            "mdp" =>$this->getMdp(),
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

    public function editer(){
        $bdd = new Bdd();
        $req = $bdd->getBdd()->prepare('UPDATE utilisateur SET nom=:nom,prenom=:prenom,fonction=:fonction WHERE id_utilisateur=:id_utilisateur');
        $res = $req->execute(array(
            "fonction" =>$this->getFonction(),
            "prenom" =>$this->getPrenom(),
            "nom" =>$this->getNom(),
            "id_utilisateur" =>$this->getIdutilisateur(),
        ));

        if ($res){
            header("Location: ../../vue/accueilid.php?success");
        }else{
            header("Location: ../../vue/edition.php?id_utilisateur=".$this->getIdutilisateur()."&erreur");
        }
    }
    public function supprimer(){
        $bdd = new Bdd();
        $req = $bdd->getBdd()->prepare('DELETE FROM utilisateur WHERE id_utilisateur=:id_utilisateur');
        $res = $req->execute(array(
            "id_utilisateur" =>$this->getIdutilisateur(),
        ));

        if ($res){
            header("Location: ../../vue/accueilid.php?success");
        }else{
            header("Location: ../../vue/connexion.php?erreur");
        }
    }
}
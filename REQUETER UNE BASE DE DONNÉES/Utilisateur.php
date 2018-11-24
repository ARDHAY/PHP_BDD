


<?php
/**
 * Created by PhpStorm.
 * User: H'BIBA
 * Date: 22/11/2018
 * Time: 20:07
 */

require 'ConxBD.php';
require 'formSelect.html';
require 'formulaireinsert.html';

class Utilisateur
{
    protected $cin;
    protected $nom;
    protected $prenom;
    protected $adresse;


    public function __utilisateur($cin, $nom, $prenom, $adresse)
    {
        $this->setCin($cin);
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAdresse($adresse);
    }

    /**
     * @return mixed
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param mixed $cin
     */
    public function setCin($cin): void
    {
        $this->cin = $cin;
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
    public function setNom($nom): void
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
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse): void
    {
        $this->adresse = $adresse;
    }

    public function selectAll($c)
    {
        $cin = isset($_POST['cin']) ? $_POST['cin'] : NULL;
        $req = "select *from utilisateur WHERE cin LIKE '%". $cin."%'";
        $rep = $c->query($req);

        if ($rep !== FALSE) {
            echo '<pre>';
            echo '</pre>';
        } else {
            echo ' query failed';
        }
        $users = $rep->fetchAll(PDO::FETCH_OBJ);

        return $users;
    }

}



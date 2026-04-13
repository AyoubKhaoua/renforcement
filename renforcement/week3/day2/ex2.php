<!-- 





16.Créez un tableau $catalogue avec 2 voitures, 1 moto et 1 camionnette
17.Parcourez le catalogue avec foreach et affichez getDescription() + getPrixFinal() pour
chaque véhicule
18.Calculez et affichez le prix moyen du catalogue (somme des getPrixFinal() / nombre de
véhicules)
=========================================================================================



• → abstract function getPrixFinal() : float (obligatoire dans chaque
sous-classe)
• → abstract function getDescription() : string
-->
<!-- 10.Créez la classe abstraite Vehicule avec ses 4 attributs protected, son constructeur, ses getters -->
<?php
abstract class Vehicule
{
    protected $marque;
    protected $modele;
    protected $annee;
    protected $prixBase;

    public function getMarque()
    {
        return $this->marque;
    }
    public function getModele()
    {
        return $this->modele;
    }
    public function getAnnee()
    {
        return $this->annee;
    }
    public function getPrixBase()
    {
        return $this->prixBase;
    }
    /* 11. Déclarez les méthodes abstraites getPrixFinal() et getDescription() dans Vehicule */
    abstract public function getPrixFinal();
    abstract public function getDescription();
}
class Voiture extends Vehicule
{
    private $fraisMiseEnRoute = 150;
    /* 12.Créez Voiture extends Vehicule : getPrixFinal() retourne prixBase + 150 */
    public function getPrixFinal()
    {
        return $this->prixBase + 150;
    }
    /* 15.Implémentez getDescription() dans chaque sous-classe avec un format propre à chaque type */
    public function getDescription()
    {
        return ("name Vehicule:Voiture -marque :$this->marque - modele:$this->modele - annee:$this->annee - prixBase:$this->prixBase");
    }
}
class Moto extends Vehicule
{
    private $remiseAncienne = 0.05;
    /*  13.Créez Moto extends Vehicule : getPrixFinal() applique -5% si annee < 2020, sinon prixBase */
    public function getPrixFinal()
    {
        if ($this->annee < 2020) {
            return $this->prixBase - $this->prixBase * $this->remiseAncienne;
        }
        return $this->prixBase;
    }
    /* 15.Implémentez getDescription() dans chaque sous-classe avec un format propre à chaque type */
    public function getDescription()
    {
        return ("name Vehicule:Moto -marque :$this->marque - modele:$this->modele - annee:$this->annee - prixBase:$this->prixBase");
    }
}
class Camionnette extends Vehicule
{
    private $chargeUtile;
    /* 14.Créez Camionnette extends Vehicule avec $chargeUtile (en kg) : getPrixFinal() ajoute chargeUtile * 0.10 comme malus écologique */
    public function getPrixFinal()
    {
        return $this->prixBase + ($this->chargeUtile * 0.10);
    }
    /* 15.Implémentez getDescription() dans chaque sous-classe avec un format propre à chaque type */
    public function getDescription()
    {
        return ("name Vehicule:Camionnette -marque :$this->marque - modele:$this->modele - annee:$this->annee - prixBase:$this->prixBase");
    }
}

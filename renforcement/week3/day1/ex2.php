<?php
// 10.Déclarez la classe CompteBancaire avec 3 attributs private : $titulaire, $iban, $solde
class CompteBancaire
{
    private $titulaire;
    private $iban;
    private $solde;
    //11. Écrivez le constructeur avec les 3 paramètres (solde initial = 0 par défaut si non fourni)
    public function __construct($titulaire, $iban, $solde = 0)
    {
        $this->titulaire = $titulaire;
        $this->iban = $iban;
        $this->solde = $solde;
    }
    //12.Ajoutez les getters : getTitulaire(), getIban(), getSolde()
    public function getTitulaire()
    {
        return $this->titulaire;
    }
    public function getIban()
    {
        return $this->iban;
    }
    public function getSolde()
    {
        echo $this->solde;
    }
    //13.Ajoutez la méthode deposer($montant) : valider que $montant > 0, puis ajouter au solde
    public function deposer($montant)
    {
        if ($montant > 0) {
            $this->solde += $montant;
            return "success";
        }
        echo "can not add monatant lower then 0";
    }
    //14.Ajoutez la méthode retirer($montant) : valider que $montant > 0 ET que le solde est suffisant, sinon afficher "Solde insuffisant"
    public function retirer($montant)
    {
        if ($montant > 0 && $montant < $this->solde) {
            $this->solde -= $montant;
            return "success";
        }
        echo "Solde insuffisant";
    }
    //15.Ajoutez la méthode afficherInfos() qui affiche toutes les infos du compte
    public function afficherInfos()
    {
        echo "titulaire:" . $this->titulaire . " and solde: " . $this->solde;
    }
}
//16.Instanciez 2 comptes, effectuez plusieurs dépôts et retraits, vérifiez que les validationsnfonctionnent 

$compte = new CompteBancaire('aa', 'bf16270');

//
$compte->deposer(20);
$compte->retirer(10);
$compte->getSolde();
$compte->afficherInfos();

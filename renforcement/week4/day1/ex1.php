<?php
/* ---------------------etape1-------------------- */
//. Créez abstract class Bien avec 4 attributs protected : $id (int), $surface (float), $adresse (string), $prixBase (float)
abstract class Bien
{
    protected $id;
    protected $surface;
    protected $adresse;
    protected $prixBase;
    public function __construct($id, $surface, $adresse, $prixBase)
    {
        $this->id = $id;
        $this->surface = $surface;
        $this->adresse = $adresse;
        $this->prixBase = $prixBase;
    }
    public function getSurface()
    {
        return $this->surface;
    }
    public function getAdresse()
    {
        return $this->adresse;
    }
    public function getPrixBase()
    {
        return $this->prixBase;
    }
    public function setSurface($surface)
    {
        $this->surface = $surface;
    }
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }
    public function setPrixBase($prix)
    {
        if ($prix > 0)
            $this->prixBase = $prix;
    }
    abstract public function calculerPrix(): float;
    abstract public function estDisponible(): bool;
    public function getDescription(): string
    {
        echo ("Bien" . $this->id - $this->surface . "m² a " . $this->adresse);
    }
}
class Appartement extends Bien
{
    private $etage;
    private $hasBalcon;
    private $charges;
    public function __construct($id, $surface, $adresse, $prixBase, $etage, $hasBalcon, $charges)
    {
        $this->etage = $etage;
        $this->hasBalcon = $hasBalcon;
        $this->charges = $charges;
        return parent::__construct($id, $surface, $adresse, $prixBase);
    }
    public function getEtage()
    {
        return $this->etage;
    }
    public function calculerPrix(): float
    {
        return $this->getPrixBase() + ($this->etage * 500) + ($this->hasBalcon ? 3000 : 0);
    }
    public function estDisponible(): bool
    {
        if ($this->prixBase > 0)
            return true;
        else
            return "n'est pas disponible";
    }
    public function getDescription(): string
    {
        return parent::getDescription() . "Appt etage " . $this->etage . "+" . $this->hasBalcon ? "balcon applicapbe" : "";
    }
}
class Maison extends Bien
{
    private $nbPieces;
    private $hasJardin;
    private $surfaceJardin;
    public function calculerPrix(): float
    {
        return $this->getPrixBase() + ($this->nbPieces * 8000) + ($this->hasJardin ? $this->surfaceJardin * 150 : 0);
    }
    public function estDisponible(): bool
    {
        if ($this->nbPieces >= 1 && $this->prixBase > 0)
            true;
        else
            false;
    }
    public function getDescription(): string
    {
        return parent::getDescription() . "Maison" . $this->nbPieces . $this->hasJardin ? " avec jardin" : "";
    }
}
class LocalCommercial extends Bien
{
    private $activiteAutorisee;
    private $loyer;
}
$a = new Appartement(1, 65, '12 rue de la prix', 150000, 3, true, 120);
echo ($a->calculerPrix());

<?php
/* 1. Créez produit.php et déclarez la classe Produit avec les 3 attributs private : $nom, $prix,
$stock  */
class Produit
{
    private $nom;
    private $prix;
    private $stock;
    /*  2. Ajoutez le constructeur __construct($nom, $prix, $stock) qui initialise les 3 attributs */
    public function __construct($nom, $prix, $stock)
    {
        $this->nom = $nom;
        $this->prix = $prix;
        $this->stock = $stock;
    }
    /* 3. Ajoutez les getters : getNom(), getPrix(), getStock() */
    public function getNom()
    {
        return $this->nom;
    }
    public function getPrix()
    {
        return $this->prix;
    }
    public function getStock()
    {
        return $this->stock;
    }
    /* 4. Ajoutez le setter setPrix($prix) avec validation : refuser les prix négatifs */
    public function setPrix($prix)
    {
        if ($prix < 0) {
            echo "le prix doit etre positif";
        };
        $this->prix = $prix;
    }
    /*  5. Ajoutez le setter setStock($stock) avec validation : refuser un stock < 0 */
    public function setStock($stock)
    {
        if ($stock < 0) {
            echo "le stock doit etre supireue a 0";
        };
        $this->stock = $stock;
    }
    /* 6. Ajoutez la méthode afficher() qui affiche : "[nom] — [prix]€ (stock : [stock])" */
    public function afficher()
    {
        echo $this->nom . '-' . $this->prix . '€';
        echo 'stock:' . $this->stock;
    }
}





/*  7. Instanciez 2 produits différents et appelez asfficher() sur chacun */
$p1 = new Produit('cocka', 12, 80);
$p2 = new Produit('bimo', 2, 100);
/* 8. Testez setPrix(-5) — vérifiez que le message d'erreur s'affiche */
$p1->setPrix(-5);
/* 9. Testez getPrix() et getNom() — vérifiez que les valeurs correctes sont retournées */
$p2->getPrix();
$p2->getNom();

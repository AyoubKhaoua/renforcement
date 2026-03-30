let catalogue = [
  {
    id: 1,
    nom: "Stylo bille bleu",
    cat: "ecriture",
    prix: 1.2,
    stock: 150,
    note: 4.2,
  },
  {
    id: 2,
    nom: "Stylo bille rouge",
    cat: "ecriture",
    prix: 1.2,
    stock: 0,
    note: 4.0,
  },
  {
    id: 3,
    nom: "Stylo gel noir",
    cat: "ecriture",
    prix: 2.5,
    stock: 60,
    note: 4.7,
  },
  {
    id: 4,
    nom: "Cahier A4 200p",
    cat: "papier",
    prix: 5.5,
    stock: 45,
    note: 4.8,
  },
  {
    id: 5,
    nom: "Cahier A5 100p",
    cat: "papier",
    prix: 3.2,
    stock: 80,
    note: 4.3,
  },
  {
    id: 6,
    nom: "Bloc-notes A5",
    cat: "papier",
    prix: 2.8,
    stock: 30,
    note: 3.9,
  },
  {
    id: 7,
    nom: "Surligneur jaune",
    cat: "ecriture",
    prix: 1.8,
    stock: 0,
    note: 4.5,
  },
  {
    id: 8,
    nom: "Surligneur rose",
    cat: "ecriture",
    prix: 1.8,
    stock: 20,
    note: 4.3,
  },
  {
    id: 9,
    nom: "Ciseaux bureau",
    cat: "bureau",
    prix: 6.5,
    stock: 8,
    note: 3.7,
  },
  {
    id: 10,
    nom: "Agrafeuse",
    cat: "bureau",
    prix: 9.9,
    stock: 5,
    note: 4.1,
  },
  {
    id: 11,
    nom: "Post-it jaunes",
    cat: "papier",
    prix: 4.2,
    stock: 60,
    note: 4.6,
  },
  { id: 12, nom: "Agenda 2025", cat: "agenda", prix: 12.0, stock: 15 },
  {
    id: 13,
    nom: "Marqueur permanent",
    cat: "ecriture",
    prix: 3.1,
    stock: 35,
    note: 4.4,
  },
  {
    id: 14,
    nom: "Regle 30cm",
    cat: "bureau",
    prix: 1.5,
    stock: 90,
    note: 3.8,
  },
  {
    id: 15,
    nom: "Compas de precision",
    cat: "bureau",
    prix: 8.9,
    stock: 12,
    note: 4.6,
  },
];
function rechercherProduits(array, conditions) {
  let newarray = [];
  let con = Object.keys(conditions);
  let conValue = Object.values(conditions);

  newarray = array.filter((e) => e.con > conditions.age && e.n);
  console.log(newarray);
}
rechercherProduits(catalogue, {
  enStock: true,
});

//     texte: nom contient ce texte(insensible a la casse)
//  categories: tableau-- le produit appartient a l'une de ces categories
//  prixMin / prixMax : fourchette de prix
//  enStock: boolean-- seulement les produits avec stock > 0
//  noteMin: note >= noteMin

/* -----------------------------Exercice 1 -- Manipulation d'objet---------------------------------- */
const fiche = { prenom: "Bob", nom: "Dupont", age: 34, ville: "Lyon" };
/* 


/* 1. Affichez le nom complet (prénom + nom) en concaténant les deux propriétés */
console.log(`Bonjour mr ${fiche.prenom} ${fiche.nom}`);
/* 2. Écrivez getProp(obj, cle) qui retourne la valeur ou 'Inconnu' si la propriété est absente --
testez avec 'ville' et 'salaire' */

function getProp(fiche, cle) {
  let propriété = fiche.hasOwnProperty(cle);

  if (!propriété) {
    console.log("Inconnu");
    return 0;
  }
  console.log(propriété);
}

getProp(fiche, "ville");
/* 3. Écrivez renommerCle(obj, ancienne, nouvelle) qui retourne un NOUVEL objet avec la clé
renommée (sans muter fiche)  */
function renommerCle(obj, ancienne, nouvelle) {
  let ancienneCle = obj.hasOwnProperty(ancienne);

  if (ancienneCle) {
    obj[nouvelle] = obj[ancienne];
    delete obj[ancienne];
  } else {
    console.log("these object dosn't containe this cle ");
  }
}
renommerCle(fiche, "vile", "coutry");
console.log(fiche);
/* -----------------------------Exercice 2 -- Parcourir un inventaire---------------------------------- */
const inventaire = {
  stylo: { prix: 1.5, stock: 200 },
  cahier: { prix: 3.5, stock: 85 },
  regle: { prix: 0.8, stock: 0 },
  compas: { prix: 8.5, stock: 12 },
};
/* 

*/
/* 1. Affichez tous les noms de produits avec Object.keys() */
let keys = Object.keys(inventaire);
console.log(keys);
/* 2. Calculez la valeur totale du stock : somme de (prix * stock) pour chaque article */

Object.entries(inventaire).forEach(([nomProduit, dataProduit]) => {
  console.log(`${nomProduit}:${dataProduit.prix * dataProduit.stock}`);
});
/* 3. Créez prixSeuls : un objet { nom: prix } en utilisant Object.fromEntries() + map()  */
const prixSeuls = Object.entries(inventaire).map(([nom, details]) => {
  return {
    produit: nom,
    Totale: details.prix * details.stock,
  };
});

console.log(prixSeuls);

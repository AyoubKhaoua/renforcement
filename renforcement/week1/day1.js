/* Pensez a filter() pour eliminer les falsy et les doublons.
Pour les doublons : indexOf() ou includ() peuvent vous aider. */
let tableau = [false, 7, 4, "", 8, undefined, 8, 0, 8, 4];
let t = [1, 2, 3, 4, 5, 6];
function nettoyer(tableau) {
  tableau.forEach((tb) => {
    if (!tb && tableau.includes(tb)) {
      let index = tableau.indexOf(tb);

      tableau = tableau
        .filter((res) => tableau.indexOf(res) !== index)
        .sort((a, b) => a - b);
    }
  });
  console.log(tableau);
}
/* function nettoyer(tableau) {
  let resultat = [];

  tableau.forEach((tb) => {
    if (tb && !resultat.includes(tb)) {
      resultat.push(tb);
    }
  });
} */
nettoyer(tableau);

/* Pensez a filter() pour eliminer les falsy et les doublons.
Pour les doublons : indexOf() ou includ() peuvent vous aider. */
let tableau = [false, 7, 7, "", 8, undefined, 8, 4];
function nettoyer(tableau) {
  tableau.forEach((tb) => {
    if (!tb || tb === 0 || tb === "" /* || tableau.includes(tb) */) {
      let index = tableau.indexOf(tb);

      tableau = tableau
        .filter((res) => tableau.indexOf(res) !== index)
        .sort((a, b) => a - b);
    }
  });
  console.log(tableau);
}
nettoyer(tableau);

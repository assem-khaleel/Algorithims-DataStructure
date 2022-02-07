// --- Directions
// Given an integer, return an integer that is the reverse
// ordering of numbers.
// --- Examples
//   reverseInt(15) === 51
//   reverseInt(981) === 189
//   reverseInt(500) === 5
//   reverseInt(-15) === -51
//   reverseInt(-90) === -9

function reverseInt(n) {
  return parseInt(n.toString().split("").reverse().join("")) * Math.sign(n);
}

// var reverseN = n.toString().split("").reverse().join("");
// if (n < 0) {
//   return parseInt(reverseN) * -1;
// }
// return parseInt(reverseN);

// var reverseN = n.toString().split("").reverse().join("");
// return parseInt(reverseN) * Math.sign(n);
reverseInt(567);
module.exports = reverseInt;

// --- Directions
// Given a string, return a new string with the reversed
// order of characters
// --- Examples
//   reverse('apple') === 'leppa'
//   reverse('hello') === 'olleh'
//   reverse('Greetings!') === '!sgniteerG'

function reverse(str) {
  let reversed = "";
  for (let character of str) {
    reversed = character + reversed;
  }
  debugger;

  return reversed;

  //return str.split("").reduce((rev, char) => char + rev, "");
}
reverse("assem");
//1// return str.split("").reverse().join("");

//2// const arr = str.split("");
// arr.reverse();
// return arr.join("");

//3// var reversed = "";
//   for (var i = str.length - 1; i >= 0; i--) {
//     reversed += str[i];
//   }
//   return reversed;

//4
//  let reversed = "";
// for (let character of str) {
//   reversed = character + reversed;
// }
// return reversed;
module.exports = reverse;

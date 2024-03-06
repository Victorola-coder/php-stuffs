const numbers = [2, 4, 5, 6, 6];

const computerNumber = numbers.reduce((arr, cur) => {
  return arr + cur;
});

console.log(computerNumber);

/**
 * Take two numbers and multiply them.
 *
 *@param int firstNumber One number to multiply.
 *@param int secondNumber The other number to multiply.
 *@return int The product of the two numbers.
 */
function multiplyNumbers (firstNumber, secondNumber) {
	return firstNumber * secondNumber;
}

console.log(multiplyNumbers(-2, 5));
console.log(multiplyNumbers(-15, 5));
console.log(multiplyNumbers(2, 5));
console.log(multiplyNumbers(-25, 3762555));






/**
 * Take two strings and concatenate them.
 *
 *@param string firstName The given name to concatenate.
 *@param string lastName The family name to concatenate.
 *@return string The full name of our person.
 */
function getFullName (firstName, lastName) {
	return firstName + ' ' + lastName;
}

console.log(getFullName("Paul", "Schulzetenberg"));
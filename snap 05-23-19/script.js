// Using the array filter prototype filter out all the words that start with the letter e.

let arrayOfNames = "Ensign Babyface! Your shields were failing, sir. This should be interesting. Your head is not an artifact! What's a knock-out like you doing in a computer-generated gin joint like this? Why don't we just give everybody a promotion and call it a night - 'Commander'? But the probability of making a six is no greater than that of rolling a seven. What? We're not at all alike! I recommend you don't fire until you're within 40,000 kilometers. Wouldn't that bring about chaos? Flair is what marks the difference between artistry and mere competence."

// function filterName(arrayOfNames, index, letter) {
// 	let filteredNames = arrayOfNames.filter(function(arrayOfNames) {
// 		return word[index(1)] === letter "e";
// 	});
// 	return filteredNames
// }
//
// console.log(filterName(arrayOfNames, 1, 'E'));

const ipsum = "Ensign Babyface! Your shields were failing, sir. This should be interesting. Your head is not an artifact! What's a knock-out like you doing in a computer-generated gin joint like this? Why don't we just give everybody a promotion and call it a night - 'Commander'? But the probability of making a six is no greater than that of rolling a seven. What? We're not at all alike! I recommend you don't fire until you're within 40,000 kilometers. Wouldn't that bring about chaos? Flair is what marks the difference between artistry and mere competence."

const newIpsum = ipsum.split(" ").filter(word => !word.toLowerCase().startsWith("e")).join(" ");

console.log(newIpsum);
var Name = "Tawfique";
var age = 25;
console.log("My name is "+Name+" and I am "+age+" years old");

var celsius = 25; 
var fahrenheit = (celsius * 9/5) + 32; 
console.log(celsius + "°C is equal to " + fahrenheit + "°F");

//Largest Number
var num1 = 15; 
var num2 = 22; 
var num3 = 8; 
 
var largest = num1; 
 
if (num2 > largest) { 
  largest = num2; 
} 
if (num3 > largest) { 
  largest = num3; 
} 
 
console.log("The largest number is: " + largest);


//reverse a string
var str = "reverse"; 
var reversedStr = ""; 
 
for (var i = str.length - 1; i >= 0; i--) { 
  reversedStr += str[i]; 
} 
console.log("Reversed string is: " + reversedStr); 


//sum of array elements
var arr = [1, 2, 3, 4, 5]; 
var sum = 0; 
 
for (var i = 0; i < arr.length; i++) { 
  sum += arr[i]; 
} 
 
console.log("Sum of array elements: " + sum); 


//Chceking Prime Number
var num = 113; 
var isPrime = true; 
 
for (var i = 2; i < num; i++) { 
  if (num % i === 0) { 
    isPrime = false; 
    break; 
  } 
} 
 
if (isPrime) { 
  console.log(num + " is a prime number."); 
} else { 
  console.log(num + " is not a prime number."); 
}


//Manipulating array
var arr = [1, 2, 3, 4, 5]; 
 
// Add an element to the end of the array 
arr.push(6); 
console.log("After adding to the end of array: " + arr); 
 
// Remove the first element
arr.shift(); 
console.log("Modified array: " + arr); 

//Object example
var person = { 
name: "Alice", 
age: 30 
}; 
console.log("Name: " + person.name); 
console.log("Age: " + person.age);
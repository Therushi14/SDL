// Show an alert when the page loads
alert("Welcome to the JS Demo!");

// 1. Calculate average number of weeks in a human lifetime
let averageAge = 80; // in years
let weeksPerYear = 52;
let averageWeeks = averageAge * weeksPerYear;
console.log("Average weeks in a human lifetime:", averageWeeks);

// 2. Store a string in a variable
let message = "JavaScript is fun!";
console.log(message);

// 3. Program to tell time of the day
let currentHour = new Date().getHours();
let timeMessage = "";

if (currentHour >= 5 && currentHour < 12) {
  timeMessage = "Good Morning!";
} else if (currentHour >= 12 && currentHour < 18) {
  timeMessage = "Good Afternoon!";
} else {
  timeMessage = "Good Night!";
}

document.getElementById("timeMessage").textContent = timeMessage;

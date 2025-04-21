// 1. Alert
alert("Welcome to the JavaScript Demo!");

// 2. Average number of weeks in a human lifetime
let years = 75;
let weeksInYear = 52;
let avgWeeks = years * weeksInYear;
console.log("Average number of weeks in a human lifetime:", avgWeeks);

// 3. Store a string in a variable
let myName = "Gaurav Tanpure";
console.log("Name stored in variable:", myName);

// 4. Program to tell time of the day
let hour = new Date().getHours();
let message = "";

if (hour >= 5 && hour < 12) {
  message = "Good Morning!";
} else if (hour >= 12 && hour < 17) {
  message = "Good Afternoon!";
} else {
  message = "Good Evening!";
}

console.log("Time of Day Message:", message);
alert(message);

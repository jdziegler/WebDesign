//Javascript

date = new Date();

hour = date.getHours();

if (hour > 18) timeofday = "evening";
else if (hour > 12) timeofday = "afternoon";
else timeofday = "morning";

var greeting = "Good " + timeofday + "!";

var color_greeting = greeting.fontcolor("white");

document.write(color_greeting);



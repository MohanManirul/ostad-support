// Set the date we're counting down to
let countdownDate = new Date("Sep 30, 2024 15:00:00").getTime();

// Update the countdown every second
let countdownInterval = setInterval(function() {
    // Get the current date and time
    let now = new Date().getTime();
    
    // Calculate the time remaining
    let distance = countdownDate - now;
    
    // Time calculations for days, hours, minutes, and seconds
    let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Display the result in the element with id="countdown"
    document.getElementById("countdown").innerHTML = 
        (hours < 10 ? "0" : "") + hours + ":" +
        (minutes < 10 ? "0" : "") + minutes + ":" +
        (seconds < 10 ? "0" : "") + seconds;

    // If the countdown is over, display a message
    if (distance < 0) {
        clearInterval(countdownInterval);
        document.getElementById("countdown").innerHTML = "TIME'S UP!";
    }
}, 1000);

$(document).ready(function() {
    setInterval(function() {
        $("#timer").load("/timer");
    }, 1000);
});
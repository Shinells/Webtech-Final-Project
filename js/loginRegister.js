document.getElementById("loginForm").addEventListener("submit", function(event) {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    var passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

    if (!emailRegex.test(email)) {
        alert("Please enter a valid email address.");
        event.preventDefault(); 
    }

    if (!passwordRegex.test(password)) {
        alert("Password must be at least 8 characters long and contain at least one letter and one number.");
        event.preventDefault(); 
    }
});
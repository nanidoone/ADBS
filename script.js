document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission
    
    // Capture the username and password values
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    // For now, we are allowing any username and password to log in successfully
    alert("Login successful!"); // Show a success alert

    // Redirect to the inventory page after the alert is dismissed
    window.location.href = "inventory.html";
});

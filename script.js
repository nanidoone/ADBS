document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission

    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    if (username === "admin" && password === "password123") {
        // Show an alert if ma  successful ang login
        alert("Login successful!");

        // adto dayon ni siya sa  inventory page after alert is dismissed
        window.location.href = "inventory.html";
    } else {
        // Display an error message if login fails hehe
        const errorMessage = document.getElementById("errorMessage");
        errorMessage.textContent = "Invalid username or password!";
        errorMessage.style.display = "block";
    }
});

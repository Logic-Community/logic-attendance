document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission
    
    let nisn = document.getElementById("nisn").value;
    let roomCode = document.getElementById("roomCode").value;

    if (nisn === "" || roomCode === "") {
        alert("Please fill in both fields!");
        return;
    }

    // Simulate authentication (replace with actual backend logic)
    if (nisn === "26031999" && roomCode === "1234") {
        alert("Enrollment successful!");
    } else {
        alert("Invalid nisn or roomCode.");
    }
});

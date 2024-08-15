// alert("welcome to student enrollment page");
// Form validation
function validateForm() {
    const name = document.forms["studentForm"]["name"].value;
    const email = document.forms["studentForm"]["email"].value;
    const course = document.forms["studentForm"]["course"].value;
    
    // Check if any fields are empty
    if (name === "" || email === "" || course === "") {
        alert("All fields must be filled out.");
        return false;
    }
    
    // Name validation
    var namePattern = /^[A-Za-z\s]+$/;
    if (!namePattern.test(name)) {
        alert("Please enter a valid name using only letters.");
        return false; // Prevent form submission
    }
    
    // Email validation
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    return true; // Allow form submission if all validations pass
}

// Delete confirmation
function confirmDelete() {
    return confirm("Are you sure you want to delete this student?");
}

// Function for editing
function confirmEdit() {
    return confirm("Are you sure you want to edit this student's details?");
}


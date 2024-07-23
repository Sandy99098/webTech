// alert("welcome to student enrollment page");
// Form validation
function validateForm() {
    const name = document.forms["studentForm"]["name"].value;
    const email = document.forms["studentForm"]["email"].value;
    const course = document.forms["studentForm"]["course"].value;

    if (name == " " || email == " " || course == " ") {
        alert("All fields must be filled out");
        return false;
    }

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address");
        return false;
    }

    return true;
}

// Delete confirmation
function confirmDelete() {
    return confirm("Are you sure you want to delete this student?");
}

//  function for editing 
function confirmEdit() {
    return confirm("Are you sure you want to edit this student's details?");
}

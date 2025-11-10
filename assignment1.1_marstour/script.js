// Wait until the DOM is fully loaded
document.addEventListener("DOMContentLoaded", function() {
  const form = document.getElementById("pilotForm");

  // Add submit event listener to the form
  form.addEventListener("submit", function(event) {
    // Get values from form fields
    const name = document.getElementById("name").value.trim();
    const age = parseInt(document.getElementById("age").value);
    const hours = parseInt(document.getElementById("hours").value);
    const planet = document.getElementById("planet").value.trim();
    const reason = document.getElementById("reason").value.trim();

    // Validate Full Name
    if (name.length < 3) {
      alert("Please enter your full name (at least 3 characters).");
      event.preventDefault();
      return;
    }

    // Validate Age
    if (isNaN(age) || age < 21 || age > 65) {
      alert("Age must be between 21 and 65.");
      event.preventDefault();
      return;
    }

    // Validate Flight Hours
    if (isNaN(hours) || hours < 100) {
      alert("You must have at least 100 flight hours to apply.");
      event.preventDefault();
      return;
    }

    // Validate Favorite Planet
    if (planet === "") {
      alert("Please enter your favorite planet.");
      event.preventDefault();
      return;
    }

    // Validate Reason for Applying
    if (reason.length < 20) {
      alert("Please explain your motivation in at least 20 characters.");
      event.preventDefault();
      return;
    }

    // All validations passed
    alert("Application looks good! Submitting now...");
  });
});

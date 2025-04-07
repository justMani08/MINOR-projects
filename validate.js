function validateForm() {
  const name = document.querySelector('[name="name"]').value.trim();
  const contact = document.querySelector('[name="contact"]').value.trim();
  const email = document.querySelector('[name="email"]').value.trim();
  const password = document.querySelector('[name="password"]').value.trim();
  const event = document.querySelector('[name="event"]').value;

  if (contact.length !== 10 || isNaN(contact)) {
    alert("Enter a valid 10-digit contact number.");
    return false;
  }

  if (password.length < 6) {
    alert("Password must be at least 6 characters.");
    return false;
  }

  if (event === "") {
    alert("Please select an event.");
    return false;
  }

  return true;
}

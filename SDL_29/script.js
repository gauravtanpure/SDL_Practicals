function validateForm() {
    let name = document.getElementById("name").value.trim();
    let password = document.getElementById("password").value;
    let phone = document.getElementById("phone").value.trim();
    let email = document.getElementById("email").value.trim();
    let address = document.getElementById("address").value.trim();
    let error = document.getElementById("error");

    if (name === "" || password === "" || phone === "" || email === "" || address === "") {
      error.innerText = "All fields are required.";
      return false;
    }

    if (password.length < 6) {
      error.innerText = "Password must be at least 6 characters.";
      return false;
    }

    if (!/^\d{10}$/.test(phone)) {
      error.innerText = "Phone number must be 10 digits.";
      return false;
    }

    if (!/^\S+@\S+\.\S+$/.test(email)) {
      error.innerText = "Enter a valid email address.";
      return false;
    }

    error.innerText = "";
    alert("Form submitted successfully!");
    return true;
  }
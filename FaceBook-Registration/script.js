document.getElementById("registrationForm").addEventListener("submit", function (e) {
    e.preventDefault();

    document.querySelectorAll(".error").forEach(el => el.textContent = "");
  
    let firstName = document.getElementById("firstName").value.trim();
    let lastName = document.getElementById("lastName").value.trim();
    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value;
    let dob = document.getElementById("dob").value;
    let gender = document.querySelector('input[name="gender"]:checked');
  
    let isValid = true;
  
    // First Name
    if (firstName === "") {
      document.getElementById("firstNameError").textContent = "First name is required.";
      isValid = false;
    }
  
    // Last Name
    if (lastName === "") {
      document.getElementById("lastNameError").textContent = "Last name is required.";
      isValid = false;
    }
  
    // Email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === "") {
      document.getElementById("emailError").textContent = "Email is required.";
      isValid = false;
    } else if (!emailRegex.test(email)) {
      document.getElementById("emailError").textContent = "Invalid email format.";
      isValid = false;
    }
  
    if (password.length < 6) {
      document.getElementById("passwordError").innerText = "Password must be at least 6 characters.";
      isValid = false;
    }
  
    // Date of Birth
    if (dob === "") {
      document.getElementById("dobError").textContent = "Date of birth is required.";
      isValid = false;
    }
  
    // Gender
    if (!gender) {
      document.getElementById("genderError").textContent = "Please select your gender.";
      isValid = false;
    }
  
    // If valid
    if (isValid) {
      alert("Registration Successful!");
      e.target.submit(); 
    }
  });
  
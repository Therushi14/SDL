function validateForm() {
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value;
    const confirmPassword = document.getElementById("confirmPassword").value;
    const phone = document.getElementById("phone").value.trim();
  
    if (!name || !email || !password || !confirmPassword || !phone) {
      alert("Please fill all fields.");
      return false;
    }
  
    if (!email.endsWith("@gmail.com")) {
      alert("Please enter a valid Gmail ID (ends with @gmail.com).");
      return false;
    }
  
    if (password.length < 6) {
      alert("Password should be at least 6 characters long.");
      return false;
    }
  
    if (password !== confirmPassword) {
      alert("Passwords do not match.");
      return false;
    }
    
    const p = /^\d{10}$/;
    if (!p.test(phone)) {
      alert("Enter a valid 10-digit phone number.");
      return false;
    }
  
    alert("Registration Successful!");
    return true;
  }
  
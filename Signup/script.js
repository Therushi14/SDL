let storedUsername = "";
let storedPassword = "";

function signup() {
  const username = document.getElementById("signup-username").value.trim();
  const password = document.getElementById("signup-password").value;
  const confirm = document.getElementById("signup-confirm").value;

  if (!username || !password || !confirm) {
    alert("Please fill all fields");
    return;
  }

  if (password !== confirm) {
    alert("Passwords do not match");
    return;
  }

  storedUsername = username;
  storedPassword = password;
  alert("Sign Up Successful!");

  document.getElementById("signup-section").classList.add("hidden");
  document.getElementById("login-section").classList.remove("hidden");
}

function login() {
  const username = document.getElementById("login-username").value.trim();
  const password = document.getElementById("login-password").value;

  if (username === storedUsername && password === storedPassword) {
    document.getElementById("login-section").classList.add("hidden");
    document.getElementById("welcome-section").classList.remove("hidden");
    document.getElementById("welcome-msg").innerText = `Welcome, ${storedUsername}!`;
  } else {
    alert("Invalid credentials");
  }
}

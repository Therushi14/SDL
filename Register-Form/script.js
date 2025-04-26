document.getElementById('registrationForm').addEventListener('submit', function (e) {
    e.preventDefault();
  
    const fname = document.getElementById('firstname').value.trim();
    const lname = document.getElementById('lastname').value.trim();
    const org = document.getElementById('organization').value.trim();
    const hobbies = Array.from(document.querySelectorAll('input[name="hobbies"]:checked')).map(cb => cb.value);
  
    const errorMsg = document.getElementById('errorMsg');
    const output = document.getElementById('output');
  
    if (!fname || !lname) {
      errorMsg.textContent = 'Please fill in all required fields.';
      output.innerHTML = '';
      return;
    }
  
    errorMsg.textContent = '';

    output.innerHTML = `
      <h3>Submitted Details:</h3>
      <p><strong>First Name:</strong> ${fname}</p>
      <p><strong>Last Name:</strong> ${lname}</p>
      <p><strong>Organization:</strong> ${org || 'N/A'}</p>
      <p><strong>Hobbies:</strong> ${hobbies.length ? hobbies.join(', ') : 'None selected'}</p>
    `;
  });
  
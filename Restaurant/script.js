document.getElementById("restaurantForm").addEventListener("submit", function(e) {
    e.preventDefault();
  
    const name = document.getElementById("name").value;
    const location = document.getElementById("location").value;
    const cuisine = document.getElementById("cuisine").value;
    const rating = document.getElementById("rating").value;
    const open24 = document.getElementById("open24").checked ? "Yes" : "No";
  
    alert(`Restaurant: ${name}\nLocation: ${location}\nCuisine: ${cuisine}\nRating: ${rating}\nOpen 24/7: ${open24}`);
  });
  
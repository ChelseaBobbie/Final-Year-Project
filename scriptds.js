document.getElementById("ratingForm").addEventListener("submit", function (e) {
  e.preventDefault();
  // Collect and send data here
  // For now, just log to the console
  console.log("Form submitted");
  // In a real application, you would also update the server with the new rating
});

// Example data - this would be replaced with actual data fetched from your backend
const data = {
  labels: ["Rating 1", "Rating 2", "Rating 3", "Rating 4", "Rating 5"],
  datasets: [
    {
      label: "Number of Votes",
      data: [12, 19, 3, 17, 28], // Example dataset
      backgroundColor: [
        "rgba(255, 99, 132, 0.2)",
        "rgba(54, 162, 235, 0.2)",
        "rgba(255, 206, 86, 0.2)",
        "rgba(75, 192, 192, 0.2)",
        "rgba(153, 102, 255, 0.2)",
      ],
      borderColor: [
        "rgba(255, 99, 132, 1)",
        "rgba(54, 162, 235, 1)",
        "rgba(255, 206, 86, 1)",
        "rgba(75, 192, 192, 1)",
        "rgba(153, 102, 255, 1)",
      ],
      borderWidth: 1,
    },
  ],
};

// Configuration for Chart.js
const config = {
  type: "bar",
  data: data,
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
    responsive: true,
    maintainAspectRatio: false,
  },
};

// Render the chart
window.onload = function () {
  const ctx = document.getElementById("ratingsChart").getContext("2d");
  const ratingsChart = new Chart(ctx, config);
};

window.onload = function () {
  fetch("/api/ratings")
    .then((response) => response.json())
    .then((ratingsData) => {
      const ctx = document.getElementById("ratingsChart").getContext("2d");
      const ratingsChart = new Chart(ctx, {
        type: "bar",
        data: ratingsData,
        options: config.options,
      });
    })
    .catch((error) => console.error("Error fetching ratings data:", error));
};

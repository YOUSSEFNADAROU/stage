

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Météo</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  
  <link href="css/styles.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="images/log.png" alt="">
            <span>
              Météo
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="s-1"> </span>
            <span class="s-2"> </span>
            <span class="s-3"> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item ">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> carte</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.php"> Prévisions </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="blog.php"> satellite</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="contact.php">graphe</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>
  <h1>Données météorologiques</h1>
    
    <div>
        <input type="text" id="cityInput" placeholder="Entrez le nom de la ville">
        <button onclick="fetchWeatherData()">Rechercher</button>
    </div>

    <div>
        <canvas id="temperatureChart" ></canvas>
    </div>

    <div>
        <canvas id="humidityChart" ></canvas>
    </div>

    <div>
        <canvas id="pressureChart"></canvas>
    </div>

    <script>
        function fetchWeatherData() {
const apiKey = "22304dcf59eb019677fa53da9df6ad6e"; 
    const city = document.getElementById('cityInput').value;
    const apiUrl = `https://api.openweathermap.org/data/2.5/forecast?q=${city}&appid=${apiKey}`;

    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            const weatherData = data.list;
            
            const temperatureData = [];
            const humidityData = [];
            const pressureData = [];
            const labels = [];
            
            weatherData.forEach(entry => {
                const dateTime = new Date(entry.dt * 1000).toLocaleDateString();
                labels.push(dateTime);
                temperatureData.push(entry.main.temp);
                humidityData.push(entry.main.humidity);
                pressureData.push(entry.main.pressure);
            });
            // ... le reste de votre code pour récupérer les données météorologiques

// Options communes pour les graphiques
const commonOptions = {
    responsive: true, // Assurez-vous que les graphiques sont réactifs
    maintainAspectRatio: false, // Permet aux graphiques d'ajuster leur taille indépendamment de leur conteneur
};

// Options spécifiques pour chaque type de graphique
const temperatureChartOptions = {
    ...commonOptions,
    aspectRatio: 2, // Ajustez cette valeur pour contrôler la hauteur des graphiques
};

const humidityChartOptions = {
    ...commonOptions,
    aspectRatio: 2, // Ajustez cette valeur pour contrôler la hauteur des graphiques
};

const pressureChartOptions = {
    ...commonOptions,
    aspectRatio: 2, // Ajustez cette valeur pour contrôler la hauteur des graphiques
};


            const temperatureChart = new Chart(document.getElementById('temperatureChart').getContext('2d'), {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Température (°C)',
                        data: temperatureData,
                        borderColor: 'red',
                        fill: false
                    }]
                }
            });

            const humidityChart = new Chart(document.getElementById('humidityChart').getContext('2d'), {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Humidité (%)',
                        data: humidityData,
                        borderColor: 'blue',
                        fill: false
                    }]
                }
            });

            const pressureChart = new Chart(document.getElementById('pressureChart').getContext('2d'), {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Pression (hPa)',
                        data: pressureData,
                        borderColor: 'green',
                        fill: false
                    }]
                }
            });
        })
        .catch(error => {
            console.error('Une erreur s\'est produite:', error);
        });
}
    </script>
 
  


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>

</body>

</html>
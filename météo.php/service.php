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
  <meta name="title" content="météo" />

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
  <link href="css/responsive.css" rel="stylesheet"/>
  <link href="css/weather.css" rel="stylesheet"/>
  <script src="script.js"></script>
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
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
                <li class="nav-item active">
                  <a class="nav-link" href="service.php"> Prévisions</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="blog.php"> satellite</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">graphe </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <div class="header">
        <div></div>
        <div class="searchcontainer">
            <input type="text" name="searchInput" id="input" placeholder="Enter city name">
            <button id="search" onclick="searchByCity()">Search</button></input>
        </div>
    </div>

    <main>        
        <div class="weather">
            <h2 id="city">Delhi,IN</h2>
            <div class="temp-box">
                <img src="/weathericon.png" alt="" id="img">
                <p id="temperature">26 °C</p>
            </div>
            <span id="clouds">Broken Clouds</span>
        </div>
        <div class="divider1"></div>

        <div class="forecstH">
            <p class="cast-header">Upcoming forecast</p>
            <div class="templist">

                <div class="next">
                    <div>
                        <p class="time">8:30 PM</p>
                        <p>29 °C / 29 °C</p>
                    </div>
                    <p class="desc">Light Rain</p>
                </div>

                <div class="next">
                    <div>
                        <p class="time">8:30 PM</p>
                        <p>29 °C / 29 °C</p>
                    </div>
                    <p class="desc">Light Rain</p>
                </div>

                <div class="next">
                    <div>
                        <p class="time">8:30 PM</p>
                        <p>29 °C / 29 °C</p>
                    </div>
                    <p class="desc">Light Rain</p>
                </div>

                <div class="next">
                    <div>
                        <p class="time">8:30 PM</p>
                        <p>29 °C / 29 °C</p>
                    </div>
                    <p class="desc">Light Rain</p>
                </div>

                <div class="next">
                    <div>
                        <p class="time">8:30 PM</p>
                        <p>29 °C / 29 °C</p>
                    </div>
                    <p class="desc">Light Rain</p>
                </div>

            </div>
        </div>
    </main>

    <div class="forecstD">
        <div class="divider2"></div>
        <p class="cast-header"> Next 4 days forecast</p>
        <div class="weekF">

            <div class="dayF">
                <p class="date">Sun Jul 03 2022</p>
                <p>31 °C / 31 °C</p>
                <p class="desc">Overcast Clouds</p>
            </div>

            <div class="dayF">
                <p class="date">Sun Jul 03 2022</p>
                <p>31 °C / 31 °C</p>
                <p class="desc">Overcast Clouds</p>
            </div>

            <div class="dayF">
                <p class="date">Sun Jul 03 2022</p>
                <p>31 °C / 31 °C</p>
                <p class="desc">Overcast Clouds</p>
            </div>

            <div class="dayF">
                <p class="date">Sun Jul 03 2022</p>
                <p>31 °C / 31 °C</p>
                <p class="desc">Overcast Clouds</p>
            </div>
        </div>
    </div>
  
   



</body>

</html>
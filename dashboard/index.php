<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>DogeBot Dashboard</title>
    <link rel="icon" type="text/png" href="assets/dogebot_favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Pangolin&family=Rubik&display=swap');

        body {
            text-align: center;
            font-family: 'Rubik', sans-serif;
        }

        nav, footer, a, button {
            font-size: 20px;
            font-style: bold;
            font-family: 'Pangolin', cursive;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
    </style>

    <style type="text/css" media="screen and (min-width: 768px)">.bd-placeholder-img-lg {font-size: 3.5rem;} #mobile {display: none;}</style>

</head>
<body>
    <script>
        DarkReader.enable({
            brightness: 100,
            contrast: 90,
            sepia: 10
        });
        DarkReader.disable();

        DarkReader.auto({
            brightness: 100,
            contrast: 90,
            sepia: 10
        });

        DarkReader.auto(false);

        function setLight() {
            DarkReader.disable();
        }

        function setDark() {
            DarkReader.enable();
        }
    </script>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img src="assets/dogebot_navbar_icon.png" width="65px" height="50px"></img>
        <a class="navbar-brand">DogeBot</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
                </li>
                <button class="btn btn-light" onclick="setLight()">Light Theme</button>&nbsp;<button class="btn btn-dark" onclick="setDark()">Dark Theme</button>
            </ul>
            <button type="button" class="btn btn-success">Invitar</button>&nbsp;<button type="button" class="btn btn-primary">Donar</button>
        </div>
    </nav>

    <div class="container-fluid" style="width: 100%;"></div>
    <div class="row">
        <h3 style="font-family:'Pangolin',cursive;text-align:center;padding:8px;width: 100%;" id="mobile">Lo sentimos, por ahora el dashboard sólo es compatible con equipos con pantallas grandes, como PC's.</h3>
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse" style="font-size: 16px;">
            <div class="sidebar-sticky pt-3">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#"><i class="material-icons">home</i>Dashboard <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#"><span data-feather="file"></span>Orders</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><span data-feather="shopping-cart"></span>Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><span data-feather="users"></span>Customers</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#"><span data-feather="bar-chart-2"></span>Reports</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#"><span data-feather="layers"></span>Integrations</a>
          </li>
      </ul>

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted"><span>Saved reports</span><a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report"><span data-feather="plus-circle"></span></a></h6>
      <ul class="nav flex-column mb-2">
        <li class="nav-item">
          <a class="nav-link" href="#"><span data-feather="file-text"></span>Current month</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#"><span data-feather="file-text"></span>Last quarter</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#"><span data-feather="file-text"></span>Social engagement</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#"><span data-feather="file-text"></span>Year-end sale</a>
      </li>
  </ul>
</nav>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Dashboard</h1>
      <p></p>
  </div>
  <img src="../assets/dogebot_favicon.png" width="70px" height="70px">
  <style type="text/css">
      @keyframes textanim {
        0% {color: red;}
        12.5% {color: yellow;}
        25% {color: green;}
        37.5% {color: cyan;}
        50% {color: blue;}
        62.5% {color: purple;}
        75% {color: fuchsia;}
        87.5% {color: orange;}
        100% {color: lightblue;}
      }

      #guilds {
        animation-name: textanim;
        animation-duration: 12s;
        animation-iteration-count: infinite;
      }
  </style>
  <h2 class="h3">Your <span id="guilds">Guilds</span></h2>
</script>
</div>
</div>
<footer style="text-align: center;">
    <p>2020 DogeBot Community by KJCHints & Hinters</p>
    <p>Este sitio fue desarrollado por <a href="https://github.com/fabiopolancoe/">Fabio Polanco</a> utilizando <span class="badge badge-primary">HTML</span>,  <span class="badge badge-success">CSS</span>, <span class="badge badge-danger">JavaScript</span>, <span class="badge badge-info">Vue.JS</span> y <span class="badge badge-warning">PHP</span>.</p>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/darkreader/darkreader.min.js"></script>
</body>
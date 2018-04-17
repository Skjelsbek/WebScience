<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lavprisekspressen</title>
    <!-- jquery-ui css -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- Some fonts to make things look better -->
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
    <!-- My stylesheet -->
    <link href="./css/style.css" rel="stylesheet">
    <!-- Using jquery to make javascript cleaner -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- need jquery-ui for datepicker -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- My js -->
    <script src="../scripts/script.js"></script>
  </head>

  <body>
    <header>
      <div class="container">
        <div id="branding">
          <!-- The branding is also a link to the home page -->
          <a href="?id=1">
            <h1>
              <span id="highlight">Lavpris</span>ekspressen
            </h1>
          </a>
        </div>

        <!-- Navigation bar -->
        <nav id="topics">
          <ul>
            <!-- Login/profile section -->
            <li class="dropdown">
              <?php
                if (isset($_SESSION['uname']))
                {
                  echo
                  '<li class="dropdown">
                    <a class="dropbtn">' . $_SESSION['uname'] . '</a>
                    <div class="drop-content">
                      <a href="?page=tickets">Mine billetter</a>
                      <form id="logout_form" action="../php/logout.php" method="post">
                        <input id="logout_button" type="submit" value="Logg ut">
                      </form>
                    </div>
                  </li>';
                }
                else
                {
                  echo
                  '<button id="loginbtn">Logg Inn</button>
                  <div id="login_drop">
                    <form id="login_form" action="../php/login.php" method="post">
                      <input type="email" placeholder="E-post addresse" name="email">
                      <input type="password" placeholder="Passord" name="passwd">
                      <input id="btn1" type="submit" value="Logg Inn">
                      <p id="create_account">Opprett Konto</p>
                      <p>Glemt Passord</p>
                    </form>

                    <form id="registration_form" action="../php/register.php" method="post">
                      <input type="text" placeholder="Brukernavn" name="uname">
                      <input type="email" placeholder="E-post addresse" name="email">
                      <input type="password" placeholder="Passord" name="passwd">
                      <input id="btn2" type="submit" value="Registrer">
                      <p id="log_in">Har du allerede bruker? Logg Inn</p>
                    </form>
                  </div>';
                }
              ?>
            </li>
            <li><a href="?id=2">Rutetider</a></li>

            <!-- Info dropdown menu -->
            <li class="dropdown">
              <a class="dropbtn">Info</a>
              <div class="drop-content">
                <a href="?id=3">Reisevilkår</a>
                <a href="?id=4">Bagasje</a>
                <a href="?id=5">Plassgaranti</a>
                <a href="?id=6">Om oss</a>
                <a href="?id=7">Våre busser</a>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </header>

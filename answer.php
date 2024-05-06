<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Welcome to the Museum, in PHP" />
  <meta name="keywords" content="mths, ics2o" />
  <meta name="author" content="Nathan De Silva" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.pink-green.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Welcome to the Museum in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Welcome to the Museum! in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/museum.png" alt="museum" width="250" />
      </div>
      <div class="page-content-php">
        <div name="day-selected">
          <div class="mdl-layout__header-row">
            <br />
            <div class="mdl-layout__content">
            </div>
            <div class="mdl-layout__left">
              <?php
              // Define an array to map day values to their names
              $dayNames = [
                "monday" => "Monday",
                "tuesday" => "Tuesday",
                "wednesday" => "Wednesday",
                "thursday" => "Thursday",
                "friday" => "Friday",
                "saturday" => "Saturday",
                "sunday" => "Sunday"
              ];
              $selectedDay = $_POST["day-selected"];
              $selectedDayName = $dayNames[$selectedDay];
              $age = $_POST["age-entered"];

              // Check if Tuesday or Thursday is selected
              $dayTuesdayChecked = isset($_POST["day-of-week"]) && $_POST["day-of-week"] === "tuesday";
              $dayThursdayChecked = isset($_POST["day-of-week"]) && $_POST["day-of-week"] === "thursday";

              // process
              if (($dayTuesdayChecked == true || $dayThursdayChecked == true) || ($age > 12 && $age < 21)) {
                // output
                echo "The day is " . $selectedDayName . " and your age is " . $age . " so you get the student discount!";
              } else {
                echo "The day is " . $selectedDayName . " and your age is " . $age . " so you must pay the regular price.";
              }

              ?>
            </div>
          </div>
        </div>
    </main>
  </div>
</body>

</html>

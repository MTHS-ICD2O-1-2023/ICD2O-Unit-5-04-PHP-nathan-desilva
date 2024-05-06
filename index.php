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
  <title>Welcome to the Museum, in PHP</title>
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
      <h3>Please enter the following:
      </h3>
      <br />
      <div class="page-content-php">
        <form action="answer.php" method="POST">
          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-monday">
            <input type="radio" id="option-monday" class="mdl-radio__button" name="day-of-week" value="1" checked>
            <span class="mdl-radio__label">Monday</span>
          </label>
          <br />
          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-tuesday">
            <input type="radio" id="option-tuesday" class="mdl-radio__button" name="day-of-week" value="2">
            <span class="mdl-radio__label">Tuesday</span>
          </label>
          <br />
          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-wednesday">
            <input type="radio" id="option-wednesday" class="mdl-radio__button" name="day-of-week" value="3">
            <span class="mdl-radio__label">Wednesday</span>
          </label>
          <br />
          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-thursday">
            <input type="radio" id="option-thursday" class="mdl-radio__button" name="day-of-week" value="4">
            <span class="mdl-radio__label">Thursday</span>
          </label>
          <br />
          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-friday">
            <input type="radio" id="option-friday" class="mdl-radio__button" name="day-of-week" value="5">
            <span class="mdl-radio__label">Friday</span>
          </label>
          <br />
          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-saturday">
            <input type="radio" id="option-saturday" class="mdl-radio__button" name="day-of-week" value="6">
            <span class="mdl-radio__label">Saturday</span>
          </label>
          <br />
          <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-sunday">
            <input type="radio" id="option-sunday" class="mdl-radio__button" name="day-of-week" value="7">
            <span class="mdl-radio__label">Sunday</span>
          </label>
          <br />
          <form action="#">
            <div class="mdl-textfield mdl-js-textfield">
              <!--This is where they type in the answer-->
              <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="age-entered" />
              <label class="mdl-textfield__label" for="age-entered">Enter your age ...</label>
              <span class="mdl-textfield__error">Input is not a number!</span>
            </div>
          </form>
          <br />
          <!-- Accent-colored raised button with ripple -->
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
            Guess
          </button>
        </form>
      </div>
    </main>
  </div>
</body>

</html>

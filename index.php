<!DOCTYPE html>
<!-- ICS2O-Unit5-02PHP-HTML-MDL -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Positive or negative number, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Lynn Lukose" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="./apple-touch-icon.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./favicon-32x32.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>"Postive or negative #, in PHP"</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Positive or Negative #, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/positive_negative.jpg" alt="postive and negative" />
      </div>
      <div class="page-content">Select what kind of number you would like.</div>
      <br />
      <form action="answer.php" method="GET">
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-positive">
          <input type="radio" id="option-positive" name="kind-of-number" class="mdl-radio__button" value="1" checked>
          <span class="mdl-radio__label">Positive</span>
        </label>
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-negative">
          <input type="radio" id="option-negative" name="kind-of-number" class="mdl-radio__button" value="2">
          <span class="mdl-radio__label">Negative</span>
        </label>
        <br />
        <br />
        <!-- Accent-colored raised button with ripple -->
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
          type="submit">
          Generate
        </button>
      </form>
      <br />
      <div class="page-content">
        <div id="result"></div>
      </div>
    </main>
  </div>
</body>

</html>
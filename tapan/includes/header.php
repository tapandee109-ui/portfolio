<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Tapan Rajyaguru'; ?></title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- Preloader -->
    <div id="preloader">
      <div class="loader-content">
        <div class="loader-circle"></div>
        <div class="loader-text"><?php echo isset($preloaderText) ? $preloaderText : 'LOADING...'; ?></div>
      </div>
    </div>

    <div id="custom-cursor"></div>
    <div id="custom-cursor-trail"></div>
    <div id="custom-cursor-follower"></div>
    <div class="noise"></div>
    <div class="bg-glow"></div>

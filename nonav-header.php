<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>" />
    <meta name="author" content="Luke Burford" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="https://phpstack-960037-3350765.cloudwaysapps.com/style.css" />
    <link rel="stylesheet" href="https://phpstack-960037-3350765.cloudwaysapps.com/proposals/proposal.css" />
	
    <link rel="apple-touch-icon" sizes="57x57" href="https://phpstack-960037-3350765.cloudwaysapps.com/favicon/apple-icon-57x57.png">
	  <link rel="apple-touch-icon" sizes="60x60" href="https://phpstack-960037-3350765.cloudwaysapps.com/favicon/apple-icon-60x60.png">
	  <link rel="apple-touch-icon" sizes="72x72" href="https://phpstack-960037-3350765.cloudwaysapps.com/favicon/apple-icon-72x72.png">
	  <link rel="apple-touch-icon" sizes="76x76" href="https://phpstack-960037-3350765.cloudwaysapps.com/favicon/apple-icon-76x76.png">
	  <link rel="apple-touch-icon" sizes="114x114" href="https://phpstack-960037-3350765.cloudwaysapps.com/favicon/apple-icon-114x114.png">
	  <link rel="apple-touch-icon" sizes="120x120" href="https://phpstack-960037-3350765.cloudwaysapps.com/favicon/apple-icon-120x120.png">
	  <link rel="apple-touch-icon" sizes="144x144" href="https://phpstack-960037-3350765.cloudwaysapps.com/favicon/apple-icon-144x144.png">
	  <link rel="apple-touch-icon" sizes="152x152" href="https://phpstack-960037-3350765.cloudwaysapps.com/favicon/apple-icon-152x152.png">
	  <link rel="apple-touch-icon" sizes="180x180" href="https://phpstack-960037-3350765.cloudwaysapps.com/favicon/apple-icon-180x180.png">
	  <link rel="icon" type="image/png" sizes="192x192" href="https://phpstack-960037-3350765.cloudwaysapps.com/favicon/android-icon-192x192.png">
	  <link rel="icon" type="image/png" sizes="32x32" href="https://phpstack-960037-3350765.cloudwaysapps.com/favicon/favicon-32x32.png">
	  <link rel="icon" type="image/png" sizes="96x96" href="https://phpstack-960037-3350765.cloudwaysapps.com/favicon/favicon-96x96.png">
	  <link rel="icon" type="image/png" sizes="16x16" href="https://phpstack-960037-3350765.cloudwaysapps.com/favicon/favicon-16x16.png">
	  <link rel="manifest" href="https://phpstack-960037-3350765.cloudwaysapps.com/manifest.json">
	  <meta name="msapplication-TileColor" content="#ffffff">
	  <meta name="msapplication-TileImage" content="https://phpstack-960037-3350765.cloudwaysapps.com/favicon/ms-icon-144x144.png">
	  <meta name="theme-color" content="#ffffff">
    
    
    
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <script src="https://phpstack-960037-3350765.cloudwaysapps.com/js/transitions.js"></script>
    <script>
	    if ("serviceWorker" in navigator) {
		  if (navigator.serviceWorker.controller) {
		    console.log("[PWA Builder] active service worker found, no need to register");
		  } else {
		    // Register the service worker
		    navigator.serviceWorker
		      .register("https://phpstack-960037-3350765.cloudwaysapps.com/pwabuilder-sw.js", {
		        scope: "./"
		      })
		      .then(function (reg) {
		        console.log("[PWA Builder] Service worker has been registered for scope: " + reg.scope);
		      });
		  }
		}
	</script>
    
  </head>
  <body>
    <header>
      <div class="container">
        <div class="row">
          <div class="four columns">
            <a href="https://phpstack-960037-3350765.cloudwaysapps.com"><img src="https://phpstack-960037-3350765.cloudwaysapps.com/images/lunamedia-logo.svg" alt="Lunamedia" /> </a>
          </div>

          <nav class="eight columns"><!--

            <a href="https://phpstack-960037-3350765.cloudwaysapps.com">Home</a>
            <a href="https://phpstack-960037-3350765.cloudwaysapps.com/about.php">About</a>
            <a href="https://phpstack-960037-3350765.cloudwaysapps.com/contact.php">Contact</a>
-->
          </nav>
        </div>
      </div>
    </header>
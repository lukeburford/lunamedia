<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>nimbl UX/UI Design &amp; WordPress development</title>
    <meta name="description" content="Project overview of user interface design, user experience work and front-end/WordPress development for nimbl." />
    <meta name="author" content="Luke Burford" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="style.css" />

    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
    
    
    
    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"
    ></script>
    <script src="js/transitions.js"></script>
    <script>
	    if ("serviceWorker" in navigator) {
		  if (navigator.serviceWorker.controller) {
		    console.log("[PWA Builder] active service worker found, no need to register");
		  } else {
		    // Register the service worker
		    navigator.serviceWorker
		      .register("pwabuilder-sw.js", {
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
            <a href="index.php"><img src="images/lunamedia-logo.svg" alt="Lunamedia" /> </a>
          </div>

          <nav class="eight columns">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
          </nav>
        </div>
      </div>
    </header>

    <div id="main-content">
      <section class="title-group">
        <div class="container">
          <div class="row">
            <div class="two-thirds column">
              <h1 class="project-title animated fadeIn">
                nimbl
              </h1>

              <p class="meta-detail animated delay-06s fadeIn">
                UX / UI / Front-end &amp; WordPress Development
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="project-section blargnax-background animated delay-07s fadeIn">
        <div class="container">
          <div class="row flex-row flex-centered">
            <div class="ten columns">
              <div class="single-project-image">
                <img class="shadow-image" src="images/nimbl/nimbl-fullscreen.png" alt="nimbl homepage design" />
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="project-section project-intro">
        <div class="row flex-row flex-centered">
          <div class="project-text one-half column">
            <h2>About the project</h2>

            <p>
              nimbl is a clever financial service for young people that helps them manage their money via a pre-paid card and smartphone app. Parents can monitor spending and control top-ups, helping their child become financially confident and responsible with money.</a>.
            </p>

            <p>
              An updated website design was needed to convey the value proposition of nimbl simply and effectively to potential new customers. Digital financial products and services is an innovative and rapidly evolving field, and nimbl needed a fresh website UI that complemented the clear, intuitive user experience of the smartphone app to stay ahead of their competitors in the market.
            </p>
          </div>
		  
          <div class="project-image one-half column">
	          <img src="images/nimbl/nimbl-product-image.jpg" alt="nimbl card and packaging" />
          </div>
          
        </div>
      </section>
      
      <section class="project-section">
        <div class="container">
          <div class="row flex-row flex-centered">
            <div class="project-text two-thirds column">
              <h2>A modular approach</h2>

              <p>
                From early discussions with the product team we knew that a flexible approach to screen design would be needed to cater for both core product explainer pages where content was relatively fixed, and to support upcoming marketing campaigns that may call for different page modules, layouts and content.
              </p>

              <p>
                Rough wireframes were put together to identify shared modules such as call to action panels, video and text descriptions, app feature explainers and product feature lists. Once we had a good handle on the various components needed, final UI design modules were produced incorporating the established nimbl branding, and mocked up into various layout combinations to demonstrate how fully flexible screens could be composed within the WordPress content management system.
              </p>
            </div>
          </div>
        </div>
      </section>
      
      <section class="project-section blargnax-background">
        <div class="container">
          <div class="row flex-row flex-centered">
            <div class="ten columns">
              <div class="single-project-image">
                <img class="shadow-image" src="images/nimbl/nimbl-fullscreen-interior.jpg" alt="nimbl interior page design" />
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="project-section">
        <div class="container">
          <div class="row flex-row flex-centered">
            <div class="project-text two-thirds column">
              <h2>Showing is sometimes better than telling</h2>

              <p>
                In order to show how simple and intuitive the smartphone app is for young people to use, an animated mock up was created of the key interaction flows within the app, and converted to a video that would be shown on the homepage to help potential customers instantly understand the potential benefits of the platform.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="project-section project-section-grid animated delay-07s fadeIn">
        <div class="twin-grid">
          <div class="twin-grid-item blargnax-background">
            <div class="grid-item-content-50">
              <img class="shadow-image" src="images/nimbl/nimbl-video-frame-1.png" alt="nimbl product explainer video frame" />
            </div>
          </div>

          <div class="twin-grid-item alternate-bg">
            <div class="grid-item-content-50">
              <img class="shadow-image" src="images/nimbl/nimbl-video-frame-2.png" alt="nimbl product explainer video frame" />
            </div>
          </div>
        </div>
      </section>

      <section class="project-section project-notes">
        <div class="container">
          <div class="row flex-row flex-centered">
            <div class="one-third column">
              <dl>
                <dt>UI Design + Front-end/WordPress Development</dt>
                <dd>Luke Burford</dd>
                <dt>Branding</dt>
                <dd>Nomensa</dd>
              </dl>
            </div>

            <div class="one-third column">
              <div class="view-project">
                <p>
                  <span>View Project</span> <a href="https://nimbl.com/" target="_blank" rel="noopener">https://nimbl.com</a>
                </p>
              </div>
            </div>
            <div class="one-third column">
              <div class="next-project">
                <p>
                  <span>Next Project</span>
                  <a href="ivygate.php">Ivy Gate <span>&#8594;</span></a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <footer>
		<div class="container">
			<div class="row">
				<div class="twelve columns">
					<p>&copy; 2019 All rights reserved.</p>
				</div>
			</div>
		</div>
	</footer>
  </body>
</html>

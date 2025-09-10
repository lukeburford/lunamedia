<?php 
	$page_title = "Jewish Museum London UX/UI Design & Development";
	$page_description = "Project overview of user interface design, user experience work and front-end/WordPress development for Jewish Museum London.";
	include('header.php'); 
?>

    <div id="main-content">
      <section class="title-group">
        <div class="container">
          <div class="row">
            <div class="two-thirds column">
              <h1 class="project-title animated fadeIn">
                Jewish Museum London
              </h1>

              <p class="meta-detail animated delay-06s fadeIn">
                UX / UI / Front-end &amp; WordPress Development
              </p>
            </div>
          </div>
        </div>
      </section>

      <section
        class="project-section blargnax-background animated delay-07s fadeIn"
      >
        <div class="container">
          <div class="row flex-row flex-centered">
            <div class="ten columns">
              <div class="single-project-image">
                <img
                  class="shadow-image"
                  src="images/jewishmuseum/jewishmuseum-fullscreen-2.jpg"
                  alt="Jewish Museum London homepage design"
                />
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
              The Jewish Museum London, tells the story of the history and
              heritage of Jews in Britain through universal themes of migration,
              family, faith and culture.
            </p>

            <p>
              The website was refreshed in stages throughout 2018 to better
              present the diverse range of events, exhibitions and activities on
              offer, and to reinvigorate the teaching resources available on the
              site via an extensive education portal.
            </p>
          </div>

          <div class="project-image one-half column">
            <img
              src="images/jewishmuseum/jewish-museum-exterior.jpg"
              alt="Jewish Museum exterior"
            />
          </div>
        </div>
      </section>

      <section class="project-section">
        <div class="container">
          <div class="row flex-row flex-centered">
            <div class="project-text two-thirds column">
              <h2>Making sense of complex search patterns</h2>

              <p>
                With a huge amount of material in the education portal, we
                needed to present a usable interface for filtering resources
                across multiple categories. Additionally, we wanted to make it
                easy to visually differentiate between the different types of
                resources that might be returned in search results.
              </p>

              <p>
                A card based UI was designed to show resources in index results,
                with an icon and colour set devised to represent the different
                resource types available.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section
        class="project-section blargnax-background animated delay-07s fadeIn"
      >
        <div class="container">
          <div class="row flex-row flex-centered">
            <div class="ten columns">
              <div class="single-project-image">
                <img
                  class="shadow-image"
                  src="images/jewishmuseum/jewishmuseum-resources.jpg"
                  alt="Jewish Museum London education portal design"
                />
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="project-section">
        <div class="container">
          <div class="row flex-row flex-centered">
            <div class="project-text two-thirds column">
              <h2>Bringing complex grid design to life with CSS Grid</h2>

              <p>
                With a constantly updating program of events and activities
                there's always plenty of valuable material to surface on the
                homepage of the Jewish Museum, all of which needs to be balanced
                alongside permanently required key signposting elements to
                opening times and visiting information.
              </p>

              <p>
                Our solution involved creating a dynamic grid for the homepage
                that would adjust to both different types of content that could
                be populated via WordPress, and to different device sizes and
                orientations. Tricky enough to get right within UI design
                software, such complex designs have been traditionally even
                harder to realise in code, until the recent advent of CSS Grid
                layouts, which made the homepage not only possible but a highly
                distinctive part of the overall design that really sets the
                museum apart.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="project-section project-section-grid">
        <div class="twin-grid">
          <div class="twin-grid-item blargnax-background">
            <div class="grid-item-content-90">
              <img
                class="shadow-image"
                src="images/jewishmuseum/jewishmuseum-homepage-nogrid.jpg"
                alt="Jewish Museum homepage without grid displayed"
              />
            </div>
          </div>

          <div class="twin-grid-item alternate-bg">
            <div class="grid-item-content-90">
              <img
                class="shadow-image"
                src="images/jewishmuseum/jewishmuseum-homepage-grid.jpg"
                alt="Jewish Museum homepage with grid displayed"
              />
            </div>
          </div>
        </div>
      </section>

      <section class="project-section project-notes">
        <div class="container">
          <div class="row flex-row flex-centered">
            <div class="one-half column">
              <dl>
                <dt>UI Design + Front-end/WordPress Development</dt>
                <dd>Luke Burford</dd>
                <dt>Project Management + Strategy</dt>
                <dd>Thirty8 Digital</dd>
                <dt>Branding</dt>
                <dd>Rose</dd>
              </dl>
            </div>

            <div class="one-half column">
              <div class="view-project">
                <p>
                  <span>View Project</span>
                  <a
                    href="https://jewishmuseum.org.uk/"
                    target="_blank"
                    rel="noopener"
                    >https://jewishmuseum.org.uk</a
                  >
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
					<p>&copy; <?php echo date('Y'); ?> All rights reserved.</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- arrest that jazz pancake -->
  </body>
</html>

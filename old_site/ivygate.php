<?php 
	$page_title = "Ivy Gate UX/UI Design & Development";
	$page_description = "Project overview of user interface design, user experience work and front-end/WordPress development for Ivy Gate.";
	include('header.php'); 
?>

    <div id="main-content">
      <section class="title-group">
        <div class="container">
          <div class="row">
            <div class="two-thirds column">
              <h1 class="project-title animated fadeIn">Ivy Gate</h1>

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
                  src="images/ivygate/ivygate-fullscreen.png"
                  alt="Ivy Gate homepage design"
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
              Ivy Gate provides a personal, bespoke home sales and letting
              service that depends on a high-end, professional web presence -
              the company was a pioneer in the online-only estate agency model
              that has become hugely popular in the property industry.
            </p>

            <p>
              The existing sales and marketing website needed technical updates
              after being live for a number of years, so we took the opportunity
              to look at how the existing UI was serving user needs and consider
              where we could redesign aspects to improve user experience and
              optimise for a higher conversion rate.
            </p>
          </div>

          <div class="project-image one-half column">
            <img
              src="images/ivygate/ivygate-interior.jpg"
              alt="Ivy Gate property website example"
            />
          </div>
        </div>
      </section>

      <section class="project-section">
        <div class="container">
          <div class="row flex-row flex-centered">
            <div class="project-text two-thirds column">
              <h2>Identifying user experience issues</h2>

              <p>
                In order to understand where users may be having difficulties
                carrying out primary tasks, we looked at how key user journeys
                currently worked on the site, and where potential customers were
                dropping out of the sales funnel. Our main areas of concern were
                around how easy it was to start a property search, how simple it
                was to drill down to a particular type of property, and if we
                were enabling users to take a clear course of action to book
                viewings once a desirable property was found. We also wanted to
                improve booking rates for property valuations.
              </p>

              <p>
                We used
                <a href="https://www.hotjar.com/" target="_blank" rel="noopener"
                  >Hotjar</a
                >
                to perform some basic user experience research, generating
                heatmaps and screen recordings to uncover which areas of the
                current interface design were confusing to users so we could
                consider how to bring increased clarity to the redesign. We also
                discovered we could remove a number of steps from the existing
                valuation booking flow, reducing the number of actions a user
                had to perform before a successful booking could be made.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="project-section project-section-grid">
        <div class="twin-grid">
          <div class="twin-grid-item blargnax-background">
            <div class="grid-item-content-80">
              <img
                class="shadow-image"
                src="images/ivygate/ivygate-hotjar.png"
                alt="User behaviour analytics graph for conversion funnel"
              />
            </div>
          </div>

          <div class="twin-grid-item alternate-bg">
            <div class="grid-item-content-80">
              <img
                class="shadow-image"
                src="images/ivygate/ivygate-recording.png"
                alt="User behaviour analytics screen recording"
              />
            </div>
          </div>
        </div>
      </section>

      <section class="project-section">
        <div class="container">
          <div class="row flex-row flex-centered">
            <div class="project-text two-thirds column">
              <h2>Translating UX findings into more effective UI design</h2>

              <p>
                With the details uncovered by the user behaviour research, we
                were able to confidently approach the new UI design with some
                informed decisions, such as making key call-to-action buttons
                clearer and more prominent on each screen, making a filtered
                property search more immediately available on the homepage,
                improving the information density on property listing pages, and
                removing some superfluous pages and steps from the interface
                entirely.
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
                <img
                  src="images/ivygate/ivygate-homepage-before-after.png"
                  alt="Ivy Gate homepage UI design - before and after comparison"
                />
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="project-section project-section-grid">
        <div class="twin-grid">
          <div class="twin-grid-item alternate-bg">
            <div class="grid-item-content-90">
              <img
                class="shadow-image"
                src="images/ivygate/ivygate-archive-property.jpg"
                alt="Property archive view"
              />
            </div>
          </div>

          <div class="twin-grid-item alternate-bg">
            <div class="grid-item-content-90">
              <img
                class="shadow-image"
                src="images/ivygate/ivygate-single-property.jpg"
                alt="Single property view"
              />
            </div>
          </div>
        </div>
      </section>

      <section class="project-section project-notes">
        <div class="container">
          <div class="row flex-row flex-centered">
            <div class="one-third column">
              <dl>
                <dt>UX / UI Design + Front-end/WordPress Development</dt>
                <dd>Luke Burford</dd>
                <dt>Plugin/Additional Development</dt>
                <dd>Biostall</dd>
              </dl>
            </div>

            <div class="one-third column">
              <div class="view-project">
                <p>
                  <span>View Project</span>
                  <a href="https://ivygate.co.uk/" target="_blank" rel="noopener"
                    >https://ivygate.co.uk</a
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

<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once 'includes/_head.php'; ?></head>
<body data-pageref="lecture">

	<div id="layout" class="pure-g-r">
		<a href="#menu" id="menuLink" class="pure-menu-link">
			<img src="images/navicon-png2x.png" width="20" alt="Menu toggle">
		</a>

		<!-- Side Menu -->
		<div class="pure-u" id="menu">
			<div class="pure-menu pure-menu-open">
				<?php include_once 'includes/_sidemenu.php'; ?>
			</div>
		</div>
		<!-- / Side Menu -->

		<!-- Main Content Area -->
		<div class="pure-u" id="main">

			<div class="header pure-u-1">
				<h1 class="pure-u-1">Lecture Notes</h1>
				<h2 class="pure-u">Additional Helpful Information</h2>
			</div>
			<!-- / .header -->

			<div class="content">
				<h2 class="content-subhead">The PowerPoint Files</h2>
				<p>Download a copy of the PowerPoint files used during class lectures:</p>
				<p><a href="wbdv240_ppt.zip" download="Lecture Powerpoint Files" class="pure-button pure-button-warning">PPT Files</a></p>
				<hr class="soften">
				<h2 class="content-subhead">What is HTML?</h2>
				<p>HTML is actually a really easy language to learn. with just a little bit of tutelage and a few tags, you could put together basic web pages within a hour! At it's core HTML is no more than telling the browser what the content is, ie: this is a paragraph, this is a headline, this is an image.</p>
				<p>HTML stands for HyperText Markup Language. But it was sloppy, there were no web standards, and every browser had quirks and displayed the information in different ways. So the W3C applied the rules for XML (or Extensible Markup Language, a markup language where everything has to be marked up correctly, which results in "well-formed" documents) to HTML, and XHTML was born.</p>
				<h2 class="content-subhead">What is CSS?</h2>
				<p>
					CSS stands for Cascading Style Sheets and defines how XHTML elements are displayed. In our CSS documents we can tell the browser how to display our headlines and paragraph text.
				</p>
				<p>
					In the old days you would set color, font, size and weight for every block of text on every page in the HTML. This ends up being a ton of redundant data for the browser to download. When a CSS document is downloaded, it is cached so you browser remembers you display settings and apples them to every page that references that CSS document.
				</p>
				<p>
					This is the process of separating content from presentation. This is part of a larger discussion called Accessibility. It allows various browsers and interpreters to access the data equally. We will be discussing this in further detail later on in the course.
				</p>
				<hr class="soften">
				<h2 class="content-subhead">Web Technology</h2>
				<p>
					Web design requires the knowledge of the technologies behind the surface design. The more you dig into this field you will find many specialized areas that go into building a website. From project planning, to information architecture, to visual design to client-side and server-side programming.
				</p>
				<p>
					Every visual choice you make in the design will have a technological consequence. There are two different environments that are called upon in every web page interaction.: The <b>Client-Side</b> and The <b>Server-Side</b>.
				</p>

				<div class="pure-g-r">
					<div class="pure-u-1-2">
						<div class="l-box">
							<h3>
								Client Side
							</h3>
							<p>
								Client-Side Technologies have to do with the users computer: The system hardware, the browser, the plugins.
							</p>
							<dl>
								<dt> Browser </dt>
								<dd> Chrome, Firefox, Safari, IE, Opera, Netscape (each with it's own quirks). These request, retrieve and display pages from the server. </dd>
								<dt> HTML </dt>
								<dd> Hypertext Markup Language. Tag based language best used to define the structure of the content </dd>
								<dt> CSS </dt>
								<dd> Cascading Style Sheets. Used to define the visual style of the document </dd>
								<dt> JavaScript </dt>
								<dd> HTML is static, javascript makes pages dynamic. Object Oriented Programming Language </dd>
								<dt> Adobe Flash </dt>
								<dd> Used to make animations, games, banner ads, even entire websites. Requires browser plugin</dd>
								<dt> Multimedia </dt>
								<dd> Audio &amp; Video Requires browser plugin </dd>
							</dl>						</div>
					</div>
					<div class="pure-u-1-2">
						<div class="l-box">
							<h3>
								Server Side
							</h3>
							<p>
								Server-Side Technologies are languages the require the web server to execute before serving the requested pages to the users browser. Servers can deliver two kinds of pages: Static or Dynamic Static Pages do not require any extra server side processing Dynamic Pages run server side scripts to create dynamic data to build pages on the fly then serves them to the client
							</p>
							<dl>
								<dt>XML</dt><dd>Extensible Markup Language</dd>
								<dt>AJAX</dt><dd>Asynchronous JavaScript and XML </dd>
								<dt>PHP</dt>
								<dt>Perl</dt>
							</dl>
						</div>
					</div>
				</div>

				<hr class="soften">

				<h2 class="content-subhead">Best Practices</h2>

				<div class="pure-g-r">
					<div class="pure-u-1-2">
						<div class="l-box">
							<h3>
								Programming
							</h3>
							<ul>
								<li>Never use a space in a file name</li>
								<li>Never use a special character in a file name</li>
								<li>HTML
								<ul>
									<li>user lower case for all elements, attributes, and values</li>
								</ul>
								</li>
								<li>CSS
								<ul>
									<li>use dashes for id and class values<br> <code>class="my-class-name"</code></li>
								</ul>
								</li>
								<li>Javascript
								<ul>
									<li>use camelCase for variables and function names</li>
								</ul>
								</li>
								<li>PHP
								<ul>
									<li>use underscore_naming for variables and function names</li>
								</ul>
								</li>
							</ul>
						</div>
					</div>
					<div class="pure-u-1-2">
						<div class="l-box">
							<h3>
								Directory Structure
							</h3>

							<ul class="unstyled">
								<li><i class="icon-folder-open"></i> wbdv240
									<ul class="unstyled">
										<li style="margin-left: 20px"><i class="icon-folder-open"></i> _graphics
											<ul style="margin-left: 40px" class="unstyled">
												<li><i class="icon-file"></i> header.psd</li>
												<li><i class="icon-file"></i> footer.psd</li>
												<li><i class="icon-file"></i> logo.ai</li>
											</ul>
										</li>
										<li style="margin-left: 20px"><i class="icon-folder-open"></i> _resources
											<ul style="margin-left: 40px" class="unstyled">
												<li><i class="icon-folder-close"></i> jquery_slideshow</li>
												<li><i class="icon-file"></i> tables_example.html</li>
											</ul>
										</li>
										<li style="margin-left: 20px"><i class="icon-folder-open"></i> public_html
											<ul style="margin-left: 40px" class="unstyled">
												<li><i class="icon-folder-open"></i> css
													<ul style="margin-left: 20px" class="unstyled">
														<li><i class="icon-file"></i> reset.css</li>
														<li><i class="icon-file"></i> styles.css</li>
													</ul>
												</li>
												<li><i class="icon-folder-open"></i> images</li>
												<li><i class="icon-folder-open"></i> js
													<ul style="margin-left: 20px" class="unstyled">
														<li><i class="icon-file"></i> jquery.js</li>
														<li><i class="icon-file"></i> jquery.cycle.js</li>
													</ul>
												</li>
												<li><i class="icon-file"></i> index.html</li>
												<li><i class="icon-file"></i> contact.html</li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>

						</div>
					</div>
				</div>
			</div>
			<!-- / .content -->

			<?php include 'includes/_footer.php'; ?>
		</div>
		<!-- / Main Content Area -->

	</div>
	<!-- / #layout -->

	<script src="js/core.min.js"></script>

</body>
</html>

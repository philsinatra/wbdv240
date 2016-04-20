<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once 'includes/_head.php'; ?>
</head>
<body data-pageref="agenda">

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
				<h1 class="pure-u-1">Agenda</h1>
				<h2 class="pure-u">The Schedule</h2>
				<figure class="util-is-hidden-mobile">
					<img src="images/schedule-info-graphic.jpg" alt="Course Scheduled Info Graphic">
				</figure>
			</div>
			<!-- / .header -->

			<div class="content">
				<h2 class="content-subhead"><a class="btn-week" data-toggle="week1">Week 1</a></h2>
				<section id="week1" class="agenda-week">
					<ul>
						<li>Introduction</li>
						<li>Course Overview
							<ul>
								<li>BlackBoard</li>
								<li>Syllabus</li>
								<li>Domain/Hosting</li>
								<li><a href="http://bitsandpieces.us/2010/12/22/bad-domain-names/" target="_blank">Bad Domain Names</a></li>
							</ul>
						</li>
						<li>Project Overview
							<ul>
	              <li>create content</li>
	              <li>wireframe</li>
	              <li>visual inventory</li>
	              <li>mockups</li>
	              <li>programming</li>
	              <li>debugging</li>
	              <li>delivery</li>
							</ul>
						</li>
						<li>Software
							<ul>
								<li>Text Editor</li>
								<li>FTP (File Transfer Protocal)</li>
								<li>Graphics</li>
								<li>Video/Audio Editing</li>
							</ul>
						</li>
					</ul>
				</section>

				<h2 class="content-subhead"><a class="btn-week" data-toggle="week2">Week 2</a></h2>
				<section id="week2" class="agenda-week">
					<ul>
						<li><input type="checkbox"> Homework Review / General Questions</li>
						<li><input type="checkbox"> Introduction Presentation</li>
						<li><input type="checkbox"> Structure Presentation</li>
						<li><input type="checkbox"> Project File Structure - Staying Organized</li>
						<li><input type="checkbox"> Meet the Editor - <a href="https://www.sublimetext.com/3" target="_blank">Sublime Text</a></li>
						<li><input type="checkbox"> Build "The Shell" File</li>
						<li><input type="checkbox"> Text Presentation</li>
						<li><input type="checkbox"> List Presentation</li>
						<li><input type="checkbox"> Review Sheets</li>
						<li><input type="checkbox"> Homework Review
							<ul>
								<li>Build First Pages</li>
								<li>Wireframes</li>
							</ul>
						</li>
					</ul>
					<!-- <ul>
						<li>Homework reading assignment review</li>
						<li>Domain Hosting</li>
						<li>Client Side / Server Side</li>
						<li>FTP Setup
							<ul>
								<li>FTP Access</li>
								<li>Upload / Download</li>
							</ul>
						</li>
						<li>Programming Introduction
							<ul>
								<li>New Document</li>
								<li>HTML Definition</li>
								<li>Structure</li>
								<li>tags</li>
								<li>attributes</li>
								<li>rules</li>
								<li>requirements</li>
								<li>doctype</li>
								<li>head</li>
								<li>title</li>
								<li>meta tags</li>
								<li>external documents</li>
								<li>body</li>
								<li>comments</li>
								<li>common tags</li>
							</ul>
						</li>
						<li>Wireframing A Site</li>
					</ul> -->
					<p>PPT Files Covered:</p>
					<ul>
						<li>00-introduction</li>
						<li><a href="quiz/Questions/01-structure-q.pdf" target="_blank">01-structure</a></li>
						<li><a href="quiz/Questions/02-text-q.pdf" target="_blank">02-text</a></li>
						<li><a href="quiz/Questions/03-lists-q.pdf" target="_blank">03-lists</a></li>
					</ul>
				</section>

				<h2 class="content-subhead"><a class="btn-week" data-toggle="week3">Week 3</a></h2>
				<section id="week3" class="agenda-week">
					<ul>
						<li><input type="checkbox"> Links Presentation</li>
						<li><input type="checkbox"> Foreground Images Presentation</li>
						<li><input type="checkbox"> Optimizing Images</li>
						<li><input type="checkbox"> Tables</li>
						<li><input type="checkbox"> Forms</li>
					</ul>
					<p>PPT Files Covered:</p>
					<ul>
						<li><a href="quiz/Questions/04-links-q.pdf" target="_blank">04-links</a></li>
						<li><a href="quiz/Questions/05-images-q.pdf" target="_blank">05-images</a></li>
						<li><a href="quiz/Questions/06-tables-q.pdf" target="_blank">06-tables</a></li>
						<li><a href="quiz/Questions/07-forms-q.pdf" target="_blank">07-forms</a></li>
					</ul>
				</section>

				<h2 class="content-subhead"><a class="btn-week" data-toggle="week4">Week 4</a></h2>
				<section id="week4" class="agenda-week">
					<ul>
						<li><input type="checkbox"> Block vs Inline</li>
						<li><input type="checkbox"> Divs vs Spans</li>
						<li><input type="checkbox"> Containers</li>
						<li><input type="checkbox"> HTML5 Containers</li>
						<li><input type="checkbox"> Containers Demo</li>
						<li><input type="checkbox"> CSS Introduction</li>
						<li><input type="checkbox"> Color Theory</li>
						<li><input type="checkbox"> Adobe Kuler</li>
					</ul>
					<p>PPT Files Covered:</p>
					<ul>
						<li><a href="quiz/Questions/08-extra-markup-q.pdf" target="_blank">08-extra-markup</a></li>
						<li><a href="quiz/Questions/10-introducing-css-q.pdf" target="_blank">10-introducing-css</a></li>
						<li><a href="quiz/Questions/11-color-q.pdf" target="_blank">11-color</a></li>
						<li><a href="quiz/Questions/17-html5-layout-q.pdf" target="_blank">17-html5-layout</a></li>
					</ul>
				</section>

				<h2 class="content-subhead"><a class="btn-week" data-toggle="week5">Week 5</a></h2>
				<section id="week5" class="agenda-week">
					<!-- <p><a href="weekly_exercises/w05/wbdv240-local-w05.zip" download="wbdv240-week5">Download</a> exercise files.</p> -->
					<ul>
						<li>Font
						<ul>
							<li>font-family</li>
							<li>font-size</li>
							<li>font-style</li>
							<li>font-weight</li>
							<li>:link/visited/hover/active</li>
							<li>first letter and line</li>
							<li>line-height</li>
							<li>letter and word spacing</li>
							<li>text-align</li>
							<li>text-decoration</li>
							<li>text-indent</li>
							<li>text-shadow</li>
							<li>text-transform</li>
							<li>vertical-align</li>
							<li>font-face </li>
							<li>images as text</li>
						</ul>
						</li>
						<li>Border
						<ul>
							<li>border-color</li>
							<li>border-image</li>
							<li>border-style</li>
							<li>border-width</li>
							<li>border-shorthand</li>
							<li>border-radius</li>
						</ul>
						</li>
						<li>Display
						<ul>
							<li>block</li>
							<li>inline</li>
							<li>inline-block</li>
							<li>none</li>
							<li>margin</li>
							<li>center content</li>
							<li>padding</li>
							<li>box model</li>
							<li>overflow</li>
						</ul>
						</li>
						<li>Demo
						<ul>
							<li>Build a basic 2 column fixed page</li>
						</ul>
						</li>
					</ul>
					<p>PPT Files Covered:</p>
					<ul>
						<li><a href="quiz/Questions/12-text-q.pdf" target="_blank">12-text</a></li>
						<li><a href="quiz/Questions/13-boxes-q.pdf" target="_blank">13-boxes</a></li>
					</ul>
				</section>

				<h2 class="content-subhead"><a class="btn-week" data-toggle="week6">Week 6</a></h2>
				<section id="week6" class="agenda-week">
					<h3 class="written">
						Midterm Review:
					</h3>
					<p>In class critique of full comps.	</p>
					<!-- <p><a href="weekly_exercises/w06/wbdv240-local-w06.zip" download="wbdv240-week6">Download</a> exercise files.</p> -->
				</section>

				<h2 class="content-subhead"><a class="btn-week" data-toggle="week7">Week 7</a></h2>
				<section id="week7" class="agenda-week">
					<ul>
						<li>CSS
						<ul>
							<li>Float</li>
							<li>List-style</li>
							<li>Position</li>
							<li>Z-index</li>
							<li>CSS import</li>
							<li>Fixed layout</li>
							<li>Liquid layout</li>
							<li>Responsive layout</li>
							<li>Background</li>
							<li>Background-position</li>
							<li>Repeat</li>
							<li>Gradient</li>
							<li>Rollovers</li>
							<li>Sprites</li>
							<li>Image sizes</li>
						</ul>
						</li>
						<li>Demo
							<ul>
								<li>Build a basic 2/3 column liquid page</li>
							</ul>
						</li>
					</ul>
					<p>PPT Files Covered:</p>
					<ul>
						<li><a href="quiz/Questions/15-layout-q.pdf" target="_blank">15-layout</a></li>
						<li><a href="quiz/Questions/16-images-q.pdf" target="_blank">16-images</a></li>
					</ul>
				</section>

				<h2 class="content-subhead"><a class="btn-week" data-toggle="week8">Week 8</a></h2>
				<section id="week8" class="agenda-week">
					<ul>
						<li>Validating and Debugging</li>
						<li>WC3 Validation Services <a href="http://validator.w3.org/" target="_blank">HTML</a> / <a href="http://www.css-validator.org/" target="_blank">CSS</a></li>
						<li><a href="https://developers.google.com/chrome-developer-tools/" target="_blank">Chrome Dev Tools</a>
							<ul>
								<li>Web Inspector</li>
								<li>Console</li>
								<li>Debugging</li>
								<li>Performance</li>
							</ul>
						</li>
					</ul>

					<p>Status Updates: Let's see our progress.</p>

					<h2 class="content-subhead">Lab Time</h2>
					<p>Time period will consist of demos and troubleshooting group and/or individual issues.</p>
				</section>

				<h2 class="content-subhead"><a class="btn-week" data-toggle="week9">Week 9</a></h2>
				<section id="week9" class="agenda-week">
					<p>Status Updates: Let's see our progress.</p>
					<!-- <ul>
						<li>FORM info to EMAIL via cgi/php/pl
							<ul>
								<li>Hosting providers may have different methods of emailing form information.</li>
								<li>If you can figure out how to successfully use your hosting provider form email system (with a form completion "thank you" page - full navigation menu) you will receive +5 extra points.</li>
								<li>Professor assistance is available upon request; however, it will negate the extra points.</li>
							</ul>
						</li>
						<li>Overview of setting up a functional form to email submit system with hosting provider i.e. "hostrocket.com".</li>
					</ul> -->

					<h2 class="content-subhead">Lab Time</h2>
					<p>Time period will consist of demos and troubleshooting group and/or individual issues.</p>
				</section>

				<h2 class="content-subhead"><a class="btn-week" data-toggle="week10">Week 10</a></h2>
				<section id="week10" class="agenda-week">
					<h2 class="content-subhead">Lab Time</h2>
					<p>Time period will consist of demos and troubleshooting group and/or individual issues.</p>

					<aside><p>Week 10 Assignments</p></aside>
					<h3>
						How to turn in homework
					</h3>
					<p><a href="https://learn.dcollege.net/" target="bblearn">BBLearn</a></p>
					<!-- <ol class="assignment">
						<li>
							<div class="assignment-title"><b>Final Project</b>: Due Friday June 13th before midnight!</div>
							<div class="assignment-info">
								<p>
									Using course syllabus guidelines and topics covered in class, complete your final project web site.
								</p>
								<p>
									Copy all of your final project web site files into one folder and zip it.
								</p>
								<p>
									Folder name for your final project folder should be in the following format: <b>wbdv240s###_jwt123_finalproject</b> [replace ### with your class section number, replace jwt23 with your Drexel email account prefix.]
								</p>
							</div>
						</li>
					</ol>
					<hr class="soften">
					<h3>
						How to turn in homework
					</h3>
					<p>
						Submit via your Drexel email account to your instructor email account, subject: "wbdv240finalprojects###jwt23" [replace ### with your class section number, replace jwt23 with your Drexel email account prefix]
					</p>
					<ul>
						<li>Valid URL direct link to your final project web "index.html" page.</li>
						<li>Valid URL direct link to download your final project zipped file.</li>
					</ul> -->

				</section>
			</div>
			<!-- / .content -->

			<?php include 'includes/_footer.php'; ?>
		</div>
		<!-- / Main Content Area -->

	</div>
	<!-- / #layout -->

	<script src="js/core.min.js"></script>

	<script>
	$(document).ready(function() {
		$('.agenda-week').addClass('hideme');
		$('.btn-week').click(function() {
			$('#' + $(this).attr('data-toggle')).toggleClass('hideme');
		});
	});
	</script>

</body>
</html>

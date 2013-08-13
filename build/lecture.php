<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once 'includes/_head.php'; ?></head>
<body data-pageref="lecture">

	<div id="layout" class="pure-g-r">
		<a href="#menu" id="menuLink" class="pure-menu-link">
			<img src="img/navicon-png2x.png" width="20" alt="Menu toggle">
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

				<h2 class="content-subhead">Software</h2>
				<p>HTML5 is not software that has to be installed but rather a new version of the language HTML. Web browsers must support this new version of HTML in order to correctly display web pages using HTML5 functions. It is upon the developers of browsers to update their software to use HTML5; users simply must allow these updates to be done on their computers, but do not have to install additional software.</p>

				<div class="pure-g-r">
					<div class="pure-u-1-2">
						<div class="l-box">
							<h3>
								Mac
							</h3>
							<ul>
								<li>Editors
								<ul>
									<li>TextEdit</li>
									<li><a href="http://sublimetext.com/2" target="_blank">Sublime Text 2</a></li>
									<li><a href="http://brackets.io/" target="_blank">Adobe Brackets</a></li>
									<li><a href="http://barebones.com/products/bbedit/index.html?utm_source=thedeck&amp;utm_medium=banner&amp;utm_campaign=bbedit" target="_blank">BBEdit</a></li>
									<li><a href="http://panic.com/coda/" target="_blank">Coda</a></li>
									<li><a href="http://barebones.com/products/TextWrangler/" target="_blank">TextWrangler</a></li>
									<li><a href="http://adobe.com/uk/products/dreamweaver.html" target="_blank">Adobe Dreamweaver</a></li>
								</ul>
								</li>
								<li>FTP
								<ul>
									<li><a href="http://fetchsoftworks.com" target="_blank">Fetch</a></li>
									<li><a href="http://panic.com/transmit/" target="_blank">Transmit</a></li>
									<li><a href="http://adobe.com/uk/products/dreamweaver.html" target="_blank">Adobe Dreamweaver</a></li>
								</ul>
								</li>
							</ul>
						</div>
					</div>
					<div class="pure-u-1-2">
						<div class="l-box">
							<h3>
								Windows
							</h3>
							<ul>
								<li>Editors
								<ul>
									<li>Notepad</li>
									<li><a href="http://sublimetext.com/2" target="_blank">Sublime Text 2</a></li>
									<li><a href="http://brackets.io/" target="_blank">Adobe Brackets</a></li>
									<li><a href="http://notepad-plus-plus.org" target="_blank">Notepad++</a></li>
									<li><a href="http://adobe.com/uk/products/dreamweaver.html" target="_blank">Adobe Dreamweaver</a></li>
								</ul>
								</li>
								<li>FTP
								<ul>
									<li><a href="http://filezilla-project.org" target="_blank">filezilla</a></li>
									<li><a href="http://adobe.com/uk/products/dreamweaver.html" target="_blank">Adobe Dreamweaver</a></li>
								</ul>
								</li>
							</ul>
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

				<hr class="soften">

				<div class="pure-g-r">
					<div class="pure-u-1-2">
						<div class="l-box">
							<h2 class="content-subhead">Sublime Text 2</h2>
							<p>The primary editor being used during class is <a href="http://www.sublimetext.com/2" target="_blank">Sublime Text 2</a>. Here are some helpful links for setting up and customizing the editor:</p>
							<ul>
								<li><a href="http://wbond.net/sublime_packages/package_control" target="_blank">Package Control</a> <a href="#package-control-install"><i class="icon-circle-arrow-down"></i></a></li>
								<li><a href="http://blog.alexmaccaw.com/sublime-text" target="_blank">Setting Up</a></li>
								<li><a href="http://net.tutsplus.com/tutorials/tools-and-tips/essential-sublime-text-2-plugins-and-extensions/?search_index=6" target="_blank">Essential Plugins</a></li>
								<li><a href="http://docs.emmet.io" target="_blank">Emmet Documentation</a></li>
							</ul>
						</div>
					</div>
					<div class="pure-u-1-2">
						<div class="l-box">
							<p><img src="http://c758482.r82.cf2.rackcdn.com/sublime_text_icon_2181.png" alt="Sublime Text 2"></p>
						</div>
					</div>
				</div>

				<div id="package-control-install">
					<h3 class="content-subhead">Installing the Package Manager</h3>
					<p>The <a href="http://wbond.net/sublime_packages/package_control" target="_blank">Package Manager</a> is a tool for discovering, installing, updating and removing packages for Sublime Text 2.</p>
					<p>To install the Package Manager, open Sublime Text 2 and access the console using the keyboard shortcut <code>ctrl+`</code>. In the console, copy/paste the following command:</p>
					<pre><code>import urllib2,os; pf='Package Control.sublime-package'; ipp=sublime.installed_packages_path(); os.makedirs(ipp) if not os.path.exists(ipp) else None; urllib2.install_opener(urllib2.build_opener(urllib2.ProxyHandler())); open(os.path.join(ipp,pf),'wb').write(urllib2.urlopen('http://sublime.wbond.net/'+pf.replace(' ','%20')).read()); print('Please restart Sublime Text to finish installation')</code></pre>
				</div>

				<hr class="soften">

				<h2 class="content-subhead">FTP Setup</h2>
				<p><img src="http://fetchsoftworks.com/i/blog/fetch-logo-128.png" alt="fetch" title="fetch"></p>

				<h3>Fetch</h3>
				<p><small>Mac only</small></p>
				<p>Drexel provides a copy of <a href="http://fetchsoftworks.com" target="_blank">Fetch</a> for students, available to download with your student account from the <a href="http://www.drexel.edu/irt/software/download/" target="_blank">IRT Software</a> page. Sign in with your Drexel id/password and navigate to the Mac OS software. </p>
				<p>Download and install the app, and use the Serial Number provided in the text file by IRT to register your software.</p>
				<h4>Connect and Upload</h4>
				<ol>
					<li>Open Fetch. It will prompt you to enter some login info.</li>
					<li>For Host, type your domain name. Also type in your username and password and click OK.</li>
					<li>Once you have logged in, open the public_html folder. To open it, double-click it.</li>
					<li>Once in the public_html folder, click Put Files.</li>
					<li>Select the file(s) you want to upload. Then click on Choose.</li>
					<li>Fetch will confirm the file name that will be uploaded and saved. Click OK to upload.</li>
					<li>When you look under public_html, you should see the newly uploaded file.</li>
				</ol>
				<p>You can also drag/drop files to and from Fetch, like you would move files in your Finder.</p>

				<hr class="soften">

				<p><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/01/FileZilla_logo.svg/380px-FileZilla_logo.svg.png" height="200" width="200" alt="FileZilla"></p>
				<h3>FileZilla</h3>
				<div align="center">
					<iframe width="80%" height="480" src="//www.youtube.com/embed/O3DudpEMPiY" frameborder="0" allowfullscreen></iframe>
				</div>

				<hr class="soften">

				<p><img src="http://wwwimages.adobe.com/www.adobe.com/content/dam/Adobe/en/devnet/dreamweaver/images/dreamweaver-cs6-logo-138x138.jpg.adimg.mw.138.png" alt="dreamweaver" title="dreamweaver"></p>
				<h3>Dreamweaver</h3>
				<p>Map your site in Dreamweaver</p>
				<div class="pure-g-r">
					<div class="pure-u-1-2">
						<div class="l-box">
							<p><img src="images/dw_managesites.gif" alt="manage sites"></p>
							<p>1. Go to the Site menu and click on <b>Manage Sites</b></p>
						</div>
					</div>
					<div class="pure-u-1-2">
						<div class="l-box">
							<p><img src="images/dw_managesiteswindow.gif" alt="manage sites window"></p>
							<p>2. In the window that pops up, click on the New&hellip; button, and click on <b>Site</b> in the sub-menu that pops up</p>
						</div>
					</div>
				</div>

				<div class="pure-g-r">
					<div class="pure-u-1-2">
						<div class="l-box">
							<p><img src="images/dw_localinfo.gif" alt="site name"></p>
							<p>3. Go over to the <b>Advanced</b>  tab in the new window.<br />
							4. Complete all the information on the <b>Local Info</b>  option.</p>
							<ul>
								<li> Enter a name into the <b>Site name</b> input box</li>
								<li> Enter the absolute path to the directory where the content is stored on your computer, locally. You can also use the folder icon next to the input box to browse to the directory</li>
							</ul>
						</div>
					</div>
					<div class="pure-u-1-2">
						<div class="l-box">
							<p><img src="images/dw_remoteinfo.gif" alt="manage sites"></p>
							<p>
								5. Go to the Remote Info option and fill out all the information
							</p>
							<ul>
								<li>At the Access drop down box, select FTP</li>
								<li>In the FTP Host text box, enter <em>yourwebsite.com</em></li>
								<li>Enter the host directory (/public_html/)</li>
								<li>Enter your ftp username and password information</li>
								<li>Click the <b>Test</b> button to verify the information you entered is correct.</li>
								<li>IF you have trouble, try checking the Use Secure FTP (SFTP) check box</li>
								<li>Click the Ok button to exit the window and save the new site configuration.</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="pure-g-r">
					<div class="pure-u-1-2">
						<div class="l-box">
							<p><img src="images/dw_upload.gif" alt="site name"></p>
							<p>
								6. Upload your files to the server
							</p>
							<ul>
								<li>Select the root folder in the <b>Files</b> sub-window</li>
								<li>Click the <b>Put</b> (the up arrow) button to upload the files to the server</li>
								<li>Enter your ftp password if prompted if you did not tell Dreamweaver to save your password when you set up the site.</li>
							</ul>
						</div>
					</div>
					<div class="pure-u-1-2">
						<div class="l-box">
							<iframe width="420" height="315" src="http://www.youtube.com/embed/__oDRVhVR7A" frameborder="0" allowfullscreen></iframe>
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
	<script src="js/vendor/1.0.10.js"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once 'includes/_head.php'; ?></head>
<body data-pageref="software">

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
				<h1 class="pure-u-1">Software</h1>
				<h2 class="pure-u">Web Development Tools</h2>
			</div>
			<!-- / .header -->

			<div class="content">

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
								<li>
									Graphics
									<ul>
										<li><a href="http://www.bohemiancoding.com/sketch/" target="_blank">Sketch</a> <a href="https://github.com/bomberstudios/sketch-commands" target="_blank"><i class="icon-github-alt"></i></a></li>
										<li><a href="http://balsamiq.com/products/mockups/" target="_blank">Balsamiq Mockups</a></li>
									</ul>
								</li>
								<li>
									Development
									<ul>
										<li><a href="https://incident57.com/codekit/" target="_blank">CodeKit</a></li>
										<li><a href="http://fontprep.com/" target="_blank">Font Prep</a></li>
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
								<li><a href="http://net.tutsplus.com/articles/news/introducing-nettuts-fetch/" target="_blank">Fetch</a></li>
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

				<section>
					<h3>Theme &amp; Color Scheme &amp; Settings</h3>
					<ul>
						<li><a href="http://kkga.github.io/spacegray/" target="_blank">SpaceGray</a></li>
						<li><a href="https://gist.github.com/philsinatra/5957077" target="_blank">Settings Options</a></li>
					</ul>
					<pre>
{
	"auto_complete": true,
	"auto_complete_commit_on_tab": true,
	"auto_complete_with_fields": true,
	"bold_folder_labels": true,
	"caret_style": "phase",
	"detect_slow_plugins": false,
	"draw_white_space": "all",
	"fade_fold_buttons": true,
	"font_face": "Courier New",
	"font_options": "subpixel_antialias",
	"font_size": 14,
	"highlight_line": true,
	"highlight_modified_tabs": true,
	"ignored_packages":
	[
		"Vintage"
	],
	"line_padding_bottom": 2,
	"line_padding_top": 2,
	"rulers":
	[
		80,
		120
	],
	"scroll_past_end": true,
	"tab_size": 2,
	"translate_tabs_to_spaces": true,
	"trim_trailing_white_space_on_save": true,
	"word_wrap": true,
	"wrap_width": 120
}
					</pre>

					<h3>Suggested Packages</h3>
					<ul>
						<li>Alignment</li>
						<li>ApplySyntax</li>
						<li>AutoFileName</li>
						<li>Emmet</li>
						<li>FileDiffs</li>
						<li>Package Control</li>
						<li>Side Bar</li>
						<li>Trailing Spaces</li>
						<li>SublimeLinter</li>
					</ul>

					<h3>Helpful Fetch Settings</h3>
					<pre>
{
	"files":
	{
		"Eric-Meyer-Reset": "http://meyerweb.com/eric/tools/css/reset/reset.css",
		"html5shiv": "https://raw.github.com/aFarkas/html5shiv/master/dist/html5shiv.js",
		"jquery": "http://code.jquery.com/jquery.min.js",
		"modernizr": "https://raw.github.com/Modernizr/Modernizr/master/modernizr.js",
		"picturefill": "https://raw2.github.com/scottjehl/picturefill/master/picturefill.js",
		"respond": "https://raw.github.com/keithclark/Respond/master/respond.min.js"
	},
	"packages":
	{
		"Twitter Bootstrap": "https://github.com/twitter/bootstrap/zipball/master",
		"WordPress": "http://wordpress.org/latest.zip",
		"html5_boilerplate": "https://github.com/h5bp/html5-boilerplate/zipball/master",
		"pjs-starter": "https://github.com/philsinatra/pjs-starter/zipball/master"
	}
}
					</pre>
				</section>



				<hr class="soften">
				<div class="pure-g-r">
					<div class="pure-u-1-2">
						<div class="l-box">
							<h2 class="content-subhead">Adobe Brackets</h2>
							<ul>
								<li><a href="http://brackets.io" target="supwin">Developer Site</a></li>
								<li><a href="http://blog.brackets.io" target="supwin">Features</a></li>
								<li>Essential Plugins
									<ul>
										<li>Beautify</li>
										<li>Code Folding</li>
										<li>colorHints</li>
										<li>Delete to Line Start/End</li>
										<li><strong>Emmet</strong> - <a href="http://docs.emmet.io" target="supwin">Docs</a></li>
										<li>Indentator</li>
										<li>Markdown Preview</li>
										<li>Quick Search</li>
										<li>Special Html Characters</li>
										<li>spell-check</li>
										<li>String Convert</li>
										<li>Strip trailing spaces</li>
										<li>SVG Preview</li>
										<li>W3CValidation</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<div class="pure-u-1-2">
						<div class="l-box">
							<p><img src="http://corlan.org/wp-content/uploads/2012/06/branding_256.png" alt="Brackets"></p>
						</div>
					</div>
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

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once 'includes/_head.php'; ?></head>
<body data-pageref="roster">

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
				<h1 class="pure-u-1">Class Rosters</h1>
				<h2 class="pure-u">Find Your Section</h2>
			</div>
			<!-- / .header -->

			<div class="content">
				<p>Find your section based on the available roster listings. Listings are formatted <b>class</b>-<b>YYMM</b>-<b>section</b>. The <i>YYMM</i> information shows the year/month for the beginning of the course.</p>
				<ul class="classlist">

				<?php
				$dir = 'roster/';
				$sections = array();

				if ($handle = opendir($dir)) {
					while (false !== ($entry = readdir($handle))) {
						if ($entry != '.' && $entry != '..' && $entry != '.DS_Store' && $entry != '_template.php' && $entry != 'images') {
							array_push($sections, $entry);
						}
					}

					rsort($sections);

					foreach ($sections as $entry) {
						echo '<li>';
						echo '<a href="' . $dir . $entry . '" target="_blank" ';
						echo 'onclick="return popitup(\'' . $dir . $entry . '\')"';
						echo '>';
						echo substr($entry, 0, -4);
						echo '</a>';
						echo '</li>';
					}
				}
				?>

				</ul>
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

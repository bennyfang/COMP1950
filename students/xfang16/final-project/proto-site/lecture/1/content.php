<?php include("../../layout/header.php") ?>
<article>
	<h1>Lecture 1</h1>
	<section>
		<h2>Agenda</h2>
		<ul>
			<li>Lorem ipsun</li>
			<li>Lorem ipsun</li>
			<li>Lorem ipsun</li>
			<li>Lorem ipsun</li>
			<li>Lorem ipsun</li>
			<li>Lorem ipsun</li>
		</ul>
	</section>
	<section>
		<h2>Tools: Web Development</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</section>
	<section>
		<h2>Details of Standards-Driven Development</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</section>
	<section>
		<h2>Standards: file management</h2>
		<ul>
			<li>Including an <em>index.html</em> file in every folder on your server will ensure users cannot go snooping around your filesystem. the index.html file can be a blank HTML page if you like, as long as the user does not see a list of files when they request a folder</li>
			<li>Browser caching can reduce excessive request/response transactions between client and server. however, some browsers may cache things like the CSS, so if the styles have changed since caching the client may not get the latest styles.
				<ul class="inner-bullet">
					<li><em>Ctrl + F5</em> (<em>Cmd + F5</em> for Mac) will force a page reload, but what if you users don't think to do so?</li>
					<li>If a file name has changed, the browser will have to make a new request from the server. versioning your file names will ensure users always have the latest version of any file (for example <em>styles_1.0.css, styles_1.1.css, styles_1.2.css, styles_2.0.css</em> etc)</li>
				</ul>
			</li>
			<li>If there are files/pages on your server no longer being used, be sure to either remove them or locate them in a place where users are not going to accidentally find them</li>
		</ul>
	</section>
	<section>
		<h2>Homework</h2>
		<p>Due to be published to the class server by midnight, the night before the next class!</p>
		<p>Navigate to <a href="/students/xfang16/final-project/proto-site/lecture/1/homework.php">homework page</a></p>
	</section>
</article>
<?php include("../../layout/footer.php") ?>

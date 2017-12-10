<?php include("layout/header.php") ?>
<!--
Rationale page - this is among the most important pages in your project. This is your chance to 'sell' your efforts to your client instructor. This is where you describe why you chose to build the site in the way you have proposed. List all the deliverables you have implemented, and and any features or improvements you have added. Justify your decisions for choosing a particular layout and design. If your HTML5 improves the page semantics and thus SEO, be sure to mention it. If you used jQuery or CSS3, explain where it is being used, and why. Also List any features you had planned to implement but could not complete. If your rationale does not decribe a sufficient quantity of improvements, and if it does not effectively make a case for how these changes improve the site, your client will not be conviced that your team is the best choice.
-->
<article>
	<section>
		<h1>Rationale</h1>
		<p>The site utilizes many techniques from html5, css3, javascript and php to make drastic improvements to the current COMP1950 site. The goal of those changes is to make a more clutter-free and simplistic design that are both visually appealing and easy to use and navigate to. We decided to use a common element called Dashboard as the main landing page of the website, so student using this site could directly navigate to the section he/she wishes to browse in one click, instead of looking at block of text upon visiting the page. More visuals are also added to serve as visual indication of the place they are navigating to (for example, homework has a homework icon, etc.). The more technical design decisions are outlined as shown below.</p>
	</section>

	<section>
		<ul>HTML5:
			<li>Use of semantic tags such as article, section, nav to improve SEO readability</li>
			<li>Inclusion of meta tags that support scaling on smaller devices, as well as adding IE support for html5</li>
			<li>Use figcation for dashboard element to improve SEO readability</li>
		</ul>
	</section>
	<section>
		<ul>CSS3:
			<li>CSS reset for uniformity across browsers</li>
			<li>Media query and flex box to support responsive design for navigation menu</li>
			<li>Use of transition for better animation (when hover over links), box-shadow and border-radius for visual effect</li>
		</ul>
	</section>
	<section>
		<ul>Javascript:
			<li>Allow user to expand/collapse menu on smaller screens</li>
			<li>Allow user to expand/collapse menu options (clicking on lecture 1 would open content and homework navigation)</li>
		</ul>
	</section>
	<section>
		<ul>PHP:
			<li>Allow identical layout content to be loaded in all pages, including header, navigation and footer</li>
		</ul>
	</section>
	<section>
		<ul>Miscellaneous:
			<li>Usage of htaccess file to set timezone, highlight 404 page path and also disable directory browsing. Cache is set for 1 day for content assuming it is updated constantly.</li>
			<li>Custom error 404 page to improve SEO score and also lead user back to landing page</li>
		</ul>
	</section>
</article>
<?php include("layout/footer.php") ?>

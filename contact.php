<?php include("header.php"); ?>
<!-- HEADER -->
<header>
		<nav class="subnav">
			<img src="img/logo.gif">
		<ul>
			<li><a href="index.php">About</a></li>
			<li><a href="portfolio.php">Portfolio</a></li>
			<li><a href="contact.php" class="active">Contact</a></li>
		</ul>
	</nav>
	</header>

<!-- /HEADER -->
	<!-- Main Content -->
	<main class="contact">
	<figure class="social-links">
		<figcaption>You can follow me at...</figcaption>
		<ul>
			<li><a href="https://twitter.com/TotorSystem"><img src="icon/twitter.png">  Twitter</a></li>
			<li><a href="https://github.com/totor59"><img src="icon/github.png">  Github</a></li>
			<li><a href=""><img src="icon/stack.png">  StackOverflow</a></li>
			<li><a href="victormarechal59@gmail.com"><img src="icon/gmail.png">  Gmail</a></li>
			<li><a href="https://fr.pinterest.com/tminator/"><img src="icon/pinterest.png">  Pinterest</a></li>
			<li><a href="https://soundcloud.com/victor-marechal"><img src="icon/soundcloud.png">  SoundCloud</a></li>
			<li><a href="https://www.linkedin.com/in/victor-marechal-a98166123?trk=hp-identity-name"><img src="icon/linkedin.png">  Linkedin</a></li>
			<li><a href="cv_victormarechal.pdf" target="_blank" class="cvbutton">&nbsp;Consultez mon CV&nbsp;</a></li>
	</ul>		
	</figure>
	<figure class="mail">
		<figcaption>... or send me an email here!</figcaption>
		<form id="contact" action="" method="post">
			<fieldset>
				<legend>1.Please type your name here</legend>
				<input placeholder="Your name" type="text" tabindex="1" required autofocus>
			</fieldset>
			<fieldset>				
				<legend>2.Renseign your email adress</legend>
				<input placeholder="Your Email Address" type="email" tabindex="2" required>
			</fieldset>
						<fieldset>
				<legend>3.Enter your message</legend>
				<textarea placeholder="Type your Message Here...." tabindex="3" required></textarea>
			</fieldset>
			<fieldset>
				<legend>4.Submit !</legend>
				<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">SUBMIT</button>
			</fieldset>
		</form>
	</figure>	
	</main>
	<!-- /Main Content -->



	<script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
        
    </body>
</html>

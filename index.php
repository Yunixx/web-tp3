<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Gestion de contenu</title>
	<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/movingbox.css" type="text/css" media="screen">
	<script src="js/jquery-1.3.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/slider.js" type="text/javascript" charset="utf-8"></script>
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js?ver=1.3.2'></script>
  <script type='text/javascript' src='js/jquery.color-RGBa-patch.js'></script>
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<div id="wrapper"><!-- #wrapper -->
	<header><!-- header -->
		<br><br><br>
    <h1>Mon blog</h1>
    
    <!-- Div de connexion -->
    <div id="connectDiv">
    	<h2>Connexion</h2>
    	
    	<div id="error">
    	Message d'erreur
    	</div>
    	
    	<?php
    	//Script pour détection de l'utilisateur mis en mémoire
    	
    	$check = '';
    	$username = '';
	    $pass = '';
    	
    	if(isset($_COOKIE['cmsrl_remember']))
    	{
    		$id = $_COOKIE['cmsrl_remember'];
	    	
	    	require('lib/connect_bd.inc');
	    	
	    	$req = $bd->prepare('SELECT login, enc_password FROM usagers WHERE id=:id');
	    	$req->execute(array('id' => $id));
	    	
	    	$data = $req->fetchAll();
	    	
	    	$username = $data[0]['login'];
	    	$pass = $data[0]['enc_password'];
	    	
	    	$req->closeCursor();
	    	
	    	$check = 'checked';
    	}
    	?>
    
    	<div id="connectForm">
    	<form action="#" method="post">
		<label>Pseudo : </label><br /><input type="text" id="username" name="username" value='<?php echo $username; ?>' /><br />
		<label>Mot de passe :</label><br /><input type="password" id="password" name="password" value='<?php echo $pass; ?>'/>
		<input type="checkbox" id="remember" value="Remember" name="remember" checked="<?php echo $check; ?>" /><span id="rememberLabel">Se souvenir de moi</span>
		<input type="button" id="submitBout" value="Se connecter" />
    	</form>
    	</div>
		
		<img src="images/bottom.png" id="bottomImage" alt="bottom" />
    </div>
</header><!-- end of header -->

<div class="nav-wrap">	
		<ul class="group" id="example-one">
            <li class="current_page_item"><a href="#one">Accueil</a></li>
            <li><a href="#two">Qui sommes-nous</a></li>
            <li><a href="#three">Nos créations</a></li>
            <li><a href="#">Nous rejoindre</a></li>
        </ul>
</div>

<section id="main"><!-- #main content area -->
	  <p>&nbsp;</p>
		<p><br></p>
	  <div id="slider">    
     <img class="scrollButtons left" src="images/leftarrow.png">
  	  <div style="overflow: hidden;" class="scroll">
	
				<div class="scrollContainer">
	
          <div class="panel" id="panel_1">
						<div class="inside">
							<img src="images/p1.jpg" alt="picture" />
							<h2>Nouvelle créations</h2>
							<p>Nous vous présentons	... <a href="#">lire la suite</a></p>
						</div>
					</div>

          <div class="panel" id="panel_2">
						<div class="inside">
							<img src="images/p2.jpg" alt="picture" />
							<h2>News Heading</h2>
							<p>A very short excerpt goes here... <a href="#">more link</a></p>
						</div>
					</div>
				
          <div class="panel" id="panel_3">
						<div class="inside">
							<img src="images/p3.jpg" alt="picture" />
							<h2>News Heading</h2>
							<p>A very short excerpt goes here... <a href="#">more link</a></p>
						</div>
					</div>
					
					<div class="panel" id="panel_4">
						<div class="inside">
							<img src="images/p4.jpg" alt="picture" />
							<h2>News Heading</h2>
							<p>A very short excerpt goes here... <a href="#">more link</a></p>
						</div>
					</div>
					
					<div class="panel" id="panel_5">
						<div class="inside">
							<img src="images/p5.jpg" alt="picture" />
							<h2>News Heading</h2>
							<p>A very short excerpt goes here... <a href="#">more link</a></p>
						</div>
					</div>
				
         </div>

				<div id="left-shadow"></div>
				<div id="right-shadow"></div>

       </div>

			<img class="scrollButtons right" src="images/rightarrow.png">

     </div>
        
<article>
  <p>&nbsp;</p>
  <p>Eu eirmod interesset temporibus eum, sea cu amet reque quaestio. Qui erroribus assentior disputando an, quo quot accumsan menandri te, accumsan aliquando dissentias mei ea. Autem verear molestiae an mel, nominavi expetenda similique sit ei. Commodo utroque scribentur id nam, an ferri eruditi perpetua his, et has esse facer nominavi. Mei et essent dictas aliquip. Saepe eligendi phaedrum ne vix, sit putant eruditi eloquentiam at. Eu eirmod interesset temporibus eum, sea cu amet reque quaestio. Qui erroribus assentior disputando an, quo quot accumsan menandri te, accumsan aliquando dissentias mei ea. Autem verear molestiae an mel, nominavi expetenda similique sit ei. Commodo utroque scribentur id nam, an ferri eruditi perpetua his, et has esse facer nominavi. Mei et essent dictas aliquip. Saepe eligendi phaedrum ne vix, sit putant eruditi eloquentiam at. </p>
</article>

</section><!-- end of #content -->

<footer>
<section id="footer-area">
	<section id="footer-outer-block">
			<aside class="footer-segment first">
					<h4>&nbsp;</h4>
						<ul>
							<li><a href="#">one linkylink</a></li>
							<li><a href="#">two linkylinks</a></li>
							<li><a href="#">three linkylinks</a></li>
							</ul>
			</aside><!-- end of #first footer segment -->

			<aside class="footer-segment second">
					<h4>&nbsp;</h4>
						<ul>
							<li><a href="#">one linkylink</a></li>
							<li><a href="#">two linkylinks</a></li>
							<li><a href="#">three linkylinks</a></li>
						</ul>
			</aside><!-- end of #second footer segment -->

			<aside class="footer-segment third">
					<h4>&nbsp;</h4>
						<ul>
							<li><a href="#">one linkylink</a></li>
							<li><a href="#">two linkylinks</a></li>
							<li><a href="#">three linkylinks</a></li>
						</ul>
			</aside><!-- end of #third footer segment -->
					
			<aside class="footer-segment last">
					<h4>&nbsp;</h4>
						<p>&copy; 2012 <a href="#">www.test.com</a></p>
			</aside><!-- end of #fourth footer segment -->

	</section><!-- end of footer-outer-block -->

</section><!-- end of footer-area -->
</footer>
	
</div><!-- #wrapper -->
<script src="js/connexion.js"></script>
<script type='text/javascript' src='js/example.js'></script>
</body>
</html>
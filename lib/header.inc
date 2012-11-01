<?php
	session_start();
?>
<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<title>Gestion de contenu</title>
	<link rel="stylesheet" href="../css/styles.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="../css/movingbox.css" type="text/css" media="screen">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
	<script type='text/javascript' src='../js/jquery.color-RGBa-patch.js'></script>
    <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
<div id="wrapper"><!-- #wrapper -->
	<div id="bg"></div>
	<div id="create"></div>
	<header><!-- header -->
		<br><br><br>
    <h1>Mon blog</h1>
    
    <!-- Div de connexion -->
    <div id="connectDiv">
    	
    	<div id="error">
    	Message d'erreur
    	</div>
    	
    	<?php
    	//Script pour détection de l'utilisateur mis en mémoire
    	
    	$check = '';
    	$username = '';
    	
    	if(isset($_COOKIE['cmsrl_remember']))
    	{
    		$id = $_COOKIE['cmsrl_remember'];
	    	
	    	require('lib/connect_bd.inc');
	    	
	    	$req = $bd->prepare('SELECT login FROM usagers WHERE id=:id');
	    	$req->execute(array('id' => $id));
	    	
	    	$data = $req->fetchAll();
	    	
	    	$username = $data[0]['login'];
	    	
	    	$req->closeCursor();
	    	
	    	$check = 'checked';
    	}
		
		}
    	?>
    
    	<div id="connectForm">
    	<h2>Connexion</h2>
    	<form action="#" method="post">
		<label>Pseudo : </label><br /><input type="text" id="username" name="username" value='<?php echo $username; ?>' /><br />
		<label>Mot de passe :</label><br /><input type="password" id="password" name="password" value='<?php echo $pass; ?>'/>
		<input type="checkbox" id="remember" value="Remember" name="remember" checked="<?php echo $check; ?>" /><span id="rememberLabel">Se souvenir de moi</span>
		<input type="button" id="submitBout" value="Se connecter" />
    	</form>
    	</div>
		
		<img src="../images/bottom.png" id="bottomImage" alt="bottom" />
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


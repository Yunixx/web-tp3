
<li class="current_page_item"><a href="#one">Accueil</a></li>
<?php
		session_start();

		require('../lib/connect_bd.inc');
	
		$req = $bd->prepare('SELECT id, menu_titre FROM articles WHERE acces=:acces');
		$req->execute(array('acces' => $_SESSION['acces']));
		
		$data = $req->fetchAll();
		
		if(isset($_SESSION['acces']))
	 	{           
		     foreach ($data as $rep)
		     {
			      echo "<li><a href='page.php?id='" . $rep['id'] . "'>" . $rep['menu_titre'] . "</a></li>";
		     }
	    }
?>
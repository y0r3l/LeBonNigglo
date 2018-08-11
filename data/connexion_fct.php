<?php
if(isset($_POST['mail']) AND isset($_POST['mdp'])){
			if(!empty($_POST['mail']) AND !empty($_POST['mdp']))
			{
				$mail = htmlspecialchars($_POST['mail']);
				$mdp = htmlspecialchars($_POST['mdp']);
				
				$mail = hash('sha512',$mail);
				$mdp = hash('sha512',$mdp);
				
				$mail_hash="0b792fe19cb00338eb0a837d81d7679f5d72910f7db3d46ef6a5724279be5421a70c996368fcdad5e85b0c6f64aae6f7479bff371c8085910c62834779fa6506";
				$mdp_hash="6ec26be76557c323dd76a59ed8a6ed6c749ea110716366a42271a15ec68a15fa4c42d3a2d3ce6fcc6857dd1db968e6e35d889c3319918c75a645793ed56c342c";
				
				if($mail==$mail_hash AND $mdp==$mdp_hash)
				{
					$_SESSION['refco'] = 1;
					$_SESSION['refcoadmin'] = 1;
					header('Location:./connecte/user/index.php');
					exit();
				}else{
					// mauvais identifiant
					$_SESSION['refco']=0;
				}
				
			}else if(empty($_POST['mdp']) AND !empty($_POST['mail']))
			{
				//si la connexion a échoué car mdp non rempli
				$_SESSION['refco']=3;
			}else if(empty($_POST['mail']) AND !empty($_POST['mdp']))
			{
				//si la connexion a échoué car mail non rempli
				$_SESSION['refco']=4;
			}
			else
			{
				//si aucun des champs remplis
				$_SESSION['refco']=5;
			}
}else{
	$_SESSION['champs']=1;
}

?>

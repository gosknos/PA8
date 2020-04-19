<!DOCTYPE html>
<html>

<?php
try
{
    $bdd = new PDO('mysql:host=localhost;port=3306;dbname=databee;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$rep = $bdd -> query('SELECT COUNT(*) AS existe_pseudo FROM users WHERE email="'.$_POST['Mail'].'"');
$data = $rep->fetch();


if (isset($_POST['Mail']))
{
    $_POST['Mail'] = htmlspecialchars($_POST['Mail']); // On rend inoffensives les balises HTML que le visiteur a pu rentrer

	if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['Mail'] ))
	{
		
		if (($data['existe_pseudo'] == '0'))
		{		
			if ($_POST['mdpa'] == $_POST['mdpb'])
			{
		
			

$truc = !empty($_POST['mdpa']) ? $_POST['mdpa'] : NULL;

// Hachage du mot de passe
$pass_hache = password_hash($truc, PASSWORD_DEFAULT);

//insertion
$req = $bdd->prepare('INSERT INTO users(email, mdp, inscription) VALUES(?, ?, CURDATE())');
$req->execute(array(
	$_POST['Mail'], 
	$pass_hache));

			}
		}
	}
} 

header('Location: connexion.php');
?>
</html>
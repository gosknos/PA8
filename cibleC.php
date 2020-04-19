<?php 
try
{
     $bdd = new PDO('mysql:host=localhost;port=3306;dbname=databee;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}




//  Récupération de l'utilisateur et de son pass hashé
$req = $bdd->prepare('SELECT userid, mdp FROM users WHERE email = :email');
$req->execute(array(
    'email' => $_POST['Mail']));
$resultat = $req->fetch();


// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['mdpa'], $resultat['mdp']);





if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['userid'] = $resultat['userid'];
        $_SESSION['email'] = $_POST['Mail'];
        echo 'Vous êtes connecté !';
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}
header('Location: membre.php');
?>
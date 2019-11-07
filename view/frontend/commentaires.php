<?php

/*function addComment($postId, $author, $comment)
{
    // Connexion à la base de données
	$db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$affectedLines = postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        die('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}

function postComment($postId, $author, $comment)
{
    // Connexion à la base de données
	$db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $comments = $db->prepare('INSERT INTO commentaires (id_chapitre, pseudo, commentaire, date_commentaire) VALUES(?, ?, ?, NOW())');
    $affectedLines = $comments->execute(array($postId, $author, $comment));

    return $affectedLines;
}
*/


// Connexion à la base de données
$db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

// Insertion du message à l'aide d'une requête préparée
$req = $db->prepare('INSERT INTO commentaires (id_chapitre, pseudo, commentaire, date_commentaire) VALUES(?, ?, ?, NOW())');
$req->execute(array($_POST['inputPseudo'], $_POST['commentTextarea']));

// Redirection du visiteur vers la page du minichat
header('Location: chapitreView.php?chapitre=<?php echo $data["id"]; ?>');
?>
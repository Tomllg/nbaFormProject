<?php

  if (isset($_POST['idEmploye']) && isset($_POST['result'])) {

    putNomBase($_POST['result'], $_POST['idEmploye']);

  }

?>

<?php

function  putNomBase($score, $nom) {

  global  $DATABASE;

  $DATABASE = new PDO('mysql:host=localhost;dbname=nbaForm;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

  $requete = $DATABASE->prepare('DELETE FROM nom WHERE nom = ? AND score = ?');
  $requete->execute(array($nom, $score));

  $requete = $DATABASE->prepare('INSERT INTO nom VALUES(?, ?, ?)');
  $requete->execute(array(NULL, $nom, $score));

}

?>

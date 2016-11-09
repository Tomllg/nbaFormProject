<?php

  if (isset($_POST['score'])) {

    showNomBase();

  }

?>

<?php

function  showNomBase() {

  global  $DATABASE;

  $DATABASE = new PDO('mysql:host=localhost;dbname=nbaForm;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

  $requete = $DATABASE->prepare('SELECT nom FROM nom ORDER BY score DESC LIMIT 5');
  $requete->execute();
  $noms = $requete->fetchAll();

  $requete = $DATABASE->prepare('SELECT score FROM nom ORDER BY score DESC LIMIT 5');
  $requete->execute();
  $scores = $requete->fetchAll();

  $lignes = count($noms);

  ?>
<style>
  #tableau {
    border: 2px solid blue;
  }
</style>
<div id="tab">
<table>

    <tr id="tableau">
      <th id="tableau"><?php echo "Nom" ?></th>
      <th id="tableau"><?php echo "Score"?></th>
    </tr>
    <?php $i = 0; foreach ($noms as $cle) { ?>
    <tr id="tableau">
      <td id="tableau"> <?php echo ($cle[0]);?></td>
      <td id="tableau"> <?php echo ($scores[$i][0]);?></td>
    <?php $i++;
      } ?>
    </tr>
</table>
</div>
<?php } ?>

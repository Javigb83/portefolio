<?php
$title = 'Admin : Identification';

ob_start();
if(isset($auth)) echo $auth;
?>

<form method="post" action="index.php?page=admin">
      <label for="nom">Nom :</label>
      <input type="text" name="nom"><br>
      <label for="pwd">Mot de passe :</label>
      <input type="password" name="pwd"><br>
      <input type="submit" name="submit" value="Ok">
</form>
<?php

$content = ob_get_clean();

require './view/template.php';
<?php

  ob_start(); ?>

  <p>Bienvenue <img class="avatar" src="<?= $_SESSION['user']['photo'] ?>"></img> <?= $_SESSION['user']['identifiant'] ?> </p>
  <a href='index.php?statut=déconnexion'>Déconnexion</a><br>
  <a href='index.php?statut=listeBillet'>Liste des billets</a>
  <?php if($_SESSION['user']['role'] == "admin"){echo '<br><a class="boutonAdmin" href="index.php?statut=adminEdit">Editer</a>'; }; ?>

  <?php $acceuilLog = ob_get_clean(); ?>

  <?php ob_start();

  ob_start();
  ?>
  <form action='index.php?statut=adminEdit&action=modify&id=<?= $id ?>' method='post'>
      <h1>Modifiez le billet n°<?= $id ?></h1>
      <input type='text' name='titre' value='' placeholder="modifier le titre"><br>
      <textarea  name='corps' style="width:245px;height:100px;" placeholder='modifier le corps'></textarea><br>
      <input type='submit' value='Poster'>
    </form>

    <p><?php if(isset($_SESSION['erreur'])){echo $_SESSION['erreur'];}; ?></p>
<?php
  $content = ob_get_clean();
?>

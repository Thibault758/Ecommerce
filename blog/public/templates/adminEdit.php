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
  <form action='index.php?statut=adminEdit&action=registerPost' method='post'>
      <h1>Creez un billet</h1>
      <input type='text' name='nom' value='' placeholder='Nom'><br>
      <input type='text' name='titre' value='' placeholder="titre de l'annonce"><br>
      <textarea  name='corps' value='' placeholder='annonce'></textarea><br>
      <select name="categories">
        <option value="1">vacances</option>
        <option value="2">travail</option>
        <option value="3">fun</option>
        <option value="4">hobbie</option>
      </select>
      <input type='submit' value='Poster'>
    </form>

    <p><?php if(isset($_SESSION['erreur'])){echo $_SESSION['erreur'];}; ?></p>
<?php
  $content = ob_get_clean();
?>

<?php

  ob_start(); ?>

  <p>Bienvenue <img class="avatar" src="<?= $_SESSION['user']['photo'] ?>"></img> <?= $_SESSION['user']['identifiant'] ?> </p>
  <a href='index.php?statut=déconnexion'>Déconnexion</a>
  <?php if($_SESSION['user']['role'] == "admin"){echo '<br><a class="boutonAdmin" href="index.php?statut=adminEdit">Editer</a>'; }; ?>

  <?php $acceuilLog = ob_get_clean(); ?>

  <?php ob_start();
    foreach($cat as $value) {
      ?><div>
        <a href="index.php?statut=categories&cat=<?= $value['categorie'] ?>">Catégorie <?= $value['categorie'] ?>:<br><span class="red"><?= $value['nb'] ?></span> articles</a>
      </div>
      <?php
    }
   $categories = ob_get_clean();?>

   <?php ob_start(); ?>
    <div class="article">
        <h1><?= $list['titre']; ?></h1>
        <div><?= $list['corps']; ?></div>
        <form class="" action="index.php?statut=postComment" method="post">
          <textarea placeholder="Commentez" name="corp"></textarea>
          <input type="hidden" value="<?= $_SESSION['user']['identifiant'] ?>" name="author">
          <input type="hidden" value="<?= $list['id'] ?>" name="id"><br>
          <input type="submit" placeholder="Envoyer">
        </form>
    </div>
   <?php $content = ob_get_clean(); ?>

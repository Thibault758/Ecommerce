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


  <?php ob_start();

  foreach( $list as $data ) {
    ?>
    <div class="article">
       <?=$data['corps']?><br>
       <div class="artSelect">
         <a class="boutonAdmin" href="index.php?statut=billet&id=<?= $data["id"] ?>">Voir l'article</a>
         <?php if($_SESSION['user']['role'] == "admin"){echo '<a class="boutonAdmin" href="index.php?statut=adminEdit&action=formModify&id='.$data["id"].'">Editer</a>
         <a class="boutonAdmin" href="index.php?statut=adminEdit&action=formDelete&id='.$data["id"].'">Supprimer</a>'; }; ?>
       </div>
    </div>
    <?php
  }
  ?>
    <div>
    <?php
      if($_SESSION['page'] > 1) {
      ?>
      <a class="nav" href="index.php?statut=listeBillet&page=precedent">Page précédente</a>
      <?php
    } if(count($list) == 5 && $allPost['nombre'] > 5) {
      ?>
      <a class="nav" href="index.php?statut=listeBillet&page=suivant">Page suivante</a>
      <?php
    }
    ?>
    </div>

  <?php $content = ob_get_clean(); ?>

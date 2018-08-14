<?php
  $acceuilLog = "<a href='index.php?statut=enregistrer'>Enregistrez-vous</a><br>
               <a href='index.php?statut=connecter'>Connectez-vous</a>";

  ob_start();
  ?>
  <form action='index.php?statut=formulaire&action=register' method='post' enctype='multipart/form-data'>
      <input type='text' name='nom' value='' placeholder='Nom'><br>
      <input type='text' name='prénom' value='' placeholder='prénom'><br>
      <input type='text' name='identifiant' value='' placeholder='identifiant'><br>
      <input type='text' name='mdp' value='' placeholder='mot de passe'><br>
      <input type='text' name='email' value='' placeholder='email'><br>
      <input type='file' name='avatar'><br>
      <input type='submit' value='enregistrer'>
    </form>

    <p><?php if(isset($_SESSION['erreur'])){echo $_SESSION['erreur'];}; ?></p>
<?php
  $content = ob_get_clean();
?>

<?php
session_start();


require('src/controler/controler.php');

if(isset($_GET["statut"])) {
  switch($_GET["statut"]) {
    case (isset($_GET["statut"]) && $_GET["statut"] == "enregistrer") :
      require('public/templates/formRegister.php');
      break;

    case (isset($_GET["statut"]) && $_GET["statut"] == "connecter") :
      require('public/templates/formConnect.php');
      break;

    case (isset($_GET["statut"]) && isset($_GET["action"]) && $_GET["statut"] == "formulaire"  &&
      $_GET["action"] == "register") :
      registerUser($_POST,$_FILES);
      if(isset($_SESSION['user'])) {
        $list = listPost(1);
        $cat = nbCategorie();
        $allPost = allPost();
        require('public/templates/list.php');
        break;
      } else {
        require('public/templates/formRegister.php');
        break;
      }

    case (isset($_GET["statut"]) && isset($_GET["action"]) && $_GET["statut"] == "formulaire"  &&
      $_GET["action"] == "connect") :
      connectUser($_POST);
        if(isset($_SESSION['user'])) {
          $list = listPost(1);
          $cat = nbCategorie();
          $allPost = allPost();
          require('public/templates/list.php');
          break;
        } else {
          require('public/templates/formConnect.php');
          break;
        }

    case (isset($_GET["statut"]) && $_GET["statut"] == "déconnexion") :
      decoUser();
      require('public/templates/acceuil.php');
      break;

    case (isset($_GET["statut"]) && $_GET["statut"] == "listeBillet") :
      if(!isset($_GET["page"])) {
      $list = listPost(1);
      $cat = nbCategorie();
      $allPost = allPost();
      require('public/templates/list.php');
      break;
    } else if (isset($_GET["page"]) && $_GET["page"] == "suivant") {
      $_SESSION['page'] ++;
      $list = listPost($_SESSION['page']);
      $tailleList = listPost($_SESSION['page']);
      $cat = nbCategorie();
      $allPost = allPost();
      require('public/templates/list.php');
      break;
    } else if (isset($_GET["page"]) && $_GET["page"] == "precedent") {
      $_SESSION['page'] --;
      $list = listPost($_SESSION['page']);
      $tailleList = listPost($_SESSION['page']);
      $cat = nbCategorie();
      $allPost = allPost();
      require('public/templates/list.php');
      break;
    }

    case (isset($_GET["statut"]) && isset($_GET["id"]) && $_GET["statut"] == "billet") :
        $list = post($_GET["id"]);
        $cat = nbCategorie();
        require('public/templates/post.php');
      break;

    case (isset($_GET["statut"]) && $_GET["statut"] == "postComment") :
        comment($_POST);
        $list = post($_POST["id"]);
        $cat = nbCategorie();
        require('public/templates/post.php');
      break;

    case (isset($_GET["statut"]) && $_GET["statut"] == "adminEdit" && !isset($_GET["action"])) :
      require('public/templates/adminEdit.php');
      break;

    case (isset($_GET["statut"]) && isset($_GET["action"]) && $_GET["statut"] == "adminEdit" && $_GET["action"] == "registerPost") :
      addPost($_POST);
      $cat = nbCategorie();
      $list = listPost(1);
      $allPost = allPost();
      require('public/templates/list.php');
      break;

    case (isset($_GET["statut"]) && isset($_GET["action"]) && isset($_GET["id"]) && $_GET["statut"] == "adminEdit" && $_GET["action"] == "formModify") :
      $id = $_GET["id"];
      require('public/templates/adminModify.php');
      break;

    case (isset($_GET["statut"]) && isset($_GET["action"]) && isset($_GET["id"]) && $_GET["statut"] == "adminEdit" && $_GET["action"] == "formDelete") :
      $id = $_GET["id"];
      deletePost($_GET["id"]);
      $cat = nbCategorie();
      $list = listPost(1);
      $allPost = allPost();
      if($allPost['nombre'] == 5) {
        $_SESSION['page'] = 1;
      }
      require('public/templates/list.php');
      break;

    case (isset($_GET["statut"]) && isset($_GET["action"]) && isset($_GET["id"]) && $_GET["statut"] == "adminEdit" && $_GET["action"] == "modify") :
      modifyPost($_POST,$_GET["id"]);
        $list = listPost(1);
        $cat = nbCategorie();
        $allPost = allPost();
        require('public/templates/list.php');
      break;

    case (isset($_GET["statut"]) && isset($_GET["cat"]) && $_GET["statut"] == "categories") :
        $list = postByCat(1,$_GET["cat"]);
        $cat = nbCategorie();
        $allPost = allPost();
        require('public/templates/list.php');
      break;
  }
}
else {
  session_unset();
  require('public/templates/acceuil.php');
}

require('public/templates/template.php')



?>

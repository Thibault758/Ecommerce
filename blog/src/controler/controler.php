<?php

  require_once('src/model/userManager.php');

  function registerUser($data1,$data2) {
    $register = new userManager();
    $exist = $register->connectUser($data1);
    if($exist){
      $_SESSION['erreur'] = "l'utilisateur existe déjà";
    } else {
      $cheminImg = $register->registerImg($data1,$data2);
      $register->createUser($data1,$cheminImg);
      $_SESSION['user'] = $register->connectUser($data1);
   }
 }

  function connectUser($data) {
    $list = new userManager();
    $connect = new userManager();
    $connect = $connect->connectUser($data);
    if(!$connect) {
      $_SESSION['erreur'] = "information incorrectes";
    } else {
      $_SESSION['user'] = $connect;
      $_SESSION['page'] = 1;
    }
  }

  function decoUser() {
    session_unset();
  }

  function addPost($data1) {
    $add = new userManager();
    $add->addPost($data1);
  }

  function listPost($data) {
    $register = new userManager();
    $limit = 5;
    $debut = ($data -1) * $limit;
    return $list = $register->listPost($limit,$debut);
  }

  function allPost() {
    $register = new userManager();
    return $allPost = $register->allPost();

  }

  function nbCategorie() {
    $register = new userManager();
    $cat = $register->postByCat();
    return $cat;
  }

  function modifyPost($data1,$data2) {
    $add = new userManager();
    $add->modifyPost($data1,$data2);
  }

  function deletePost($data) {
    $del = new userManager();
    $del->deletePost($data);
  }

  function postByCat($chiffre,$data) {
    $register = new userManager();
    $limit = 5;
    $debut = ($chiffre - 1) * $limit;
    return $post = $register->postsByCat($debut, $limit, $data);
  }

  function post($int) {
    $register = new userManager();
    return $post = $register-> Post($int);
  }

  function comment($data) {
    $register = new userManager();
    $register->commentCreate($data);
  }

 ?>

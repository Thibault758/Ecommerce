<?php

class userManager {

  public $_db;

  function __construct() {
    $this->_db = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', 'troiswa', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  }

  function createUser($data1,$data2) {
    $add = $this->_db->prepare('INSERT INTO Utilisateur(nom,prenom,identifiant,motDePasse,mail,photo) VALUES(:nom, :prenom, :identifiant, :motDePasse, :mail, :photo)');
    $add->execute(array(
      'nom' => mysql_real_escape_string($data1['nom']),
      'prenom' => mysql_real_escape_string($data1['prénom']),
      'identifiant' => $data1['identifiant'],
      'motDePasse' => $data1['mdp'],
      'mail' => $data1['email'],
      'photo' => $data2
    ));
  }

  function listPost($data1, $data2) {
    $list = $this->_db->prepare('SELECT * FROM Billet LIMIT :debut, :limite');
    $list->bindValue('limite',$data1, PDO::PARAM_INT);
    $list->bindValue('debut',$data2, PDO::PARAM_INT);
    $list->execute();
    return $list->fetchAll();
  }

  function Post($int) {
    $list = $this->_db->prepare('SELECT * FROM Billet WHERE id = :id');
    $list->bindValue('id',$int, PDO::PARAM_INT);
    $list->execute();
    return $list->fetch();
  }

  function allPost() {
    $list = $this->_db->query('SELECT COUNT(*) as nombre FROM Billet');
    return $list->fetch();
  }

  function connectUser($data) {
    $connect = $this->_db->prepare('SELECT identifiant, motDePasse, photo,role FROM Utilisateur WHERE identifiant = :pseudo AND motDePasse = :motDePasse');
    $connect->execute(array(
      'pseudo' => $data["identifiant"],
      'motDePasse' => $data["mdp"]));
    return $connect->fetch();
  }

  function registerImg($data1,$data2) {
    $extension_upload = strtolower(  substr(  strrchr($data2['avatar']['name'], '.')  ,1)  );
    $nom = "public/img/avatar/" . $data1['identifiant'] . "." . $extension_upload;
    move_uploaded_file($data2['avatar']['tmp_name'], $nom);
    return $nom;
  }

  function addPost($data) {
    $add = $this->_db->prepare('INSERT INTO Billet(titre, corps, auteur, `idCatégorie`) VALUES(:titre, :corps, :auteur, :idCategorie)');
    $add->execute(array(
      'titre' => $data['titre'],
      'corps' => $data['corps'],
      'auteur' => $data['nom'],
      'idCategorie'=> $data['categories']
    ));
  }

  function postsByCat($debut, $limit, $data) {
    $number = $this->_db->prepare('SELECT *
                                 FROM Catégorie
                                 INNER JOIN Billet
                                 ON Billet.idCatégorie = Catégorie.id
                                 WHERE Catégorie.categorie = :cat
                                 LIMIT :debut, :limite');
   $number->bindValue('limite',$limit, PDO::PARAM_INT);
   $number->bindValue('debut',$debut, PDO::PARAM_INT);
   $number->bindValue('cat',$data);
   $number->execute();
   return $number->fetchAll();
  }

  function modifyPost($data1, $data2) {
    $modify = $this->_db->prepare('UPDATE Billet SET corps = :corps, titre = :titre WHERE id = :id');
    $modify->execute(array(
      'corps' => $data1["corps"],
      'titre' => $data1["titre"],
      'id' => $data2
    ));
  }

  function deletePost($data) {
    $delete = $this->_db->prepare('DELETE FROM Billet WHERE id = :id');
    $delete->execute(array(
      'id' => $data
    ));
  }

  function postByCat() {
    $number = $this->_db->query('SELECT COUNT(*) as nombre_billets, categorie, COUNT(titre) as nb
                                   FROM Catégorie
                                   LEFT JOIN Billet
                                    ON Billet.idCatégorie = Catégorie.id
                                    GROUP BY Catégorie.id');

    return $number->fetchAll(PDO::FETCH_ASSOC);
  }

  function commentCreate($data) {
    $comment = $this->_db->prepare('INSERT INTO Commentaire(corp,auteur,idBillet) VALUES(:corp, :auteur, :idBillet)');
    $comment->execute(array(
      'corp' => htmlspecialchars($data['corp']),
      'auteur' => htmlspecialchars($data['author']),
      'idBillet' => htmlspecialchars($data['id']),
    ));

  }
}

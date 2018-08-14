<?php
namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Session\Session;


class Basket
{
  private $em;
  private $session;

  public function __construct(EntityManager $em, Session $session){
    $this->em = $em;
    $this->session = $session;
  }

  public function createBasket()
  {
    if (!$this->session->has('panier')) {
      $this->session->start();
      $this->session->set('panier', ['nom' => [], 'qte' => [], 'prix' => []]);
    }
  }

  public function nbArticlesAll()
  {
    $panier = $this->session->get('panier');
    $nombre = 0;

    foreach ($panier['qte'] as $key => $value ) {
      $nombre += $value;
    }

    $this->session->set('nombre', $nombre);
  }

  public function nbArticles()
  {
    $panier = $this->session->get('panier');

    $nbArticle = count($panier['nom']) - 1;

    return $nbArticle;
  }

  public function addBasket(int $id)
  {
    $article = $this->em->getRepository('AppBundle:Product')->find($id);

    $name = $article->getName();
    $quantity = 1;
    $price = $article->getPrice();

    $panier = $this->session->get('panier');

    $articlePosition = array_search($name, $panier['nom']);

    if($articlePosition !== false) {
      $panier['qte'][$articlePosition] += $quantity;
      $panier['prix'][$articlePosition] = $panier['qte'][$articlePosition] * $price;
      $this->session->set('panier', $panier);
    } else {
      array_push($panier['nom'], $name);
      array_push($panier['qte'], $quantity);
      array_push($panier['prix'], $price);
      $this->session->set('panier', $panier);
    }
  }

  public function deleteArticle(string $nom)
  {
    $tmp = [ 'nom' => [], 'qte' => [], 'prix' => []];
    $panier = $this->session->get('panier');

    for ($i = 0; $i < count($panier['nom']); $i++){
      if($panier['nom'][$i] !== $nom) {
        array_push($tmp['nom'], $panier['nom'][$i]);
        array_push($tmp['qte'], $panier['qte'][$i]);
        array_push($tmp['prix'], $panier['prix'][$i]);
      }
    }
    $this->session->set('panier', $tmp);
  }

  public function totalPrice() {
    $panier = $this->session->get('panier');
    $totalPrice = 0;

    foreach($panier['prix'] as $value) {
      $totalPrice += $value;
    }

    return $totalPrice;
  }
}

<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Establishment;
use AppBundle\Entity\Product;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    public function indexAction(Session $session)
    {
      $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AppBundle:Product');

      $ecig = $repository->findBy(
        ['category' => 'ecigarette'],
        ['id' => 'ASC'],
        5,
        0
      );

      $eliquide = $repository->findBy(
        ['category' => 'eliquide'],
        ['id' => 'ASC'],
        5,
        0
      );

      $this->get('panier')->createBasket();
      $this->get('panier')->nbArticlesAll();

      return $this->render('@App/Home.html.twig', ['ecigs' => $ecig, 'eliquides' => $eliquide, 'pr' => $pr]);
    }


    public function articleAction(int $id)
    {
      $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('AppBundle:Product');

      $article = $repository->find($id);

      return $this->render('@App/Article.html.twig', ['article' => $article]);
    }



    public function addShopingAction(int $id, Session $session)
    {
      $panier= $this->get('panier')->addBasket($id);

      return $this->redirectToRoute('home');
    }



    public function basketAction()
    {
      $nbArticles = $this->get('panier')->nbArticles();
      $totalPrice = $this->get('panier')->totalPrice();

      return $this->render('@App/basket.html.twig', ['nbArticles' => $nbArticles, 'totalPrice' => $totalPrice]);
    }

    public function emptyBasketAction(Session $session)
    {
      $session->clear();
      return $this->redirectToRoute('home');
    }

    public function deleteArticleAction(string $nom)
    {
      $this->get('panier')->deleteArticle($nom);
      $this->get('panier')->nbArticlesAll();
      return $this->redirectToRoute('basket');
    }

}

<?php

/* @App/Home.html.twig */
class __TwigTemplate_699996a9d2ab39f7ef98e7aba5849a054c826ada8154e2c8ce514223379d7eb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@App/Home.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
  <section id=\"artHome\">
    <article id=\"ecig\">
      <h1>Les 5 dernières nouveautés E-Cigarette :</h1>
      <div class=\"contArt\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ecigs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ecig"]) {
            // line 10
            echo "          <div class=\"art\">
            <h3>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["ecig"], "name", array()), "html", null, true);
            echo "</h3>
            <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/app/pictures/" . $this->getAttribute($context["ecig"], "image", array()))), "html", null, true);
            echo "\" alt=\"image\">
            <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article", array("id" => $this->getAttribute($context["ecig"], "id", array()))), "html", null, true);
            echo "\">Voir l'article</a>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ecig'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "      </div>
    </article>

    <article id=\"eliquide\">
      <h1>Les 5 dernières nouveautés E-Liquides :</h1>
      <div class=\"contArt\">
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["eliquides"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["eliquide"]) {
            // line 23
            echo "          <div class=\"art\">
            <h3>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["eliquide"], "name", array()), "html", null, true);
            echo "</h3>
            <img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("bundles/app/pictures/" . $this->getAttribute($context["eliquide"], "image", array()))), "html", null, true);
            echo "\" alt=\"image\">
            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article", array("id" => $this->getAttribute($context["eliquide"], "id", array()))), "html", null, true);
            echo "\">Voir l'article</a>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eliquide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "      </div>
    </article>
  </section>

";
    }

    public function getTemplateName()
    {
        return "@App/Home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 29,  85 => 26,  81 => 25,  77 => 24,  74 => 23,  70 => 22,  62 => 16,  53 => 13,  49 => 12,  45 => 11,  42 => 10,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@App/Home.html.twig", "/Users/thibault/Desktop/Cour/PHP/SYMF3.4/src/AppBundle/Resources/views/Home.html.twig");
    }
}

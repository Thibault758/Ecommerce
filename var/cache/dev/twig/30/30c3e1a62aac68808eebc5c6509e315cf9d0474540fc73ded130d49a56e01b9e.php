<?php

/* @App/Home.html.twig */
class __TwigTemplate_63f0cc391e110c8541b019aee234054eea7efa80f8f99909649734b17a7d5a5a extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  <section id=\"artHome\">
    <article id=\"ecig\">
      <h1>Les 5 dernières nouveautés E-Cigarette :</h1>
      <div class=\"contArt\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ecigs"] ?? $this->getContext($context, "ecigs")));
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
        $context['_seq'] = twig_ensure_traversable(($context["eliquides"] ?? $this->getContext($context, "eliquides")));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  112 => 29,  103 => 26,  99 => 25,  95 => 24,  92 => 23,  88 => 22,  80 => 16,  71 => 13,  67 => 12,  63 => 11,  60 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block body %}

  <section id=\"artHome\">
    <article id=\"ecig\">
      <h1>Les 5 dernières nouveautés E-Cigarette :</h1>
      <div class=\"contArt\">
        {% for ecig in ecigs %}
          <div class=\"art\">
            <h3>{{ ecig.name}}</h3>
            <img src=\"{{ asset('bundles/app/pictures/' ~ ecig.image ) }}\" alt=\"image\">
            <a href=\"{{ path('article', { 'id': ecig.id }) }}\">Voir l'article</a>
          </div>
        {% endfor %}
      </div>
    </article>

    <article id=\"eliquide\">
      <h1>Les 5 dernières nouveautés E-Liquides :</h1>
      <div class=\"contArt\">
        {% for eliquide in eliquides %}
          <div class=\"art\">
            <h3>{{ eliquide.name}}</h3>
            <img src=\"{{ asset('bundles/app/pictures/' ~ eliquide.image ) }}\" alt=\"image\">
            <a href=\"{{ path('article', { 'id': eliquide.id }) }}\">Voir l'article</a>
          </div>
        {% endfor %}
      </div>
    </article>
  </section>

{% endblock %}
", "@App/Home.html.twig", "/Users/thibault/Desktop/Cour/PHP/SYMF3.4/src/AppBundle/Resources/views/Home.html.twig");
    }
}

<?php

/* @App/basket.html.twig */
class __TwigTemplate_f57b6544f9541fb34abdd6c4b7e330fcc4dad19345a0e2f7d4d0c8fd29dbad9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@App/basket.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/basket.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/basket.html.twig"));

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
    <div id=\"Panier\">

    ";
        // line 7
        if ((($context["nbArticles"] ?? $this->getContext($context, "nbArticles")) < 0)) {
            // line 8
            echo "      <h1>Votre panier est vide !</h1>
    ";
        } else {
            // line 10
            echo "      <h1>Votre Panier</h1>
      <table class=\"table table-bordered\">
        <thead class=\"thead-dark\">
          <tr>
            <th scope=\"col\">Nom du produit</th>
            <th scope=\"col\">Quantitée</th>
            <th scope=\"col\">Prix</th>
          </tr>
        </thead>
        <tbody style=\"background-color:white;\">
          ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, ($context["nbArticles"] ?? $this->getContext($context, "nbArticles"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 21
                echo "            <tr>
              <td>
                <div class=\"divNomBasket\">
                  <span class=\"tdNom\">";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "panier"), "method"), "nom", array(), "array"), $context["i"], array(), "array"), "html", null, true);
                echo "</span> <span class=\"tdDel\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("deleteArticle", array("nom" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "panier"), "method"), "nom", array(), "array"), $context["i"], array(), "array"))), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn btn-outline-danger\"><i class=\"fa fa-remove\"></i></button></a></span>
                </div>
              </td>
              <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "panier"), "method"), "qte", array(), "array"), $context["i"], array(), "array"), "html", null, true);
                echo "</td>
              <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "panier"), "method"), "prix", array(), "array"), $context["i"], array(), "array"), "html", null, true);
                echo "€</td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "        </tbody>
      </table>
      <div class=\"divValidBasket\">
        <a href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emptyBasket");
            echo "\"><button type=\"button\" class=\"btn btn-outline-danger\">Vider le panier</button></a>
        <div>
          <p>Montant total: ";
            // line 36
            echo twig_escape_filter($this->env, ($context["totalPrice"] ?? $this->getContext($context, "totalPrice")), "html", null, true);
            echo "€</p>
          <a href=\"#\"><button type=\"button\" class=\"btn btn-outline-primary\">Valider la commande</button></a>
        </div>
      </div>
    ";
        }
        // line 41
        echo "
    </div>

  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@App/basket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 41,  112 => 36,  107 => 34,  102 => 31,  93 => 28,  89 => 27,  81 => 24,  76 => 21,  72 => 20,  60 => 10,  56 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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

    <div id=\"Panier\">

    {% if nbArticles < 0 %}
      <h1>Votre panier est vide !</h1>
    {% else %}
      <h1>Votre Panier</h1>
      <table class=\"table table-bordered\">
        <thead class=\"thead-dark\">
          <tr>
            <th scope=\"col\">Nom du produit</th>
            <th scope=\"col\">Quantitée</th>
            <th scope=\"col\">Prix</th>
          </tr>
        </thead>
        <tbody style=\"background-color:white;\">
          {% for i in 0..nbArticles %}
            <tr>
              <td>
                <div class=\"divNomBasket\">
                  <span class=\"tdNom\">{{ app.session.get('panier')['nom'][i] }}</span> <span class=\"tdDel\"><a href=\"{{ path('deleteArticle', {'nom': app.session.get('panier')['nom'][i] }) }}\"><button type=\"button\" class=\"btn btn-outline-danger\"><i class=\"fa fa-remove\"></i></button></a></span>
                </div>
              </td>
              <td>{{ app.session.get('panier')['qte'][i] }}</td>
              <td>{{ app.session.get('panier')['prix'][i] }}€</td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
      <div class=\"divValidBasket\">
        <a href=\"{{ path('emptyBasket') }}\"><button type=\"button\" class=\"btn btn-outline-danger\">Vider le panier</button></a>
        <div>
          <p>Montant total: {{ totalPrice }}€</p>
          <a href=\"#\"><button type=\"button\" class=\"btn btn-outline-primary\">Valider la commande</button></a>
        </div>
      </div>
    {% endif %}

    </div>

  {% endblock %}
", "@App/basket.html.twig", "/Users/thibault/Desktop/Cour/PHP/SYMF3.4/src/AppBundle/Resources/views/basket.html.twig");
    }
}

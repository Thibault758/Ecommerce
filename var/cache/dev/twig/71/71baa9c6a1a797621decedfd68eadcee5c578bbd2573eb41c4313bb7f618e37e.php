<?php

/* layout.html.twig */
class __TwigTemplate_3f4551c579fab3714d4a46fc656e7dda3a7f0bce458c39082f45b38a616fe766 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
  <head>
    <meta charset=\"utf-8\">
    <title></title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/css/css.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
  </head>
  <body>
      <header>
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
          <a class=\"navbar-brand\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">ECIG SHOP</a>
          <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>

          <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  E-Cigarettes
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                  <a class=\"dropdown-item\" href=\"#\">Action</a>
                  <a class=\"dropdown-item\" href=\"#\">Another action</a>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                </div>
              </li>
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  E-Liquides
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                  <a class=\"dropdown-item\" href=\"#\">Action</a>
                  <a class=\"dropdown-item\" href=\"#\">Another action</a>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                </div>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link</a>
                </li>
              </li>
            </ul>
            <form class=\"form-inline my-2 my-lg-0\">
              <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
              <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
            </form>
          </div>
        </nav>

        <div>
          <div class=\"connect bg-light\">
            <p>Bienvenue | <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\">Connection</a></p>
            <a class=\"panier\" href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("basket");
        echo "\">
              <i class=\"fa fa-shopping-cart\"></i> :
              ";
        // line 58
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array(), "any", false, true), "get", array(0 => "nombre"), "method", true, true)) {
            // line 59
            echo "              ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "nombre"), "method"), "html", null, true);
            echo "
              ";
        } else {
            // line 61
            echo "              0
              ";
        }
        // line 63
        echo "              article(s)
            </a>
            <!-- ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "panier"), "method"));
        echo " -->
          </div>
        </div>
      </header>

        <section id=\"slider\">
          <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
            <ol class=\"carousel-indicators\">
              <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
              <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
              <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\">
              <div class=\"carousel-item active\">
                <img class=\"d-block w-100\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/pictures/slide/e1.jpg"), "html", null, true);
        echo "\" alt=\"First slide\">
              </div>
              <div class=\"carousel-item\">
                <img class=\"d-block w-100\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/pictures/slide/e2.jpg"), "html", null, true);
        echo "\" alt=\"Second slide\">
              </div>
              <div class=\"carousel-item\">
                <img class=\"d-block w-100\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/pictures/slide/e3.jpg"), "html", null, true);
        echo "\" alt=\"Third slide\">
              </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
              <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
              <span class=\"sr-only\">Next</span>
            </a>
          </div>
        </section>

    <div class=\"container\">

        ";
        // line 101
        $this->displayBlock('body', $context, $blocks);
        // line 103
        echo "
    </div>

    <footer>
      <p>©fonkydev</p>
    </footer>


    <script
\t\t\t  src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
\t\t\t  integrity=\"sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=\"
\t\t\t  crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\">
    </script>
  </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 101
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 102
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 102,  189 => 101,  163 => 103,  161 => 101,  142 => 85,  136 => 82,  130 => 79,  113 => 65,  109 => 63,  105 => 61,  99 => 59,  97 => 58,  92 => 56,  88 => 55,  43 => 13,  35 => 8,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
  <head>
    <meta charset=\"utf-8\">
    <title></title>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\">
    <link href=\"{{ asset('bundles/app/css/css.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
  </head>
  <body>
      <header>
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
          <a class=\"navbar-brand\" href=\"{{ path('home') }}\">ECIG SHOP</a>
          <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>

          <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  E-Cigarettes
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                  <a class=\"dropdown-item\" href=\"#\">Action</a>
                  <a class=\"dropdown-item\" href=\"#\">Another action</a>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                </div>
              </li>
              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                  E-Liquides
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                  <a class=\"dropdown-item\" href=\"#\">Action</a>
                  <a class=\"dropdown-item\" href=\"#\">Another action</a>
                  <div class=\"dropdown-divider\"></div>
                  <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                </div>
                <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"#\">Link</a>
                </li>
              </li>
            </ul>
            <form class=\"form-inline my-2 my-lg-0\">
              <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
              <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
            </form>
          </div>
        </nav>

        <div>
          <div class=\"connect bg-light\">
            <p>Bienvenue | <a href=\"{{ path('fos_user_security_login') }}\">Connection</a></p>
            <a class=\"panier\" href=\"{{ path('basket') }}\">
              <i class=\"fa fa-shopping-cart\"></i> :
              {% if app.session.get('nombre') is defined %}
              {{ app.session.get('nombre') }}
              {% else %}
              0
              {% endif %}
              article(s)
            </a>
            <!-- {{ dump(app.session.get('panier'))}} -->
          </div>
        </div>
      </header>

        <section id=\"slider\">
          <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
            <ol class=\"carousel-indicators\">
              <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
              <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
              <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
            </ol>
            <div class=\"carousel-inner\">
              <div class=\"carousel-item active\">
                <img class=\"d-block w-100\" src=\"{{ asset('bundles/app/pictures/slide/e1.jpg') }}\" alt=\"First slide\">
              </div>
              <div class=\"carousel-item\">
                <img class=\"d-block w-100\" src=\"{{ asset('bundles/app/pictures/slide/e2.jpg') }}\" alt=\"Second slide\">
              </div>
              <div class=\"carousel-item\">
                <img class=\"d-block w-100\" src=\"{{ asset('bundles/app/pictures/slide/e3.jpg') }}\" alt=\"Third slide\">
              </div>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
              <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
              <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
              <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
              <span class=\"sr-only\">Next</span>
            </a>
          </div>
        </section>

    <div class=\"container\">

        {% block body %}
        {% endblock %}

    </div>

    <footer>
      <p>©fonkydev</p>
    </footer>


    <script
\t\t\t  src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
\t\t\t  integrity=\"sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=\"
\t\t\t  crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js\">
    </script>
  </body>
</html>
", "layout.html.twig", "/Users/thibault/Desktop/Cour/PHP/SYMF3.4/app/Resources/views/layout.html.twig");
    }
}

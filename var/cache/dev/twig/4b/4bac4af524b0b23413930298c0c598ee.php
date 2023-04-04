<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* inc/navbar.html.twig */
class __TwigTemplate_f4d4137dac47cfa9d21434d717624ef4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-sm navbar-dark bg-primary mb-3\">
<div class=\"container\">
<a href=\"/\" class=\"navbar-brand\">Yassine Ben Jeddou</a>
<button class=\"navbar-toggler\" type=\"button\" data-
toggle=\"collapse\" data-target=\"#mobile-nav\">
<span class=\"navbar-toggle-icon\"></span>
</button>
<div class=\"collapse navbar-collapse\" id=\"mobile-nav\">
<ul class=\"navbar-nav ml-auto\">
<li class=\"nav-item\">
<a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allArticles");
        echo "\" class=\"nav-link\">Home</a>
</li>
<li class=\"nav-item\">
<a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addArticle");
        echo "\" class=\"nav-link\">Ajouter article</a>
</li>
<li class=\"nav-item\">
<a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("new_category");
        echo "\" class=\"nav-link\">Ajouter catégorie</a>
</li>
<li class=\"nav-item\">
<a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_par_cat");
        echo "\" class=\"nav-link\">Recherche par catégorie</a>
</li>
<li class=\"nav-item\">
<a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_par_prix");
        echo "\" class=\"nav-link\">Recherche par prix</a>
</li>
</ul>
</div>
</div>
</nav>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "inc/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  70 => 20,  64 => 17,  58 => 14,  52 => 11,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-sm navbar-dark bg-primary mb-3\">
<div class=\"container\">
<a href=\"/\" class=\"navbar-brand\">Yassine Ben Jeddou</a>
<button class=\"navbar-toggler\" type=\"button\" data-
toggle=\"collapse\" data-target=\"#mobile-nav\">
<span class=\"navbar-toggle-icon\"></span>
</button>
<div class=\"collapse navbar-collapse\" id=\"mobile-nav\">
<ul class=\"navbar-nav ml-auto\">
<li class=\"nav-item\">
<a href=\"{{path ('allArticles')}}\" class=\"nav-link\">Home</a>
</li>
<li class=\"nav-item\">
<a href=\"{{ path('addArticle')}}\" class=\"nav-link\">Ajouter article</a>
</li>
<li class=\"nav-item\">
<a href=\"{{ path('new_category')}}\" class=\"nav-link\">Ajouter catégorie</a>
</li>
<li class=\"nav-item\">
<a href=\"{{ path('article_par_cat')}}\" class=\"nav-link\">Recherche par catégorie</a>
</li>
<li class=\"nav-item\">
<a href=\"{{path('article_par_prix')}}\" class=\"nav-link\">Recherche par prix</a>
</li>
</ul>
</div>
</div>
</nav>", "inc/navbar.html.twig", "/var/www/html/tp7/templates/inc/navbar.html.twig");
    }
}

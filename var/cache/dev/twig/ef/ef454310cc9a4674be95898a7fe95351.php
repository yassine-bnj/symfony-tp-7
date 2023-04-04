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

/* articles/articlesParPrix.html.twig */
class __TwigTemplate_bfdb026078c6fb57cf9fc5665b02b23c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/articlesParPrix.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "articles/articlesParPrix.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Liste des Articles par prix";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form_start');
        echo "
<div class=\"form-row align-items-end\" >
<div class=\"col\">
";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "minPrice", [], "any", false, false, false, 7), 'row');
        echo "
</div>
<div class=\"col\">
";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "maxPrice", [], "any", false, false, false, 10), 'row');
        echo "
</div>
<div class=\"col\">
<div class=\"form-group\">
<button type=\"submit\" class=\"btn btn-success\">Rechercher</button>
</div>
</div>
</div>
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_end');
        echo "
";
        // line 19
        if ((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 19, $this->source); })())) {
            // line 20
            echo "<table id=\"articles\" class=\"table table-striped\">
<thead>
<tr>
<th>Nom</th>
<th>Prix</th>
<th>Catégorie</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 31
                echo "<tr>
<td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nom", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>
<td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prix", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
<td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 34), "titre", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
<td>
<a href=\"/article/";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 36), "html", null, true);
                echo "\" class=\"btn btn-
dark\">Détails</a>
<a href=\"/article/edit/";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 38), "html", null, true);
                echo "\" class=\"btn btn-
dark\">Modifier</a>
<a href=\"/article/delete/";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 40), "html", null, true);
                echo "\" class=\"btn btn-
danger\"
onclick=\"return confirm('Etes-
vous sûr de supprimer cet article?');\">Supprimer</a>
</td>
</tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "</tbody>
</table>
";
        } else {
            // line 50
            echo "<p>Aucun articles</p>
";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "articles/articlesParPrix.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 50,  157 => 47,  144 => 40,  139 => 38,  134 => 36,  129 => 34,  125 => 33,  121 => 32,  118 => 31,  114 => 30,  102 => 20,  100 => 19,  96 => 18,  85 => 10,  79 => 7,  73 => 4,  66 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title%} Liste des Articles par prix{% endblock %}
{% block body %}
{{ form_start(form) }}
<div class=\"form-row align-items-end\" >
<div class=\"col\">
{{ form_row(form.minPrice) }}
</div>
<div class=\"col\">
{{ form_row(form.maxPrice) }}
</div>
<div class=\"col\">
<div class=\"form-group\">
<button type=\"submit\" class=\"btn btn-success\">Rechercher</button>
</div>
</div>
</div>
{{ form_end(form) }}
{% if articles %}
<table id=\"articles\" class=\"table table-striped\">
<thead>
<tr>
<th>Nom</th>
<th>Prix</th>
<th>Catégorie</th>
<th>Actions</th>
</tr>
</thead>
<tbody>
{% for article in articles %}
<tr>
<td>{{ article.nom }}</td>
<td>{{ article.prix }}</td>
<td>{{ article.category.titre }}</td>
<td>
<a href=\"/article/{{ article.id }}\" class=\"btn btn-
dark\">Détails</a>
<a href=\"/article/edit/{{ article.id }}\" class=\"btn btn-
dark\">Modifier</a>
<a href=\"/article/delete/{{ article.id }}\" class=\"btn btn-
danger\"
onclick=\"return confirm('Etes-
vous sûr de supprimer cet article?');\">Supprimer</a>
</td>
</tr>
{% endfor %}
</tbody>
</table>
{% else %}
<p>Aucun articles</p>
{% endif %}
{% endblock %}", "articles/articlesParPrix.html.twig", "/var/www/html/tp7/templates/articles/articlesParPrix.html.twig");
    }
}

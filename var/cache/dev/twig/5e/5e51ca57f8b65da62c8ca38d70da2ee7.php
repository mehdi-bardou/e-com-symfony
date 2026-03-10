<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* shop/products_by_category.html.twig */
class __TwigTemplate_e40acee3768a795ae9f7442003706934 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'nav_categories' => [$this, 'block_nav_categories'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/products_by_category.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 3, $this->source); })())), "html", null, true);
        yield " - Our Store";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_nav_categories(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_categories"));

        yield "active";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "
    ";
        // line 10
        yield "    <div class=\"container mt-4\">
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-decoration-none\">Home</a></li>
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories");
        yield "\" class=\"text-decoration-none\">Categories</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 15, $this->source); })())), "html", null, true);
        yield "</li>
            </ol>
        </nav>
    </div>

    ";
        // line 21
        yield "    <div class=\"container my-4\">
        <div class=\"p-5 mb-4 bg-primary bg-gradient text-white rounded-3\">
            <div class=\"container-fluid py-3\">
                <h1 class=\"display-4 fw-bold\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 24, $this->source); })())), "html", null, true);
        yield "</h1>
                <p class=\"col-md-8 fs-5\">
                    Discover the latest products in this category.
                    Find everything you need at great prices.
                </p>
                <span class=\"badge bg-light text-dark fs-6\">12 Products Available</span>
            </div>
        </div>
    </div>

    ";
        // line 35
        yield "    <div class=\"container mb-5\">
        <div class=\"row row-cols-1 row-cols-md-3 g-4\">

            <div class=\"col\">
                <div class=\"card h-100\">
                    <img src=\"/images/item.png\" class=\"card-img-top\" alt=\"Product\">
                    <div class=\"card-body\">
                        <span class=\"badge bg-primary mb-2\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 42, $this->source); })())), "html", null, true);
        yield "</span>
                        <h5 class=\"card-title\">Wireless Headphones</h5>
                        <p class=\"card-text fw-bold text-success\">\$79.99</p>
                        <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_details", ["id" => 1]);
        yield "\" class=\"btn btn-outline-primary\">View Details</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100\">
                    <img src=\"/images/item.png\" class=\"card-img-top\" alt=\"Product\">
                    <div class=\"card-body\">
                        <span class=\"badge bg-primary mb-2\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 54, $this->source); })())), "html", null, true);
        yield "</span>
                        <h5 class=\"card-title\">Bluetooth Speaker</h5>
                        <p class=\"card-text fw-bold text-success\">\$59.99</p>
                        <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_details", ["id" => 5]);
        yield "\" class=\"btn btn-outline-primary\">View Details</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100\">
                    <img src=\"/images/mouse.png\" class=\"card-img-top\" alt=\"Product\">
                    <div class=\"card-body\">
                        <span class=\"badge bg-primary mb-2\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 66, $this->source); })())), "html", null, true);
        yield "</span>
                        <h5 class=\"card-title\">Wireless Mouse</h5>
                        <p class=\"card-text fw-bold text-success\">\$39.99</p>
                        <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_details", ["id" => 7]);
        yield "\" class=\"btn btn-outline-primary\">View Details</a>
                    </div>
                </div>
            </div>

        </div>

        ";
        // line 77
        yield "        <nav class=\"mt-4\" aria-label=\"Products pagination\">
            <ul class=\"pagination justify-content-center\">
                <li class=\"page-item disabled\">
                    <a class=\"page-link\" href=\"#\" tabindex=\"-1\">Previous</a>
                </li>
                <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"#\">Next</a>
                </li>
            </ul>
        </nav>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "shop/products_by_category.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  207 => 77,  197 => 69,  191 => 66,  179 => 57,  173 => 54,  161 => 45,  155 => 42,  146 => 35,  133 => 24,  128 => 21,  120 => 15,  116 => 14,  112 => 13,  107 => 10,  104 => 8,  94 => 7,  77 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ category|capitalize }} - Our Store{% endblock %}

{% block nav_categories %}active{% endblock %}

{% block body %}

    {# ===== BREADCRUMB ===== #}
    <div class=\"container mt-4\">
        <nav aria-label=\"breadcrumb\">
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\" class=\"text-decoration-none\">Home</a></li>
                <li class=\"breadcrumb-item\"><a href=\"{{ path('app_categories') }}\" class=\"text-decoration-none\">Categories</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">{{ category|capitalize }}</li>
            </ol>
        </nav>
    </div>

    {# ===== JUMBOTRON CATÉGORIE ===== #}
    <div class=\"container my-4\">
        <div class=\"p-5 mb-4 bg-primary bg-gradient text-white rounded-3\">
            <div class=\"container-fluid py-3\">
                <h1 class=\"display-4 fw-bold\">{{ category|capitalize }}</h1>
                <p class=\"col-md-8 fs-5\">
                    Discover the latest products in this category.
                    Find everything you need at great prices.
                </p>
                <span class=\"badge bg-light text-dark fs-6\">12 Products Available</span>
            </div>
        </div>
    </div>

    {# ===== GRILLE PRODUITS ===== #}
    <div class=\"container mb-5\">
        <div class=\"row row-cols-1 row-cols-md-3 g-4\">

            <div class=\"col\">
                <div class=\"card h-100\">
                    <img src=\"/images/item.png\" class=\"card-img-top\" alt=\"Product\">
                    <div class=\"card-body\">
                        <span class=\"badge bg-primary mb-2\">{{ category|capitalize }}</span>
                        <h5 class=\"card-title\">Wireless Headphones</h5>
                        <p class=\"card-text fw-bold text-success\">\$79.99</p>
                        <a href=\"{{ path('app_product_details', {id: 1}) }}\" class=\"btn btn-outline-primary\">View Details</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100\">
                    <img src=\"/images/item.png\" class=\"card-img-top\" alt=\"Product\">
                    <div class=\"card-body\">
                        <span class=\"badge bg-primary mb-2\">{{ category|capitalize }}</span>
                        <h5 class=\"card-title\">Bluetooth Speaker</h5>
                        <p class=\"card-text fw-bold text-success\">\$59.99</p>
                        <a href=\"{{ path('app_product_details', {id: 5}) }}\" class=\"btn btn-outline-primary\">View Details</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100\">
                    <img src=\"/images/mouse.png\" class=\"card-img-top\" alt=\"Product\">
                    <div class=\"card-body\">
                        <span class=\"badge bg-primary mb-2\">{{ category|capitalize }}</span>
                        <h5 class=\"card-title\">Wireless Mouse</h5>
                        <p class=\"card-text fw-bold text-success\">\$39.99</p>
                        <a href=\"{{ path('app_product_details', {id: 7}) }}\" class=\"btn btn-outline-primary\">View Details</a>
                    </div>
                </div>
            </div>

        </div>

        {# ===== PAGINATION ===== #}
        <nav class=\"mt-4\" aria-label=\"Products pagination\">
            <ul class=\"pagination justify-content-center\">
                <li class=\"page-item disabled\">
                    <a class=\"page-link\" href=\"#\" tabindex=\"-1\">Previous</a>
                </li>
                <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"#\">Next</a>
                </li>
            </ul>
        </nav>
    </div>

{% endblock %}
", "shop/products_by_category.html.twig", "C:\\Users\\NITRO17\\Desktop\\symfony-ecommerce\\templates\\shop\\products_by_category.html.twig");
    }
}

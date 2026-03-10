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

/* shop/product_details.html.twig */
class __TwigTemplate_34c4f5dc4fcd81d9189ca1e730598f01 extends Template
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
            'nav_products' => [$this, 'block_nav_products'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/product_details.html.twig"));

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

        yield "Product Details - Our Store";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_nav_products(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_products"));

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
    <div class=\"container my-5\">
        <div class=\"row\">

            ";
        // line 13
        yield "            <div class=\"col-md-6\">
                <img src=\"/images/airbod.png\" class=\"img-fluid rounded\" alt=\"Product\">
            </div>

            ";
        // line 18
        yield "            <div class=\"col-md-6\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-decoration-none\">Home</a></li>
                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
        yield "\" class=\"text-decoration-none\">Products</a></li>
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">Product Details</li>
                    </ol>
                </nav>

                <span class=\"badge bg-primary mb-3\">Electronics</span>

                <h1 class=\"mb-3\">Wireless Headphones</h1>

                <h3 class=\"text-success mb-4\">\$79.99</h3>

                <div class=\"mb-4\">
                    <h5>Description</h5>
                    <p class=\"text-muted\">
                        Experience premium sound quality with our wireless headphones.
                        Featuring advanced noise cancellation technology, comfortable over-ear design,
                        and up to 30 hours of battery life. Perfect for music lovers, travelers, and professionals.
                        The foldable design makes them easy to carry, while the premium materials ensure durability
                        and long-lasting comfort.
                    </p>
                </div>

                ";
        // line 45
        yield "                <form action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
        yield "\" method=\"post\">
                    <div class=\"mb-3\">
                        <label for=\"quantity\" class=\"form-label\">Quantity</label>
                        <input type=\"number\" class=\"form-control\" id=\"quantity\" name=\"quantity\"
                               value=\"1\" min=\"1\" max=\"10\" style=\"max-width: 100px;\">
                    </div>

                    <div class=\"d-grid gap-2 d-md-flex\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg\">Add to Cart</button>
                        <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
        yield "\" class=\"btn btn-outline-secondary btn-lg\">Continue Shopping</a>
                    </div>
                </form>

                ";
        // line 59
        yield "                <div class=\"mt-4 pt-4 border-top\">
                    <ul class=\"list-unstyled\">
                        <li class=\"mb-2\"><strong>SKU:</strong> WH-2024-001</li>
                        <li class=\"mb-2\"><strong>Availability:</strong> <span class=\"text-success\">In Stock</span></li>
                        <li class=\"mb-2\"><strong>Category:</strong> Electronics</li>
                    </ul>
                </div>
            </div>

        </div>
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
        return "shop/product_details.html.twig";
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
        return array (  169 => 59,  162 => 54,  149 => 45,  124 => 22,  120 => 21,  115 => 18,  109 => 13,  103 => 8,  93 => 7,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Product Details - Our Store{% endblock %}

{% block nav_products %}active{% endblock %}

{% block body %}

    <div class=\"container my-5\">
        <div class=\"row\">

            {# ===== IMAGE PRODUIT ===== #}
            <div class=\"col-md-6\">
                <img src=\"/images/airbod.png\" class=\"img-fluid rounded\" alt=\"Product\">
            </div>

            {# ===== INFORMATIONS PRODUIT ===== #}
            <div class=\"col-md-6\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb\">
                        <li class=\"breadcrumb-item\"><a href=\"{{ path('app_home') }}\" class=\"text-decoration-none\">Home</a></li>
                        <li class=\"breadcrumb-item\"><a href=\"{{ path('app_products') }}\" class=\"text-decoration-none\">Products</a></li>
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">Product Details</li>
                    </ol>
                </nav>

                <span class=\"badge bg-primary mb-3\">Electronics</span>

                <h1 class=\"mb-3\">Wireless Headphones</h1>

                <h3 class=\"text-success mb-4\">\$79.99</h3>

                <div class=\"mb-4\">
                    <h5>Description</h5>
                    <p class=\"text-muted\">
                        Experience premium sound quality with our wireless headphones.
                        Featuring advanced noise cancellation technology, comfortable over-ear design,
                        and up to 30 hours of battery life. Perfect for music lovers, travelers, and professionals.
                        The foldable design makes them easy to carry, while the premium materials ensure durability
                        and long-lasting comfort.
                    </p>
                </div>

                {# ===== FORMULAIRE AJOUT AU PANIER ===== #}
                <form action=\"{{ path('app_cart') }}\" method=\"post\">
                    <div class=\"mb-3\">
                        <label for=\"quantity\" class=\"form-label\">Quantity</label>
                        <input type=\"number\" class=\"form-control\" id=\"quantity\" name=\"quantity\"
                               value=\"1\" min=\"1\" max=\"10\" style=\"max-width: 100px;\">
                    </div>

                    <div class=\"d-grid gap-2 d-md-flex\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg\">Add to Cart</button>
                        <a href=\"{{ path('app_products') }}\" class=\"btn btn-outline-secondary btn-lg\">Continue Shopping</a>
                    </div>
                </form>

                {# ===== INFOS SUPPLÉMENTAIRES ===== #}
                <div class=\"mt-4 pt-4 border-top\">
                    <ul class=\"list-unstyled\">
                        <li class=\"mb-2\"><strong>SKU:</strong> WH-2024-001</li>
                        <li class=\"mb-2\"><strong>Availability:</strong> <span class=\"text-success\">In Stock</span></li>
                        <li class=\"mb-2\"><strong>Category:</strong> Electronics</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

{% endblock %}
", "shop/product_details.html.twig", "C:\\Users\\NITRO17\\Desktop\\symfony-ecommerce\\templates\\shop\\product_details.html.twig");
    }
}

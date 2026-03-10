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

/* shop/products.html.twig */
class __TwigTemplate_638d12b14a19f95e63ba7dab0fc3a258 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/products.html.twig"));

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

        yield "Products - Our Store";
        
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
        <h1 class=\"mb-4\">Our Products</h1>

        <div class=\"row row-cols-1 row-cols-md-3 g-4\">

            <div class=\"col\">
                <div class=\"card h-100\">
                    <img src=\"/images/item.png\" class=\"card-img-top\" alt=\"Product 1\">
                    <div class=\"card-body\">
                        <span class=\"badge bg-primary mb-2\">Electronics</span>
                        <h5 class=\"card-title\">Wireless Headphones</h5>
                        <p class=\"card-text fw-bold text-success\">\$79.99</p>
                        <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_details", ["id" => 1]);
        yield "\" class=\"btn btn-outline-primary\">View Details</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100\">
                    <img src=\"/images/item.png\" class=\"card-img-top\" alt=\"Product 2\">
                    <div class=\"card-body\">
                        <span class=\"badge bg-warning mb-2\">Fashion</span>
                        <h5 class=\"card-title\">Classic Leather Jacket</h5>
                        <p class=\"card-text fw-bold text-success\">\$149.99</p>
                        <a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_details", ["id" => 2]);
        yield "\" class=\"btn btn-outline-primary\">View Details</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100\">
                    <img src=\"/images/item.png\" class=\"card-img-top\" alt=\"Product 3\">
                    <div class=\"card-body\">
                        <span class=\"badge bg-success mb-2\">Home &amp; Garden</span>
                        <h5 class=\"card-title\">Smart Plant Sensor</h5>
                        <p class=\"card-text fw-bold text-success\">\$34.99</p>
                        <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_details", ["id" => 3]);
        yield "\" class=\"btn btn-outline-primary\">View Details</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100\">
                    <img src=\"/images/item.png\" class=\"card-img-top\" alt=\"Product 4\">
                    <div class=\"card-body\">
                        <span class=\"badge bg-info mb-2\">Sports</span>
                        <h5 class=\"card-title\">Yoga Mat Premium</h5>
                        <p class=\"card-text fw-bold text-success\">\$29.99</p>
                        <a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_details", ["id" => 4]);
        yield "\" class=\"btn btn-outline-primary\">View Details</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100\">
                    <img src=\"/images/item.png\" class=\"card-img-top\" alt=\"Product 5\">
                    <div class=\"card-body\">
                        <span class=\"badge bg-primary mb-2\">Electronics</span>
                        <h5 class=\"card-title\">Bluetooth Speaker</h5>
                        <p class=\"card-text fw-bold text-success\">\$59.99</p>
                        <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_details", ["id" => 5]);
        yield "\" class=\"btn btn-outline-primary\">View Details</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100\">
                    <img src=\"/images/item.png\" class=\"card-img-top\" alt=\"Product 6\">
                    <div class=\"card-body\">
                        <span class=\"badge bg-danger mb-2\">Books</span>
                        <h5 class=\"card-title\">Web Development Guide</h5>
                        <p class=\"card-text fw-bold text-success\">\$24.99</p>
                        <a href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_details", ["id" => 6]);
        yield "\" class=\"btn btn-outline-primary\">View Details</a>
                    </div>
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
        return "shop/products.html.twig";
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
        return array (  193 => 81,  178 => 69,  163 => 57,  148 => 45,  133 => 33,  118 => 21,  103 => 8,  93 => 7,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Products - Our Store{% endblock %}

{% block nav_products %}active{% endblock %}

{% block body %}

    <div class=\"container my-5\">
        <h1 class=\"mb-4\">Our Products</h1>

        <div class=\"row row-cols-1 row-cols-md-3 g-4\">

            <div class=\"col\">
                <div class=\"card h-100\">
                    <img src=\"/images/item.png\" class=\"card-img-top\" alt=\"Product 1\">
                    <div class=\"card-body\">
                        <span class=\"badge bg-primary mb-2\">Electronics</span>
                        <h5 class=\"card-title\">Wireless Headphones</h5>
                        <p class=\"card-text fw-bold text-success\">\$79.99</p>
                        <a href=\"{{ path('app_product_details', {id: 1}) }}\" class=\"btn btn-outline-primary\">View Details</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100\">
                    <img src=\"/images/item.png\" class=\"card-img-top\" alt=\"Product 2\">
                    <div class=\"card-body\">
                        <span class=\"badge bg-warning mb-2\">Fashion</span>
                        <h5 class=\"card-title\">Classic Leather Jacket</h5>
                        <p class=\"card-text fw-bold text-success\">\$149.99</p>
                        <a href=\"{{ path('app_product_details', {id: 2}) }}\" class=\"btn btn-outline-primary\">View Details</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100\">
                    <img src=\"/images/item.png\" class=\"card-img-top\" alt=\"Product 3\">
                    <div class=\"card-body\">
                        <span class=\"badge bg-success mb-2\">Home &amp; Garden</span>
                        <h5 class=\"card-title\">Smart Plant Sensor</h5>
                        <p class=\"card-text fw-bold text-success\">\$34.99</p>
                        <a href=\"{{ path('app_product_details', {id: 3}) }}\" class=\"btn btn-outline-primary\">View Details</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100\">
                    <img src=\"/images/item.png\" class=\"card-img-top\" alt=\"Product 4\">
                    <div class=\"card-body\">
                        <span class=\"badge bg-info mb-2\">Sports</span>
                        <h5 class=\"card-title\">Yoga Mat Premium</h5>
                        <p class=\"card-text fw-bold text-success\">\$29.99</p>
                        <a href=\"{{ path('app_product_details', {id: 4}) }}\" class=\"btn btn-outline-primary\">View Details</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100\">
                    <img src=\"/images/item.png\" class=\"card-img-top\" alt=\"Product 5\">
                    <div class=\"card-body\">
                        <span class=\"badge bg-primary mb-2\">Electronics</span>
                        <h5 class=\"card-title\">Bluetooth Speaker</h5>
                        <p class=\"card-text fw-bold text-success\">\$59.99</p>
                        <a href=\"{{ path('app_product_details', {id: 5}) }}\" class=\"btn btn-outline-primary\">View Details</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100\">
                    <img src=\"/images/item.png\" class=\"card-img-top\" alt=\"Product 6\">
                    <div class=\"card-body\">
                        <span class=\"badge bg-danger mb-2\">Books</span>
                        <h5 class=\"card-title\">Web Development Guide</h5>
                        <p class=\"card-text fw-bold text-success\">\$24.99</p>
                        <a href=\"{{ path('app_product_details', {id: 6}) }}\" class=\"btn btn-outline-primary\">View Details</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

{% endblock %}
", "shop/products.html.twig", "C:\\Users\\NITRO17\\Desktop\\symfony-ecommerce\\templates\\shop\\products.html.twig");
    }
}

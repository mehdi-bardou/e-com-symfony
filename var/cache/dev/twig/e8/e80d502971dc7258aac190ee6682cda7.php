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

/* shop/browse_categories.html.twig */
class __TwigTemplate_5e5cbe783382d68eb592701a90ce96d8 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/browse_categories.html.twig"));

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

        yield "Categories - Our Store";
        
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
    <div class=\"container my-5\">
        <h1 class=\"mb-2\">Browse Categories</h1>
        <p class=\"text-muted mb-5\">Find exactly what you're looking for by browsing our categories</p>

        <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4\">

            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    <div class=\"card-body text-center py-4\">
                        <div class=\"mb-3\">
                            <span class=\"badge bg-primary fs-6 px-3 py-2\">Electronics</span>
                        </div>
                        <h4 class=\"card-title\">Electronics</h4>
                        <p class=\"card-text text-muted\">Headphones, speakers, gadgets and more</p>
                        <p class=\"text-muted\"><small>12 products available</small></p>
                        <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products_by_category", ["slug" => "electronics"]);
        yield "\" class=\"btn btn-outline-primary\">Browse Electronics</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    <div class=\"card-body text-center py-4\">
                        <div class=\"mb-3\">
                            <span class=\"badge bg-warning fs-6 px-3 py-2\">Fashion</span>
                        </div>
                        <h4 class=\"card-title\">Fashion</h4>
                        <p class=\"card-text text-muted\">Clothing, accessories and footwear</p>
                        <p class=\"text-muted\"><small>18 products available</small></p>
                        <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products_by_category", ["slug" => "fashion"]);
        yield "\" class=\"btn btn-outline-warning\">Browse Fashion</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    <div class=\"card-body text-center py-4\">
                        <div class=\"mb-3\">
                            <span class=\"badge bg-success fs-6 px-3 py-2\">Home &amp; Garden</span>
                        </div>
                        <h4 class=\"card-title\">Home &amp; Garden</h4>
                        <p class=\"card-text text-muted\">Furniture, decor and gardening tools</p>
                        <p class=\"text-muted\"><small>15 products available</small></p>
                        <a href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products_by_category", ["slug" => "home-garden"]);
        yield "\" class=\"btn btn-outline-success\">Browse Home &amp; Garden</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    <div class=\"card-body text-center py-4\">
                        <div class=\"mb-3\">
                            <span class=\"badge bg-info fs-6 px-3 py-2\">Sports</span>
                        </div>
                        <h4 class=\"card-title\">Sports &amp; Fitness</h4>
                        <p class=\"card-text text-muted\">Equipment, apparel and accessories</p>
                        <p class=\"text-muted\"><small>10 products available</small></p>
                        <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products_by_category", ["slug" => "sports"]);
        yield "\" class=\"btn btn-outline-info\">Browse Sports</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    <div class=\"card-body text-center py-4\">
                        <div class=\"mb-3\">
                            <span class=\"badge bg-danger fs-6 px-3 py-2\">Books</span>
                        </div>
                        <h4 class=\"card-title\">Books</h4>
                        <p class=\"card-text text-muted\">Bestsellers, textbooks and more</p>
                        <p class=\"text-muted\"><small>8 products available</small></p>
                        <a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products_by_category", ["slug" => "books"]);
        yield "\" class=\"btn btn-outline-danger\">Browse Books</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    <div class=\"card-body text-center py-4\">
                        <div class=\"mb-3\">
                            <span class=\"badge bg-secondary fs-6 px-3 py-2\">More</span>
                        </div>
                        <h4 class=\"card-title\">Other</h4>
                        <p class=\"card-text text-muted\">Miscellaneous items and accessories</p>
                        <p class=\"text-muted\"><small>5 products available</small></p>
                        <a href=\"";
        // line 94
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products_by_category", ["slug" => "other"]);
        yield "\" class=\"btn btn-outline-secondary\">Browse Other</a>
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
        return "shop/browse_categories.html.twig";
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
        return array (  206 => 94,  189 => 80,  172 => 66,  155 => 52,  138 => 38,  121 => 24,  103 => 8,  93 => 7,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Categories - Our Store{% endblock %}

{% block nav_categories %}active{% endblock %}

{% block body %}

    <div class=\"container my-5\">
        <h1 class=\"mb-2\">Browse Categories</h1>
        <p class=\"text-muted mb-5\">Find exactly what you're looking for by browsing our categories</p>

        <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4\">

            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    <div class=\"card-body text-center py-4\">
                        <div class=\"mb-3\">
                            <span class=\"badge bg-primary fs-6 px-3 py-2\">Electronics</span>
                        </div>
                        <h4 class=\"card-title\">Electronics</h4>
                        <p class=\"card-text text-muted\">Headphones, speakers, gadgets and more</p>
                        <p class=\"text-muted\"><small>12 products available</small></p>
                        <a href=\"{{ path('app_products_by_category', {slug: 'electronics'}) }}\" class=\"btn btn-outline-primary\">Browse Electronics</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    <div class=\"card-body text-center py-4\">
                        <div class=\"mb-3\">
                            <span class=\"badge bg-warning fs-6 px-3 py-2\">Fashion</span>
                        </div>
                        <h4 class=\"card-title\">Fashion</h4>
                        <p class=\"card-text text-muted\">Clothing, accessories and footwear</p>
                        <p class=\"text-muted\"><small>18 products available</small></p>
                        <a href=\"{{ path('app_products_by_category', {slug: 'fashion'}) }}\" class=\"btn btn-outline-warning\">Browse Fashion</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    <div class=\"card-body text-center py-4\">
                        <div class=\"mb-3\">
                            <span class=\"badge bg-success fs-6 px-3 py-2\">Home &amp; Garden</span>
                        </div>
                        <h4 class=\"card-title\">Home &amp; Garden</h4>
                        <p class=\"card-text text-muted\">Furniture, decor and gardening tools</p>
                        <p class=\"text-muted\"><small>15 products available</small></p>
                        <a href=\"{{ path('app_products_by_category', {slug: 'home-garden'}) }}\" class=\"btn btn-outline-success\">Browse Home &amp; Garden</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    <div class=\"card-body text-center py-4\">
                        <div class=\"mb-3\">
                            <span class=\"badge bg-info fs-6 px-3 py-2\">Sports</span>
                        </div>
                        <h4 class=\"card-title\">Sports &amp; Fitness</h4>
                        <p class=\"card-text text-muted\">Equipment, apparel and accessories</p>
                        <p class=\"text-muted\"><small>10 products available</small></p>
                        <a href=\"{{ path('app_products_by_category', {slug: 'sports'}) }}\" class=\"btn btn-outline-info\">Browse Sports</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    <div class=\"card-body text-center py-4\">
                        <div class=\"mb-3\">
                            <span class=\"badge bg-danger fs-6 px-3 py-2\">Books</span>
                        </div>
                        <h4 class=\"card-title\">Books</h4>
                        <p class=\"card-text text-muted\">Bestsellers, textbooks and more</p>
                        <p class=\"text-muted\"><small>8 products available</small></p>
                        <a href=\"{{ path('app_products_by_category', {slug: 'books'}) }}\" class=\"btn btn-outline-danger\">Browse Books</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    <div class=\"card-body text-center py-4\">
                        <div class=\"mb-3\">
                            <span class=\"badge bg-secondary fs-6 px-3 py-2\">More</span>
                        </div>
                        <h4 class=\"card-title\">Other</h4>
                        <p class=\"card-text text-muted\">Miscellaneous items and accessories</p>
                        <p class=\"text-muted\"><small>5 products available</small></p>
                        <a href=\"{{ path('app_products_by_category', {slug: 'other'}) }}\" class=\"btn btn-outline-secondary\">Browse Other</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

{% endblock %}
", "shop/browse_categories.html.twig", "C:\\Users\\NITRO17\\Desktop\\symfony-ecommerce\\templates\\shop\\browse_categories.html.twig");
    }
}

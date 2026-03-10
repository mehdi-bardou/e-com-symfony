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

/* home/index.html.twig */
class __TwigTemplate_de6a27ffe722450f1146187b234b71e5 extends Template
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
            'nav_home' => [$this, 'block_nav_home'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

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

        yield "Home - Our Store";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_nav_home(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_home"));

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
        yield "    <div class=\"bg-primary bg-gradient text-white py-5\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6\">
                    <h1 class=\"display-3 fw-bold mb-4\">Welcome to Our Store</h1>
                    <p class=\"lead mb-4\">Discover amazing products across all categories. Quality items at unbeatable prices.</p>
                    <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
        yield "\" class=\"btn btn-light btn-lg me-2\">Shop Now</a>
                    <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories");
        yield "\" class=\"btn btn-outline-light btn-lg\">Browse Categories</a>
                </div>
                <div class=\"col-lg-6 text-center\">
                    <img src=\"https://via.placeholder.com/500x400\" class=\"img-fluid rounded\" alt=\"Shopping\">
                </div>
            </div>
        </div>
    </div>

    ";
        // line 27
        yield "    <div class=\"container my-5\" id=\"categories\">
        <div class=\"text-center mb-5\">
            <h2 class=\"display-5 fw-bold\">Shop by Category</h2>
            <p class=\"text-muted\">Explore our wide range of products organized by category</p>
        </div>

        <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4\">
            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    <div class=\"card-body text-center\">
                        <span class=\"badge bg-primary mb-2\">12 Products</span>
                        <h4 class=\"card-title\">Electronics</h4>
                        <p class=\"card-text text-muted\">Headphones, speakers, gadgets and more</p>
                        <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products_by_category", ["slug" => "electronics"]);
        yield "\" class=\"btn btn-outline-primary\">Browse Electronics</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    <div class=\"card-body text-center\">
                        <span class=\"badge bg-warning mb-2\">18 Products</span>
                        <h4 class=\"card-title\">Fashion</h4>
                        <p class=\"card-text text-muted\">Clothing, accessories and footwear</p>
                        <a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products_by_category", ["slug" => "fashion"]);
        yield "\" class=\"btn btn-outline-warning\">Browse Fashion</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    <div class=\"card-body text-center\">
                        <span class=\"badge bg-success mb-2\">15 Products</span>
                        <h4 class=\"card-title\">Home &amp; Garden</h4>
                        <p class=\"card-text text-muted\">Furniture, decor and gardening tools</p>
                        <a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products_by_category", ["slug" => "home-garden"]);
        yield "\" class=\"btn btn-outline-success\">Browse Home &amp; Garden</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    <div class=\"card-body text-center\">
                        <span class=\"badge bg-info mb-2\">10 Products</span>
                        <h4 class=\"card-title\">Sports &amp; Fitness</h4>
                        <p class=\"card-text text-muted\">Equipment, apparel and accessories</p>
                        <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products_by_category", ["slug" => "sports"]);
        yield "\" class=\"btn btn-outline-info\">Browse Sports</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    <div class=\"card-body text-center\">
                        <span class=\"badge bg-danger mb-2\">8 Products</span>
                        <h4 class=\"card-title\">Books</h4>
                        <p class=\"card-text text-muted\">Bestsellers, textbooks and more</p>
                        <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products_by_category", ["slug" => "books"]);
        yield "\" class=\"btn btn-outline-danger\">Browse Books</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    <div class=\"card-body text-center\">
                        <span class=\"badge bg-secondary mb-2\">20 Products</span>
                        <h4 class=\"card-title\">All Products</h4>
                        <p class=\"card-text text-muted\">Browse our entire collection</p>
                        <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
        yield "\" class=\"btn btn-outline-secondary\">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 103
        yield "    <div class=\"bg-light py-5\">
        <div class=\"container\">
            <div class=\"text-center mb-5\">
                <h2 class=\"display-5 fw-bold\">Featured Products</h2>
                <p class=\"text-muted\">Handpicked top sellers just for you</p>
            </div>

            <div class=\"row row-cols-1 row-cols-md-4 g-4\">
                <div class=\"col\">
                    <div class=\"card h-100\">
                        <img src=\"/images/item.png\" class=\"card-img-top\" alt=\"Wireless Headphones\">
                        <div class=\"card-body\">
                            <span class=\"badge bg-primary mb-2\">Electronics</span>
                            <h5 class=\"card-title\">Wireless Headphones</h5>
                            <p class=\"card-text fw-bold text-success\">\$79.99</p>
                            <a href=\"";
        // line 118
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_details", ["id" => 1]);
        yield "\" class=\"btn btn-outline-primary btn-sm\">View Details</a>
                        </div>
                    </div>
                </div>

                <div class=\"col\">
                    <div class=\"card h-100\">
                        <img src=\"/images/item.png\" class=\"card-img-top\" alt=\"Leather Jacket\">
                        <div class=\"card-body\">
                            <span class=\"badge bg-warning mb-2\">Fashion</span>
                            <h5 class=\"card-title\">Classic Leather Jacket</h5>
                            <p class=\"card-text fw-bold text-success\">\$149.99</p>
                            <a href=\"";
        // line 130
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_details", ["id" => 2]);
        yield "\" class=\"btn btn-outline-primary btn-sm\">View Details</a>
                        </div>
                    </div>
                </div>

                <div class=\"col\">
                    <div class=\"card h-100\">
                        <img src=\"/images/item.png\" class=\"card-img-top\" alt=\"Smart Plant Sensor\">
                        <div class=\"card-body\">
                            <span class=\"badge bg-success mb-2\">Home &amp; Garden</span>
                            <h5 class=\"card-title\">Smart Plant Sensor</h5>
                            <p class=\"card-text fw-bold text-success\">\$34.99</p>
                            <a href=\"";
        // line 142
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_details", ["id" => 3]);
        yield "\" class=\"btn btn-outline-primary btn-sm\">View Details</a>
                        </div>
                    </div>
                </div>

                <div class=\"col\">
                    <div class=\"card h-100\">
                        <img src=\"/images/item.png\" class=\"card-img-top\" alt=\"Yoga Mat\">
                        <div class=\"card-body\">
                            <span class=\"badge bg-info mb-2\">Sports</span>
                            <h5 class=\"card-title\">Yoga Mat Premium</h5>
                            <p class=\"card-text fw-bold text-success\">\$29.99</p>
                            <a href=\"";
        // line 154
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_details", ["id" => 4]);
        yield "\" class=\"btn btn-outline-primary btn-sm\">View Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"text-center mt-4\">
                <a href=\"";
        // line 161
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
        yield "\" class=\"btn btn-primary btn-lg\">View All Products</a>
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
        return "home/index.html.twig";
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
        return array (  297 => 161,  287 => 154,  272 => 142,  257 => 130,  242 => 118,  225 => 103,  215 => 95,  201 => 84,  187 => 73,  173 => 62,  159 => 51,  145 => 40,  130 => 27,  118 => 17,  114 => 16,  106 => 10,  103 => 8,  93 => 7,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home - Our Store{% endblock %}

{% block nav_home %}active{% endblock %}

{% block body %}

    {# ===== HERO SECTION ===== #}
    <div class=\"bg-primary bg-gradient text-white py-5\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-6\">
                    <h1 class=\"display-3 fw-bold mb-4\">Welcome to Our Store</h1>
                    <p class=\"lead mb-4\">Discover amazing products across all categories. Quality items at unbeatable prices.</p>
                    <a href=\"{{ path('app_products') }}\" class=\"btn btn-light btn-lg me-2\">Shop Now</a>
                    <a href=\"{{ path('app_categories') }}\" class=\"btn btn-outline-light btn-lg\">Browse Categories</a>
                </div>
                <div class=\"col-lg-6 text-center\">
                    <img src=\"https://via.placeholder.com/500x400\" class=\"img-fluid rounded\" alt=\"Shopping\">
                </div>
            </div>
        </div>
    </div>

    {# ===== CATEGORIES SECTION ===== #}
    <div class=\"container my-5\" id=\"categories\">
        <div class=\"text-center mb-5\">
            <h2 class=\"display-5 fw-bold\">Shop by Category</h2>
            <p class=\"text-muted\">Explore our wide range of products organized by category</p>
        </div>

        <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4\">
            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    <div class=\"card-body text-center\">
                        <span class=\"badge bg-primary mb-2\">12 Products</span>
                        <h4 class=\"card-title\">Electronics</h4>
                        <p class=\"card-text text-muted\">Headphones, speakers, gadgets and more</p>
                        <a href=\"{{ path('app_products_by_category', {slug: 'electronics'}) }}\" class=\"btn btn-outline-primary\">Browse Electronics</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    <div class=\"card-body text-center\">
                        <span class=\"badge bg-warning mb-2\">18 Products</span>
                        <h4 class=\"card-title\">Fashion</h4>
                        <p class=\"card-text text-muted\">Clothing, accessories and footwear</p>
                        <a href=\"{{ path('app_products_by_category', {slug: 'fashion'}) }}\" class=\"btn btn-outline-warning\">Browse Fashion</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    <div class=\"card-body text-center\">
                        <span class=\"badge bg-success mb-2\">15 Products</span>
                        <h4 class=\"card-title\">Home &amp; Garden</h4>
                        <p class=\"card-text text-muted\">Furniture, decor and gardening tools</p>
                        <a href=\"{{ path('app_products_by_category', {slug: 'home-garden'}) }}\" class=\"btn btn-outline-success\">Browse Home &amp; Garden</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    <div class=\"card-body text-center\">
                        <span class=\"badge bg-info mb-2\">10 Products</span>
                        <h4 class=\"card-title\">Sports &amp; Fitness</h4>
                        <p class=\"card-text text-muted\">Equipment, apparel and accessories</p>
                        <a href=\"{{ path('app_products_by_category', {slug: 'sports'}) }}\" class=\"btn btn-outline-info\">Browse Sports</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    <div class=\"card-body text-center\">
                        <span class=\"badge bg-danger mb-2\">8 Products</span>
                        <h4 class=\"card-title\">Books</h4>
                        <p class=\"card-text text-muted\">Bestsellers, textbooks and more</p>
                        <a href=\"{{ path('app_products_by_category', {slug: 'books'}) }}\" class=\"btn btn-outline-danger\">Browse Books</a>
                    </div>
                </div>
            </div>

            <div class=\"col\">
                <div class=\"card h-100 shadow-sm\">
                    <div class=\"card-body text-center\">
                        <span class=\"badge bg-secondary mb-2\">20 Products</span>
                        <h4 class=\"card-title\">All Products</h4>
                        <p class=\"card-text text-muted\">Browse our entire collection</p>
                        <a href=\"{{ path('app_products') }}\" class=\"btn btn-outline-secondary\">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {# ===== FEATURED PRODUCTS ===== #}
    <div class=\"bg-light py-5\">
        <div class=\"container\">
            <div class=\"text-center mb-5\">
                <h2 class=\"display-5 fw-bold\">Featured Products</h2>
                <p class=\"text-muted\">Handpicked top sellers just for you</p>
            </div>

            <div class=\"row row-cols-1 row-cols-md-4 g-4\">
                <div class=\"col\">
                    <div class=\"card h-100\">
                        <img src=\"/images/item.png\" class=\"card-img-top\" alt=\"Wireless Headphones\">
                        <div class=\"card-body\">
                            <span class=\"badge bg-primary mb-2\">Electronics</span>
                            <h5 class=\"card-title\">Wireless Headphones</h5>
                            <p class=\"card-text fw-bold text-success\">\$79.99</p>
                            <a href=\"{{ path('app_product_details', {id: 1}) }}\" class=\"btn btn-outline-primary btn-sm\">View Details</a>
                        </div>
                    </div>
                </div>

                <div class=\"col\">
                    <div class=\"card h-100\">
                        <img src=\"/images/item.png\" class=\"card-img-top\" alt=\"Leather Jacket\">
                        <div class=\"card-body\">
                            <span class=\"badge bg-warning mb-2\">Fashion</span>
                            <h5 class=\"card-title\">Classic Leather Jacket</h5>
                            <p class=\"card-text fw-bold text-success\">\$149.99</p>
                            <a href=\"{{ path('app_product_details', {id: 2}) }}\" class=\"btn btn-outline-primary btn-sm\">View Details</a>
                        </div>
                    </div>
                </div>

                <div class=\"col\">
                    <div class=\"card h-100\">
                        <img src=\"/images/item.png\" class=\"card-img-top\" alt=\"Smart Plant Sensor\">
                        <div class=\"card-body\">
                            <span class=\"badge bg-success mb-2\">Home &amp; Garden</span>
                            <h5 class=\"card-title\">Smart Plant Sensor</h5>
                            <p class=\"card-text fw-bold text-success\">\$34.99</p>
                            <a href=\"{{ path('app_product_details', {id: 3}) }}\" class=\"btn btn-outline-primary btn-sm\">View Details</a>
                        </div>
                    </div>
                </div>

                <div class=\"col\">
                    <div class=\"card h-100\">
                        <img src=\"/images/item.png\" class=\"card-img-top\" alt=\"Yoga Mat\">
                        <div class=\"card-body\">
                            <span class=\"badge bg-info mb-2\">Sports</span>
                            <h5 class=\"card-title\">Yoga Mat Premium</h5>
                            <p class=\"card-text fw-bold text-success\">\$29.99</p>
                            <a href=\"{{ path('app_product_details', {id: 4}) }}\" class=\"btn btn-outline-primary btn-sm\">View Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"text-center mt-4\">
                <a href=\"{{ path('app_products') }}\" class=\"btn btn-primary btn-lg\">View All Products</a>
            </div>
        </div>
    </div>

{% endblock %}
", "home/index.html.twig", "C:\\Users\\NITRO17\\Desktop\\symfony-ecommerce\\templates\\home\\index.html.twig");
    }
}

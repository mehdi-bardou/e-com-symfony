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

/* cart/cart.html.twig */
class __TwigTemplate_a8ebbd59197129ae97d3fa2ff07e5a90 extends Template
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
            'nav_cart' => [$this, 'block_nav_cart'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/cart.html.twig"));

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

        yield "Shopping Cart - Our Store";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_nav_cart(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_cart"));

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
        <h1 class=\"mb-4\">Shopping Cart</h1>

        <div class=\"row\">

            ";
        // line 15
        yield "            <div class=\"col-lg-8\">
                <div class=\"card mb-3\">
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table align-middle\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">Product</th>
                                        <th scope=\"col\">Price</th>
                                        <th scope=\"col\">Quantity</th>
                                        <th scope=\"col\">Total</th>
                                        <th scope=\"col\"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class=\"d-flex align-items-center\">
                                                <img src=\"/images/thumbnail.png\" class=\"img-thumbnail me-3\" alt=\"Product\"
                                                     style=\"width: 80px; height: 80px; object-fit: cover;\">
                                                <div>
                                                    <h6 class=\"mb-0\">Wireless Headphones</h6>
                                                    <small class=\"text-muted\">Color: Black</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>\$79.99</td>
                                        <td>2</td>
                                        <td class=\"fw-bold\">\$159.98</td>
                                        <td>
                                            <button class=\"btn btn-sm btn-outline-danger\">Remove</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class=\"d-flex align-items-center\">
                                                <img src=\"/images/thumbnail.png\" class=\"img-thumbnail me-3\" alt=\"Product\"
                                                     style=\"width: 80px; height: 80px; object-fit: cover;\">
                                                <div>
                                                    <h6 class=\"mb-0\">Classic Leather Jacket</h6>
                                                    <small class=\"text-muted\">Size: M</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>\$149.99</td>
                                        <td>1</td>
                                        <td class=\"fw-bold\">\$149.99</td>
                                        <td>
                                            <button class=\"btn btn-sm btn-outline-danger\">Remove</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class=\"d-flex align-items-center\">
                                                <img src=\"/images/thumbnail.png\" class=\"img-thumbnail me-3\" alt=\"Product\"
                                                     style=\"width: 80px; height: 80px; object-fit: cover;\">
                                                <div>
                                                    <h6 class=\"mb-0\">Bluetooth Speaker</h6>
                                                    <small class=\"text-muted\">Color: Blue</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>\$59.99</td>
                                        <td>1</td>
                                        <td class=\"fw-bold\">\$59.99</td>
                                        <td>
                                            <button class=\"btn btn-sm btn-outline-danger\">Remove</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <a href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
        yield "\" class=\"btn btn-outline-primary\">
                    &larr; Continue Shopping
                </a>
            </div>

            ";
        // line 98
        yield "            <div class=\"col-lg-4\">
                <div class=\"card\">
                    <div class=\"card-header bg-primary text-white\">
                        <h5 class=\"mb-0\">Order Summary</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between mb-2\">
                            <span>Subtotal:</span>
                            <span>\$369.96</span>
                        </div>
                        <div class=\"d-flex justify-content-between mb-2\">
                            <span>Shipping:</span>
                            <span>\$10.00</span>
                        </div>
                        <div class=\"d-flex justify-content-between mb-2\">
                            <span>Tax:</span>
                            <span>\$30.40</span>
                        </div>
                        <hr>
                        <div class=\"d-flex justify-content-between mb-3\">
                            <strong>Total:</strong>
                            <strong class=\"text-success\">\$410.36</strong>
                        </div>
                        <div class=\"d-grid\">
                            <button class=\"btn btn-success btn-lg\">Proceed to Checkout</button>
                        </div>
                    </div>
                </div>

                ";
        // line 128
        yield "                <div class=\"card mt-3\">
                    <div class=\"card-body\">
                        <h6 class=\"card-title\">Have a promo code?</h6>
                        <form>
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Enter code\">
                                <button class=\"btn btn-outline-secondary\" type=\"submit\">Apply</button>
                            </div>
                        </form>
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
        return "cart/cart.html.twig";
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
        return array (  229 => 128,  198 => 98,  190 => 92,  111 => 15,  103 => 8,  93 => 7,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Shopping Cart - Our Store{% endblock %}

{% block nav_cart %}active{% endblock %}

{% block body %}

    <div class=\"container my-5\">
        <h1 class=\"mb-4\">Shopping Cart</h1>

        <div class=\"row\">

            {# ===== ARTICLES DU PANIER ===== #}
            <div class=\"col-lg-8\">
                <div class=\"card mb-3\">
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table align-middle\">
                                <thead>
                                    <tr>
                                        <th scope=\"col\">Product</th>
                                        <th scope=\"col\">Price</th>
                                        <th scope=\"col\">Quantity</th>
                                        <th scope=\"col\">Total</th>
                                        <th scope=\"col\"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class=\"d-flex align-items-center\">
                                                <img src=\"/images/thumbnail.png\" class=\"img-thumbnail me-3\" alt=\"Product\"
                                                     style=\"width: 80px; height: 80px; object-fit: cover;\">
                                                <div>
                                                    <h6 class=\"mb-0\">Wireless Headphones</h6>
                                                    <small class=\"text-muted\">Color: Black</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>\$79.99</td>
                                        <td>2</td>
                                        <td class=\"fw-bold\">\$159.98</td>
                                        <td>
                                            <button class=\"btn btn-sm btn-outline-danger\">Remove</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class=\"d-flex align-items-center\">
                                                <img src=\"/images/thumbnail.png\" class=\"img-thumbnail me-3\" alt=\"Product\"
                                                     style=\"width: 80px; height: 80px; object-fit: cover;\">
                                                <div>
                                                    <h6 class=\"mb-0\">Classic Leather Jacket</h6>
                                                    <small class=\"text-muted\">Size: M</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>\$149.99</td>
                                        <td>1</td>
                                        <td class=\"fw-bold\">\$149.99</td>
                                        <td>
                                            <button class=\"btn btn-sm btn-outline-danger\">Remove</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class=\"d-flex align-items-center\">
                                                <img src=\"/images/thumbnail.png\" class=\"img-thumbnail me-3\" alt=\"Product\"
                                                     style=\"width: 80px; height: 80px; object-fit: cover;\">
                                                <div>
                                                    <h6 class=\"mb-0\">Bluetooth Speaker</h6>
                                                    <small class=\"text-muted\">Color: Blue</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>\$59.99</td>
                                        <td>1</td>
                                        <td class=\"fw-bold\">\$59.99</td>
                                        <td>
                                            <button class=\"btn btn-sm btn-outline-danger\">Remove</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <a href=\"{{ path('app_products') }}\" class=\"btn btn-outline-primary\">
                    &larr; Continue Shopping
                </a>
            </div>

            {# ===== RÉSUMÉ DE COMMANDE ===== #}
            <div class=\"col-lg-4\">
                <div class=\"card\">
                    <div class=\"card-header bg-primary text-white\">
                        <h5 class=\"mb-0\">Order Summary</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"d-flex justify-content-between mb-2\">
                            <span>Subtotal:</span>
                            <span>\$369.96</span>
                        </div>
                        <div class=\"d-flex justify-content-between mb-2\">
                            <span>Shipping:</span>
                            <span>\$10.00</span>
                        </div>
                        <div class=\"d-flex justify-content-between mb-2\">
                            <span>Tax:</span>
                            <span>\$30.40</span>
                        </div>
                        <hr>
                        <div class=\"d-flex justify-content-between mb-3\">
                            <strong>Total:</strong>
                            <strong class=\"text-success\">\$410.36</strong>
                        </div>
                        <div class=\"d-grid\">
                            <button class=\"btn btn-success btn-lg\">Proceed to Checkout</button>
                        </div>
                    </div>
                </div>

                {# ===== CODE PROMO ===== #}
                <div class=\"card mt-3\">
                    <div class=\"card-body\">
                        <h6 class=\"card-title\">Have a promo code?</h6>
                        <form>
                            <div class=\"input-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Enter code\">
                                <button class=\"btn btn-outline-secondary\" type=\"submit\">Apply</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

{% endblock %}
", "cart/cart.html.twig", "C:\\Users\\NITRO17\\Desktop\\symfony-ecommerce\\templates\\cart\\cart.html.twig");
    }
}

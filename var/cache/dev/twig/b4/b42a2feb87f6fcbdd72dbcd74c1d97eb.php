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

/* account/profile.html.twig */
class __TwigTemplate_6b4e1c2ae02a9354514e0264c251f096 extends Template
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
            'nav_profile' => [$this, 'block_nav_profile'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/profile.html.twig"));

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

        yield "My Profile - Our Store";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_nav_profile(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_profile"));

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
        yield "            <div class=\"col-md-3\">
                <div class=\"card\">
                    <div class=\"card-body text-center\">
                        <img src=\"/images/profile.png\" class=\"rounded-circle mb-3\" alt=\"User Avatar\"
                             width=\"150\" height=\"150\">
                        <h5 class=\"card-title\">John Doe</h5>
                        <p class=\"text-muted\">john.doe@email.com</p>
                        <hr>
                        <ul class=\"list-unstyled\">
                            <li class=\"mb-2\">
                                <a href=\"#profile\" class=\"text-decoration-none\">Profile Information</a>
                            </li>
                            <li class=\"mb-2\">
                                <a href=\"#orders\" class=\"text-decoration-none\">My Orders</a>
                            </li>
                            <li class=\"mb-2\">
                                <a href=\"#\" class=\"text-decoration-none\">Settings</a>
                            </li>
                            <li class=\"mb-2\">
                                <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-decoration-none text-danger\">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            ";
        // line 40
        yield "            <div class=\"col-md-9\">

                ";
        // line 43
        yield "                <div class=\"card mb-4\" id=\"profile\">
                    <div class=\"card-header bg-primary text-white\">
                        <h5 class=\"mb-0\">Profile Information</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row mb-3\">
                            <div class=\"col-md-6\">
                                <label class=\"fw-bold\">Full Name:</label>
                                <p>John Doe</p>
                            </div>
                            <div class=\"col-md-6\">
                                <label class=\"fw-bold\">Email:</label>
                                <p>john.doe@email.com</p>
                            </div>
                        </div>
                        <div class=\"row mb-3\">
                            <div class=\"col-md-6\">
                                <label class=\"fw-bold\">Phone:</label>
                                <p>+1 (555) 123-4567</p>
                            </div>
                            <div class=\"col-md-6\">
                                <label class=\"fw-bold\">Member Since:</label>
                                <p>January 15, 2024</p>
                            </div>
                        </div>
                        <div class=\"row mb-3\">
                            <div class=\"col-12\">
                                <label class=\"fw-bold\">Shipping Address:</label>
                                <p>123 Main Street, Apt 4B<br>New York, NY 10001<br>United States</p>
                            </div>
                        </div>
                        <button class=\"btn btn-outline-primary\">Edit Profile</button>
                    </div>
                </div>

                ";
        // line 79
        yield "                <div class=\"card\" id=\"orders\">
                    <div class=\"card-header bg-primary text-white\">
                        <h5 class=\"mb-0\">Order History</h5>
                    </div>
                    <div class=\"card-body\">

                        <div class=\"card mb-3\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-md-8\">
                                        <h6 class=\"card-title\">Order #ORD-2024-001</h6>
                                        <p class=\"text-muted mb-2\">Placed on: February 10, 2024</p>
                                        <p class=\"mb-1\"><strong>Items:</strong> Wireless Headphones, Bluetooth Speaker</p>
                                        <p class=\"mb-0\"><strong>Total:</strong> \$139.98</p>
                                    </div>
                                    <div class=\"col-md-4 text-md-end\">
                                        <span class=\"badge bg-success mb-2\">Delivered</span>
                                        <br>
                                        <a href=\"#\" class=\"btn btn-sm btn-outline-primary mt-2\">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"card mb-3\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-md-8\">
                                        <h6 class=\"card-title\">Order #ORD-2024-002</h6>
                                        <p class=\"text-muted mb-2\">Placed on: February 5, 2024</p>
                                        <p class=\"mb-1\"><strong>Items:</strong> Classic Leather Jacket</p>
                                        <p class=\"mb-0\"><strong>Total:</strong> \$149.99</p>
                                    </div>
                                    <div class=\"col-md-4 text-md-end\">
                                        <span class=\"badge bg-info mb-2\">In Transit</span>
                                        <br>
                                        <a href=\"#\" class=\"btn btn-sm btn-outline-primary mt-2\">Track Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"card mb-3\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-md-8\">
                                        <h6 class=\"card-title\">Order #ORD-2024-003</h6>
                                        <p class=\"text-muted mb-2\">Placed on: January 28, 2024</p>
                                        <p class=\"mb-1\"><strong>Items:</strong> Yoga Mat, Smart Plant Sensor</p>
                                        <p class=\"mb-0\"><strong>Total:</strong> \$64.98</p>
                                    </div>
                                    <div class=\"col-md-4 text-md-end\">
                                        <span class=\"badge bg-warning mb-2\">Processing</span>
                                        <br>
                                        <a href=\"#\" class=\"btn btn-sm btn-outline-primary mt-2\">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"card mb-3\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-md-8\">
                                        <h6 class=\"card-title\">Order #ORD-2024-004</h6>
                                        <p class=\"text-muted mb-2\">Placed on: January 20, 2024</p>
                                        <p class=\"mb-1\"><strong>Items:</strong> Web Development Guide</p>
                                        <p class=\"mb-0\"><strong>Total:</strong> \$24.99</p>
                                    </div>
                                    <div class=\"col-md-4 text-md-end\">
                                        <span class=\"badge bg-danger mb-2\">Cancelled</span>
                                        <br>
                                        <a href=\"#\" class=\"btn btn-sm btn-outline-secondary mt-2\">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        ";
        // line 158
        yield "                        <nav aria-label=\"Order pagination\">
                            <ul class=\"pagination justify-content-center mb-0\">
                                <li class=\"page-item disabled\">
                                    <a class=\"page-link\" href=\"#\" tabindex=\"-1\">Previous</a>
                                </li>
                                <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
                                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                                <li class=\"page-item\">
                                    <a class=\"page-link\" href=\"#\">Next</a>
                                </li>
                            </ul>
                        </nav>

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
        return "account/profile.html.twig";
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
        return array (  261 => 158,  181 => 79,  144 => 43,  140 => 40,  130 => 32,  109 => 13,  103 => 8,  93 => 7,  76 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}My Profile - Our Store{% endblock %}

{% block nav_profile %}active{% endblock %}

{% block body %}

    <div class=\"container my-5\">
        <div class=\"row\">

            {# ===== SIDEBAR PROFIL ===== #}
            <div class=\"col-md-3\">
                <div class=\"card\">
                    <div class=\"card-body text-center\">
                        <img src=\"/images/profile.png\" class=\"rounded-circle mb-3\" alt=\"User Avatar\"
                             width=\"150\" height=\"150\">
                        <h5 class=\"card-title\">John Doe</h5>
                        <p class=\"text-muted\">john.doe@email.com</p>
                        <hr>
                        <ul class=\"list-unstyled\">
                            <li class=\"mb-2\">
                                <a href=\"#profile\" class=\"text-decoration-none\">Profile Information</a>
                            </li>
                            <li class=\"mb-2\">
                                <a href=\"#orders\" class=\"text-decoration-none\">My Orders</a>
                            </li>
                            <li class=\"mb-2\">
                                <a href=\"#\" class=\"text-decoration-none\">Settings</a>
                            </li>
                            <li class=\"mb-2\">
                                <a href=\"{{ path('app_login') }}\" class=\"text-decoration-none text-danger\">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {# ===== CONTENU PRINCIPAL ===== #}
            <div class=\"col-md-9\">

                {# Informations du profil #}
                <div class=\"card mb-4\" id=\"profile\">
                    <div class=\"card-header bg-primary text-white\">
                        <h5 class=\"mb-0\">Profile Information</h5>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"row mb-3\">
                            <div class=\"col-md-6\">
                                <label class=\"fw-bold\">Full Name:</label>
                                <p>John Doe</p>
                            </div>
                            <div class=\"col-md-6\">
                                <label class=\"fw-bold\">Email:</label>
                                <p>john.doe@email.com</p>
                            </div>
                        </div>
                        <div class=\"row mb-3\">
                            <div class=\"col-md-6\">
                                <label class=\"fw-bold\">Phone:</label>
                                <p>+1 (555) 123-4567</p>
                            </div>
                            <div class=\"col-md-6\">
                                <label class=\"fw-bold\">Member Since:</label>
                                <p>January 15, 2024</p>
                            </div>
                        </div>
                        <div class=\"row mb-3\">
                            <div class=\"col-12\">
                                <label class=\"fw-bold\">Shipping Address:</label>
                                <p>123 Main Street, Apt 4B<br>New York, NY 10001<br>United States</p>
                            </div>
                        </div>
                        <button class=\"btn btn-outline-primary\">Edit Profile</button>
                    </div>
                </div>

                {# Historique des commandes #}
                <div class=\"card\" id=\"orders\">
                    <div class=\"card-header bg-primary text-white\">
                        <h5 class=\"mb-0\">Order History</h5>
                    </div>
                    <div class=\"card-body\">

                        <div class=\"card mb-3\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-md-8\">
                                        <h6 class=\"card-title\">Order #ORD-2024-001</h6>
                                        <p class=\"text-muted mb-2\">Placed on: February 10, 2024</p>
                                        <p class=\"mb-1\"><strong>Items:</strong> Wireless Headphones, Bluetooth Speaker</p>
                                        <p class=\"mb-0\"><strong>Total:</strong> \$139.98</p>
                                    </div>
                                    <div class=\"col-md-4 text-md-end\">
                                        <span class=\"badge bg-success mb-2\">Delivered</span>
                                        <br>
                                        <a href=\"#\" class=\"btn btn-sm btn-outline-primary mt-2\">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"card mb-3\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-md-8\">
                                        <h6 class=\"card-title\">Order #ORD-2024-002</h6>
                                        <p class=\"text-muted mb-2\">Placed on: February 5, 2024</p>
                                        <p class=\"mb-1\"><strong>Items:</strong> Classic Leather Jacket</p>
                                        <p class=\"mb-0\"><strong>Total:</strong> \$149.99</p>
                                    </div>
                                    <div class=\"col-md-4 text-md-end\">
                                        <span class=\"badge bg-info mb-2\">In Transit</span>
                                        <br>
                                        <a href=\"#\" class=\"btn btn-sm btn-outline-primary mt-2\">Track Order</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"card mb-3\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-md-8\">
                                        <h6 class=\"card-title\">Order #ORD-2024-003</h6>
                                        <p class=\"text-muted mb-2\">Placed on: January 28, 2024</p>
                                        <p class=\"mb-1\"><strong>Items:</strong> Yoga Mat, Smart Plant Sensor</p>
                                        <p class=\"mb-0\"><strong>Total:</strong> \$64.98</p>
                                    </div>
                                    <div class=\"col-md-4 text-md-end\">
                                        <span class=\"badge bg-warning mb-2\">Processing</span>
                                        <br>
                                        <a href=\"#\" class=\"btn btn-sm btn-outline-primary mt-2\">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"card mb-3\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-md-8\">
                                        <h6 class=\"card-title\">Order #ORD-2024-004</h6>
                                        <p class=\"text-muted mb-2\">Placed on: January 20, 2024</p>
                                        <p class=\"mb-1\"><strong>Items:</strong> Web Development Guide</p>
                                        <p class=\"mb-0\"><strong>Total:</strong> \$24.99</p>
                                    </div>
                                    <div class=\"col-md-4 text-md-end\">
                                        <span class=\"badge bg-danger mb-2\">Cancelled</span>
                                        <br>
                                        <a href=\"#\" class=\"btn btn-sm btn-outline-secondary mt-2\">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {# Pagination #}
                        <nav aria-label=\"Order pagination\">
                            <ul class=\"pagination justify-content-center mb-0\">
                                <li class=\"page-item disabled\">
                                    <a class=\"page-link\" href=\"#\" tabindex=\"-1\">Previous</a>
                                </li>
                                <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
                                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                                <li class=\"page-item\">
                                    <a class=\"page-link\" href=\"#\">Next</a>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </div>

            </div>
        </div>
    </div>

{% endblock %}
", "account/profile.html.twig", "C:\\Users\\NITRO17\\Desktop\\symfony-ecommerce\\templates\\account\\profile.html.twig");
    }
}

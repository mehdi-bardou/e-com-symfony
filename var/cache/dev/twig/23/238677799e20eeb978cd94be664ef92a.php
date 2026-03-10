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

/* base.html.twig */
class __TwigTemplate_35b5eb04c7b1e74d9e0a36b71700f6a4 extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'nav_home' => [$this, 'block_nav_home'],
            'nav_products' => [$this, 'block_nav_products'],
            'nav_categories' => [$this, 'block_nav_categories'],
            'nav_cart' => [$this, 'block_nav_cart'],
            'nav_profile' => [$this, 'block_nav_profile'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    ";
        // line 8
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 9
        yield "</head>
<body>

    ";
        // line 13
        yield "    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Our Store</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav ms-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 22
        yield from $this->unwrap()->yieldBlock('nav_home', $context, $blocks);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 25
        yield from $this->unwrap()->yieldBlock('nav_products', $context, $blocks);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
        yield "\">Products</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 28
        yield from $this->unwrap()->yieldBlock('nav_categories', $context, $blocks);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categories");
        yield "\">Categories</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 31
        yield from $this->unwrap()->yieldBlock('nav_cart', $context, $blocks);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart");
        yield "\">Cart</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 34
        yield from $this->unwrap()->yieldBlock('nav_profile', $context, $blocks);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        yield "\">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    ";
        // line 42
        yield "    ";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 43
        yield "
    ";
        // line 45
        yield "    <footer class=\"bg-dark text-white mt-5 py-4\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h5>Our Store</h5>
                    <p>Quality products at affordable prices</p>
                </div>
                <div class=\"col-md-6 text-md-end\">
                    <p>&copy; 2026 Our Store. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    ";
        // line 60
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 61
        yield "</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Our Store";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 22
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_nav_home(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_home"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_nav_products(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_products"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_nav_categories(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_categories"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_nav_cart(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_cart"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_nav_profile(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav_profile"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 60
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  295 => 60,  279 => 42,  263 => 34,  247 => 31,  231 => 28,  215 => 25,  199 => 22,  183 => 8,  166 => 6,  156 => 61,  154 => 60,  137 => 45,  134 => 43,  131 => 42,  119 => 34,  111 => 31,  103 => 28,  95 => 25,  87 => 22,  77 => 15,  73 => 13,  68 => 9,  66 => 8,  61 => 6,  54 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Our Store{% endblock %}</title>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    {% block stylesheets %}{% endblock %}
</head>
<body>

    {# ===== NAVBAR ===== #}
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">Our Store</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav ms-auto\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% block nav_home %}{% endblock %}\" href=\"{{ path('app_home') }}\">Home</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% block nav_products %}{% endblock %}\" href=\"{{ path('app_products') }}\">Products</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% block nav_categories %}{% endblock %}\" href=\"{{ path('app_categories') }}\">Categories</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% block nav_cart %}{% endblock %}\" href=\"{{ path('app_cart') }}\">Cart</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link {% block nav_profile %}{% endblock %}\" href=\"{{ path('app_profile') }}\">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {# ===== PAGE CONTENT ===== #}
    {% block body %}{% endblock %}

    {# ===== FOOTER ===== #}
    <footer class=\"bg-dark text-white mt-5 py-4\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <h5>Our Store</h5>
                    <p>Quality products at affordable prices</p>
                </div>
                <div class=\"col-md-6 text-md-end\">
                    <p>&copy; 2026 Our Store. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\"></script>
    {% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\Users\\NITRO17\\Desktop\\symfony-ecommerce\\templates\\base.html.twig");
    }
}

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

/* account/login.html.twig */
class __TwigTemplate_3e57df7b1f652c4aa81b0246dbb3224f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/login.html.twig"));

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

        yield "Login - Our Store";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
    <div class=\"container my-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">

                <div class=\"card shadow\">
                    <div class=\"row g-0\">

                        ";
        // line 15
        yield "                        <div class=\"col-md-6\">
                            <div class=\"card-body p-5\">
                                <h2 class=\"card-title mb-4\">Login to Your Account</h2>
                                <form action=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" method=\"post\">
                                    <div class=\"mb-3\">
                                        <label for=\"email\" class=\"form-label\">Email address</label>
                                        <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\"
                                               placeholder=\"Enter your email\" required>
                                    </div>
                                    <div class=\"mb-3\">
                                        <label for=\"password\" class=\"form-label\">Password</label>
                                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\"
                                               placeholder=\"Enter your password\" required>
                                    </div>
                                    <div class=\"mb-3 form-check\">
                                        <input type=\"checkbox\" class=\"form-check-input\" id=\"rememberMe\" name=\"rememberMe\">
                                        <label class=\"form-check-label\" for=\"rememberMe\">Remember me</label>
                                    </div>
                                    <div class=\"d-grid\">
                                        <button type=\"submit\" class=\"btn btn-primary btn-lg\">Login</button>
                                    </div>
                                </form>
                                <div class=\"mt-3 text-center\">
                                    <a href=\"#\" class=\"text-decoration-none\">Forgot Password?</a>
                                </div>
                                <hr class=\"my-4\">
                                <p class=\"text-center text-muted\">
                                    Don't have an account?
                                    <a href=\"#register\" class=\"text-decoration-none\">Sign up</a>
                                </p>
                            </div>
                        </div>

                        ";
        // line 49
        yield "                        <div class=\"col-md-6 bg-light\">
                            <div class=\"card-body p-5\">
                                <h2 class=\"card-title mb-4\">Create an Account</h2>
                                <form id=\"register\" action=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" method=\"post\">
                                    <div class=\"mb-3\">
                                        <label for=\"fullName\" class=\"form-label\">Full Name</label>
                                        <input type=\"text\" class=\"form-control\" id=\"fullName\" name=\"fullName\"
                                               placeholder=\"Enter your full name\" required>
                                    </div>
                                    <div class=\"mb-3\">
                                        <label for=\"registerEmail\" class=\"form-label\">Email address</label>
                                        <input type=\"email\" class=\"form-control\" id=\"registerEmail\" name=\"registerEmail\"
                                               placeholder=\"Enter your email\" required>
                                    </div>
                                    <div class=\"mb-3\">
                                        <label for=\"registerPassword\" class=\"form-label\">Password</label>
                                        <input type=\"password\" class=\"form-control\" id=\"registerPassword\" name=\"registerPassword\"
                                               placeholder=\"Create a password\" required>
                                    </div>
                                    <div class=\"mb-3\">
                                        <label for=\"confirmPassword\" class=\"form-label\">Confirm Password</label>
                                        <input type=\"password\" class=\"form-control\" id=\"confirmPassword\" name=\"confirmPassword\"
                                               placeholder=\"Confirm your password\" required>
                                    </div>
                                    <div class=\"mb-3 form-check\">
                                        <input type=\"checkbox\" class=\"form-check-input\" id=\"terms\" name=\"terms\" required>
                                        <label class=\"form-check-label\" for=\"terms\">
                                            I agree to the <a href=\"#\" class=\"text-decoration-none\">Terms &amp; Conditions</a>
                                        </label>
                                    </div>
                                    <div class=\"d-grid\">
                                        <button type=\"submit\" class=\"btn btn-success btn-lg\">Sign Up</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

                ";
        // line 90
        yield "                <div class=\"card mt-4\">
                    <div class=\"card-body\">
                        <p class=\"text-center text-muted mb-3\">Or continue with</p>
                        <div class=\"row g-2\">
                            <div class=\"col-md-4\">
                                <button class=\"btn btn-outline-dark w-100\">
                                    Google
                                </button>
                            </div>
                            <div class=\"col-md-4\">
                                <button class=\"btn btn-outline-primary w-100\">
                                    Facebook
                                </button>
                            </div>
                            <div class=\"col-md-4\">
                                <button class=\"btn btn-outline-secondary w-100\">
                                    Apple
                                </button>
                            </div>
                        </div>
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
        return "account/login.html.twig";
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
        return array (  178 => 90,  138 => 52,  133 => 49,  100 => 18,  95 => 15,  85 => 6,  75 => 5,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Login - Our Store{% endblock %}

{% block body %}

    <div class=\"container my-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">

                <div class=\"card shadow\">
                    <div class=\"row g-0\">

                        {# ===== FORMULAIRE DE CONNEXION ===== #}
                        <div class=\"col-md-6\">
                            <div class=\"card-body p-5\">
                                <h2 class=\"card-title mb-4\">Login to Your Account</h2>
                                <form action=\"{{ path('app_login') }}\" method=\"post\">
                                    <div class=\"mb-3\">
                                        <label for=\"email\" class=\"form-label\">Email address</label>
                                        <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\"
                                               placeholder=\"Enter your email\" required>
                                    </div>
                                    <div class=\"mb-3\">
                                        <label for=\"password\" class=\"form-label\">Password</label>
                                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\"
                                               placeholder=\"Enter your password\" required>
                                    </div>
                                    <div class=\"mb-3 form-check\">
                                        <input type=\"checkbox\" class=\"form-check-input\" id=\"rememberMe\" name=\"rememberMe\">
                                        <label class=\"form-check-label\" for=\"rememberMe\">Remember me</label>
                                    </div>
                                    <div class=\"d-grid\">
                                        <button type=\"submit\" class=\"btn btn-primary btn-lg\">Login</button>
                                    </div>
                                </form>
                                <div class=\"mt-3 text-center\">
                                    <a href=\"#\" class=\"text-decoration-none\">Forgot Password?</a>
                                </div>
                                <hr class=\"my-4\">
                                <p class=\"text-center text-muted\">
                                    Don't have an account?
                                    <a href=\"#register\" class=\"text-decoration-none\">Sign up</a>
                                </p>
                            </div>
                        </div>

                        {# ===== FORMULAIRE D'INSCRIPTION ===== #}
                        <div class=\"col-md-6 bg-light\">
                            <div class=\"card-body p-5\">
                                <h2 class=\"card-title mb-4\">Create an Account</h2>
                                <form id=\"register\" action=\"{{ path('app_login') }}\" method=\"post\">
                                    <div class=\"mb-3\">
                                        <label for=\"fullName\" class=\"form-label\">Full Name</label>
                                        <input type=\"text\" class=\"form-control\" id=\"fullName\" name=\"fullName\"
                                               placeholder=\"Enter your full name\" required>
                                    </div>
                                    <div class=\"mb-3\">
                                        <label for=\"registerEmail\" class=\"form-label\">Email address</label>
                                        <input type=\"email\" class=\"form-control\" id=\"registerEmail\" name=\"registerEmail\"
                                               placeholder=\"Enter your email\" required>
                                    </div>
                                    <div class=\"mb-3\">
                                        <label for=\"registerPassword\" class=\"form-label\">Password</label>
                                        <input type=\"password\" class=\"form-control\" id=\"registerPassword\" name=\"registerPassword\"
                                               placeholder=\"Create a password\" required>
                                    </div>
                                    <div class=\"mb-3\">
                                        <label for=\"confirmPassword\" class=\"form-label\">Confirm Password</label>
                                        <input type=\"password\" class=\"form-control\" id=\"confirmPassword\" name=\"confirmPassword\"
                                               placeholder=\"Confirm your password\" required>
                                    </div>
                                    <div class=\"mb-3 form-check\">
                                        <input type=\"checkbox\" class=\"form-check-input\" id=\"terms\" name=\"terms\" required>
                                        <label class=\"form-check-label\" for=\"terms\">
                                            I agree to the <a href=\"#\" class=\"text-decoration-none\">Terms &amp; Conditions</a>
                                        </label>
                                    </div>
                                    <div class=\"d-grid\">
                                        <button type=\"submit\" class=\"btn btn-success btn-lg\">Sign Up</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

                {# ===== CONNEXION SOCIALE ===== #}
                <div class=\"card mt-4\">
                    <div class=\"card-body\">
                        <p class=\"text-center text-muted mb-3\">Or continue with</p>
                        <div class=\"row g-2\">
                            <div class=\"col-md-4\">
                                <button class=\"btn btn-outline-dark w-100\">
                                    Google
                                </button>
                            </div>
                            <div class=\"col-md-4\">
                                <button class=\"btn btn-outline-primary w-100\">
                                    Facebook
                                </button>
                            </div>
                            <div class=\"col-md-4\">
                                <button class=\"btn btn-outline-secondary w-100\">
                                    Apple
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

{% endblock %}
", "account/login.html.twig", "C:\\Users\\NITRO17\\Desktop\\symfony-ecommerce\\templates\\account\\login.html.twig");
    }
}

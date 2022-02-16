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

/* evenement/index.html.twig */
class __TwigTemplate_a9c0d3579eb26c958b7e437b63379142356b6d4c219b2fc6f2e323877dcc77df extends Template
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
        return "base-front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "evenement/index.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "evenement/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Evenements";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <!-- breadcrumb-section -->
    <div class=\"breadcrumb-section breadcrumb-bg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 offset-lg-2 text-center\">
                    <div class=\"breadcrumb-text\">
                        <p>Evénements</p>
                        <h1>Campi</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- latest news -->
    <div class=\"latest-news mt-150 mb-150\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-6\">
                    <div class=\"single-latest-news\">
                        <a href=\"single-news.html\"><div class=\"latest-news-bg news-bg-1\"></div></a>
                        <div class=\"news-text-box\">
                            <h3><a href=\"single-news.html\">You will vainly look for fruit on it in autumn.</a></h3>
                            <p class=\"blog-meta\">
                                <span class=\"author\"><i class=\"fas fa-user\"></i> Admin</span>
                                <span class=\"date\"><i class=\"fas fa-calendar\"></i> 27 December, 2019</span>
                            </p>
                            <p class=\"excerpt\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus laborum autem, dolores inventore, beatae nam.</p>
                            <a href=\"single-news.html\" class=\"read-more-btn\">read more <i class=\"fas fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-latest-news\">
                        <a href=\"single-news.html\"><div class=\"latest-news-bg news-bg-2\"></div></a>
                        <div class=\"news-text-box\">
                            <h3><a href=\"single-news.html\">A man's worth has its season, like tomato.</a></h3>
                            <p class=\"blog-meta\">
                                <span class=\"author\"><i class=\"fas fa-user\"></i> Admin</span>
                                <span class=\"date\"><i class=\"fas fa-calendar\"></i> 27 December, 2019</span>
                            </p>
                            <p class=\"excerpt\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus laborum autem, dolores inventore, beatae nam.</p>
                            <a href=\"single-news.html\" class=\"read-more-btn\">read more <i class=\"fas fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-latest-news\">
                        <a href=\"single-news.html\"><div class=\"latest-news-bg news-bg-3\"></div></a>
                        <div class=\"news-text-box\">
                            <h3><a href=\"single-news.html\">Good thoughts bear good fresh juicy fruit.</a></h3>
                            <p class=\"blog-meta\">
                                <span class=\"author\"><i class=\"fas fa-user\"></i> Admin</span>
                                <span class=\"date\"><i class=\"fas fa-calendar\"></i> 27 December, 2019</span>
                            </p>
                            <p class=\"excerpt\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus laborum autem, dolores inventore, beatae nam.</p>
                            <a href=\"single-news.html\" class=\"read-more-btn\">read more <i class=\"fas fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-latest-news\">
                        <a href=\"single-news.html\"><div class=\"latest-news-bg news-bg-4\"></div></a>
                        <div class=\"news-text-box\">
                            <h3><a href=\"single-news.html\">Fall in love with the fresh orange</a></h3>
                            <p class=\"blog-meta\">
                                <span class=\"author\"><i class=\"fas fa-user\"></i> Admin</span>
                                <span class=\"date\"><i class=\"fas fa-calendar\"></i> 27 December, 2019</span>
                            </p>
                            <p class=\"excerpt\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus laborum autem, dolores inventore, beatae nam.</p>
                            <a href=\"single-news.html\" class=\"read-more-btn\">read more <i class=\"fas fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-latest-news\">
                        <a href=\"single-news.html\"><div class=\"latest-news-bg news-bg-5\"></div></a>
                        <div class=\"news-text-box\">
                            <h3><a href=\"single-news.html\">Why the berries always look delecious</a></h3>
                            <p class=\"blog-meta\">
                                <span class=\"author\"><i class=\"fas fa-user\"></i> Admin</span>
                                <span class=\"date\"><i class=\"fas fa-calendar\"></i> 27 December, 2019</span>
                            </p>
                            <p class=\"excerpt\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus laborum autem, dolores inventore, beatae nam.</p>
                            <a href=\"single-news.html\" class=\"read-more-btn\">read more <i class=\"fas fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-latest-news\">
                        <a href=\"single-news.html\"><div class=\"latest-news-bg news-bg-6\"></div></a>
                        <div class=\"news-text-box\">
                            <h3><a href=\"single-news.html\">Love for fruits are genuine of John Doe</a></h3>
                            <p class=\"blog-meta\">
                                <span class=\"author\"><i class=\"fas fa-user\"></i> Admin</span>
                                <span class=\"date\"><i class=\"fas fa-calendar\"></i> 27 December, 2018</span>
                            </p>
                            <p class=\"excerpt\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus laborum autem, dolores inventore, beatae nam.</p>
                            <a href=\"single-news.html\" class=\"read-more-btn\">read more <i class=\"fas fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 text-center\">
                            <div class=\"pagination-wrap\">
                                <ul>
                                    <li><a href=\"#\">Prev</a></li>
                                    <li><a href=\"#\">1</a></li>
                                    <li><a class=\"active\" href=\"#\">2</a></li>
                                    <li><a href=\"#\">3</a></li>
                                    <li><a href=\"#\">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end latest news -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "evenement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-front.html.twig' %}

{% block title %}Evenements{% endblock %}

{% block body %}
    <!-- breadcrumb-section -->
    <div class=\"breadcrumb-section breadcrumb-bg\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 offset-lg-2 text-center\">
                    <div class=\"breadcrumb-text\">
                        <p>Evénements</p>
                        <h1>Campi</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- latest news -->
    <div class=\"latest-news mt-150 mb-150\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12 col-md-6\">
                    <div class=\"single-latest-news\">
                        <a href=\"single-news.html\"><div class=\"latest-news-bg news-bg-1\"></div></a>
                        <div class=\"news-text-box\">
                            <h3><a href=\"single-news.html\">You will vainly look for fruit on it in autumn.</a></h3>
                            <p class=\"blog-meta\">
                                <span class=\"author\"><i class=\"fas fa-user\"></i> Admin</span>
                                <span class=\"date\"><i class=\"fas fa-calendar\"></i> 27 December, 2019</span>
                            </p>
                            <p class=\"excerpt\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus laborum autem, dolores inventore, beatae nam.</p>
                            <a href=\"single-news.html\" class=\"read-more-btn\">read more <i class=\"fas fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-latest-news\">
                        <a href=\"single-news.html\"><div class=\"latest-news-bg news-bg-2\"></div></a>
                        <div class=\"news-text-box\">
                            <h3><a href=\"single-news.html\">A man's worth has its season, like tomato.</a></h3>
                            <p class=\"blog-meta\">
                                <span class=\"author\"><i class=\"fas fa-user\"></i> Admin</span>
                                <span class=\"date\"><i class=\"fas fa-calendar\"></i> 27 December, 2019</span>
                            </p>
                            <p class=\"excerpt\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus laborum autem, dolores inventore, beatae nam.</p>
                            <a href=\"single-news.html\" class=\"read-more-btn\">read more <i class=\"fas fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-latest-news\">
                        <a href=\"single-news.html\"><div class=\"latest-news-bg news-bg-3\"></div></a>
                        <div class=\"news-text-box\">
                            <h3><a href=\"single-news.html\">Good thoughts bear good fresh juicy fruit.</a></h3>
                            <p class=\"blog-meta\">
                                <span class=\"author\"><i class=\"fas fa-user\"></i> Admin</span>
                                <span class=\"date\"><i class=\"fas fa-calendar\"></i> 27 December, 2019</span>
                            </p>
                            <p class=\"excerpt\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus laborum autem, dolores inventore, beatae nam.</p>
                            <a href=\"single-news.html\" class=\"read-more-btn\">read more <i class=\"fas fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-latest-news\">
                        <a href=\"single-news.html\"><div class=\"latest-news-bg news-bg-4\"></div></a>
                        <div class=\"news-text-box\">
                            <h3><a href=\"single-news.html\">Fall in love with the fresh orange</a></h3>
                            <p class=\"blog-meta\">
                                <span class=\"author\"><i class=\"fas fa-user\"></i> Admin</span>
                                <span class=\"date\"><i class=\"fas fa-calendar\"></i> 27 December, 2019</span>
                            </p>
                            <p class=\"excerpt\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus laborum autem, dolores inventore, beatae nam.</p>
                            <a href=\"single-news.html\" class=\"read-more-btn\">read more <i class=\"fas fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-latest-news\">
                        <a href=\"single-news.html\"><div class=\"latest-news-bg news-bg-5\"></div></a>
                        <div class=\"news-text-box\">
                            <h3><a href=\"single-news.html\">Why the berries always look delecious</a></h3>
                            <p class=\"blog-meta\">
                                <span class=\"author\"><i class=\"fas fa-user\"></i> Admin</span>
                                <span class=\"date\"><i class=\"fas fa-calendar\"></i> 27 December, 2019</span>
                            </p>
                            <p class=\"excerpt\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus laborum autem, dolores inventore, beatae nam.</p>
                            <a href=\"single-news.html\" class=\"read-more-btn\">read more <i class=\"fas fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-latest-news\">
                        <a href=\"single-news.html\"><div class=\"latest-news-bg news-bg-6\"></div></a>
                        <div class=\"news-text-box\">
                            <h3><a href=\"single-news.html\">Love for fruits are genuine of John Doe</a></h3>
                            <p class=\"blog-meta\">
                                <span class=\"author\"><i class=\"fas fa-user\"></i> Admin</span>
                                <span class=\"date\"><i class=\"fas fa-calendar\"></i> 27 December, 2018</span>
                            </p>
                            <p class=\"excerpt\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus laborum autem, dolores inventore, beatae nam.</p>
                            <a href=\"single-news.html\" class=\"read-more-btn\">read more <i class=\"fas fa-angle-right\"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-lg-12 text-center\">
                            <div class=\"pagination-wrap\">
                                <ul>
                                    <li><a href=\"#\">Prev</a></li>
                                    <li><a href=\"#\">1</a></li>
                                    <li><a class=\"active\" href=\"#\">2</a></li>
                                    <li><a href=\"#\">3</a></li>
                                    <li><a href=\"#\">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end latest news -->

{% endblock %}
", "evenement/index.html.twig", "C:\\wamp64\\www\\campi\\templates\\evenement\\index.html.twig");
    }
}

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

/* includes/header.html.twig */
class __TwigTemplate_96db43f1e8e4f7af48e9de593c1e54354a7bd125d93ac76c5aa88a2762f6b91e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/header.html.twig"));

        // line 1
        echo "<!--PreLoader-->
<div class=\"loader\">
    <div class=\"loader-inner\">
        <div class=\"circle\"></div>
    </div>
</div>
<!--PreLoader Ends-->

<!-- header -->
<div class=\"top-header-area\" id=\"sticker\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-sm-12 text-center\">
                <div class=\"main-menu-wrap\">
                    <!-- logo -->
                    <div class=\"site-logo\">
                        <a href=\"index.html\">
                            <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/img/logo.png"), "html", null, true);
        echo "\" alt=\"\">

                        </a>
                    </div>
                    <!-- logo -->

                    <!-- menu start -->
                    <nav class=\"main-menu\">
                        <ul>
                            <li class=\"current-list-item\"><a href=\"#\">Home</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"index.html\">Static Home</a></li>
                                    <li><a href=\"index_2.html\">Slider Home</a></li>
                                </ul>
                            </li>
                            <li><a href=\"about.html\">About</a></li>
                            <li><a href=\"#\">Pages</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"404.html\">404 page</a></li>
                                    <li><a href=\"about.html\">About</a></li>
                                    <li><a href=\"cart.html\">Cart</a></li>
                                    <li><a href=\"checkout.html\">Check Out</a></li>
                                    <li><a href=\"contact.html\">Contact</a></li>
                                    <li><a href=\"news.html\">News</a></li>
                                    <li><a href=\"shop.html\">Shop</a></li>
                                </ul>
                            </li>
                            <li><a href=\"news.html\">News</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"news.html\">News</a></li>
                                    <li><a href=\"single-news.html\">Single News</a></li>
                                </ul>
                            </li>
                            <li><a href=\"contact.html\">Contact</a></li>
                            <li><a href=\"shop.html\">Shop</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"shop.html\">Shop</a></li>
                                    <li><a href=\"checkout.html\">Check Out</a></li>
                                    <li><a href=\"single-product.html\">Single Product</a></li>
                                    <li><a href=\"cart.html\">Cart</a></li>
                                </ul>
                            </li>
                            <li>
                                <div class=\"header-icons\">
                                    <a class=\"shopping-cart\" href=\"cart.html\"><i class=\"fas fa-shopping-cart\"></i></a>
                                    <a class=\"mobile-hide search-bar-icon\" href=\"#\"><i class=\"fas fa-search\"></i></a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <a class=\"mobile-show search-bar-icon\" href=\"#\"><i class=\"fas fa-search\"></i></a>
                    <div class=\"mobile-menu\"></div>
                    <!-- menu end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end header -->

<!-- search area -->
<div class=\"search-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <span class=\"close-btn\"><i class=\"fas fa-window-close\"></i></span>
                <div class=\"search-bar\">
                    <div class=\"search-bar-tablecell\">
                        <h3>Search For:</h3>
                        <input type=\"text\" placeholder=\"Keywords\">
                        <button type=\"submit\">Search <i class=\"fas fa-search\"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end search area -->

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 18,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--PreLoader-->
<div class=\"loader\">
    <div class=\"loader-inner\">
        <div class=\"circle\"></div>
    </div>
</div>
<!--PreLoader Ends-->

<!-- header -->
<div class=\"top-header-area\" id=\"sticker\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 col-sm-12 text-center\">
                <div class=\"main-menu-wrap\">
                    <!-- logo -->
                    <div class=\"site-logo\">
                        <a href=\"index.html\">
                            <img src=\"{{ asset(\"front-office/img/logo.png\") }}\" alt=\"\">

                        </a>
                    </div>
                    <!-- logo -->

                    <!-- menu start -->
                    <nav class=\"main-menu\">
                        <ul>
                            <li class=\"current-list-item\"><a href=\"#\">Home</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"index.html\">Static Home</a></li>
                                    <li><a href=\"index_2.html\">Slider Home</a></li>
                                </ul>
                            </li>
                            <li><a href=\"about.html\">About</a></li>
                            <li><a href=\"#\">Pages</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"404.html\">404 page</a></li>
                                    <li><a href=\"about.html\">About</a></li>
                                    <li><a href=\"cart.html\">Cart</a></li>
                                    <li><a href=\"checkout.html\">Check Out</a></li>
                                    <li><a href=\"contact.html\">Contact</a></li>
                                    <li><a href=\"news.html\">News</a></li>
                                    <li><a href=\"shop.html\">Shop</a></li>
                                </ul>
                            </li>
                            <li><a href=\"news.html\">News</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"news.html\">News</a></li>
                                    <li><a href=\"single-news.html\">Single News</a></li>
                                </ul>
                            </li>
                            <li><a href=\"contact.html\">Contact</a></li>
                            <li><a href=\"shop.html\">Shop</a>
                                <ul class=\"sub-menu\">
                                    <li><a href=\"shop.html\">Shop</a></li>
                                    <li><a href=\"checkout.html\">Check Out</a></li>
                                    <li><a href=\"single-product.html\">Single Product</a></li>
                                    <li><a href=\"cart.html\">Cart</a></li>
                                </ul>
                            </li>
                            <li>
                                <div class=\"header-icons\">
                                    <a class=\"shopping-cart\" href=\"cart.html\"><i class=\"fas fa-shopping-cart\"></i></a>
                                    <a class=\"mobile-hide search-bar-icon\" href=\"#\"><i class=\"fas fa-search\"></i></a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <a class=\"mobile-show search-bar-icon\" href=\"#\"><i class=\"fas fa-search\"></i></a>
                    <div class=\"mobile-menu\"></div>
                    <!-- menu end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end header -->

<!-- search area -->
<div class=\"search-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <span class=\"close-btn\"><i class=\"fas fa-window-close\"></i></span>
                <div class=\"search-bar\">
                    <div class=\"search-bar-tablecell\">
                        <h3>Search For:</h3>
                        <input type=\"text\" placeholder=\"Keywords\">
                        <button type=\"submit\">Search <i class=\"fas fa-search\"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end search area -->

", "includes/header.html.twig", "C:\\wamp64\\www\\campi\\templates\\includes\\header.html.twig");
    }
}

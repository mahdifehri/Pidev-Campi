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

/* includes/footer.html.twig */
class __TwigTemplate_c1e1333e1a511339a0013dee4afce7564dd0d429cd6a27f7d3dff7dc5d6510e4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/footer.html.twig"));

        // line 1
        echo "<!-- footer -->
<div class=\"footer-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"footer-box about-widget\">
                    <h2 class=\"widget-title\">About us</h2>
                    <p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"footer-box get-in-touch\">
                    <h2 class=\"widget-title\">Get in Touch</h2>
                    <ul>
                        <li>34/8, East Hukupara, Gifirtok, Sadan.</li>
                        <li>support@fruitkha.com</li>
                        <li>+00 111 222 3333</li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"footer-box pages\">
                    <h2 class=\"widget-title\">Pages</h2>
                    <ul>
                        <li><a href=\"index.html\">Home</a></li>
                        <li><a href=\"about.html\">About</a></li>
                        <li><a href=\"services.html\">Shop</a></li>
                        <li><a href=\"news.html\">News</a></li>
                        <li><a href=\"contact.html\">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"footer-box subscribe\">
                    <h2 class=\"widget-title\">Subscribe</h2>
                    <p>Subscribe to our mailing list to get the latest updates.</p>
                    <form action=\"index.html\">
                        <input type=\"email\" placeholder=\"Email\">
                        <button type=\"submit\"><i class=\"fas fa-paper-plane\"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end footer -->

<!-- copyright -->
<div class=\"copyright\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-12\">
                <p>Copyrights &copy; 2019 - <a href=\"https://imransdesign.com/\">Imran Hossain</a>,  All Rights Reserved.</p>
            </div>
            <div class=\"col-lg-6 text-right col-md-12\">
                <div class=\"social-icons\">
                    <ul>
                        <li><a href=\"#\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a></li>
                        <li><a href=\"#\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a></li>
                        <li><a href=\"#\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a></li>
                        <li><a href=\"#\" target=\"_blank\"><i class=\"fab fa-linkedin\"></i></a></li>
                        <li><a href=\"#\" target=\"_blank\"><i class=\"fab fa-dribbble\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end copyright -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includes/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- footer -->
<div class=\"footer-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"footer-box about-widget\">
                    <h2 class=\"widget-title\">About us</h2>
                    <p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"footer-box get-in-touch\">
                    <h2 class=\"widget-title\">Get in Touch</h2>
                    <ul>
                        <li>34/8, East Hukupara, Gifirtok, Sadan.</li>
                        <li>support@fruitkha.com</li>
                        <li>+00 111 222 3333</li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"footer-box pages\">
                    <h2 class=\"widget-title\">Pages</h2>
                    <ul>
                        <li><a href=\"index.html\">Home</a></li>
                        <li><a href=\"about.html\">About</a></li>
                        <li><a href=\"services.html\">Shop</a></li>
                        <li><a href=\"news.html\">News</a></li>
                        <li><a href=\"contact.html\">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"footer-box subscribe\">
                    <h2 class=\"widget-title\">Subscribe</h2>
                    <p>Subscribe to our mailing list to get the latest updates.</p>
                    <form action=\"index.html\">
                        <input type=\"email\" placeholder=\"Email\">
                        <button type=\"submit\"><i class=\"fas fa-paper-plane\"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end footer -->

<!-- copyright -->
<div class=\"copyright\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-12\">
                <p>Copyrights &copy; 2019 - <a href=\"https://imransdesign.com/\">Imran Hossain</a>,  All Rights Reserved.</p>
            </div>
            <div class=\"col-lg-6 text-right col-md-12\">
                <div class=\"social-icons\">
                    <ul>
                        <li><a href=\"#\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a></li>
                        <li><a href=\"#\" target=\"_blank\"><i class=\"fab fa-twitter\"></i></a></li>
                        <li><a href=\"#\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a></li>
                        <li><a href=\"#\" target=\"_blank\"><i class=\"fab fa-linkedin\"></i></a></li>
                        <li><a href=\"#\" target=\"_blank\"><i class=\"fab fa-dribbble\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end copyright -->", "includes/footer.html.twig", "C:\\wamp64\\www\\campi\\templates\\includes\\footer.html.twig");
    }
}

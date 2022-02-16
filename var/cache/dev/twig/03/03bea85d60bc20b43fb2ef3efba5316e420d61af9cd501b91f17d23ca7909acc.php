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

/* base-back.html.twig */
class __TwigTemplate_785e6da32dd6ee4ee7b1cd9027866fa65929e1d42c57eec26fb249604cb99b69 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-back.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-back.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 9
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "
    ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "</head>
<body>

<div class=\"container-scroller\">
    <!-- partial:../../partials/_sidebar.html -->
    <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
            <a class=\"sidebar-brand brand-logo\" href=\"../../index.html\"><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/images/logo.svg"), "html", null, true);
        echo "\" alt=\"logo\" /></a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"../../index.html\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/images/logo-mini.svg"), "html", null, true);
        echo "\" alt=\"logo\" /></a>
        </div>
        <ul class=\"nav\">
          <li class=\"nav-item profile\">
            <div class=\"profile-desc\">
              <div class=\"profile-pic\">
                <div class=\"count-indicator\">
                  <img class=\"img-xs rounded-circle \" src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/images/faces/face15.jpg"), "html", null, true);
        echo "\" alt=\"\">
                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  <h5 class=\"mb-0 font-weight-normal\">Henry Klein</h5>
                  <span>Gold Member</span>
                </div>
              </div>
              <a href=\"#\" id=\"profile-dropdown\" data-toggle=\"dropdown\"><i class=\"mdi mdi-dots-vertical\"></i></a>
            <div class=\"dropdown-menu dropdown-menu-right sidebar-dropdown preview-list\" aria-labelledby=\"profile-dropdown\">
                <a href=\"#\" class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                        <div class=\"preview-icon bg-dark rounded-circle\">
                            <i class=\"mdi mdi-settings text-primary\"></i>
                        </div>
                    </div>
                    <div class=\"preview-item-content\">
                        <p class=\"preview-subject ellipsis mb-1 text-small\">Account settings</p>
                    </div>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                        <div class=\"preview-icon bg-dark rounded-circle\">
                            <i class=\"mdi mdi-onepassword  text-info\"></i>
                        </div>
                    </div>
                    <div class=\"preview-item-content\">
                        <p class=\"preview-subject ellipsis mb-1 text-small\">Change Password</p>
                    </div>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                        <div class=\"preview-icon bg-dark rounded-circle\">
                            <i class=\"mdi mdi-calendar-today text-success\"></i>
                        </div>
                    </div>
                    <div class=\"preview-item-content\">
                        <p class=\"preview-subject ellipsis mb-1 text-small\">To-do list</p>
                    </div>
                </a>
            </div>
        </div>
        </li>
        <li class=\"nav-item nav-category\">
            <span class=\"nav-link\">Navigation</span>
        </li>
        <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"../../index.html\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-speedometer\"></i>
              </span>
                <span class=\"menu-title\">Dashboard</span>
            </a>
        </li>
        <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-laptop\"></i>
              </span>
                <span class=\"menu-title\">Basic UI Elements</span>
                <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"ui-basic\">
                <ul class=\"nav flex-column sub-menu\">
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/ui-features/buttons.html\">Buttons</a></li>
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/ui-features/dropdowns.html\">Dropdowns</a></li>
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/ui-features/typography.html\">Typography</a></li>
                </ul>
            </div>
        </li>
        <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"../../pages/forms/basic_elements.html\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-playlist-play\"></i>
              </span>
                <span class=\"menu-title\">Form Elements</span>
            </a>
        </li>
        <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"../../pages/tables/basic-table.html\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-table-large\"></i>
              </span>
                <span class=\"menu-title\">Tables</span>
            </a>
        </li>
        <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"../../pages/charts/chartjs.html\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-chart-bar\"></i>
              </span>
                <span class=\"menu-title\">Charts</span>
            </a>
        </li>
        <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"../../pages/icons/mdi.html\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-contacts\"></i>
              </span>
                <span class=\"menu-title\">Icons</span>
            </a>
        </li>
        <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#auth\" aria-expanded=\"false\" aria-controls=\"auth\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-security\"></i>
              </span>
                <span class=\"menu-title\">User Pages</span>
                <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"auth\">
                <ul class=\"nav flex-column sub-menu\">
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/samples/blank-page.html\"> Blank Page </a></li>
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/samples/error-404.html\"> 404 </a></li>
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/samples/error-500.html\"> 500 </a></li>
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/samples/login.html\"> Login </a></li>
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/samples/register.html\"> Register </a></li>
                </ul>
            </div>
        </li>
        <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-file-document-box\"></i>
              </span>
                <span class=\"menu-title\">Documentation</span>
            </a>
        </li>
        </ul>
    </nav>
    <!-- partial -->
    <div class=\"container-fluid page-body-wrapper\">
        <!-- partial:../../partials/_navbar.html -->
        <nav class=\"navbar p-0 fixed-top d-flex flex-row\">
            <div class=\"navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center\">
                <a class=\"navbar-brand brand-logo-mini\" href=\"../../index.html\"><img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/images/logo-mini.svg"), "html", null, true);
        echo "\" alt=\"logo\" /></a>
            </div>
            <div class=\"navbar-menu-wrapper flex-grow d-flex align-items-stretch\">
                <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
                    <span class=\"mdi mdi-menu\"></span>
                </button>
                <ul class=\"navbar-nav w-100\">
                    <li class=\"nav-item w-100\">
                        <form class=\"nav-link mt-2 mt-md-0 d-none d-lg-flex search\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search products\">
                        </form>
                    </li>
                </ul>
                <ul class=\"navbar-nav navbar-nav-right\">
                    <li class=\"nav-item dropdown d-none d-lg-block\">
                        <a class=\"nav-link btn btn-success create-new-button\" id=\"createbuttonDropdown\" data-toggle=\"dropdown\" aria-expanded=\"false\" href=\"#\">+ Create New Project</a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"createbuttonDropdown\">
                            <h6 class=\"p-3 mb-0\">Projects</h6>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-file-outline text-primary\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject ellipsis mb-1\">Software Development</p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-web text-info\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject ellipsis mb-1\">UI Development</p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-layers text-danger\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject ellipsis mb-1\">Software Testing</p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <p class=\"p-3 mb-0 text-center\">See all projects</p>
                        </div>
                    </li>
                    <li class=\"nav-item nav-settings d-none d-lg-block\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"mdi mdi-view-grid\"></i>
                        </a>
                    </li>
                    <li class=\"nav-item dropdown border-left\">
                        <a class=\"nav-link count-indicator dropdown-toggle\" id=\"messageDropdown\" href=\"#\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"mdi mdi-email\"></i>
                            <span class=\"count bg-success\"></span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"messageDropdown\">
                            <h6 class=\"p-3 mb-0\">Messages</h6>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <img src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/images/faces/face4.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"rounded-circle profile-pic\">
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject ellipsis mb-1\">Mark send you a message</p>
                                    <p class=\"text-muted mb-0\"> 1 Minutes ago </p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <img src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/images/faces/face2.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"rounded-circle profile-pic\">
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject ellipsis mb-1\">Cregh send you a message</p>
                                    <p class=\"text-muted mb-0\"> 15 Minutes ago </p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <img src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/images/faces/face3.jpg"), "html", null, true);
        echo "\" alt=\"image\" class=\"rounded-circle profile-pic\">
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject ellipsis mb-1\">Profile picture updated</p>
                                    <p class=\"text-muted mb-0\"> 18 Minutes ago </p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <p class=\"p-3 mb-0 text-center\">4 new messages</p>
                        </div>
                    </li>
                    <li class=\"nav-item dropdown border-left\">
                        <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
                            <i class=\"mdi mdi-bell\"></i>
                            <span class=\"count bg-danger\"></span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                            <h6 class=\"p-3 mb-0\">Notifications</h6>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-calendar text-success\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject mb-1\">Event today</p>
                                    <p class=\"text-muted ellipsis mb-0\"> Just a reminder that you have an event today </p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-settings text-danger\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject mb-1\">Settings</p>
                                    <p class=\"text-muted ellipsis mb-0\"> Update dashboard </p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-link-variant text-warning\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject mb-1\">Launch Admin</p>
                                    <p class=\"text-muted ellipsis mb-0\"> New admin wow! </p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <p class=\"p-3 mb-0 text-center\">See all notifications</p>
                        </div>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-toggle=\"dropdown\">
                            <div class=\"navbar-profile\">
                                <img class=\"img-xs rounded-circle\" src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/images/faces/face15.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Henry Klein</p>
                                <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                            </div>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                            <h6 class=\"p-3 mb-0\">Profile</h6>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-settings text-success\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject mb-1\">Settings</p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-logout text-danger\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject mb-1\">Log out</p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <p class=\"p-3 mb-0 text-center\">Advanced settings</p>
                        </div>
                    </li>
                </ul>
                <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
                    <span class=\"mdi mdi-format-line-spacing\"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class=\"main-panel\">
            <div class=\"content-wrapper\">
                ";
        // line 385
        $this->displayBlock('body', $context, $blocks);
        // line 386
        echo "            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class=\"footer\">
                <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                    <span class=\"text-muted d-block text-center text-sm-left d-sm-inline-block\">Copyright © bootstrapdash.com 2020</span>
                    <span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center\"> Free <a href=\"https://www.bootstrapdash.com/bootstrap-admin-template/\" target=\"_blank\">Bootstrap admin templates</a> from Bootstrapdash.com</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->



</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <!-- plugins:css -->
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendors/mdi/css/materialdesignicons.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendors/css/vendor.bundle.base.css"), "html", null, true);
        echo "\">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <!-- End Plugin css for this page -->
        <!-- inject:css -->
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/css/style.css"), "html", null, true);
        echo "\">
        <!-- End layout styles -->
        <link rel=\"shortcut icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/images/favicon.png"), "html", null, true);
        echo "\" />
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "        <!-- plugins:js -->
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/vendors/js/vendor.bundle.base.js"), "html", null, true);
        echo "\"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/off-canvas.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/hoverable-collapse.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/misc.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/settings.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/todolist.js"), "html", null, true);
        echo "\"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <!-- End custom js for this page -->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 385
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base-back.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  585 => 385,  570 => 35,  566 => 34,  562 => 33,  558 => 32,  554 => 31,  546 => 26,  543 => 25,  533 => 24,  521 => 21,  516 => 19,  506 => 12,  502 => 11,  499 => 10,  489 => 9,  470 => 6,  439 => 386,  437 => 385,  392 => 343,  328 => 282,  315 => 272,  302 => 262,  229 => 192,  89 => 55,  79 => 48,  75 => 47,  66 => 40,  64 => 24,  61 => 23,  58 => 9,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
    {% block stylesheets %}
        <!-- plugins:css -->
        <link rel=\"stylesheet\" href=\"{{ asset(\"back-office/vendors/mdi/css/materialdesignicons.min.css\") }}\">
        <link rel=\"stylesheet\" href=\"{{ asset(\"back-office/vendors/css/vendor.bundle.base.css\") }}\">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <!-- End Plugin css for this page -->
        <!-- inject:css -->
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel=\"stylesheet\" href=\"{{ asset(\"back-office/css/style.css\") }}\">
        <!-- End layout styles -->
        <link rel=\"shortcut icon\" href=\"{{ asset(\"back-office/images/favicon.png\") }}\" />
    {% endblock %}

    {% block javascripts %}
        <!-- plugins:js -->
        <script src=\"{{ asset(\"back-office/vendors/js/vendor.bundle.base.js\") }}\"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src=\"{{ asset(\"back-office/js/off-canvas.js\") }}\"></script>
        <script src=\"{{ asset(\"back-office/js/hoverable-collapse.js\") }}\"></script>
        <script src=\"{{ asset(\"back-office/js/misc.js\") }}\"></script>
        <script src=\"{{ asset(\"back-office/js/settings.js\") }}\"></script>
        <script src=\"{{ asset(\"back-office/js/todolist.js\") }}\"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <!-- End custom js for this page -->
    {% endblock %}
</head>
<body>

<div class=\"container-scroller\">
    <!-- partial:../../partials/_sidebar.html -->
    <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <div class=\"sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top\">
            <a class=\"sidebar-brand brand-logo\" href=\"../../index.html\"><img src=\"{{ asset(\"back-office/images/logo.svg\") }}\" alt=\"logo\" /></a>
          <a class=\"sidebar-brand brand-logo-mini\" href=\"../../index.html\"><img src=\"{{ asset(\"back-office/images/logo-mini.svg\") }}\" alt=\"logo\" /></a>
        </div>
        <ul class=\"nav\">
          <li class=\"nav-item profile\">
            <div class=\"profile-desc\">
              <div class=\"profile-pic\">
                <div class=\"count-indicator\">
                  <img class=\"img-xs rounded-circle \" src=\"{{ asset(\"back-office/images/faces/face15.jpg\") }}\" alt=\"\">
                  <span class=\"count bg-success\"></span>
                </div>
                <div class=\"profile-name\">
                  <h5 class=\"mb-0 font-weight-normal\">Henry Klein</h5>
                  <span>Gold Member</span>
                </div>
              </div>
              <a href=\"#\" id=\"profile-dropdown\" data-toggle=\"dropdown\"><i class=\"mdi mdi-dots-vertical\"></i></a>
            <div class=\"dropdown-menu dropdown-menu-right sidebar-dropdown preview-list\" aria-labelledby=\"profile-dropdown\">
                <a href=\"#\" class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                        <div class=\"preview-icon bg-dark rounded-circle\">
                            <i class=\"mdi mdi-settings text-primary\"></i>
                        </div>
                    </div>
                    <div class=\"preview-item-content\">
                        <p class=\"preview-subject ellipsis mb-1 text-small\">Account settings</p>
                    </div>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                        <div class=\"preview-icon bg-dark rounded-circle\">
                            <i class=\"mdi mdi-onepassword  text-info\"></i>
                        </div>
                    </div>
                    <div class=\"preview-item-content\">
                        <p class=\"preview-subject ellipsis mb-1 text-small\">Change Password</p>
                    </div>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a href=\"#\" class=\"dropdown-item preview-item\">
                    <div class=\"preview-thumbnail\">
                        <div class=\"preview-icon bg-dark rounded-circle\">
                            <i class=\"mdi mdi-calendar-today text-success\"></i>
                        </div>
                    </div>
                    <div class=\"preview-item-content\">
                        <p class=\"preview-subject ellipsis mb-1 text-small\">To-do list</p>
                    </div>
                </a>
            </div>
        </div>
        </li>
        <li class=\"nav-item nav-category\">
            <span class=\"nav-link\">Navigation</span>
        </li>
        <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"../../index.html\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-speedometer\"></i>
              </span>
                <span class=\"menu-title\">Dashboard</span>
            </a>
        </li>
        <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-laptop\"></i>
              </span>
                <span class=\"menu-title\">Basic UI Elements</span>
                <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"ui-basic\">
                <ul class=\"nav flex-column sub-menu\">
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/ui-features/buttons.html\">Buttons</a></li>
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/ui-features/dropdowns.html\">Dropdowns</a></li>
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/ui-features/typography.html\">Typography</a></li>
                </ul>
            </div>
        </li>
        <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"../../pages/forms/basic_elements.html\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-playlist-play\"></i>
              </span>
                <span class=\"menu-title\">Form Elements</span>
            </a>
        </li>
        <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"../../pages/tables/basic-table.html\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-table-large\"></i>
              </span>
                <span class=\"menu-title\">Tables</span>
            </a>
        </li>
        <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"../../pages/charts/chartjs.html\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-chart-bar\"></i>
              </span>
                <span class=\"menu-title\">Charts</span>
            </a>
        </li>
        <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"../../pages/icons/mdi.html\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-contacts\"></i>
              </span>
                <span class=\"menu-title\">Icons</span>
            </a>
        </li>
        <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#auth\" aria-expanded=\"false\" aria-controls=\"auth\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-security\"></i>
              </span>
                <span class=\"menu-title\">User Pages</span>
                <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"auth\">
                <ul class=\"nav flex-column sub-menu\">
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/samples/blank-page.html\"> Blank Page </a></li>
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/samples/error-404.html\"> 404 </a></li>
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/samples/error-500.html\"> 500 </a></li>
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/samples/login.html\"> Login </a></li>
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"../../pages/samples/register.html\"> Register </a></li>
                </ul>
            </div>
        </li>
        <li class=\"nav-item menu-items\">
            <a class=\"nav-link\" href=\"http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html\">
              <span class=\"menu-icon\">
                <i class=\"mdi mdi-file-document-box\"></i>
              </span>
                <span class=\"menu-title\">Documentation</span>
            </a>
        </li>
        </ul>
    </nav>
    <!-- partial -->
    <div class=\"container-fluid page-body-wrapper\">
        <!-- partial:../../partials/_navbar.html -->
        <nav class=\"navbar p-0 fixed-top d-flex flex-row\">
            <div class=\"navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center\">
                <a class=\"navbar-brand brand-logo-mini\" href=\"../../index.html\"><img src=\"{{ asset(\"back-office/images/logo-mini.svg\") }}\" alt=\"logo\" /></a>
            </div>
            <div class=\"navbar-menu-wrapper flex-grow d-flex align-items-stretch\">
                <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
                    <span class=\"mdi mdi-menu\"></span>
                </button>
                <ul class=\"navbar-nav w-100\">
                    <li class=\"nav-item w-100\">
                        <form class=\"nav-link mt-2 mt-md-0 d-none d-lg-flex search\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search products\">
                        </form>
                    </li>
                </ul>
                <ul class=\"navbar-nav navbar-nav-right\">
                    <li class=\"nav-item dropdown d-none d-lg-block\">
                        <a class=\"nav-link btn btn-success create-new-button\" id=\"createbuttonDropdown\" data-toggle=\"dropdown\" aria-expanded=\"false\" href=\"#\">+ Create New Project</a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"createbuttonDropdown\">
                            <h6 class=\"p-3 mb-0\">Projects</h6>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-file-outline text-primary\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject ellipsis mb-1\">Software Development</p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-web text-info\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject ellipsis mb-1\">UI Development</p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-layers text-danger\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject ellipsis mb-1\">Software Testing</p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <p class=\"p-3 mb-0 text-center\">See all projects</p>
                        </div>
                    </li>
                    <li class=\"nav-item nav-settings d-none d-lg-block\">
                        <a class=\"nav-link\" href=\"#\">
                            <i class=\"mdi mdi-view-grid\"></i>
                        </a>
                    </li>
                    <li class=\"nav-item dropdown border-left\">
                        <a class=\"nav-link count-indicator dropdown-toggle\" id=\"messageDropdown\" href=\"#\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                            <i class=\"mdi mdi-email\"></i>
                            <span class=\"count bg-success\"></span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"messageDropdown\">
                            <h6 class=\"p-3 mb-0\">Messages</h6>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <img src=\"{{ asset(\"back-office/images/faces/face4.jpg\") }}\" alt=\"image\" class=\"rounded-circle profile-pic\">
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject ellipsis mb-1\">Mark send you a message</p>
                                    <p class=\"text-muted mb-0\"> 1 Minutes ago </p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <img src=\"{{ asset(\"back-office/images/faces/face2.jpg\") }}\" alt=\"image\" class=\"rounded-circle profile-pic\">
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject ellipsis mb-1\">Cregh send you a message</p>
                                    <p class=\"text-muted mb-0\"> 15 Minutes ago </p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <img src=\"{{ asset(\"back-office/images/faces/face3.jpg\") }}\" alt=\"image\" class=\"rounded-circle profile-pic\">
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject ellipsis mb-1\">Profile picture updated</p>
                                    <p class=\"text-muted mb-0\"> 18 Minutes ago </p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <p class=\"p-3 mb-0 text-center\">4 new messages</p>
                        </div>
                    </li>
                    <li class=\"nav-item dropdown border-left\">
                        <a class=\"nav-link count-indicator dropdown-toggle\" id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
                            <i class=\"mdi mdi-bell\"></i>
                            <span class=\"count bg-danger\"></span>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
                            <h6 class=\"p-3 mb-0\">Notifications</h6>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-calendar text-success\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject mb-1\">Event today</p>
                                    <p class=\"text-muted ellipsis mb-0\"> Just a reminder that you have an event today </p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-settings text-danger\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject mb-1\">Settings</p>
                                    <p class=\"text-muted ellipsis mb-0\"> Update dashboard </p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-link-variant text-warning\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject mb-1\">Launch Admin</p>
                                    <p class=\"text-muted ellipsis mb-0\"> New admin wow! </p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <p class=\"p-3 mb-0 text-center\">See all notifications</p>
                        </div>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link\" id=\"profileDropdown\" href=\"#\" data-toggle=\"dropdown\">
                            <div class=\"navbar-profile\">
                                <img class=\"img-xs rounded-circle\" src=\"{{ asset(\"back-office/images/faces/face15.jpg\") }}\" alt=\"\">
                                <p class=\"mb-0 d-none d-sm-block navbar-profile-name\">Henry Klein</p>
                                <i class=\"mdi mdi-menu-down d-none d-sm-block\"></i>
                            </div>
                        </a>
                        <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"profileDropdown\">
                            <h6 class=\"p-3 mb-0\">Profile</h6>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-settings text-success\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject mb-1\">Settings</p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item preview-item\">
                                <div class=\"preview-thumbnail\">
                                    <div class=\"preview-icon bg-dark rounded-circle\">
                                        <i class=\"mdi mdi-logout text-danger\"></i>
                                    </div>
                                </div>
                                <div class=\"preview-item-content\">
                                    <p class=\"preview-subject mb-1\">Log out</p>
                                </div>
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <p class=\"p-3 mb-0 text-center\">Advanced settings</p>
                        </div>
                    </li>
                </ul>
                <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
                    <span class=\"mdi mdi-format-line-spacing\"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class=\"main-panel\">
            <div class=\"content-wrapper\">
                {% block body %}{% endblock %}
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class=\"footer\">
                <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                    <span class=\"text-muted d-block text-center text-sm-left d-sm-inline-block\">Copyright © bootstrapdash.com 2020</span>
                    <span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center\"> Free <a href=\"https://www.bootstrapdash.com/bootstrap-admin-template/\" target=\"_blank\">Bootstrap admin templates</a> from Bootstrapdash.com</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->



</body>
</html>
", "base-back.html.twig", "C:\\wamp64\\www\\campi\\templates\\base-back.html.twig");
    }
}

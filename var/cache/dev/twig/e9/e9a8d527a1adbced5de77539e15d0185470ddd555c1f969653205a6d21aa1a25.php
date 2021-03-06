<?php

/* CMMAccountBundle::layout.html.twig */
class __TwigTemplate_62b12bf002021dc07efc940c8aca04e4ada53e64994692fdb9927b12352c2b89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CMMAccountBundle::layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CMMAccountBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.0.0
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
    <meta name=\"description\" content=\"CoreUI - Open Source Bootstrap Admin Template\">
    <meta name=\"author\" content=\"Łukasz Holeczek\">
    <meta name=\"keyword\" content=\"Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard\">
    <title>";
        // line 18
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- Icons-->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/@coreui/icons/css/coreui-icons.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/flag-icon-css/css/flag-icon.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/font-awesome/css/font-awesome.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/simple-line-icons/css/simple-line-icons.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Main styles for this application-->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/css/style.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/vendors/pace-progress/css/pace.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>
<body class=\"app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show\">
<header class=\"app-header navbar\">
    <button class=\"navbar-toggler sidebar-toggler d-lg-none mr-auto\" type=\"button\" data-toggle=\"sidebar-show\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <a class=\"navbar-brand\" href=\"#\">
        <img class=\"navbar-brand-full\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/images/logo.png")), "html", null, true);
        echo "\" width=\"89\" height=\"25\" alt=\"CMM Logo\">
        <img class=\"navbar-brand-minimized\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/images/logo.png")), "html", null, true);
        echo "\" width=\"30\" height=\"30\" alt=\"CMM Logo\">
    </a>
    <button class=\"navbar-toggler sidebar-toggler d-md-down-none\" type=\"button\" data-toggle=\"sidebar-lg-show\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <ul class=\"nav navbar-nav d-md-down-none\">
        <li class=\"nav-item px-3\">
            <a class=\"nav-link\" href=\"#\">Tableau de Bord</a>
        </li>
        <li class=\"nav-item px-3\">
            <a class=\"nav-link\" href=\"#\">Utilisateurs</a>
        </li>
        <li class=\"nav-item px-3\">
            <a class=\"nav-link\" href=\"#\">Reglages</a>
        </li>
    </ul>
    <ul class=\"nav navbar-nav ml-auto\">
        <li class=\"nav-item d-md-down-none\">
            <a class=\"nav-link\" href=\"#\">
                <i class=\"icon-bell\"></i>
                <span class=\"badge badge-pill badge-danger\">5</span>
            </a>
        </li>
        <li class=\"nav-item d-md-down-none\">
            <a class=\"nav-link\" href=\"#\">
                <i class=\"icon-list\"></i>
            </a>
        </li>
        <li class=\"nav-item d-md-down-none\">
            <a class=\"nav-link\" href=\"#\">
                <i class=\"icon-location-pin\"></i>
            </a>
        </li>
        <li class=\"nav-item dropdown\">
            <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <img class=\"img-avatar\" src=\"img/avatars/6.jpg\" alt=\"\">
            </a>
            <div class=\"dropdown-menu dropdown-menu-right\">
                


                <div class=\"dropdown-header text-center\">
                    <strong>Reglages</strong>
                </div>
                <a class=\"dropdown-item\" href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">
                    <i class=\"fa fa-user\"></i> Profile
                </a>
                <a class=\"dropdown-item\" href=\"#\">
                    <i class=\"fa fa-wrench\"></i> Mes cartes
                </a>
                <div class=\"divider\"></div>

                <a class=\"dropdown-item\" href=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">
                    <i class=\"fa fa-lock\"></i> Se deconnecter</a>
            </div>
        </li>
    </ul>
    <button class=\"navbar-toggler aside-menu-toggler d-md-down-none\" type=\"button\" data-toggle=\"aside-menu-lg-show\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <button class=\"navbar-toggler aside-menu-toggler d-lg-none\" type=\"button\" data-toggle=\"aside-menu-show\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
</header>
<div class=\"app-body\">
    <div class=\"sidebar\">
        <nav class=\"sidebar-nav\">
            <ul class=\"nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"index.html\">
                        <i class=\"nav-icon icon-speedometer\"></i> Tableau de Bord
                    </a>
                </li>
                <li class=\"nav-title\">Transfert</li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"colors.html\">
                        <i class=\"nav-icon icon-drop\"></i> Banque => Mobicash</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"typography.html\">
                        <i class=\"nav-icon icon-pencil\"></i> Mobicash To Banque</a>
                </li>

                
                <li class=\"nav-item mt-auto\">
                    <a class=\"nav-link nav-link-success\" href=\"https://coreui.io\" target=\"_top\">
                        <i class=\"nav-icon icon-cloud-download\"></i>Telecharger notre appli</a>
                </li>

            </ul>
        </nav>
        <button class=\"sidebar-minimizer brand-minimizer\" type=\"button\"></button>
    </div>
    <main class=\"main\">
        <!-- Breadcrumb-->
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\">Home</li>
            <li class=\"breadcrumb-item\">
                <a href=\"#\">Admin</a>
            </li>
            <li class=\"breadcrumb-item active\">Dashboard</li>
            <!-- Breadcrumb Menu-->
            <li class=\"breadcrumb-menu d-md-down-none\">
                <div class=\"btn-group\" role=\"group\" aria-label=\"Button group\">
                    <a class=\"btn\" href=\"#\">
                        <i class=\"icon-speech\"></i>
                    </a>
                    <a class=\"btn\" href=\"./\">
                        <i class=\"icon-graph\"></i>  Dashboard</a>
                    <a class=\"btn\" href=\"#\">
                        <i class=\"icon-settings\"></i>  Settings</a>
                </div>
            </li>
        </ol>
        <div class=\"container-fluid\">
            <div class=\"animated fadeIn\">


                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-5\">
                                <h4 class=\"card-title mb-0\">Traffic</h4>
                                <div class=\"small text-muted\">November 2017</div>
                            </div>
                            <!--/.col-->
                            <div class=\"col-sm-7 d-none d-md-block\">
                                <button type=\"button\" class=\"btn btn-primary float-right\">
                                    <i class=\"icon-cloud-download\"></i>
                                </button>
                                <div class=\"btn-group btn-group-toggle float-right mr-3\" data-toggle=\"buttons\">
                                    <label class=\"btn btn-outline-secondary\">
                                        <input type=\"radio\" name=\"options\" id=\"option1\" autocomplete=\"off\"> Day
                                    </label>
                                    <label class=\"btn btn-outline-secondary active\">
                                        <input type=\"radio\" name=\"options\" id=\"option2\" autocomplete=\"off\" checked> Month
                                    </label>
                                    <label class=\"btn btn-outline-secondary\">
                                        <input type=\"radio\" name=\"options\" id=\"option3\" autocomplete=\"off\"> Year
                                    </label>
                                </div>
                            </div>
                            <!--/.col-->
                        </div>
                        <!--/.row-->
                        <div class=\"chart-wrapper\" style=\"height:300px;margin-top:40px;\">
                            <canvas id=\"main-chart\" class=\"chart\" height=\"300\"></canvas>
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <div class=\"row text-center\">
                            <div class=\"col-sm-12 col-md mb-sm-2 mb-0\">
                                <div class=\"text-muted\">Visits</div>
                                <strong>29.703 Users (40%)</strong>
                                <div class=\"progress progress-xs mt-2\">
                                    <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 40%\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                            <div class=\"col-sm-12 col-md mb-sm-2 mb-0\">
                                <div class=\"text-muted\">Unique</div>
                                <strong>24.093 Users (20%)</strong>
                                <div class=\"progress progress-xs mt-2\">
                                    <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 20%\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                            <div class=\"col-sm-12 col-md mb-sm-2 mb-0\">
                                <div class=\"text-muted\">Pageviews</div>
                                <strong>78.706 Views (60%)</strong>
                                <div class=\"progress progress-xs mt-2\">
                                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 60%\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                            <div class=\"col-sm-12 col-md mb-sm-2 mb-0\">
                                <div class=\"text-muted\">New Users</div>
                                <strong>22.123 Users (80%)</strong>
                                <div class=\"progress progress-xs mt-2\">
                                    <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 80%\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                            <div class=\"col-sm-12 col-md mb-sm-2 mb-0\">
                                <div class=\"text-muted\">Bounce Rate</div>
                                <strong>40.15%</strong>
                                <div class=\"progress progress-xs mt-2\">
                                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 40%\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.card-->

            </div>

        </div>
    </main>
    <aside class=\"aside-menu\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"nav-item\">
                <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#timeline\" role=\"tab\">
                    <i class=\"icon-list\"></i>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#messages\" role=\"tab\">
                    <i class=\"icon-speech\"></i>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#settings\" role=\"tab\">
                    <i class=\"icon-settings\"></i>
                </a>
            </li>
        </ul>
        <!-- Tab panes-->
        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"timeline\" role=\"tabpanel\">
                <div class=\"list-group list-group-accent\">
                    <div class=\"list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small\">Today</div>
                    <div class=\"list-group-item list-group-item-accent-warning list-group-item-divider\">
                        <div class=\"avatar float-right\">
                            <img class=\"img-avatar\" src=\"img/avatars/7.jpg\" alt=\"admin@bootstrapmaster.com\">
                        </div>
                        <div>Meeting with
                            <strong>Lucas</strong>
                        </div>
                        <small class=\"text-muted mr-3\">
                            <i class=\"icon-calendar\"></i>  1 - 3pm</small>
                        <small class=\"text-muted\">
                            <i class=\"icon-location-pin\"></i>  Palo Alto, CA</small>
                    </div>
                    <div class=\"list-group-item list-group-item-accent-info\">
                        <div class=\"avatar float-right\">
                            <img class=\"img-avatar\" src=\"img/avatars/4.jpg\" alt=\"admin@bootstrapmaster.com\">
                        </div>
                        <div>Skype with
                            <strong>Megan</strong>
                        </div>
                        <small class=\"text-muted mr-3\">
                            <i class=\"icon-calendar\"></i>  4 - 5pm</small>
                        <small class=\"text-muted\">
                            <i class=\"icon-social-skype\"></i>  On-line</small>
                    </div>
                    <div class=\"list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small\">Tomorrow</div>
                    <div class=\"list-group-item list-group-item-accent-danger list-group-item-divider\">
                        <div>New UI Project -
                            <strong>deadline</strong>
                        </div>
                        <small class=\"text-muted mr-3\">
                            <i class=\"icon-calendar\"></i>  10 - 11pm</small>
                        <small class=\"text-muted\">
                            <i class=\"icon-home\"></i>  creativeLabs HQ</small>
                        <div class=\"avatars-stack mt-2\">
                            <div class=\"avatar avatar-xs\">
                                <img class=\"img-avatar\" src=\"img/avatars/2.jpg\" alt=\"admin@bootstrapmaster.com\">
                            </div>
                            <div class=\"avatar avatar-xs\">
                                <img class=\"img-avatar\" src=\"img/avatars/3.jpg\" alt=\"admin@bootstrapmaster.com\">
                            </div>
                            <div class=\"avatar avatar-xs\">
                                <img class=\"img-avatar\" src=\"img/avatars/4.jpg\" alt=\"admin@bootstrapmaster.com\">
                            </div>
                            <div class=\"avatar avatar-xs\">
                                <img class=\"img-avatar\" src=\"img/avatars/5.jpg\" alt=\"admin@bootstrapmaster.com\">
                            </div>
                            <div class=\"avatar avatar-xs\">
                                <img class=\"img-avatar\" src=\"img/avatars/6.jpg\" alt=\"admin@bootstrapmaster.com\">
                            </div>
                        </div>
                    </div>
                    <div class=\"list-group-item list-group-item-accent-success list-group-item-divider\">
                        <div>
                            <strong>#10 Startups.Garden</strong> Meetup</div>
                        <small class=\"text-muted mr-3\">
                            <i class=\"icon-calendar\"></i>  1 - 3pm</small>
                        <small class=\"text-muted\">
                            <i class=\"icon-location-pin\"></i>  Palo Alto, CA</small>
                    </div>
                    <div class=\"list-group-item list-group-item-accent-primary list-group-item-divider\">
                        <div>
                            <strong>Team meeting</strong>
                        </div>
                        <small class=\"text-muted mr-3\">
                            <i class=\"icon-calendar\"></i>  4 - 6pm</small>
                        <small class=\"text-muted\">
                            <i class=\"icon-home\"></i>  creativeLabs HQ</small>
                        <div class=\"avatars-stack mt-2\">
                            <div class=\"avatar avatar-xs\">
                                <img class=\"img-avatar\" src=\"img/avatars/2.jpg\" alt=\"admin@bootstrapmaster.com\">
                            </div>
                            <div class=\"avatar avatar-xs\">
                                <img class=\"img-avatar\" src=\"img/avatars/3.jpg\" alt=\"admin@bootstrapmaster.com\">
                            </div>
                            <div class=\"avatar avatar-xs\">
                                <img class=\"img-avatar\" src=\"img/avatars/4.jpg\" alt=\"admin@bootstrapmaster.com\">
                            </div>
                            <div class=\"avatar avatar-xs\">
                                <img class=\"img-avatar\" src=\"img/avatars/5.jpg\" alt=\"admin@bootstrapmaster.com\">
                            </div>
                            <div class=\"avatar avatar-xs\">
                                <img class=\"img-avatar\" src=\"img/avatars/6.jpg\" alt=\"admin@bootstrapmaster.com\">
                            </div>
                            <div class=\"avatar avatar-xs\">
                                <img class=\"img-avatar\" src=\"img/avatars/7.jpg\" alt=\"admin@bootstrapmaster.com\">
                            </div>
                            <div class=\"avatar avatar-xs\">
                                <img class=\"img-avatar\" src=\"img/avatars/8.jpg\" alt=\"admin@bootstrapmaster.com\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"tab-pane p-3\" id=\"messages\" role=\"tabpanel\">
                <div class=\"message\">
                    <div class=\"py-3 pb-5 mr-3 float-left\">
                        <div class=\"avatar\">
                            <img class=\"img-avatar\" src=\"img/avatars/7.jpg\" alt=\"admin@bootstrapmaster.com\">
                            <span class=\"avatar-status badge-success\"></span>
                        </div>
                    </div>
                    <div>
                        <small class=\"text-muted\">Lukasz Holeczek</small>
                        <small class=\"text-muted float-right mt-1\">1:52 PM</small>
                    </div>
                    <div class=\"text-truncate font-weight-bold\">Lorem ipsum dolor sit amet</div>
                    <small class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class=\"message\">
                    <div class=\"py-3 pb-5 mr-3 float-left\">
                        <div class=\"avatar\">
                            <img class=\"img-avatar\" src=\"img/avatars/7.jpg\" alt=\"admin@bootstrapmaster.com\">
                            <span class=\"avatar-status badge-success\"></span>
                        </div>
                    </div>
                    <div>
                        <small class=\"text-muted\">Lukasz Holeczek</small>
                        <small class=\"text-muted float-right mt-1\">1:52 PM</small>
                    </div>
                    <div class=\"text-truncate font-weight-bold\">Lorem ipsum dolor sit amet</div>
                    <small class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class=\"message\">
                    <div class=\"py-3 pb-5 mr-3 float-left\">
                        <div class=\"avatar\">
                            <img class=\"img-avatar\" src=\"img/avatars/7.jpg\" alt=\"admin@bootstrapmaster.com\">
                            <span class=\"avatar-status badge-success\"></span>
                        </div>
                    </div>
                    <div>
                        <small class=\"text-muted\">Lukasz Holeczek</small>
                        <small class=\"text-muted float-right mt-1\">1:52 PM</small>
                    </div>
                    <div class=\"text-truncate font-weight-bold\">Lorem ipsum dolor sit amet</div>
                    <small class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class=\"message\">
                    <div class=\"py-3 pb-5 mr-3 float-left\">
                        <div class=\"avatar\">
                            <img class=\"img-avatar\" src=\"img/avatars/7.jpg\" alt=\"admin@bootstrapmaster.com\">
                            <span class=\"avatar-status badge-success\"></span>
                        </div>
                    </div>
                    <div>
                        <small class=\"text-muted\">Lukasz Holeczek</small>
                        <small class=\"text-muted float-right mt-1\">1:52 PM</small>
                    </div>
                    <div class=\"text-truncate font-weight-bold\">Lorem ipsum dolor sit amet</div>
                    <small class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class=\"message\">
                    <div class=\"py-3 pb-5 mr-3 float-left\">
                        <div class=\"avatar\">
                            <img class=\"img-avatar\" src=\"img/avatars/7.jpg\" alt=\"admin@bootstrapmaster.com\">
                            <span class=\"avatar-status badge-success\"></span>
                        </div>
                    </div>
                    <div>
                        <small class=\"text-muted\">Lukasz Holeczek</small>
                        <small class=\"text-muted float-right mt-1\">1:52 PM</small>
                    </div>
                    <div class=\"text-truncate font-weight-bold\">Lorem ipsum dolor sit amet</div>
                    <small class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
            </div>
            <div class=\"tab-pane p-3\" id=\"settings\" role=\"tabpanel\">
                <h6>Settings</h6>
                <div class=\"aside-options\">
                    <div class=\"clearfix mt-4\">
                        <small>
                            <b>Option 1</b>
                        </small>
                        <label class=\"switch switch-label switch-pill switch-success switch-sm float-right\">
                            <input class=\"switch-input\" type=\"checkbox\" checked=\"\">
                            <span class=\"switch-slider\" data-checked=\"On\" data-unchecked=\"Off\"></span>
                        </label>
                    </div>
                    <div>
                        <small class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                    </div>
                </div>
                <div class=\"aside-options\">
                    <div class=\"clearfix mt-3\">
                        <small>
                            <b>Option 2</b>
                        </small>
                        <label class=\"switch switch-label switch-pill switch-success switch-sm float-right\">
                            <input class=\"switch-input\" type=\"checkbox\">
                            <span class=\"switch-slider\" data-checked=\"On\" data-unchecked=\"Off\"></span>
                        </label>
                    </div>
                    <div>
                        <small class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                    </div>
                </div>
                <div class=\"aside-options\">
                    <div class=\"clearfix mt-3\">
                        <small>
                            <b>Option 3</b>
                        </small>
                        <label class=\"switch switch-label switch-pill switch-success switch-sm float-right\">
                            <input class=\"switch-input\" type=\"checkbox\">
                            <span class=\"switch-slider\" data-checked=\"On\" data-unchecked=\"Off\"></span>
                        </label>
                    </div>
                </div>
                <div class=\"aside-options\">
                    <div class=\"clearfix mt-3\">
                        <small>
                            <b>Option 4</b>
                        </small>
                        <label class=\"switch switch-label switch-pill switch-success switch-sm float-right\">
                            <input class=\"switch-input\" type=\"checkbox\" checked=\"\">
                            <span class=\"switch-slider\" data-checked=\"On\" data-unchecked=\"Off\"></span>
                        </label>
                    </div>
                </div>
                <hr>
                <h6>System Utilization</h6>
                <div class=\"text-uppercase mb-1 mt-4\">
                    <small>
                        <b>CPU Usage</b>
                    </small>
                </div>
                <div class=\"progress progress-xs\">
                    <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 25%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <small class=\"text-muted\">348 Processes. 1/4 Cores.</small>
                <div class=\"text-uppercase mb-1 mt-2\">
                    <small>
                        <b>Memory Usage</b>
                    </small>
                </div>
                <div class=\"progress progress-xs\">
                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 70%\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <small class=\"text-muted\">11444GB/16384MB</small>
                <div class=\"text-uppercase mb-1 mt-2\">
                    <small>
                        <b>SSD 1 Usage</b>
                    </small>
                </div>
                <div class=\"progress progress-xs\">
                    <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 95%\" aria-valuenow=\"95\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <small class=\"text-muted\">243GB/256GB</small>
                <div class=\"text-uppercase mb-1 mt-2\">
                    <small>
                        <b>SSD 2 Usage</b>
                    </small>
                </div>
                <div class=\"progress progress-xs\">
                    <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 10%\" aria-valuenow=\"10\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <small class=\"text-muted\">25GB/256GB</small>
            </div>
        </div>
    </aside>
</div>
<footer class=\"app-footer\">
    <div>
        <a href=\"https://coreui.io\">Credit Mobile Money</a>
        <span>&copy; 2018 Kema.</span>
    </div>
    <div class=\"ml-auto\">
        <span>Developpe par</span>
        <a href=\"https://coreui.io\">Sekou Assane Sidibe</a>
    </div>
</footer>
<!-- Bootstrap and necessary plugins-->
<script src=\"";
        // line 527
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/jquery/dist/jquery.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 528
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/popper.js/dist/umd/popper.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 529
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/bootstrap/dist/js/bootstrap.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 530
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/pace-progress/pace.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 531
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 532
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/@coreui/coreui/dist/js/coreui.min.js")), "html", null, true);
        echo "\"></script>
<!-- Plugins and scripts required by this view-->
<script src=\"";
        // line 534
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/chart.js/dist/Chart.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 535
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 536
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/admin/js/main.js")), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "CMMAccountBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  633 => 18,  620 => 536,  616 => 535,  612 => 534,  607 => 532,  603 => 531,  599 => 530,  595 => 529,  591 => 528,  587 => 527,  144 => 87,  133 => 79,  86 => 35,  82 => 34,  71 => 26,  67 => 25,  62 => 23,  58 => 22,  54 => 21,  50 => 20,  45 => 18,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.0.0
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, shrink-to-fit=no\">
    <meta name=\"description\" content=\"CoreUI - Open Source Bootstrap Admin Template\">
    <meta name=\"author\" content=\"Łukasz Holeczek\">
    <meta name=\"keyword\" content=\"Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard\">
    <title>{% block title %} {% endblock %}</title>
    <!-- Icons-->
    <link href=\"{{ absolute_url(asset('assets/admin/node_modules/@coreui/icons/css/coreui-icons.min.css')) }}\" rel=\"stylesheet\">
    <link href=\"{{ absolute_url(asset('assets/admin/node_modules/flag-icon-css/css/flag-icon.min.css')) }}\" rel=\"stylesheet\">
    <link href=\"{{ absolute_url(asset('assets/admin/node_modules/font-awesome/css/font-awesome.min.css')) }}\" rel=\"stylesheet\">
    <link href=\"{{ absolute_url(asset('assets/admin/node_modules/simple-line-icons/css/simple-line-icons.css')) }}\" rel=\"stylesheet\">
    <!-- Main styles for this application-->
    <link href=\"{{ absolute_url(asset('assets/admin/css/style.css')) }}\" rel=\"stylesheet\">
    <link href=\"{{ absolute_url(asset('assets/admin/vendors/pace-progress/css/pace.min.css')) }}\" rel=\"stylesheet\">
</head>
<body class=\"app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show\">
<header class=\"app-header navbar\">
    <button class=\"navbar-toggler sidebar-toggler d-lg-none mr-auto\" type=\"button\" data-toggle=\"sidebar-show\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <a class=\"navbar-brand\" href=\"#\">
        <img class=\"navbar-brand-full\" src=\"{{ absolute_url(asset('assets/main/images/logo.png')) }}\" width=\"89\" height=\"25\" alt=\"CMM Logo\">
        <img class=\"navbar-brand-minimized\" src=\"{{ absolute_url(asset('assets/main/images/logo.png')) }}\" width=\"30\" height=\"30\" alt=\"CMM Logo\">
    </a>
    <button class=\"navbar-toggler sidebar-toggler d-md-down-none\" type=\"button\" data-toggle=\"sidebar-lg-show\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <ul class=\"nav navbar-nav d-md-down-none\">
        <li class=\"nav-item px-3\">
            <a class=\"nav-link\" href=\"#\">Tableau de Bord</a>
        </li>
        <li class=\"nav-item px-3\">
            <a class=\"nav-link\" href=\"#\">Utilisateurs</a>
        </li>
        <li class=\"nav-item px-3\">
            <a class=\"nav-link\" href=\"#\">Reglages</a>
        </li>
    </ul>
    <ul class=\"nav navbar-nav ml-auto\">
        <li class=\"nav-item d-md-down-none\">
            <a class=\"nav-link\" href=\"#\">
                <i class=\"icon-bell\"></i>
                <span class=\"badge badge-pill badge-danger\">5</span>
            </a>
        </li>
        <li class=\"nav-item d-md-down-none\">
            <a class=\"nav-link\" href=\"#\">
                <i class=\"icon-list\"></i>
            </a>
        </li>
        <li class=\"nav-item d-md-down-none\">
            <a class=\"nav-link\" href=\"#\">
                <i class=\"icon-location-pin\"></i>
            </a>
        </li>
        <li class=\"nav-item dropdown\">
            <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <img class=\"img-avatar\" src=\"img/avatars/6.jpg\" alt=\"\">
            </a>
            <div class=\"dropdown-menu dropdown-menu-right\">
                


                <div class=\"dropdown-header text-center\">
                    <strong>Reglages</strong>
                </div>
                <a class=\"dropdown-item\" href=\"{{ path('fos_user_profile_show') }}\">
                    <i class=\"fa fa-user\"></i> Profile
                </a>
                <a class=\"dropdown-item\" href=\"#\">
                    <i class=\"fa fa-wrench\"></i> Mes cartes
                </a>
                <div class=\"divider\"></div>

                <a class=\"dropdown-item\" href=\"{{ path('fos_user_security_logout') }}\">
                    <i class=\"fa fa-lock\"></i> Se deconnecter</a>
            </div>
        </li>
    </ul>
    <button class=\"navbar-toggler aside-menu-toggler d-md-down-none\" type=\"button\" data-toggle=\"aside-menu-lg-show\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <button class=\"navbar-toggler aside-menu-toggler d-lg-none\" type=\"button\" data-toggle=\"aside-menu-show\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
</header>
<div class=\"app-body\">
    <div class=\"sidebar\">
        <nav class=\"sidebar-nav\">
            <ul class=\"nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"index.html\">
                        <i class=\"nav-icon icon-speedometer\"></i> Tableau de Bord
                    </a>
                </li>
                <li class=\"nav-title\">Transfert</li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"colors.html\">
                        <i class=\"nav-icon icon-drop\"></i> Banque => Mobicash</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"typography.html\">
                        <i class=\"nav-icon icon-pencil\"></i> Mobicash To Banque</a>
                </li>

                
                <li class=\"nav-item mt-auto\">
                    <a class=\"nav-link nav-link-success\" href=\"https://coreui.io\" target=\"_top\">
                        <i class=\"nav-icon icon-cloud-download\"></i>Telecharger notre appli</a>
                </li>

            </ul>
        </nav>
        <button class=\"sidebar-minimizer brand-minimizer\" type=\"button\"></button>
    </div>
    <main class=\"main\">
        <!-- Breadcrumb-->
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\">Home</li>
            <li class=\"breadcrumb-item\">
                <a href=\"#\">Admin</a>
            </li>
            <li class=\"breadcrumb-item active\">Dashboard</li>
            <!-- Breadcrumb Menu-->
            <li class=\"breadcrumb-menu d-md-down-none\">
                <div class=\"btn-group\" role=\"group\" aria-label=\"Button group\">
                    <a class=\"btn\" href=\"#\">
                        <i class=\"icon-speech\"></i>
                    </a>
                    <a class=\"btn\" href=\"./\">
                        <i class=\"icon-graph\"></i>  Dashboard</a>
                    <a class=\"btn\" href=\"#\">
                        <i class=\"icon-settings\"></i>  Settings</a>
                </div>
            </li>
        </ol>
        <div class=\"container-fluid\">
            <div class=\"animated fadeIn\">


                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col-sm-5\">
                                <h4 class=\"card-title mb-0\">Traffic</h4>
                                <div class=\"small text-muted\">November 2017</div>
                            </div>
                            <!--/.col-->
                            <div class=\"col-sm-7 d-none d-md-block\">
                                <button type=\"button\" class=\"btn btn-primary float-right\">
                                    <i class=\"icon-cloud-download\"></i>
                                </button>
                                <div class=\"btn-group btn-group-toggle float-right mr-3\" data-toggle=\"buttons\">
                                    <label class=\"btn btn-outline-secondary\">
                                        <input type=\"radio\" name=\"options\" id=\"option1\" autocomplete=\"off\"> Day
                                    </label>
                                    <label class=\"btn btn-outline-secondary active\">
                                        <input type=\"radio\" name=\"options\" id=\"option2\" autocomplete=\"off\" checked> Month
                                    </label>
                                    <label class=\"btn btn-outline-secondary\">
                                        <input type=\"radio\" name=\"options\" id=\"option3\" autocomplete=\"off\"> Year
                                    </label>
                                </div>
                            </div>
                            <!--/.col-->
                        </div>
                        <!--/.row-->
                        <div class=\"chart-wrapper\" style=\"height:300px;margin-top:40px;\">
                            <canvas id=\"main-chart\" class=\"chart\" height=\"300\"></canvas>
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <div class=\"row text-center\">
                            <div class=\"col-sm-12 col-md mb-sm-2 mb-0\">
                                <div class=\"text-muted\">Visits</div>
                                <strong>29.703 Users (40%)</strong>
                                <div class=\"progress progress-xs mt-2\">
                                    <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 40%\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                            <div class=\"col-sm-12 col-md mb-sm-2 mb-0\">
                                <div class=\"text-muted\">Unique</div>
                                <strong>24.093 Users (20%)</strong>
                                <div class=\"progress progress-xs mt-2\">
                                    <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 20%\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                            <div class=\"col-sm-12 col-md mb-sm-2 mb-0\">
                                <div class=\"text-muted\">Pageviews</div>
                                <strong>78.706 Views (60%)</strong>
                                <div class=\"progress progress-xs mt-2\">
                                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 60%\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                            <div class=\"col-sm-12 col-md mb-sm-2 mb-0\">
                                <div class=\"text-muted\">New Users</div>
                                <strong>22.123 Users (80%)</strong>
                                <div class=\"progress progress-xs mt-2\">
                                    <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 80%\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                            <div class=\"col-sm-12 col-md mb-sm-2 mb-0\">
                                <div class=\"text-muted\">Bounce Rate</div>
                                <strong>40.15%</strong>
                                <div class=\"progress progress-xs mt-2\">
                                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 40%\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.card-->

            </div>

        </div>
    </main>
    <aside class=\"aside-menu\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"nav-item\">
                <a class=\"nav-link active\" data-toggle=\"tab\" href=\"#timeline\" role=\"tab\">
                    <i class=\"icon-list\"></i>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#messages\" role=\"tab\">
                    <i class=\"icon-speech\"></i>
                </a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-toggle=\"tab\" href=\"#settings\" role=\"tab\">
                    <i class=\"icon-settings\"></i>
                </a>
            </li>
        </ul>
        <!-- Tab panes-->
        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"timeline\" role=\"tabpanel\">
                <div class=\"list-group list-group-accent\">
                    <div class=\"list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small\">Today</div>
                    <div class=\"list-group-item list-group-item-accent-warning list-group-item-divider\">
                        <div class=\"avatar float-right\">
                            <img class=\"img-avatar\" src=\"img/avatars/7.jpg\" alt=\"admin@bootstrapmaster.com\">
                        </div>
                        <div>Meeting with
                            <strong>Lucas</strong>
                        </div>
                        <small class=\"text-muted mr-3\">
                            <i class=\"icon-calendar\"></i>  1 - 3pm</small>
                        <small class=\"text-muted\">
                            <i class=\"icon-location-pin\"></i>  Palo Alto, CA</small>
                    </div>
                    <div class=\"list-group-item list-group-item-accent-info\">
                        <div class=\"avatar float-right\">
                            <img class=\"img-avatar\" src=\"img/avatars/4.jpg\" alt=\"admin@bootstrapmaster.com\">
                        </div>
                        <div>Skype with
                            <strong>Megan</strong>
                        </div>
                        <small class=\"text-muted mr-3\">
                            <i class=\"icon-calendar\"></i>  4 - 5pm</small>
                        <small class=\"text-muted\">
                            <i class=\"icon-social-skype\"></i>  On-line</small>
                    </div>
                    <div class=\"list-group-item list-group-item-accent-secondary bg-light text-center font-weight-bold text-muted text-uppercase small\">Tomorrow</div>
                    <div class=\"list-group-item list-group-item-accent-danger list-group-item-divider\">
                        <div>New UI Project -
                            <strong>deadline</strong>
                        </div>
                        <small class=\"text-muted mr-3\">
                            <i class=\"icon-calendar\"></i>  10 - 11pm</small>
                        <small class=\"text-muted\">
                            <i class=\"icon-home\"></i>  creativeLabs HQ</small>
                        <div class=\"avatars-stack mt-2\">
                            <div class=\"avatar avatar-xs\">
                                <img class=\"img-avatar\" src=\"img/avatars/2.jpg\" alt=\"admin@bootstrapmaster.com\">
                            </div>
                            <div class=\"avatar avatar-xs\">
                                <img class=\"img-avatar\" src=\"img/avatars/3.jpg\" alt=\"admin@bootstrapmaster.com\">
                            </div>
                            <div class=\"avatar avatar-xs\">
                                <img class=\"img-avatar\" src=\"img/avatars/4.jpg\" alt=\"admin@bootstrapmaster.com\">
                            </div>
                            <div class=\"avatar avatar-xs\">
                                <img class=\"img-avatar\" src=\"img/avatars/5.jpg\" alt=\"admin@bootstrapmaster.com\">
                            </div>
                            <div class=\"avatar avatar-xs\">
                                <img class=\"img-avatar\" src=\"img/avatars/6.jpg\" alt=\"admin@bootstrapmaster.com\">
                            </div>
                        </div>
                    </div>
                    <div class=\"list-group-item list-group-item-accent-success list-group-item-divider\">
                        <div>
                            <strong>#10 Startups.Garden</strong> Meetup</div>
                        <small class=\"text-muted mr-3\">
                            <i class=\"icon-calendar\"></i>  1 - 3pm</small>
                        <small class=\"text-muted\">
                            <i class=\"icon-location-pin\"></i>  Palo Alto, CA</small>
                    </div>
                    <div class=\"list-group-item list-group-item-accent-primary list-group-item-divider\">
                        <div>
                            <strong>Team meeting</strong>
                        </div>
                        <small class=\"text-muted mr-3\">
                            <i class=\"icon-calendar\"></i>  4 - 6pm</small>
                        <small class=\"text-muted\">
                            <i class=\"icon-home\"></i>  creativeLabs HQ</small>
                        <div class=\"avatars-stack mt-2\">
                            <div class=\"avatar avatar-xs\">
                                <img class=\"img-avatar\" src=\"img/avatars/2.jpg\" alt=\"admin@bootstrapmaster.com\">
                            </div>
                            <div class=\"avatar avatar-xs\">
                                <img class=\"img-avatar\" src=\"img/avatars/3.jpg\" alt=\"admin@bootstrapmaster.com\">
                            </div>
                            <div class=\"avatar avatar-xs\">
                                <img class=\"img-avatar\" src=\"img/avatars/4.jpg\" alt=\"admin@bootstrapmaster.com\">
                            </div>
                            <div class=\"avatar avatar-xs\">
                                <img class=\"img-avatar\" src=\"img/avatars/5.jpg\" alt=\"admin@bootstrapmaster.com\">
                            </div>
                            <div class=\"avatar avatar-xs\">
                                <img class=\"img-avatar\" src=\"img/avatars/6.jpg\" alt=\"admin@bootstrapmaster.com\">
                            </div>
                            <div class=\"avatar avatar-xs\">
                                <img class=\"img-avatar\" src=\"img/avatars/7.jpg\" alt=\"admin@bootstrapmaster.com\">
                            </div>
                            <div class=\"avatar avatar-xs\">
                                <img class=\"img-avatar\" src=\"img/avatars/8.jpg\" alt=\"admin@bootstrapmaster.com\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"tab-pane p-3\" id=\"messages\" role=\"tabpanel\">
                <div class=\"message\">
                    <div class=\"py-3 pb-5 mr-3 float-left\">
                        <div class=\"avatar\">
                            <img class=\"img-avatar\" src=\"img/avatars/7.jpg\" alt=\"admin@bootstrapmaster.com\">
                            <span class=\"avatar-status badge-success\"></span>
                        </div>
                    </div>
                    <div>
                        <small class=\"text-muted\">Lukasz Holeczek</small>
                        <small class=\"text-muted float-right mt-1\">1:52 PM</small>
                    </div>
                    <div class=\"text-truncate font-weight-bold\">Lorem ipsum dolor sit amet</div>
                    <small class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class=\"message\">
                    <div class=\"py-3 pb-5 mr-3 float-left\">
                        <div class=\"avatar\">
                            <img class=\"img-avatar\" src=\"img/avatars/7.jpg\" alt=\"admin@bootstrapmaster.com\">
                            <span class=\"avatar-status badge-success\"></span>
                        </div>
                    </div>
                    <div>
                        <small class=\"text-muted\">Lukasz Holeczek</small>
                        <small class=\"text-muted float-right mt-1\">1:52 PM</small>
                    </div>
                    <div class=\"text-truncate font-weight-bold\">Lorem ipsum dolor sit amet</div>
                    <small class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class=\"message\">
                    <div class=\"py-3 pb-5 mr-3 float-left\">
                        <div class=\"avatar\">
                            <img class=\"img-avatar\" src=\"img/avatars/7.jpg\" alt=\"admin@bootstrapmaster.com\">
                            <span class=\"avatar-status badge-success\"></span>
                        </div>
                    </div>
                    <div>
                        <small class=\"text-muted\">Lukasz Holeczek</small>
                        <small class=\"text-muted float-right mt-1\">1:52 PM</small>
                    </div>
                    <div class=\"text-truncate font-weight-bold\">Lorem ipsum dolor sit amet</div>
                    <small class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class=\"message\">
                    <div class=\"py-3 pb-5 mr-3 float-left\">
                        <div class=\"avatar\">
                            <img class=\"img-avatar\" src=\"img/avatars/7.jpg\" alt=\"admin@bootstrapmaster.com\">
                            <span class=\"avatar-status badge-success\"></span>
                        </div>
                    </div>
                    <div>
                        <small class=\"text-muted\">Lukasz Holeczek</small>
                        <small class=\"text-muted float-right mt-1\">1:52 PM</small>
                    </div>
                    <div class=\"text-truncate font-weight-bold\">Lorem ipsum dolor sit amet</div>
                    <small class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
                <hr>
                <div class=\"message\">
                    <div class=\"py-3 pb-5 mr-3 float-left\">
                        <div class=\"avatar\">
                            <img class=\"img-avatar\" src=\"img/avatars/7.jpg\" alt=\"admin@bootstrapmaster.com\">
                            <span class=\"avatar-status badge-success\"></span>
                        </div>
                    </div>
                    <div>
                        <small class=\"text-muted\">Lukasz Holeczek</small>
                        <small class=\"text-muted float-right mt-1\">1:52 PM</small>
                    </div>
                    <div class=\"text-truncate font-weight-bold\">Lorem ipsum dolor sit amet</div>
                    <small class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
                </div>
            </div>
            <div class=\"tab-pane p-3\" id=\"settings\" role=\"tabpanel\">
                <h6>Settings</h6>
                <div class=\"aside-options\">
                    <div class=\"clearfix mt-4\">
                        <small>
                            <b>Option 1</b>
                        </small>
                        <label class=\"switch switch-label switch-pill switch-success switch-sm float-right\">
                            <input class=\"switch-input\" type=\"checkbox\" checked=\"\">
                            <span class=\"switch-slider\" data-checked=\"On\" data-unchecked=\"Off\"></span>
                        </label>
                    </div>
                    <div>
                        <small class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                    </div>
                </div>
                <div class=\"aside-options\">
                    <div class=\"clearfix mt-3\">
                        <small>
                            <b>Option 2</b>
                        </small>
                        <label class=\"switch switch-label switch-pill switch-success switch-sm float-right\">
                            <input class=\"switch-input\" type=\"checkbox\">
                            <span class=\"switch-slider\" data-checked=\"On\" data-unchecked=\"Off\"></span>
                        </label>
                    </div>
                    <div>
                        <small class=\"text-muted\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                    </div>
                </div>
                <div class=\"aside-options\">
                    <div class=\"clearfix mt-3\">
                        <small>
                            <b>Option 3</b>
                        </small>
                        <label class=\"switch switch-label switch-pill switch-success switch-sm float-right\">
                            <input class=\"switch-input\" type=\"checkbox\">
                            <span class=\"switch-slider\" data-checked=\"On\" data-unchecked=\"Off\"></span>
                        </label>
                    </div>
                </div>
                <div class=\"aside-options\">
                    <div class=\"clearfix mt-3\">
                        <small>
                            <b>Option 4</b>
                        </small>
                        <label class=\"switch switch-label switch-pill switch-success switch-sm float-right\">
                            <input class=\"switch-input\" type=\"checkbox\" checked=\"\">
                            <span class=\"switch-slider\" data-checked=\"On\" data-unchecked=\"Off\"></span>
                        </label>
                    </div>
                </div>
                <hr>
                <h6>System Utilization</h6>
                <div class=\"text-uppercase mb-1 mt-4\">
                    <small>
                        <b>CPU Usage</b>
                    </small>
                </div>
                <div class=\"progress progress-xs\">
                    <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 25%\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <small class=\"text-muted\">348 Processes. 1/4 Cores.</small>
                <div class=\"text-uppercase mb-1 mt-2\">
                    <small>
                        <b>Memory Usage</b>
                    </small>
                </div>
                <div class=\"progress progress-xs\">
                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 70%\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <small class=\"text-muted\">11444GB/16384MB</small>
                <div class=\"text-uppercase mb-1 mt-2\">
                    <small>
                        <b>SSD 1 Usage</b>
                    </small>
                </div>
                <div class=\"progress progress-xs\">
                    <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 95%\" aria-valuenow=\"95\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <small class=\"text-muted\">243GB/256GB</small>
                <div class=\"text-uppercase mb-1 mt-2\">
                    <small>
                        <b>SSD 2 Usage</b>
                    </small>
                </div>
                <div class=\"progress progress-xs\">
                    <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 10%\" aria-valuenow=\"10\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <small class=\"text-muted\">25GB/256GB</small>
            </div>
        </div>
    </aside>
</div>
<footer class=\"app-footer\">
    <div>
        <a href=\"https://coreui.io\">Credit Mobile Money</a>
        <span>&copy; 2018 Kema.</span>
    </div>
    <div class=\"ml-auto\">
        <span>Developpe par</span>
        <a href=\"https://coreui.io\">Sekou Assane Sidibe</a>
    </div>
</footer>
<!-- Bootstrap and necessary plugins-->
<script src=\"{{ absolute_url(asset('assets/admin/node_modules/jquery/dist/jquery.min.js')) }}\"></script>
<script src=\"{{ absolute_url(asset('assets/admin/node_modules/popper.js/dist/umd/popper.min.js')) }}\"></script>
<script src=\"{{ absolute_url(asset('assets/admin/node_modules/bootstrap/dist/js/bootstrap.min.js')) }}\"></script>
<script src=\"{{ absolute_url(asset('assets/admin/node_modules/pace-progress/pace.min.js')) }}\"></script>
<script src=\"{{ absolute_url(asset('assets/admin/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js')) }}\"></script>
<script src=\"{{ absolute_url(asset('assets/admin/node_modules/@coreui/coreui/dist/js/coreui.min.js')) }}\"></script>
<!-- Plugins and scripts required by this view-->
<script src=\"{{ absolute_url(asset('assets/admin/node_modules/chart.js/dist/Chart.min.js')) }}\"></script>
<script src=\"{{ absolute_url(asset('assets/admin/node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js')) }}\"></script>
<script src=\"{{ absolute_url(asset('assets/admin/js/main.js')) }}\"></script>
</body>
</html>", "CMMAccountBundle::layout.html.twig", "/var/www/html/CMM/src/CMM/AccountBundle/Resources/views/layout.html.twig");
    }
}

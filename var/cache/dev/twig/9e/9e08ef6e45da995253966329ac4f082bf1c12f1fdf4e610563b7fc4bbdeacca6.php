<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_c9f4c0e1264436f05144e71d4ae2887577c7e454c7e3325bc534bcd4bab899b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html dir=\"ltr\" lang=\"en-US\">
<head>

    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"author\" content=\"SemiColonWeb\" />

    <!-- Stylesheets
    ============================================= -->
    <link href=\"http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/css/bootstrap.css")), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/style.css")), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/css/dark.css")), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/css/font-icons.css")), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/css/animate.css")), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/css/magnific-popup.css")), "html", null, true);
        echo "\" type=\"text/css\" />

    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/css/responsive.css")), "html", null, true);
        echo "\" type=\"text/css\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <!--[if lt IE 9]>
    <script src=\"http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js\"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title>CMM:Login</title>

</head>

<body class=\"stretched\">

<!-- Document Wrapper
============================================= -->
<div id=\"wrapper\" class=\"clearfix\">

    <!-- Content
    ============================================= -->
    <section id=\"content\">

        <div class=\"content-wrap nopadding\">

            <div class=\"section nopadding nomargin\" style=\"width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: #444;\"></div>

            <div class=\"section nobg full-screen nopadding nomargin\">
                <div class=\"container vertical-middle divcenter clearfix\">

                    <div class=\"row center\">
                        <a href=\"index.html\"><img src=\"assets/main/images/logo.png\" width=\"200\" height=\"150\" alt=\"CMM Logo\"></a>
                    </div>

                    <div class=\"panel panel-default divcenter noradius noborder\" style=\"max-width: 400px;\">
                        <div class=\"panel-body\" style=\"padding: 40px;\">

                            <form id=\"login-form\" name=\"login-form\" class=\"nobottommargin\" action=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                                <h3 class=\"center\">Connectez a votre compte</h3>

                                ";
        // line 59
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 60
            echo "                                    <div class=\"center \" style=\"color: red\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                                ";
        }
        // line 62
        echo "
                                <div class=\"col_full\">
                                    <label for=\"username\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo ":</label>
                                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control not-dark\" />
                                </div>

                                <div class=\"col_full\">
                                    <label for=\"login-form-password\">";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo ":</label>
                                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control not-dark\" />
                                </div>
                                <div class=\"col_full\">
                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                    <label for=\"remember_me\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                </div>

                                <div class=\"col_full nobottommargin\">
                                    <button type=\"submit\" class=\"button button-3d button-black nomargin\" id=\"login-form-submit\" name=\"login-form-submit\" value=\"login\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                                    <a href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\" class=\"fright\">Mot de passe oublie ?</a>
                                </div>
                            </form>
                            <div class=\"acctitle\"><a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\"><i class=\"acc-closed icon-user4\"></i><i class=\"acc-open icon-ok-sign\"></i>Pas encore inscrit ? Creez un compte CMM</a> </div>

                            <div class=\"line line-sm\"></div>


                            <div class=\"center\">
                                <h4 style=\"margin-bottom: 15px;\">Ou connectez-vous avec:</h4>
                                <a href=\"#\" class=\"button button-rounded si-facebook si-colored\">Facebook</a>
                                <span class=\"hidden-xs\">ou</span>
                                <a href=\"#\" class=\"button button-rounded si-google  si-colored\">Google</a>
                            </div><br><br>
                        </div>
                    </div>

                    <div class=\"row center dark\"><small>Copyrights &copy; All Rights Reserved by Kema .</small></div>

                </div>
            </div>

        </div>

    </section><!-- #content end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id=\"gotoTop\" class=\"icon-angle-up\"></div>

<!-- External JavaScripts
============================================= -->
<script type=\"text/javascript\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/js/jquery.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/js/plugins.js")), "html", null, true);
        echo "\"></script>

<!-- Footer Scripts
============================================= -->
<script type=\"text/javascript\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/js/functions.js")), "html", null, true);
        echo "\"></script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 118,  194 => 114,  190 => 113,  156 => 82,  150 => 79,  146 => 78,  139 => 74,  131 => 69,  124 => 65,  120 => 64,  116 => 62,  110 => 60,  108 => 59,  102 => 56,  63 => 20,  58 => 18,  54 => 17,  50 => 16,  46 => 15,  42 => 14,  38 => 13,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<!DOCTYPE html>
<html dir=\"ltr\" lang=\"en-US\">
<head>

    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"author\" content=\"SemiColonWeb\" />

    <!-- Stylesheets
    ============================================= -->
    <link href=\"http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('assets/main/css/bootstrap.css')) }}\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('assets/main/style.css')) }}\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('assets/main/css/dark.css')) }}\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('assets/main/css/font-icons.css')) }}\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('assets/main/css/animate.css')) }}\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('assets/main/css/magnific-popup.css')) }}\" type=\"text/css\" />

    <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('assets/main/css/responsive.css')) }}\" type=\"text/css\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <!--[if lt IE 9]>
    <script src=\"http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js\"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title>CMM:Login</title>

</head>

<body class=\"stretched\">

<!-- Document Wrapper
============================================= -->
<div id=\"wrapper\" class=\"clearfix\">

    <!-- Content
    ============================================= -->
    <section id=\"content\">

        <div class=\"content-wrap nopadding\">

            <div class=\"section nopadding nomargin\" style=\"width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: #444;\"></div>

            <div class=\"section nobg full-screen nopadding nomargin\">
                <div class=\"container vertical-middle divcenter clearfix\">

                    <div class=\"row center\">
                        <a href=\"index.html\"><img src=\"assets/main/images/logo.png\" width=\"200\" height=\"150\" alt=\"CMM Logo\"></a>
                    </div>

                    <div class=\"panel panel-default divcenter noradius noborder\" style=\"max-width: 400px;\">
                        <div class=\"panel-body\" style=\"padding: 40px;\">

                            <form id=\"login-form\" name=\"login-form\" class=\"nobottommargin\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                                <h3 class=\"center\">Connectez a votre compte</h3>

                                {% if error %}
                                    <div class=\"center \" style=\"color: red\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                {% endif %}

                                <div class=\"col_full\">
                                    <label for=\"username\">{{ 'security.login.username'|trans }}:</label>
                                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" class=\"form-control not-dark\" />
                                </div>

                                <div class=\"col_full\">
                                    <label for=\"login-form-password\">{{ 'security.login.password'|trans }}:</label>
                                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control not-dark\" />
                                </div>
                                <div class=\"col_full\">
                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                    <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
                                </div>

                                <div class=\"col_full nobottommargin\">
                                    <button type=\"submit\" class=\"button button-3d button-black nomargin\" id=\"login-form-submit\" name=\"login-form-submit\" value=\"login\">{{ 'security.login.submit'|trans }}</button>
                                    <a href=\"{{ path('fos_user_resetting_request') }}\" class=\"fright\">Mot de passe oublie ?</a>
                                </div>
                            </form>
                            <div class=\"acctitle\"><a href=\"{{ path('fos_user_registration_register') }}\"><i class=\"acc-closed icon-user4\"></i><i class=\"acc-open icon-ok-sign\"></i>Pas encore inscrit ? Creez un compte CMM</a> </div>

                            <div class=\"line line-sm\"></div>


                            <div class=\"center\">
                                <h4 style=\"margin-bottom: 15px;\">Ou connectez-vous avec:</h4>
                                <a href=\"#\" class=\"button button-rounded si-facebook si-colored\">Facebook</a>
                                <span class=\"hidden-xs\">ou</span>
                                <a href=\"#\" class=\"button button-rounded si-google  si-colored\">Google</a>
                            </div><br><br>
                        </div>
                    </div>

                    <div class=\"row center dark\"><small>Copyrights &copy; All Rights Reserved by Kema .</small></div>

                </div>
            </div>

        </div>

    </section><!-- #content end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id=\"gotoTop\" class=\"icon-angle-up\"></div>

<!-- External JavaScripts
============================================= -->
<script type=\"text/javascript\" src=\"{{ absolute_url(asset('assets/main/js/jquery.js')) }}\"></script>
<script type=\"text/javascript\" src=\"{{ absolute_url(asset('assets/main/js/plugins.js')) }}\"></script>

<!-- Footer Scripts
============================================= -->
<script type=\"text/javascript\" src=\"{{ absolute_url(asset('assets/main/js/functions.js')) }}\"></script>

</body>
</html>", "@FOSUser/Security/login.html.twig", "/var/www/html/CMM/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}

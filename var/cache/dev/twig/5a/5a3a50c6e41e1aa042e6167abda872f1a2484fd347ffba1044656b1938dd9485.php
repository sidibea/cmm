<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_bfa8ac92cb65ec4b9c7fa9aca5362f4b55d80519cf9a6885e4a4833f5b0dfb5f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        // line 1
        echo "
";
        // line 3
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
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/css/bootstrap.css")), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/style.css")), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/css/dark.css")), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/css/font-icons.css")), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/css/animate.css")), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/css/magnific-popup.css")), "html", null, true);
        echo "\" type=\"text/css\" />

    <link rel=\"stylesheet\" href=\"";
        // line 21
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
                <div class=\"container \">

                    <div class=\"row center\">
                        <a href=\"index.html\"><img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/images/logo.png")), "html", null, true);
        echo "\" width=\"200\" height=\"150\" alt=\"CMM Logo\"></a>
                    </div>

                    <div class=\"panel  divcenter noradius noborder\" style=\"max-width: 400px;\">
                        <div class=\"panel-body\" style=\"padding: 40px;\">
                            ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "

                            <div class=\"full_col\">
                                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'label');
        echo "
                                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstname", array()), 'widget', array("attr" => array("class" => "form-control not-dark")));
        echo "
                            </div>
                            <div class=\"full_col\">
                                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastname", array()), 'label');
        echo "
                                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastname", array()), 'widget', array("attr" => array("class" => "form-control not-dark")));
        echo "
                            </div>
                            <div class=\"full_col\">
                                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'label');
        echo "
                                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control not-dark")));
        echo "
                            </div>
                            <div class=\"full_col\">
                                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                                ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control not-dark")));
        echo "
                            </div>
                            <div class=\"full_col\">
                                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label');
        echo "
                                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control not-dark")));
        echo "
                            </div>
                            <div class=\"full_col\">
                                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label');
        echo "
                                ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control not-dark")));
        echo "
                            </div>
                            <div class=\"full_col\">
                                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", array()), 'label');
        echo "
                                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone", array()), 'widget', array("attr" => array("class" => "form-control not-dark")));
        echo "
                            </div>
                            <div class=\"full_col\">
                                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", array()), 'label');
        echo "
                                ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "address", array()), 'widget', array("attr" => array("class" => "form-control not-dark")));
        echo "
                            </div>
                            <div class=\"col_full topmargin nobottommargin\">
                                <button type=\"submit\" class=\"button button-3d button-black nomargin\" id=\"login-form-submit\" name=\"login-form-submit\" value=\"login\">";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                            </div>

                            ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

                            <div class=\"line line-sm\"></div>


                            <div class=\"center\">
                                <h4 style=\"margin-bottom: 15px;\">Ou connectez-vous avec:</h4>
                                <a href=\"#\" class=\"button button-rounded si-facebook si-colored\">Facebook</a>
                                <span class=\"hidden-xs\">ou</span>
                                <a href=\"#\" class=\"button button-rounded si-google  si-colored\">Google</a>
                            </div>
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
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/js/jquery.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/js/plugins.js")), "html", null, true);
        echo "\"></script>

<!-- Footer Scripts
============================================= -->
<script type=\"text/javascript\" src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/js/functions.js")), "html", null, true);
        echo "\"></script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 130,  237 => 126,  233 => 125,  199 => 94,  193 => 91,  187 => 88,  183 => 87,  177 => 84,  173 => 83,  167 => 80,  163 => 79,  157 => 76,  153 => 75,  147 => 72,  143 => 71,  137 => 68,  133 => 67,  127 => 64,  123 => 63,  117 => 60,  113 => 59,  107 => 56,  99 => 51,  66 => 21,  61 => 19,  57 => 18,  53 => 17,  49 => 16,  45 => 15,  41 => 14,  28 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% trans_default_domain 'FOSUserBundle' %}

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
                <div class=\"container \">

                    <div class=\"row center\">
                        <a href=\"index.html\"><img src=\"{{ absolute_url(asset('assets/main/images/logo.png')) }}\" width=\"200\" height=\"150\" alt=\"CMM Logo\"></a>
                    </div>

                    <div class=\"panel  divcenter noradius noborder\" style=\"max-width: 400px;\">
                        <div class=\"panel-body\" style=\"padding: 40px;\">
                            {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}

                            <div class=\"full_col\">
                                {{ form_label(form.firstname) }}
                                {{ form_widget(form.firstname, { 'attr': {'class': 'form-control not-dark'} }) }}
                            </div>
                            <div class=\"full_col\">
                                {{ form_label(form.lastname) }}
                                {{ form_widget(form.lastname, { 'attr': {'class': 'form-control not-dark'} }) }}
                            </div>
                            <div class=\"full_col\">
                                {{ form_label(form.username) }}
                                {{ form_widget(form.username, { 'attr': {'class': 'form-control not-dark'} }) }}
                            </div>
                            <div class=\"full_col\">
                                {{ form_label(form.email) }}
                                {{ form_widget(form.email, { 'attr': {'class': 'form-control not-dark'} }) }}
                            </div>
                            <div class=\"full_col\">
                                {{ form_label(form.plainPassword.first) }}
                                {{ form_widget(form.plainPassword.first, { 'attr': {'class': 'form-control not-dark'} }) }}
                            </div>
                            <div class=\"full_col\">
                                {{ form_label(form.plainPassword.second) }}
                                {{ form_widget(form.plainPassword.second, { 'attr': {'class': 'form-control not-dark'} }) }}
                            </div>
                            <div class=\"full_col\">
                                {{ form_label(form.telephone) }}
                                {{ form_widget(form.telephone, { 'attr': {'class': 'form-control not-dark'} }) }}
                            </div>
                            <div class=\"full_col\">
                                {{ form_label(form.address) }}
                                {{ form_widget(form.address, { 'attr': {'class': 'form-control not-dark'} }) }}
                            </div>
                            <div class=\"col_full topmargin nobottommargin\">
                                <button type=\"submit\" class=\"button button-3d button-black nomargin\" id=\"login-form-submit\" name=\"login-form-submit\" value=\"login\">{{ 'registration.submit'|trans }}</button>
                            </div>

                            {{ form_end(form) }}

                            <div class=\"line line-sm\"></div>


                            <div class=\"center\">
                                <h4 style=\"margin-bottom: 15px;\">Ou connectez-vous avec:</h4>
                                <a href=\"#\" class=\"button button-rounded si-facebook si-colored\">Facebook</a>
                                <span class=\"hidden-xs\">ou</span>
                                <a href=\"#\" class=\"button button-rounded si-google  si-colored\">Google</a>
                            </div>
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
</html>", "@FOSUser/Registration/register.html.twig", "/var/www/html/CMM/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}

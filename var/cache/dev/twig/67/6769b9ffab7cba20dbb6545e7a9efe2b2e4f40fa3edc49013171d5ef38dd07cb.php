<?php

/* CMMMainBundle::layout.html.twig */
class __TwigTemplate_e17d85744825e3ad6b3ce7d01ecce3cc2e6eff24011c51811fc3065c3123f1f5 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CMMMainBundle::layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CMMMainBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html dir=\"ltr\" lang=\"en-US\">
<head>

    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"author\" content=\"SemiColonWeb\" />

    <!-- Stylesheets
    ============================================= -->
    <link href=\"http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic\" rel=\"stylesheet\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/css/bootstrap.css")), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/style.css")), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/css/dark.css")), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/css/font-icons.css")), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/css/animate.css")), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/css/magnific-popup.css")), "html", null, true);
        echo "\" type=\"text/css\" />

    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/css/responsive.css")), "html", null, true);
        echo "\" type=\"text/css\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <!--[if lt IE 9]>
    <script src=\"http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js\"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title>";
        // line 26
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

</head>

<body class=\"stretched\">

<div id=\"wrapper\" class=\"clearfix\">

    <!-- Header
    ============================================= -->
    <header id=\"header\" class=\"transparent-header page-section dark\">

        <div id=\"header-wrap\">

            <div class=\"container clearfix\">

                <div id=\"primary-menu-trigger\"><i class=\"icon-reorder\"></i></div>

                <!-- Logo
                ============================================= -->
                <div id=\"logo\">
                    <a href=\"index.html\" class=\"standard-logo\" data-dark-logo=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/images/logo.png")), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/images/logo.png")), "html", null, true);
        echo "\" alt=\"Canvas Logo\"></a>
                    <a href=\"index.html\" class=\"retina-logo\" data-dark-logo=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/images/logo.png")), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/images/logo.png")), "html", null, true);
        echo "\" alt=\"Canvas Logo\"></a>
                </div><!-- #logo end -->

                <!-- Primary Navigation
                ============================================= -->
                <nav id=\"primary-menu\">

                    <ul class=\"one-page-menu\">
                        <li class=\"current\"><a href=\"#\" data-href=\"#header\"><div>Acceuil</div></a></li>
                        <li><a href=\"#\" data-href=\"#section-produit\"><div>Produit</div></a></li>
                        <li><a href=\"#\" data-href=\"#section-avantage\"><div>Avantages</div></a></li>
                        <li><a href=\"#\" data-href=\"#section-testimonials\"><div>Tarifs</div></a></li>
                        <li><a href=\"#\" data-href=\"#section-achats\"><div>Acheter votre carte</div></a></li>
                        <li><a href=\"#\" data-href=\"#section-buy\"><div>Accedez à votre compte</div></a></li>
                    </ul>

                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->Système de sécurité de haut niveau utilisant Blockchain

    <section id=\"slider\" class=\"slider-parallax full-screen dark\" style=\"background: url(assets/main/images/visa.jpg) center center no-repeat; background-size: cover\">

        <div class=\"slider-parallax-inner\">

            <div class=\"container vertical-middle clearfix\">

                <div class=\"heading-block title-center nobottomborder\">
                    <h1>La nouvelle façon de  <strong> recharger </strong> votre carte bancaire.</h1>

                    <span>Building a Landing Page was never so Easy &amp; Interactive</span>
                </div>

                <div class=\"center bottommargin\">
                    <a href=\"#\" class=\"button button-3d button-teal button-xlarge nobottommargin\"><i class=\"icon-star3\"></i>Explorez nos solutions</a> - OU - <a href=\"#\" data-scrollto=\"#section-pricing\" class=\"button button-3d button-red button-xlarge nobottommargin\"><i class=\"icon-user2\"></i>CREEZ UN COMPTE</a>
                </div>

            </div>

        </div>

    </section>

    <!-- Content
    ============================================= -->
    <section id=\"content\">

        <div class=\"content-wrap\">

            <div class=\"container clearfix\">

                <div id=\"section-produit\" class=\"heading-block title-center page-section\">
                    <h2>Rencontrez CMM</h2>
                    <span>Some of the Features that are gonna blow your mind off</span>

                    <div class=\"col_two_third topmargin  nobottommargin\">

                        <p style=\"font-size: 16px; text-align: justify\">WeCashUp enables organizations to go global and manage cross-network, cross-border, cross-currency and interoperable payments seamlessly.

                            Payment networks in emerging markets (such as cash and Mobile Money) are now fully compatible with traditional payment networks (including credit cards and bank accounts) and cutting-edge crypto-currency networks (Bitcoin, Ethereum, Ripple, etc).

                            WeCashUp is a cutting-edge Payment Platform driven by a Financial Artificial Intelligence that leverages the security potential of the blockchain to create a global interoperability loop that facilitates and accelerates money flow between the emerging payment systems and the traditional banking system globally.</p>

                        <p style=\"font-size: 16px; text-align: justify\">Using a single API, digital organizations just like yours get to integrate all the existing payment solutions in the world, on their websites or mobile apps, to accept and push payments. Then turning global visitors into repeat buyers.</p>
                        <div class=\"divider divider-short\"><i class=\"icon-circle\"></i></div>



                    </div>
                    <div class=\"col_one_third topmargin nobottommargin col_last\">
                        <div style=\"position: relative; height: 535px;\" data-height-lg=\"535\" data-height-md=\"442\" data-height-sm=\"338\" data-height-xs=\"316\" data-height-xxs=\"201\">
                            <img data-animate=\"fadeInLeft\" src=\"assets/main/images/cmm.webp\" alt=\"Mac\" style=\"position: absolute; top: 0; left: 0;\" class=\"fadeInLeft animated\">
                        </div>



                    </div>
                </div>
            </div>

            <div class=\"container clearfix\">
                <div id=\"section-avantage\" class=\"\">
                    <h2>Les Avantages</h2>

                    <div class=\"col_one_fourth nobottommargin\">
                        <div class=\"feature-box fbox-center fbox-light fbox-effect nobottomborder\">
                            <div class=\"fbox-icon\">
                                <a href=\"#\"><i class=\"i-alt noborder icon-shop\"></i></a>
                            </div>
                            <h3>Securite<span class=\"subtitle\">Système de sécurité de haut niveau utilisant Blockchain</span></h3>
                        </div>
                    </div>

                    <div class=\"col_one_fourth nobottommargin\">
                        <div class=\"feature-box fbox-center fbox-light fbox-effect nobottomborder\">
                            <div class=\"fbox-icon\">
                                <a href=\"#\"><i class=\"i-alt noborder icon-wallet\"></i></a>
                            </div>
                            <h3>Rapidite<span class=\"subtitle\">Règlement instantané à la demande</span></h3>
                        </div>
                    </div>

                    <div class=\"col_one_fourth nobottommargin\">
                        <div class=\"feature-box fbox-center fbox-light fbox-effect nobottomborder\">
                            <div class=\"fbox-icon\">
                                <a href=\"#\"><i class=\"i-alt noborder icon-megaphone\"></i></a>
                            </div>
                            <h3>Guaranti<span class=\"subtitle\">Traçabilité en temps réel & fonds garantie</span></h3>
                        </div>
                    </div>

                    <div class=\"col_one_fourth nobottommargin col_last\">
                        <div class=\"feature-box fbox-center fbox-light fbox-effect nobottomborder\">
                            <div class=\"fbox-icon\">
                                <a href=\"#\"><i class=\"i-alt noborder icon-fire\"></i></a>
                            </div>
                            <h3>Hot Offers Daily<span class=\"subtitle\">Upto 50% Discounts</span></h3>
                        </div>
                    </div>


                    <div class=\"clear\"></div><div class=\"line bottommargin-lg\"></div>
                    <h2>Comment ca marche ?</h2>

                    <div class=\"col_one_fourth nobottommargin center\">
                        <a href=\"#\"><img src=\"assets/main/images/1 - activation.png\" alt=\"Image\" class=\"bottommargin-sm\"></a>
                        <h4>J'ACHÈTE et j’active ma carte par SMS
                        </h4>
                        <p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
                    </div>

                    <div class=\"col_one_fourth nobottommargin center\">
                        <a href=\"#\"><img src=\"assets/main/images/2 - moncompte.png\" alt=\"Image\" class=\"bottommargin-sm\"></a>
                        <h4>JE CRÉE  mon profil</h4>
                        <p>Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Retina Icons, Fonts &amp; all others graphics are optimized.</p>
                    </div>

                    <div class=\"col_one_fourth nobottommargin center \">
                        <a href=\"#\"><img src=\"assets/main/images/3 - premium.png\" alt=\"Image\" class=\"bottommargin-sm\"></a>
                        <h4>JE PASSE PREMIUM</h4>
                        <p>Canvas includes tons of optimized code that are completely customizable and deliver unmatched fast performance.</p>
                    </div>
                    <div class=\"col_one_fourth nobottommargin center col_last\">
                        <a href=\"#\"><img src=\"assets/main/images/3 - premium.png\" alt=\"Image\" class=\"bottommargin-sm\"></a>
                        <h4>JE RECHARGE  ma carte</h4>
                        <p>Canvas includes tons of optimized code that are completely customizable and deliver unmatched fast performance.</p>
                    </div>

                </div>

            </div>
            <div id=\"section-achats\"  class=\"section dark parallax nobottommargin\" style=\"padding: 80px 0;background-image: url('assets/main/images/prefooter.jpg');\" data-stellar-background-ratio=\"0.3\">

                <div class=\"container clearfix\">

                    <div class=\" nobottommargin center\" data-animate=\"bounceIn\">

                        <h1>Simplifiez-vous la vie en commandant votre carte</h1>
                        <a href=\"#\" class=\"button button-desc button-3d button-rounded button-teal center\">Commander votre carte<span>30-Days &amp; No Credit card Required</span></a>
                    </div>


                </div>

            </div>

        </div>

    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <footer id=\"footer\" class=\"dark\">

        <div class=\"container\">

            <!-- Footer Widgets
            ============================================= -->
            <div class=\"footer-widgets-wrap clearfix\">

                <div class=\"col_two_third\">

                    <div class=\"col_one_third\">

                        <div class=\"widget clearfix\">

                            <img src=\"images/footer-widget-logo.png\" alt=\"\" class=\"footer-logo\">

                            <p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>

                            <div style=\"background: url('images/world-map.png') no-repeat center center; background-size: 100%;\">
                                <address>
                                    <strong>Headquarters:</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                </address>
                                <abbr title=\"Phone Number\"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
                                <abbr title=\"Fax\"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
                                <abbr title=\"Email Address\"><strong>Email:</strong></abbr> info@canvas.com
                            </div>

                        </div>

                    </div>

                    <div class=\"col_one_third\">

                        <div class=\"widget widget_links clearfix\">

                            <h4>Blogroll</h4>

                            <ul>
                                <li><a href=\"http://codex.wordpress.org/\">Documentation</a></li>
                                <li><a href=\"http://wordpress.org/support/forum/requests-and-feedback\">Feedback</a></li>
                                <li><a href=\"http://wordpress.org/extend/plugins/\">Plugins</a></li>
                                <li><a href=\"http://wordpress.org/support/\">Support Forums</a></li>
                                <li><a href=\"http://wordpress.org/extend/themes/\">Themes</a></li>
                                <li><a href=\"http://wordpress.org/news/\">WordPress Blog</a></li>
                                <li><a href=\"http://planet.wordpress.org/\">WordPress Planet</a></li>
                            </ul>

                        </div>

                    </div>

                    <div class=\"col_one_third col_last\">

                        <div class=\"widget clearfix\">
                            <h4>Recent Posts</h4>

                            <div id=\"post-list-footer\">
                                <div class=\"spost clearfix\">
                                    <div class=\"entry-c\">
                                        <div class=\"entry-title\">
                                            <h4><a href=\"#\">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                        </div>
                                        <ul class=\"entry-meta\">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class=\"spost clearfix\">
                                    <div class=\"entry-c\">
                                        <div class=\"entry-title\">
                                            <h4><a href=\"#\">Elit Assumenda vel amet dolorum quasi</a></h4>
                                        </div>
                                        <ul class=\"entry-meta\">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class=\"spost clearfix\">
                                    <div class=\"entry-c\">
                                        <div class=\"entry-title\">
                                            <h4><a href=\"#\">Debitis nihil placeat, illum est nisi</a></h4>
                                        </div>
                                        <ul class=\"entry-meta\">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class=\"col_one_third col_last\">

                    <div class=\"widget clearfix\" style=\"margin-bottom: -20px;\">

                        <div class=\"row\">

                            <div class=\"col-md-6 bottommargin-sm\">
                                <div class=\"counter counter-small\"><span data-from=\"50\" data-to=\"15065421\" data-refresh-interval=\"80\" data-speed=\"3000\" data-comma=\"true\"></span></div>
                                <h5 class=\"nobottommargin\">Total Downloads</h5>
                            </div>

                            <div class=\"col-md-6 bottommargin-sm\">
                                <div class=\"counter counter-small\"><span data-from=\"100\" data-to=\"18465\" data-refresh-interval=\"50\" data-speed=\"2000\" data-comma=\"true\"></span></div>
                                <h5 class=\"nobottommargin\">Clients</h5>
                            </div>

                        </div>

                    </div>

                    <div class=\"widget subscribe-widget clearfix\">
                        <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
                        <div class=\"widget-subscribe-form-result\"></div>
                        <form id=\"widget-subscribe-form\" action=\"include/subscribe.php\" role=\"form\" method=\"post\" class=\"nobottommargin\">
                            <div class=\"input-group divcenter\">
                                <span class=\"input-group-addon\"><i class=\"icon-email2\"></i></span>
                                <input type=\"email\" id=\"widget-subscribe-form-email\" name=\"widget-subscribe-form-email\" class=\"form-control required email\" placeholder=\"Enter your Email\">
                                <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success\" type=\"submit\">Subscribe</button>
\t\t\t\t\t\t\t\t\t</span>
                            </div>
                        </form>
                    </div>

                    <div class=\"widget clearfix\" style=\"margin-bottom: -20px;\">

                        <div class=\"row\">

                            <div class=\"col-md-6 clearfix bottommargin-sm\">
                                <a href=\"#\" class=\"social-icon si-dark si-colored si-facebook nobottommargin\" style=\"margin-right: 10px;\">
                                    <i class=\"icon-facebook\"></i>
                                    <i class=\"icon-facebook\"></i>
                                </a>
                                <a href=\"#\"><small style=\"display: block; margin-top: 3px;\"><strong>Like us</strong><br>on Facebook</small></a>
                            </div>
                            <div class=\"col-md-6 clearfix\">
                                <a href=\"#\" class=\"social-icon si-dark si-colored si-rss nobottommargin\" style=\"margin-right: 10px;\">
                                    <i class=\"icon-rss\"></i>
                                    <i class=\"icon-rss\"></i>
                                </a>
                                <a href=\"#\"><small style=\"display: block; margin-top: 3px;\"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
                            </div>

                        </div>

                    </div>

                </div>

            </div><!-- .footer-widgets-wrap end -->

        </div>

        <!-- Copyrights
        ============================================= -->
        <div id=\"copyrights\">

            <div class=\"container clearfix\">

                <div class=\"col_half\">
                    Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
                    <div class=\"copyright-links\"><a href=\"#\">Terms of Use</a> / <a href=\"#\">Privacy Policy</a></div>
                </div>

                <div class=\"col_half col_last tright\">
                    <div class=\"fright clearfix\">
                        <a href=\"#\" class=\"social-icon si-small si-borderless si-facebook\">
                            <i class=\"icon-facebook\"></i>
                            <i class=\"icon-facebook\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-twitter\">
                            <i class=\"icon-twitter\"></i>
                            <i class=\"icon-twitter\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-gplus\">
                            <i class=\"icon-gplus\"></i>
                            <i class=\"icon-gplus\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-pinterest\">
                            <i class=\"icon-pinterest\"></i>
                            <i class=\"icon-pinterest\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-vimeo\">
                            <i class=\"icon-vimeo\"></i>
                            <i class=\"icon-vimeo\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-github\">
                            <i class=\"icon-github\"></i>
                            <i class=\"icon-github\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-yahoo\">
                            <i class=\"icon-yahoo\"></i>
                            <i class=\"icon-yahoo\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-linkedin\">
                            <i class=\"icon-linkedin\"></i>
                            <i class=\"icon-linkedin\"></i>
                        </a>
                    </div>

                    <div class=\"clear\"></div>

                    <i class=\"icon-envelope2\"></i> info@canvas.com <span class=\"middot\">&middot;</span> <i class=\"icon-headphones\"></i> +91-11-6541-6369 <span class=\"middot\">&middot;</span> <i class=\"icon-skype2\"></i> CanvasOnSkype
                </div>

            </div>

        </div><!-- #copyrights end -->

    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id=\"gotoTop\" class=\"icon-angle-up\"></div>

<!-- External JavaScripts
============================================= -->
<script type=\"text/javascript\" src=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/js/jquery.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/js/plugins.js")), "html", null, true);
        echo "\"></script>

<!-- Footer Scripts
============================================= -->
<script type=\"text/javascript\" src=\"";
        // line 462
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/main/js/functions.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$(function() {
        \$( \"#side-navigation\" ).tabs({ show: { effect: \"fade\", duration: 400 } });
    });
</script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 26
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
        return "CMMMainBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  547 => 26,  529 => 462,  522 => 458,  518 => 457,  104 => 48,  98 => 47,  74 => 26,  63 => 18,  58 => 16,  54 => 15,  50 => 14,  46 => 13,  42 => 12,  38 => 11,  26 => 1,);
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
    <title>{% block title %} {% endblock %}</title>

</head>

<body class=\"stretched\">

<div id=\"wrapper\" class=\"clearfix\">

    <!-- Header
    ============================================= -->
    <header id=\"header\" class=\"transparent-header page-section dark\">

        <div id=\"header-wrap\">

            <div class=\"container clearfix\">

                <div id=\"primary-menu-trigger\"><i class=\"icon-reorder\"></i></div>

                <!-- Logo
                ============================================= -->
                <div id=\"logo\">
                    <a href=\"index.html\" class=\"standard-logo\" data-dark-logo=\"{{ absolute_url(asset('assets/main/images/logo.png')) }}\"><img src=\"{{ absolute_url(asset('assets/main/images/logo.png')) }}\" alt=\"Canvas Logo\"></a>
                    <a href=\"index.html\" class=\"retina-logo\" data-dark-logo=\"{{ absolute_url(asset('assets/main/images/logo.png')) }}\"><img src=\"{{ absolute_url(asset('assets/main/images/logo.png')) }}\" alt=\"Canvas Logo\"></a>
                </div><!-- #logo end -->

                <!-- Primary Navigation
                ============================================= -->
                <nav id=\"primary-menu\">

                    <ul class=\"one-page-menu\">
                        <li class=\"current\"><a href=\"#\" data-href=\"#header\"><div>Acceuil</div></a></li>
                        <li><a href=\"#\" data-href=\"#section-produit\"><div>Produit</div></a></li>
                        <li><a href=\"#\" data-href=\"#section-avantage\"><div>Avantages</div></a></li>
                        <li><a href=\"#\" data-href=\"#section-testimonials\"><div>Tarifs</div></a></li>
                        <li><a href=\"#\" data-href=\"#section-achats\"><div>Acheter votre carte</div></a></li>
                        <li><a href=\"#\" data-href=\"#section-buy\"><div>Accedez à votre compte</div></a></li>
                    </ul>

                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->Système de sécurité de haut niveau utilisant Blockchain

    <section id=\"slider\" class=\"slider-parallax full-screen dark\" style=\"background: url(assets/main/images/visa.jpg) center center no-repeat; background-size: cover\">

        <div class=\"slider-parallax-inner\">

            <div class=\"container vertical-middle clearfix\">

                <div class=\"heading-block title-center nobottomborder\">
                    <h1>La nouvelle façon de  <strong> recharger </strong> votre carte bancaire.</h1>

                    <span>Building a Landing Page was never so Easy &amp; Interactive</span>
                </div>

                <div class=\"center bottommargin\">
                    <a href=\"#\" class=\"button button-3d button-teal button-xlarge nobottommargin\"><i class=\"icon-star3\"></i>Explorez nos solutions</a> - OU - <a href=\"#\" data-scrollto=\"#section-pricing\" class=\"button button-3d button-red button-xlarge nobottommargin\"><i class=\"icon-user2\"></i>CREEZ UN COMPTE</a>
                </div>

            </div>

        </div>

    </section>

    <!-- Content
    ============================================= -->
    <section id=\"content\">

        <div class=\"content-wrap\">

            <div class=\"container clearfix\">

                <div id=\"section-produit\" class=\"heading-block title-center page-section\">
                    <h2>Rencontrez CMM</h2>
                    <span>Some of the Features that are gonna blow your mind off</span>

                    <div class=\"col_two_third topmargin  nobottommargin\">

                        <p style=\"font-size: 16px; text-align: justify\">WeCashUp enables organizations to go global and manage cross-network, cross-border, cross-currency and interoperable payments seamlessly.

                            Payment networks in emerging markets (such as cash and Mobile Money) are now fully compatible with traditional payment networks (including credit cards and bank accounts) and cutting-edge crypto-currency networks (Bitcoin, Ethereum, Ripple, etc).

                            WeCashUp is a cutting-edge Payment Platform driven by a Financial Artificial Intelligence that leverages the security potential of the blockchain to create a global interoperability loop that facilitates and accelerates money flow between the emerging payment systems and the traditional banking system globally.</p>

                        <p style=\"font-size: 16px; text-align: justify\">Using a single API, digital organizations just like yours get to integrate all the existing payment solutions in the world, on their websites or mobile apps, to accept and push payments. Then turning global visitors into repeat buyers.</p>
                        <div class=\"divider divider-short\"><i class=\"icon-circle\"></i></div>



                    </div>
                    <div class=\"col_one_third topmargin nobottommargin col_last\">
                        <div style=\"position: relative; height: 535px;\" data-height-lg=\"535\" data-height-md=\"442\" data-height-sm=\"338\" data-height-xs=\"316\" data-height-xxs=\"201\">
                            <img data-animate=\"fadeInLeft\" src=\"assets/main/images/cmm.webp\" alt=\"Mac\" style=\"position: absolute; top: 0; left: 0;\" class=\"fadeInLeft animated\">
                        </div>



                    </div>
                </div>
            </div>

            <div class=\"container clearfix\">
                <div id=\"section-avantage\" class=\"\">
                    <h2>Les Avantages</h2>

                    <div class=\"col_one_fourth nobottommargin\">
                        <div class=\"feature-box fbox-center fbox-light fbox-effect nobottomborder\">
                            <div class=\"fbox-icon\">
                                <a href=\"#\"><i class=\"i-alt noborder icon-shop\"></i></a>
                            </div>
                            <h3>Securite<span class=\"subtitle\">Système de sécurité de haut niveau utilisant Blockchain</span></h3>
                        </div>
                    </div>

                    <div class=\"col_one_fourth nobottommargin\">
                        <div class=\"feature-box fbox-center fbox-light fbox-effect nobottomborder\">
                            <div class=\"fbox-icon\">
                                <a href=\"#\"><i class=\"i-alt noborder icon-wallet\"></i></a>
                            </div>
                            <h3>Rapidite<span class=\"subtitle\">Règlement instantané à la demande</span></h3>
                        </div>
                    </div>

                    <div class=\"col_one_fourth nobottommargin\">
                        <div class=\"feature-box fbox-center fbox-light fbox-effect nobottomborder\">
                            <div class=\"fbox-icon\">
                                <a href=\"#\"><i class=\"i-alt noborder icon-megaphone\"></i></a>
                            </div>
                            <h3>Guaranti<span class=\"subtitle\">Traçabilité en temps réel & fonds garantie</span></h3>
                        </div>
                    </div>

                    <div class=\"col_one_fourth nobottommargin col_last\">
                        <div class=\"feature-box fbox-center fbox-light fbox-effect nobottomborder\">
                            <div class=\"fbox-icon\">
                                <a href=\"#\"><i class=\"i-alt noborder icon-fire\"></i></a>
                            </div>
                            <h3>Hot Offers Daily<span class=\"subtitle\">Upto 50% Discounts</span></h3>
                        </div>
                    </div>


                    <div class=\"clear\"></div><div class=\"line bottommargin-lg\"></div>
                    <h2>Comment ca marche ?</h2>

                    <div class=\"col_one_fourth nobottommargin center\">
                        <a href=\"#\"><img src=\"assets/main/images/1 - activation.png\" alt=\"Image\" class=\"bottommargin-sm\"></a>
                        <h4>J'ACHÈTE et j’active ma carte par SMS
                        </h4>
                        <p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
                    </div>

                    <div class=\"col_one_fourth nobottommargin center\">
                        <a href=\"#\"><img src=\"assets/main/images/2 - moncompte.png\" alt=\"Image\" class=\"bottommargin-sm\"></a>
                        <h4>JE CRÉE  mon profil</h4>
                        <p>Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Retina Icons, Fonts &amp; all others graphics are optimized.</p>
                    </div>

                    <div class=\"col_one_fourth nobottommargin center \">
                        <a href=\"#\"><img src=\"assets/main/images/3 - premium.png\" alt=\"Image\" class=\"bottommargin-sm\"></a>
                        <h4>JE PASSE PREMIUM</h4>
                        <p>Canvas includes tons of optimized code that are completely customizable and deliver unmatched fast performance.</p>
                    </div>
                    <div class=\"col_one_fourth nobottommargin center col_last\">
                        <a href=\"#\"><img src=\"assets/main/images/3 - premium.png\" alt=\"Image\" class=\"bottommargin-sm\"></a>
                        <h4>JE RECHARGE  ma carte</h4>
                        <p>Canvas includes tons of optimized code that are completely customizable and deliver unmatched fast performance.</p>
                    </div>

                </div>

            </div>
            <div id=\"section-achats\"  class=\"section dark parallax nobottommargin\" style=\"padding: 80px 0;background-image: url('assets/main/images/prefooter.jpg');\" data-stellar-background-ratio=\"0.3\">

                <div class=\"container clearfix\">

                    <div class=\" nobottommargin center\" data-animate=\"bounceIn\">

                        <h1>Simplifiez-vous la vie en commandant votre carte</h1>
                        <a href=\"#\" class=\"button button-desc button-3d button-rounded button-teal center\">Commander votre carte<span>30-Days &amp; No Credit card Required</span></a>
                    </div>


                </div>

            </div>

        </div>

    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <footer id=\"footer\" class=\"dark\">

        <div class=\"container\">

            <!-- Footer Widgets
            ============================================= -->
            <div class=\"footer-widgets-wrap clearfix\">

                <div class=\"col_two_third\">

                    <div class=\"col_one_third\">

                        <div class=\"widget clearfix\">

                            <img src=\"images/footer-widget-logo.png\" alt=\"\" class=\"footer-logo\">

                            <p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>

                            <div style=\"background: url('images/world-map.png') no-repeat center center; background-size: 100%;\">
                                <address>
                                    <strong>Headquarters:</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                </address>
                                <abbr title=\"Phone Number\"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
                                <abbr title=\"Fax\"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
                                <abbr title=\"Email Address\"><strong>Email:</strong></abbr> info@canvas.com
                            </div>

                        </div>

                    </div>

                    <div class=\"col_one_third\">

                        <div class=\"widget widget_links clearfix\">

                            <h4>Blogroll</h4>

                            <ul>
                                <li><a href=\"http://codex.wordpress.org/\">Documentation</a></li>
                                <li><a href=\"http://wordpress.org/support/forum/requests-and-feedback\">Feedback</a></li>
                                <li><a href=\"http://wordpress.org/extend/plugins/\">Plugins</a></li>
                                <li><a href=\"http://wordpress.org/support/\">Support Forums</a></li>
                                <li><a href=\"http://wordpress.org/extend/themes/\">Themes</a></li>
                                <li><a href=\"http://wordpress.org/news/\">WordPress Blog</a></li>
                                <li><a href=\"http://planet.wordpress.org/\">WordPress Planet</a></li>
                            </ul>

                        </div>

                    </div>

                    <div class=\"col_one_third col_last\">

                        <div class=\"widget clearfix\">
                            <h4>Recent Posts</h4>

                            <div id=\"post-list-footer\">
                                <div class=\"spost clearfix\">
                                    <div class=\"entry-c\">
                                        <div class=\"entry-title\">
                                            <h4><a href=\"#\">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                        </div>
                                        <ul class=\"entry-meta\">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class=\"spost clearfix\">
                                    <div class=\"entry-c\">
                                        <div class=\"entry-title\">
                                            <h4><a href=\"#\">Elit Assumenda vel amet dolorum quasi</a></h4>
                                        </div>
                                        <ul class=\"entry-meta\">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class=\"spost clearfix\">
                                    <div class=\"entry-c\">
                                        <div class=\"entry-title\">
                                            <h4><a href=\"#\">Debitis nihil placeat, illum est nisi</a></h4>
                                        </div>
                                        <ul class=\"entry-meta\">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class=\"col_one_third col_last\">

                    <div class=\"widget clearfix\" style=\"margin-bottom: -20px;\">

                        <div class=\"row\">

                            <div class=\"col-md-6 bottommargin-sm\">
                                <div class=\"counter counter-small\"><span data-from=\"50\" data-to=\"15065421\" data-refresh-interval=\"80\" data-speed=\"3000\" data-comma=\"true\"></span></div>
                                <h5 class=\"nobottommargin\">Total Downloads</h5>
                            </div>

                            <div class=\"col-md-6 bottommargin-sm\">
                                <div class=\"counter counter-small\"><span data-from=\"100\" data-to=\"18465\" data-refresh-interval=\"50\" data-speed=\"2000\" data-comma=\"true\"></span></div>
                                <h5 class=\"nobottommargin\">Clients</h5>
                            </div>

                        </div>

                    </div>

                    <div class=\"widget subscribe-widget clearfix\">
                        <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
                        <div class=\"widget-subscribe-form-result\"></div>
                        <form id=\"widget-subscribe-form\" action=\"include/subscribe.php\" role=\"form\" method=\"post\" class=\"nobottommargin\">
                            <div class=\"input-group divcenter\">
                                <span class=\"input-group-addon\"><i class=\"icon-email2\"></i></span>
                                <input type=\"email\" id=\"widget-subscribe-form-email\" name=\"widget-subscribe-form-email\" class=\"form-control required email\" placeholder=\"Enter your Email\">
                                <span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success\" type=\"submit\">Subscribe</button>
\t\t\t\t\t\t\t\t\t</span>
                            </div>
                        </form>
                    </div>

                    <div class=\"widget clearfix\" style=\"margin-bottom: -20px;\">

                        <div class=\"row\">

                            <div class=\"col-md-6 clearfix bottommargin-sm\">
                                <a href=\"#\" class=\"social-icon si-dark si-colored si-facebook nobottommargin\" style=\"margin-right: 10px;\">
                                    <i class=\"icon-facebook\"></i>
                                    <i class=\"icon-facebook\"></i>
                                </a>
                                <a href=\"#\"><small style=\"display: block; margin-top: 3px;\"><strong>Like us</strong><br>on Facebook</small></a>
                            </div>
                            <div class=\"col-md-6 clearfix\">
                                <a href=\"#\" class=\"social-icon si-dark si-colored si-rss nobottommargin\" style=\"margin-right: 10px;\">
                                    <i class=\"icon-rss\"></i>
                                    <i class=\"icon-rss\"></i>
                                </a>
                                <a href=\"#\"><small style=\"display: block; margin-top: 3px;\"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
                            </div>

                        </div>

                    </div>

                </div>

            </div><!-- .footer-widgets-wrap end -->

        </div>

        <!-- Copyrights
        ============================================= -->
        <div id=\"copyrights\">

            <div class=\"container clearfix\">

                <div class=\"col_half\">
                    Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
                    <div class=\"copyright-links\"><a href=\"#\">Terms of Use</a> / <a href=\"#\">Privacy Policy</a></div>
                </div>

                <div class=\"col_half col_last tright\">
                    <div class=\"fright clearfix\">
                        <a href=\"#\" class=\"social-icon si-small si-borderless si-facebook\">
                            <i class=\"icon-facebook\"></i>
                            <i class=\"icon-facebook\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-twitter\">
                            <i class=\"icon-twitter\"></i>
                            <i class=\"icon-twitter\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-gplus\">
                            <i class=\"icon-gplus\"></i>
                            <i class=\"icon-gplus\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-pinterest\">
                            <i class=\"icon-pinterest\"></i>
                            <i class=\"icon-pinterest\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-vimeo\">
                            <i class=\"icon-vimeo\"></i>
                            <i class=\"icon-vimeo\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-github\">
                            <i class=\"icon-github\"></i>
                            <i class=\"icon-github\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-yahoo\">
                            <i class=\"icon-yahoo\"></i>
                            <i class=\"icon-yahoo\"></i>
                        </a>

                        <a href=\"#\" class=\"social-icon si-small si-borderless si-linkedin\">
                            <i class=\"icon-linkedin\"></i>
                            <i class=\"icon-linkedin\"></i>
                        </a>
                    </div>

                    <div class=\"clear\"></div>

                    <i class=\"icon-envelope2\"></i> info@canvas.com <span class=\"middot\">&middot;</span> <i class=\"icon-headphones\"></i> +91-11-6541-6369 <span class=\"middot\">&middot;</span> <i class=\"icon-skype2\"></i> CanvasOnSkype
                </div>

            </div>

        </div><!-- #copyrights end -->

    </footer><!-- #footer end -->

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
<script type=\"text/javascript\">
    \$(function() {
        \$( \"#side-navigation\" ).tabs({ show: { effect: \"fade\", duration: 400 } });
    });
</script>
</body>
</html>", "CMMMainBundle::layout.html.twig", "/var/www/html/CMM/src/CMM/MainBundle/Resources/views/layout.html.twig");
    }
}

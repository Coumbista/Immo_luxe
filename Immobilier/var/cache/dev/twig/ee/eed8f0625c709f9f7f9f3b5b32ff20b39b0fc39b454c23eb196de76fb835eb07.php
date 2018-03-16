<?php

/* ::reservation.html.twig */
class __TwigTemplate_f6adbc98635d55f6be4a359b68265bb736856b461af7b55a285d933429b0e6fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
            'header' => array($this, 'block_header'),
            'section' => array($this, 'block_section'),
            'photo' => array($this, 'block_photo'),
            'div' => array($this, 'block_div'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbbf4a162cdbdf3263d25a3ab1ad47da367845cb5332f1fc69bcffe30ec64a4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbbf4a162cdbdf3263d25a3ab1ad47da367845cb5332f1fc69bcffe30ec64a4a->enter($__internal_dbbf4a162cdbdf3263d25a3ab1ad47da367845cb5332f1fc69bcffe30ec64a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::reservation.html.twig"));

        $__internal_ee7c9919b938040296dfd29d7a429ad7e11e7365f6070ac3492c63c3add9005c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee7c9919b938040296dfd29d7a429ad7e11e7365f6070ac3492c63c3add9005c->enter($__internal_ee7c9919b938040296dfd29d7a429ad7e11e7365f6070ac3492c63c3add9005c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::reservation.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<!--
\tAesthetic by gettemplates.co
\tTwitter: http://twitter.com/gettemplateco
\tURL: http://gettemplates.co
-->
<html>
\t<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>Traveler &mdash; Free Website Template, Free HTML5 Template by GetTemplates.co</title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta name=\"description\" content=\"Free HTML5 Website Template by GetTemplates.co\" />
\t<meta name=\"keywords\" content=\"free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive\" />
\t<meta name=\"author\" content=\"GetTemplates.co\" />

  \t<!-- Facebook and Twitter integration -->
\t<meta property=\"og:title\" content=\"\"/>
\t<meta property=\"og:image\" content=\"\"/>
\t<meta property=\"og:url\" content=\"\"/>
\t<meta property=\"og:site_name\" content=\"\"/>
\t<meta property=\"og:description\" content=\"\"/>
\t<meta name=\"twitter:title\" content=\"\" />
\t<meta name=\"twitter:image\" content=\"\" />
\t<meta name=\"twitter:url\" content=\"\" />
\t<meta name=\"twitter:card\" content=\"\" />

\t<link href=\"https://fonts.googleapis.com/csss?family=Lato:300,400,700\" rel=\"stylesheet\">
\t
\t<!-- Animate.css -->
\t<link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("csss/animate.css"), "html", null, true);
        echo "\">
\t<!-- Icomoon Icon Fonts-->
\t<link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("csss/icomoon.css"), "html", null, true);
        echo "\">
\t<!-- Themify Icons-->
\t<link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("csss/themify-icons.css"), "html", null, true);
        echo "\">
\t<!-- Bootstrap  -->
\t<link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("csss/bootstrap.css"), "html", null, true);
        echo "\">

\t<!-- Magnific Popup -->
\t<link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("csss/magnific-popup.css"), "html", null, true);
        echo "\">

\t<!-- Magnific Popup -->
\t<link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("csss/bootstrap-datepicker.min.css"), "html", null, true);
        echo "\">

\t<!-- Owl Carousel  -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("csss/owl.carousel.min.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("csss/owl.theme.default.min.css"), "html", null, true);
        echo "\">
\t\t<link href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/core.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/pages.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <script src=\"assets/js/modernizr.min.js\"></script>


\t<!-- Theme style  -->
\t<link rel=\"stylesheet\" href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("csss/style.css"), "html", null, true);
        echo "\">
\t";
        // line 62
        echo "\t<!-- Modernizr JS -->
\t<script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jss/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>
\t <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jss/dropzone.js"), "html", null, true);
        echo "\"></script>
\t<!-- FOR IE9 below -->
\t<!--[if lt IE 9]>
\t<script src=\"js/respond.min.js\"></script>
\t<![endif]-->
 \t\t
\t</head>
\t<body>
\t\t
\t<div class=\"gtco-loader\"></div>

\t<div id=\"page\">

\t";
        // line 77
        $this->displayBlock('nav', $context, $blocks);
        // line 107
        echo "\t\t";
        $this->displayBlock('header', $context, $blocks);
        // line 179
        $this->displayBlock('section', $context, $blocks);
        // line 189
        echo "            ";
        $this->displayBlock('photo', $context, $blocks);
        // line 279
        echo "\t";
        // line 321
        $this->displayBlock('div', $context, $blocks);
        // line 334
        echo "\t";
        // line 376
        echo "
\t

\t";
        // line 404
        echo "
\t<footer id=\"gtco-footer\" role=\"contentinfo\">
\t\t<div class=\"gtco-container\">
\t\t\t<div class=\"row row-p\tb-md\">

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"gtco-widget\">
\t\t\t\t\t\t<h3>A propos de Nous</h3>
\t\t\t\t\t\t<p>\tImmobilier de Luxe est une agence immobilier siégée à Amitier 3 ,mais pratiquement on a beaucoup d'agence .Rien que pour vous faciliter la vie </p></div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-2 col-md-push-1\">
\t\t\t\t\t<div class=\"gtco-widget\">
\t\t\t\t\t\t<h3>Destination</h3>
\t\t\t\t\t\t<ul class=\"gtco-footer-links\">
\t\t\t\t\t\t\t<li><a href=\"#\">Almadie</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Golf</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Mariste</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dakar</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-2 col-md-push-1\">
\t\t\t\t\t<div class=\"gtco-widget\">
\t\t\t\t\t\t<h3>Hotels</h3>
\t\t\t\t\t\t<ul class=\"gtco-footer-links\">
\t\t\t\t\t\t\t<li><a href=\"#\">Luxe Hotel</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Italy 5 Star hotel</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Dubai Hotel</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Deluxe Hotel</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">BoraBora Hotel</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-3 col-md-push-1\">
\t\t\t\t\t<div class=\"gtco-widget\">
\t\t\t\t\t\t<h3>Get In Touch</h3>
\t\t\t\t\t\t<ul class=\"gtco-quick-contact\">
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-phone\"></i> +221 33 825 23 23</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-mail2\"></i> immobilierluxio@gmail.com</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-chat\"></i> Live Chat</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<div class=\"row copyright\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<p class=\"pull-left\">
\t\t\t\t\t\t<small class=\"block\">&copy; Immobilier de Luxe for ever.</small> 
\t\t\t\t\t\t";
        // line 458
        echo "\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"pull-right\">
\t\t\t\t\t\t<ul class=\"gtco-social-icons pull-right\">
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-twitter\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-facebook\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-linkedin\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-dribbble\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</footer>
\t<!-- </div> -->

\t</div>

\t<div class=\"gototop js-top\">
\t\t<a href=\"#\" class=\"js-gotop\"><i class=\"icon-arrow-up\"></i></a>
\t</div>
\t";
        // line 491
        echo "\t<!-- jQuery -->
\t<script src=\"";
        // line 492
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jss/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- jQuery Easing -->
\t<script src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jss/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
\t<!-- Bootstrap -->
\t<script src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jss/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- Waypoints -->
\t<script src=\"";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jss/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- Carousel -->
\t<script src=\"";
        // line 500
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jss/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- countTo -->
\t<script src=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jss/jquery.countTo.js"), "html", null, true);
        echo "\"></script>

\t<!-- Stellar Parallax -->
\t<script src=\"";
        // line 505
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jss/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>

\t<!-- Magnific Popup -->
\t<script src=\"";
        // line 508
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jss/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jss/magnific-popup-options.js"), "html", null, true);
        echo "\"></script>
\t
\t<!-- Datepicker -->
\t<script src=\"";
        // line 512
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jss/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
\t

\t<!-- Main -->
\t<script src=\"";
        // line 516
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jss/main.js"), "html", null, true);
        echo "\"></script>

\t\t


\t</body>
</html>
";
        
        $__internal_dbbf4a162cdbdf3263d25a3ab1ad47da367845cb5332f1fc69bcffe30ec64a4a->leave($__internal_dbbf4a162cdbdf3263d25a3ab1ad47da367845cb5332f1fc69bcffe30ec64a4a_prof);

        
        $__internal_ee7c9919b938040296dfd29d7a429ad7e11e7365f6070ac3492c63c3add9005c->leave($__internal_ee7c9919b938040296dfd29d7a429ad7e11e7365f6070ac3492c63c3add9005c_prof);

    }

    // line 77
    public function block_nav($context, array $blocks = array())
    {
        $__internal_548431aa97fc23984b389f0ac7b6a8c06141ae1edf9906f55a2ce12985816fc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_548431aa97fc23984b389f0ac7b6a8c06141ae1edf9906f55a2ce12985816fc6->enter($__internal_548431aa97fc23984b389f0ac7b6a8c06141ae1edf9906f55a2ce12985816fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_ae99bc2d5df56a5eaa8aa728529b3772b000ae93001e843fbaedc5a67aa059da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae99bc2d5df56a5eaa8aa728529b3772b000ae93001e843fbaedc5a67aa059da->enter($__internal_ae99bc2d5df56a5eaa8aa728529b3772b000ae93001e843fbaedc5a67aa059da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 78
        echo "\t<!-- <div class=\"page-inner\"> -->
\t<nav class=\"gtco-nav\" role=\"navigation\">
\t\t<div class=\"gtco-container\">
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4 col-xs-12\">
\t\t\t\t\t<div id=\"gtco-logo\"><a href=\"";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("searchBien");
        echo "\"><em>Immobilier De LUXE </em></a></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-8 text-right menu-1\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("SavePro");
        echo "\">Placer vos Annonces</a></li>
\t\t\t\t\t\t<li class=\"has-dropdown\">
\t\t\t\t\t\t\t<a href=\"#\">Autres</a>
\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Almadie");
        echo "\">Almadie</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Golf</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Mariste");
        echo "\">Mariste</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dakar</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("resultat");
        echo "\">Nos Biens</a></li>
\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t</ul>\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</nav>
\t";
        
        $__internal_ae99bc2d5df56a5eaa8aa728529b3772b000ae93001e843fbaedc5a67aa059da->leave($__internal_ae99bc2d5df56a5eaa8aa728529b3772b000ae93001e843fbaedc5a67aa059da_prof);

        
        $__internal_548431aa97fc23984b389f0ac7b6a8c06141ae1edf9906f55a2ce12985816fc6->leave($__internal_548431aa97fc23984b389f0ac7b6a8c06141ae1edf9906f55a2ce12985816fc6_prof);

    }

    // line 107
    public function block_header($context, array $blocks = array())
    {
        $__internal_c29346805788031cf55b6673c55208e6cc9e088e84b2cb4c256a9c3d335ee51d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c29346805788031cf55b6673c55208e6cc9e088e84b2cb4c256a9c3d335ee51d->enter($__internal_c29346805788031cf55b6673c55208e6cc9e088e84b2cb4c256a9c3d335ee51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_125e13880a9cec4990de6d03a7f8ccf7902c5dcc4cdc23d3d892abe9d0f473be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_125e13880a9cec4990de6d03a7f8ccf7902c5dcc4cdc23d3d892abe9d0f473be->enter($__internal_125e13880a9cec4990de6d03a7f8ccf7902c5dcc4cdc23d3d892abe9d0f473be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 108
        echo "\t<header id=\"gtco-header\" class=\"gtco-cover gtco-cover-md\" role=\"banner\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/img1.jpg"), "html", null, true);
        echo ")\">
\t\t<div class=\"overlay\"></div>
\t\t<div class=\"gtco-container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 col-md-offset-0 text-left\">
\t\t\t\t\t

\t\t\t\t\t<div class=\"row row-mt-15em\">
\t\t\t\t\t\t<div class=\"col-md-7 mt-text animate-box\" data-animate-effect=\"fadeInUp\">
\t\t\t\t\t\t\t<h1>Nos meilleurs Villa pour un logement de Luxe?</h1>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-4 col-md-push-1 animate-box\" data-animate-effect=\"fadeInRight\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-wrap\">
\t\t\t\t\t\t\t\t<div class=\"tab\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content-inner active\" data-content=\"signup\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Recherche</h3>
\t\t\t\t\t\t\t\t\t\t\t<form action=\"#\"method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"fullname\">Prix Location</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" id=\"fullname\" class=\"form-control\" name=\"prix_loc\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"activities\">Localite</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"localite\" id=\"activities\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["localites"]) || array_key_exists("localites", $context) ? $context["localites"] : (function () { throw new Twig_Error_Runtime('Variable "localites" does not exist.', 139, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["localite"]) {
            // line 140
            echo "                                                                 <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["localite"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["localite"], "libelleloca", array()), "html", null, true);
            echo "</option>
                                                             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"destination\">Type de Bien</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"typebien\" id=\"destination\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new Twig_Error_Runtime('Variable "types" does not exist.', 149, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            echo "              
                                                                 <option value=\"";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["type"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["type"], "libelletype", array()), "html", null, true);
            echo " </option>
                                                             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\"class=\"btn btn-primary btn-block\" value=\"Rechercher\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</form>\t
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>
";
        
        $__internal_125e13880a9cec4990de6d03a7f8ccf7902c5dcc4cdc23d3d892abe9d0f473be->leave($__internal_125e13880a9cec4990de6d03a7f8ccf7902c5dcc4cdc23d3d892abe9d0f473be_prof);

        
        $__internal_c29346805788031cf55b6673c55208e6cc9e088e84b2cb4c256a9c3d335ee51d->leave($__internal_c29346805788031cf55b6673c55208e6cc9e088e84b2cb4c256a9c3d335ee51d_prof);

    }

    // line 179
    public function block_section($context, array $blocks = array())
    {
        $__internal_6cbafa1ce02da43c6bc158c3ee55d66dbbeb3685d8ad6d2d16799e0782915664 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cbafa1ce02da43c6bc158c3ee55d66dbbeb3685d8ad6d2d16799e0782915664->enter($__internal_6cbafa1ce02da43c6bc158c3ee55d66dbbeb3685d8ad6d2d16799e0782915664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_9e2bc1984ce35dcbcee443b6960ae4072c07dce8e7ac54382c2c6ef7f8c1d595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e2bc1984ce35dcbcee443b6960ae4072c07dce8e7ac54382c2c6ef7f8c1d595->enter($__internal_9e2bc1984ce35dcbcee443b6960ae4072c07dce8e7ac54382c2c6ef7f8c1d595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        echo "\t
\t<div class=\"gtco-section\">
\t\t<div class=\"gtco-container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center gtco-heading\">
\t\t\t\t\t<h2>Vos désirs</h2>
\t\t\t\t\t<p>Notre pririoté,n'hésitez pas de faire vos CHOIX.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        
        $__internal_9e2bc1984ce35dcbcee443b6960ae4072c07dce8e7ac54382c2c6ef7f8c1d595->leave($__internal_9e2bc1984ce35dcbcee443b6960ae4072c07dce8e7ac54382c2c6ef7f8c1d595_prof);

        
        $__internal_6cbafa1ce02da43c6bc158c3ee55d66dbbeb3685d8ad6d2d16799e0782915664->leave($__internal_6cbafa1ce02da43c6bc158c3ee55d66dbbeb3685d8ad6d2d16799e0782915664_prof);

    }

    // line 189
    public function block_photo($context, array $blocks = array())
    {
        $__internal_0e47add03957af53355b6b1f5f9956d89ac7a21dae634acfc05fc5bacd906633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e47add03957af53355b6b1f5f9956d89ac7a21dae634acfc05fc5bacd906633->enter($__internal_0e47add03957af53355b6b1f5f9956d89ac7a21dae634acfc05fc5bacd906633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "photo"));

        $__internal_1235299df67b1a75aa451a09e61bfad169c0ac4e04b9cad8a6bb8576e4eadcdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1235299df67b1a75aa451a09e61bfad169c0ac4e04b9cad8a6bb8576e4eadcdc->enter($__internal_1235299df67b1a75aa451a09e61bfad169c0ac4e04b9cad8a6bb8576e4eadcdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "photo"));

        // line 190
        echo "\t\t\t";
        // line 278
        echo "\t";
        
        $__internal_1235299df67b1a75aa451a09e61bfad169c0ac4e04b9cad8a6bb8576e4eadcdc->leave($__internal_1235299df67b1a75aa451a09e61bfad169c0ac4e04b9cad8a6bb8576e4eadcdc_prof);

        
        $__internal_0e47add03957af53355b6b1f5f9956d89ac7a21dae634acfc05fc5bacd906633->leave($__internal_0e47add03957af53355b6b1f5f9956d89ac7a21dae634acfc05fc5bacd906633_prof);

    }

    // line 321
    public function block_div($context, array $blocks = array())
    {
        $__internal_6565b91005ce48edb96e0f8df0ec76f9decfc64c416fefbcdbfb366ce0663a4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6565b91005ce48edb96e0f8df0ec76f9decfc64c416fefbcdbfb366ce0663a4b->enter($__internal_6565b91005ce48edb96e0f8df0ec76f9decfc64c416fefbcdbfb366ce0663a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "div"));

        $__internal_52453098253b062f1de8119dd6d5b0f45ae96baf6d933c5319f6d6854e506a3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52453098253b062f1de8119dd6d5b0f45ae96baf6d933c5319f6d6854e506a3f->enter($__internal_52453098253b062f1de8119dd6d5b0f45ae96baf6d933c5319f6d6854e506a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "div"));

        // line 322
        echo "\t<div class=\"gtco-cover gtco-cover-sm\" style=\"background-image: url(images/img_bg_1.jpg)\"  data-stellar-background-ratio=\"0.5\">
\t\t<div class=\"overlay\"></div>
\t\t<div class=\"gtco-container text-center\">
\t\t\t<div class=\"display-t\">
\t\t\t\t<div class=\"display-tc\">
\t\t\t\t\t<h1>
\t\t\t\t\tNous avons des services de haute qualité que vous aimerez sûrement\t!</h1>
\t\t\t\t</div>\t
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_52453098253b062f1de8119dd6d5b0f45ae96baf6d933c5319f6d6854e506a3f->leave($__internal_52453098253b062f1de8119dd6d5b0f45ae96baf6d933c5319f6d6854e506a3f_prof);

        
        $__internal_6565b91005ce48edb96e0f8df0ec76f9decfc64c416fefbcdbfb366ce0663a4b->leave($__internal_6565b91005ce48edb96e0f8df0ec76f9decfc64c416fefbcdbfb366ce0663a4b_prof);

    }

    public function getTemplateName()
    {
        return "::reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  576 => 322,  567 => 321,  557 => 278,  555 => 190,  546 => 189,  519 => 179,  483 => 152,  473 => 150,  467 => 149,  458 => 142,  447 => 140,  443 => 139,  408 => 108,  399 => 107,  380 => 98,  373 => 94,  368 => 92,  361 => 88,  354 => 84,  346 => 78,  337 => 77,  319 => 516,  312 => 512,  306 => 509,  302 => 508,  296 => 505,  290 => 502,  285 => 500,  280 => 498,  275 => 496,  270 => 494,  265 => 492,  262 => 491,  239 => 458,  184 => 404,  179 => 376,  177 => 334,  175 => 321,  173 => 279,  170 => 189,  168 => 179,  165 => 107,  163 => 77,  147 => 64,  143 => 63,  140 => 62,  136 => 60,  127 => 54,  123 => 53,  119 => 52,  115 => 51,  111 => 50,  107 => 49,  103 => 48,  99 => 47,  95 => 46,  89 => 43,  83 => 40,  77 => 37,  72 => 35,  67 => 33,  62 => 31,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<!--
\tAesthetic by gettemplates.co
\tTwitter: http://twitter.com/gettemplateco
\tURL: http://gettemplates.co
-->
<html>
\t<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>Traveler &mdash; Free Website Template, Free HTML5 Template by GetTemplates.co</title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta name=\"description\" content=\"Free HTML5 Website Template by GetTemplates.co\" />
\t<meta name=\"keywords\" content=\"free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive\" />
\t<meta name=\"author\" content=\"GetTemplates.co\" />

  \t<!-- Facebook and Twitter integration -->
\t<meta property=\"og:title\" content=\"\"/>
\t<meta property=\"og:image\" content=\"\"/>
\t<meta property=\"og:url\" content=\"\"/>
\t<meta property=\"og:site_name\" content=\"\"/>
\t<meta property=\"og:description\" content=\"\"/>
\t<meta name=\"twitter:title\" content=\"\" />
\t<meta name=\"twitter:image\" content=\"\" />
\t<meta name=\"twitter:url\" content=\"\" />
\t<meta name=\"twitter:card\" content=\"\" />

\t<link href=\"https://fonts.googleapis.com/csss?family=Lato:300,400,700\" rel=\"stylesheet\">
\t
\t<!-- Animate.css -->
\t<link rel=\"stylesheet\" href=\"{{asset('csss/animate.css')}}\">
\t<!-- Icomoon Icon Fonts-->
\t<link rel=\"stylesheet\" href=\"{{asset('csss/icomoon.css')}}\">
\t<!-- Themify Icons-->
\t<link rel=\"stylesheet\" href=\"{{asset('csss/themify-icons.css')}}\">
\t<!-- Bootstrap  -->
\t<link rel=\"stylesheet\" href=\"{{asset('csss/bootstrap.css')}}\">

\t<!-- Magnific Popup -->
\t<link rel=\"stylesheet\" href=\"{{asset('csss/magnific-popup.css')}}\">

\t<!-- Magnific Popup -->
\t<link rel=\"stylesheet\" href=\"{{asset('csss/bootstrap-datepicker.min.css')}}\">

\t<!-- Owl Carousel  -->
\t\t<link rel=\"stylesheet\" href=\"{{asset('csss/owl.carousel.min.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{asset('csss/owl.theme.default.min.css')}}\">
\t\t<link href=\"{{asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/core.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/components.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/pages.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/menu.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/responsive.css')}}\" rel=\"stylesheet\" type=\"text/css\">

        <script src=\"assets/js/modernizr.min.js\"></script>


\t<!-- Theme style  -->
\t<link rel=\"stylesheet\" href=\"{{asset('csss/style.css')}}\">
\t{# <link href=\"{{asset('csss/dropzone.css')}}\" rel=\"stylesheet\" type=\"text/css\"> #}
\t<!-- Modernizr JS -->
\t<script src=\"{{asset('jss/modernizr-2.6.2.min.js')}}\"></script>
\t <script src=\"{{asset('jss/dropzone.js')}}\"></script>
\t<!-- FOR IE9 below -->
\t<!--[if lt IE 9]>
\t<script src=\"js/respond.min.js\"></script>
\t<![endif]-->
 \t\t
\t</head>
\t<body>
\t\t
\t<div class=\"gtco-loader\"></div>

\t<div id=\"page\">

\t{% block nav %}
\t<!-- <div class=\"page-inner\"> -->
\t<nav class=\"gtco-nav\" role=\"navigation\">
\t\t<div class=\"gtco-container\">
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-4 col-xs-12\">
\t\t\t\t\t<div id=\"gtco-logo\"><a href=\"{{path('searchBien')}}\"><em>Immobilier De LUXE </em></a></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-8 text-right menu-1\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"{{path('SavePro')}}\">Placer vos Annonces</a></li>
\t\t\t\t\t\t<li class=\"has-dropdown\">
\t\t\t\t\t\t\t<a href=\"#\">Autres</a>
\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t<li><a href=\"{{path('Almadie')}}\">Almadie</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Golf</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"{{path('Mariste')}}\">Mariste</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dakar</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a href=\"{{path('resultat')}}\">Nos Biens</a></li>
\t\t\t\t\t\t<li><a href=\"contact.html\">Contact</a></li>
\t\t\t\t\t</ul>\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</nav>
\t{% endblock %}
\t\t{% block header %}
\t<header id=\"gtco-header\" class=\"gtco-cover gtco-cover-md\" role=\"banner\" style=\"background-image: url({{asset('image/img1.jpg')}})\">
\t\t<div class=\"overlay\"></div>
\t\t<div class=\"gtco-container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12 col-md-offset-0 text-left\">
\t\t\t\t\t

\t\t\t\t\t<div class=\"row row-mt-15em\">
\t\t\t\t\t\t<div class=\"col-md-7 mt-text animate-box\" data-animate-effect=\"fadeInUp\">
\t\t\t\t\t\t\t<h1>Nos meilleurs Villa pour un logement de Luxe?</h1>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-md-4 col-md-push-1 animate-box\" data-animate-effect=\"fadeInRight\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-wrap\">
\t\t\t\t\t\t\t\t<div class=\"tab\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content-inner active\" data-content=\"signup\">
\t\t\t\t\t\t\t\t\t\t\t<h3>Recherche</h3>
\t\t\t\t\t\t\t\t\t\t\t<form action=\"#\"method=\"post\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"fullname\">Prix Location</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" id=\"fullname\" class=\"form-control\" name=\"prix_loc\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"activities\">Localite</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"localite\" id=\"activities\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t {% for localite in localites %}
                                                                 <option value=\"{{ localite.id }}\">{{ localite.libelleloca }}</option>
                                                             {% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"destination\">Type de Bien</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"typebien\" id=\"destination\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t {% for type in types %}              
                                                                 <option value=\"{{ type.id }}\"> {{type.libelletype}} </option>
                                                             {% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\"class=\"btn btn-primary btn-block\" value=\"Rechercher\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</form>\t
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>
{% endblock %}
{% block section %}\t
\t<div class=\"gtco-section\">
\t\t<div class=\"gtco-container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center gtco-heading\">
\t\t\t\t\t<h2>Vos désirs</h2>
\t\t\t\t\t<p>Notre pririoté,n'hésitez pas de faire vos CHOIX.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{% endblock %}
            {% block photo %}
\t\t\t{# <div class=\"row\">

\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-6\">
\t\t\t\t\t<a href=\"images/img_1.jpg\" class=\"fh5co-card-item image-popup\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<div class=\"overlay\"><i class=\"ti-plus\"></i></div>
\t\t\t\t\t\t\t<img src=\"images/img_1.jpg\" alt=\"Image\" class=\"img-responsive\">
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"fh5co-text\">
\t\t\t\t\t\t\t<h2>New York, USA</h2>
\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
\t\t\t\t\t\t\t<p><span class=\"btn btn-primary\">Schedule a Trip</span></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-6\">
\t\t\t\t\t<a href=\"images/img_2.jpg\" class=\"fh5co-card-item image-popup\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<div class=\"overlay\"><i class=\"ti-plus\"></i></div>
\t\t\t\t\t\t\t<img src=\"images/img_2.jpg\" alt=\"Image\" class=\"img-responsive\">
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"fh5co-text\">
\t\t\t\t\t\t\t<h2>Seoul, South Korea</h2>
\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
\t\t\t\t\t\t\t<p><span class=\"btn btn-primary\">Schedule a Trip</span></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-6\">
\t\t\t\t\t<a href=\"images/img_3.jpg\" class=\"fh5co-card-item image-popup\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<div class=\"overlay\"><i class=\"ti-plus\"></i></div>
\t\t\t\t\t\t\t<img src=\"images/img_3.jpg\" alt=\"Image\" class=\"img-responsive\">
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"fh5co-text\">
\t\t\t\t\t\t\t<h2>Paris, France</h2>
\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
\t\t\t\t\t\t\t<p><span class=\"btn btn-primary\">Schedule a Trip</span></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>


\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-6\">
\t\t\t\t\t<a href=\"images/img_4.jpg\" class=\"fh5co-card-item image-popup\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<div class=\"overlay\"><i class=\"ti-plus\"></i></div>
\t\t\t\t\t\t\t<img src=\"images/img_4.jpg\" alt=\"Image\" class=\"img-responsive\">
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"fh5co-text\">
\t\t\t\t\t\t\t<h2>Sydney, Australia</h2>
\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
\t\t\t\t\t\t\t<p><span class=\"btn btn-primary\">Schedule a Trip</span></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-6\">
\t\t\t\t\t<a href=\"images/img_5.jpg\" class=\"fh5co-card-item image-popup\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<div class=\"overlay\"><i class=\"ti-plus\"></i></div>
\t\t\t\t\t\t\t<img src=\"images/img_5.jpg\" alt=\"Image\" class=\"img-responsive\">
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"fh5co-text\">
\t\t\t\t\t\t\t<h2>Greece, Europe</h2>
\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
\t\t\t\t\t\t\t<p><span class=\"btn btn-primary\">Schedule a Trip</span></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-4 col-md-4 col-sm-6\">
\t\t\t\t\t<a href=\"images/img_6.jpg\" class=\"fh5co-card-item image-popup\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<div class=\"overlay\"><i class=\"ti-plus\"></i></div>
\t\t\t\t\t\t\t<img src=\"images/img_6.jpg\" alt=\"Image\" class=\"img-responsive\">
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"fh5co-text\">
\t\t\t\t\t\t\t<h2>Spain, Europe</h2>
\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
\t\t\t\t\t\t\t<p><span class=\"btn btn-primary\">Schedule a Trip</span></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div> #}
\t{% endblock %}
\t{# <div id=\"gtco-features\">
\t\t<div class=\"gtco-container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center gtco-heading animate-box\">
\t\t\t\t\t<h2>How It Works</h2>
\t\t\t\t\t<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"feature-center animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t<i>1</i>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<h3>Lorem ipsum dolor sit amet</h3>
\t\t\t\t\t\t<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"feature-center animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t<i>2</i>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<h3>Consectetur adipisicing elit</h3>
\t\t\t\t\t\t<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-6\">
\t\t\t\t\t<div class=\"feature-center animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t<i>3</i>
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<h3>Dignissimos asperiores vitae</h3>
\t\t\t\t\t\t<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t

\t\t\t</div>
\t\t</div>
\t</div>
 #}
{% block div %}
\t<div class=\"gtco-cover gtco-cover-sm\" style=\"background-image: url(images/img_bg_1.jpg)\"  data-stellar-background-ratio=\"0.5\">
\t\t<div class=\"overlay\"></div>
\t\t<div class=\"gtco-container text-center\">
\t\t\t<div class=\"display-t\">
\t\t\t\t<div class=\"display-tc\">
\t\t\t\t\t<h1>
\t\t\t\t\tNous avons des services de haute qualité que vous aimerez sûrement\t!</h1>
\t\t\t\t</div>\t
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
\t{# <div id=\"gtco-counter\" class=\"gtco-section\">
\t\t<div class=\"gtco-container\">

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center gtco-heading animate-box\">
\t\t\t\t\t<h2>Our Success</h2>
\t\t\t\t\t<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t<div class=\"col-md-3 col-sm-6 animate-box\" data-animate-effect=\"fadeInUp\">
\t\t\t\t\t<div class=\"feature-center\">
\t\t\t\t\t\t<span class=\"counter js-counter\" data-from=\"0\" data-to=\"196\" data-speed=\"5000\" data-refresh-interval=\"50\">1</span>
\t\t\t\t\t\t<span class=\"counter-label\">Destination</span>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 col-sm-6 animate-box\" data-animate-effect=\"fadeInUp\">
\t\t\t\t\t<div class=\"feature-center\">
\t\t\t\t\t\t<span class=\"counter js-counter\" data-from=\"0\" data-to=\"97\" data-speed=\"5000\" data-refresh-interval=\"50\">1</span>
\t\t\t\t\t\t<span class=\"counter-label\">Hotels</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 col-sm-6 animate-box\" data-animate-effect=\"fadeInUp\">
\t\t\t\t\t<div class=\"feature-center\">
\t\t\t\t\t\t<span class=\"counter js-counter\" data-from=\"0\" data-to=\"12402\" data-speed=\"5000\" data-refresh-interval=\"50\">1</span>
\t\t\t\t\t\t<span class=\"counter-label\">Travelers</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 col-sm-6 animate-box\" data-animate-effect=\"fadeInUp\">
\t\t\t\t\t<div class=\"feature-center\">
\t\t\t\t\t\t<span class=\"counter js-counter\" data-from=\"0\" data-to=\"12202\" data-speed=\"5000\" data-refresh-interval=\"50\">1</span>
\t\t\t\t\t\t<span class=\"counter-label\">Happy Customer</span>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div> #}

\t

\t{# <div id=\"gtco-subscribe\">
\t\t<div class=\"gtco-container\">
\t\t\t<div class=\"row animate-box\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center gtco-heading\">
\t\t\t\t\t<h2>Subscribe</h2>
\t\t\t\t\t<p>Be the first to know about the new templates.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row animate-box\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t<form class=\"form-inline\">
\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label for=\"email\" class=\"sr-only\">Email</label>
\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Your Email\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6 col-sm-6\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default btn-block\">Subscribe</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div> #}

\t<footer id=\"gtco-footer\" role=\"contentinfo\">
\t\t<div class=\"gtco-container\">
\t\t\t<div class=\"row row-p\tb-md\">

\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"gtco-widget\">
\t\t\t\t\t\t<h3>A propos de Nous</h3>
\t\t\t\t\t\t<p>\tImmobilier de Luxe est une agence immobilier siégée à Amitier 3 ,mais pratiquement on a beaucoup d'agence .Rien que pour vous faciliter la vie </p></div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-2 col-md-push-1\">
\t\t\t\t\t<div class=\"gtco-widget\">
\t\t\t\t\t\t<h3>Destination</h3>
\t\t\t\t\t\t<ul class=\"gtco-footer-links\">
\t\t\t\t\t\t\t<li><a href=\"#\">Almadie</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Golf</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Mariste</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Dakar</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-2 col-md-push-1\">
\t\t\t\t\t<div class=\"gtco-widget\">
\t\t\t\t\t\t<h3>Hotels</h3>
\t\t\t\t\t\t<ul class=\"gtco-footer-links\">
\t\t\t\t\t\t\t<li><a href=\"#\">Luxe Hotel</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Italy 5 Star hotel</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Dubai Hotel</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">Deluxe Hotel</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\">BoraBora Hotel</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-md-3 col-md-push-1\">
\t\t\t\t\t<div class=\"gtco-widget\">
\t\t\t\t\t\t<h3>Get In Touch</h3>
\t\t\t\t\t\t<ul class=\"gtco-quick-contact\">
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-phone\"></i> +221 33 825 23 23</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-mail2\"></i> immobilierluxio@gmail.com</a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-chat\"></i> Live Chat</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<div class=\"row copyright\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<p class=\"pull-left\">
\t\t\t\t\t\t<small class=\"block\">&copy; Immobilier de Luxe for ever.</small> 
\t\t\t\t\t\t{# <small class=\"block\">Designed by <a href=\"http://GetTemplates.co/\" target=\"_blank\">GetTemplates.co</a> Demo Images: <a href=\"http://unsplash.com/\" target=\"_blank\">Unsplash</a></small> #}
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"pull-right\">
\t\t\t\t\t\t<ul class=\"gtco-social-icons pull-right\">
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-twitter\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-facebook\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-linkedin\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-dribbble\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</footer>
\t<!-- </div> -->

\t</div>

\t<div class=\"gototop js-top\">
\t\t<a href=\"#\" class=\"js-gotop\"><i class=\"icon-arrow-up\"></i></a>
\t</div>
\t{# <script src=\"{{asset('assets/js/jquery.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/bootstrap.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/detect.js')}}\"></script>
        <script src=\"{{asset('assets/js/fastclick.js')}}\"></script>
        <script src=\"{{asset('assets/js/jquery.slimscroll.js')}}\"></script>
        <script src=\"{{asset('assets/js/jquery.blockUI.js')}}\"></script>
        <script src=\"{{asset('assets/js/waves.js')}}\"></script>
        <script src=\"{{asset('assets/js/wow.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/jquery.nicescroll.js')}}\"></script>
        <script src=\"{{asset('assets/js/jquery.scrollTo.min.js')}}\"></script>

        <script src=\"{{asset('assets/js/jquery.app.js')}}\"></script> #}
\t<!-- jQuery -->
\t<script src=\"{{asset('jss/jquery.min.js')}}\"></script>
\t<!-- jQuery Easing -->
\t<script src=\"{{asset('jss/jquery.easing.1.3.js')}}\"></script>
\t<!-- Bootstrap -->
\t<script src=\"{{asset('jss/bootstrap.min.js')}}\"></script>
\t<!-- Waypoints -->
\t<script src=\"{{asset('jss/jquery.waypoints.min.js')}}\"></script>
\t<!-- Carousel -->
\t<script src=\"{{asset('jss/owl.carousel.min.js')}}\"></script>
\t<!-- countTo -->
\t<script src=\"{{asset('jss/jquery.countTo.js')}}\"></script>

\t<!-- Stellar Parallax -->
\t<script src=\"{{asset('jss/jquery.stellar.min.js')}}\"></script>

\t<!-- Magnific Popup -->
\t<script src=\"{{asset('jss/jquery.magnific-popup.min.js')}}\"></script>
\t<script src=\"{{asset('jss/magnific-popup-options.js')}}\"></script>
\t
\t<!-- Datepicker -->
\t<script src=\"{{asset('jss/bootstrap-datepicker.min.js')}}\"></script>
\t

\t<!-- Main -->
\t<script src=\"{{asset('jss/main.js')}}\"></script>

\t\t


\t</body>
</html>
", "::reservation.html.twig", "/var/www/html/Agence_immobilier/Immobilier/app/Resources/views/reservation.html.twig");
    }
}

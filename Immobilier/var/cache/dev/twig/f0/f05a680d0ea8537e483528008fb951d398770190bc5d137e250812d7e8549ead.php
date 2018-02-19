<?php

/* GSTImmobilierBundle:Default:index.html.twig */
class __TwigTemplate_b405973b42aac07d14ce5f8204b1c9d9f8d5dd90b97cf32ba2fc09189b68d6bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GSTImmobilierBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0d29da92a3b2e50bb760c81bbd3d63d4be5891d58cbbebb2070782e0149f6a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0d29da92a3b2e50bb760c81bbd3d63d4be5891d58cbbebb2070782e0149f6a3->enter($__internal_d0d29da92a3b2e50bb760c81bbd3d63d4be5891d58cbbebb2070782e0149f6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Default:index.html.twig"));

        $__internal_21c641880a471be20e3a43d9f032a2f12ed77e23df46f692c69a23d842bba35d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c641880a471be20e3a43d9f032a2f12ed77e23df46f692c69a23d842bba35d->enter($__internal_21c641880a471be20e3a43d9f032a2f12ed77e23df46f692c69a23d842bba35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0d29da92a3b2e50bb760c81bbd3d63d4be5891d58cbbebb2070782e0149f6a3->leave($__internal_d0d29da92a3b2e50bb760c81bbd3d63d4be5891d58cbbebb2070782e0149f6a3_prof);

        
        $__internal_21c641880a471be20e3a43d9f032a2f12ed77e23df46f692c69a23d842bba35d->leave($__internal_21c641880a471be20e3a43d9f032a2f12ed77e23df46f692c69a23d842bba35d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f1d62e60802cccb515ca733b1a4a75780993a81e35803cdf884d390624393f10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1d62e60802cccb515ca733b1a4a75780993a81e35803cdf884d390624393f10->enter($__internal_f1d62e60802cccb515ca733b1a4a75780993a81e35803cdf884d390624393f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eb0ae960b0b7101a074e88b7ef93805d3bc1cd5dc568fea2e84909e4aa505071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb0ae960b0b7101a074e88b7ef93805d3bc1cd5dc568fea2e84909e4aa505071->enter($__internal_eb0ae960b0b7101a074e88b7ef93805d3bc1cd5dc568fea2e84909e4aa505071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GSTImmobilierBundle:DefaultController:index";
        
        $__internal_eb0ae960b0b7101a074e88b7ef93805d3bc1cd5dc568fea2e84909e4aa505071->leave($__internal_eb0ae960b0b7101a074e88b7ef93805d3bc1cd5dc568fea2e84909e4aa505071_prof);

        
        $__internal_f1d62e60802cccb515ca733b1a4a75780993a81e35803cdf884d390624393f10->leave($__internal_f1d62e60802cccb515ca733b1a4a75780993a81e35803cdf884d390624393f10_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_671b30d990060c80fd0f62b15b29ae6377487d1b7da094d05da8ec3ab16e3b0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_671b30d990060c80fd0f62b15b29ae6377487d1b7da094d05da8ec3ab16e3b0e->enter($__internal_671b30d990060c80fd0f62b15b29ae6377487d1b7da094d05da8ec3ab16e3b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8c80e7b9fc78a6d39604c6697e16215dff770858f6792e7119379ae46a246c64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c80e7b9fc78a6d39604c6697e16215dff770858f6792e7119379ae46a246c64->enter($__internal_8c80e7b9fc78a6d39604c6697e16215dff770858f6792e7119379ae46a246c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container-fluid\">
  <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/téléchargement.png"), "html", null, true);
        echo "\" alt=\"\" /> 
 
</div>
<br/>

<nav class=\"navbar navbar-expand-sm bg-dark navbar-dark sticky-top\">
  <ul class=\"navbar navbar-nav\">
    <li class=\"nav-item\">
      <a class=\"navbar-brand\" href=\"#\">Accueil</a>
    </li>
    <li class=\"nav-item\">
      <a class=\"navbar-brand\" href=\"#\">Nos bien</a>
    </li>
    <li class=\"nav-item\">
      <a class=\"navbar-brand\" href=\"#\">A propros</a>
    </li>
    <li class=\"nav-item\">
      <a class=\"navbar-brand\" href=\"#\">Mon compte</a>
    </li>
     
  </ul>
 
</nav>
<div class=\"container text-center\">
<nav class=\"navbar navbar-light bg-faded\">
  <form class=\"form-inline\">
    <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Veillez saisir la localité\">
  </form>
</nav>
<nav class=\"navbar navbar-light bg-faded\">
  <form class=\"form-inline\" action=\"\" method=\"post\">
<select>
    ";
        // line 43
        echo "  
</select>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<div class=\"input-group\">
  <input type=\"text\" class=\"form-control\" placeholder=\"prix_location\" aria-describedby=\"basic-addon2\">
</div>&nbsp&nbsp&nbsp&nbsp
    <button class=\"btn btn-outline-primary my-2 my-sm-0\" type=\"submit\" value=\"Recherche\">Recherche</button>

  </form>
</nav>
    </div>

<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
      <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\" role=\"listbox\">
      <div class=\"item active\">
        <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/img.jpg"), "html", null, true);
        echo "\" alt=\"Image\">

      </div>

      <div class=\"item\">
        <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/Senegalnew.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
        
        
      </div>

      <div class=\"item\">
        <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/33675-1.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
      
      </div>

      <div class=\"item\">
        <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/33675-2.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
      
      </div>
   </div>

    <!-- Left and right controls -->
    <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
      <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
      <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
</div>
  
<div class=\"container text-center\">
<br/>
  <div class=\"row\">
  <div class=\"col-sm-3\">
    \t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Contactez-nous</h2>
\t\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t\t\t<strong>Immobilier de luxe</strong><br>
\t\t\t\t\t\t\t\t\tRue-Aline Sitoe Diatta<br>
\t\t\t\t\t\t\t\t</address>
\t\t\t\t
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tTel : 221 33 000 21 40
                  Email : immoluxe@gmail.com
\t\t\t\t\t\t\t\t</p>
\t\t<strong>Service disponible</strong><br>
Du Lundi au Vendredi <br>
De 9H à 19H
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
    </div>
    <div class=\"col-sm-3\">
      <img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/41492.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
      <p>Maison à vendre</p>
      <p>3 chambre et Sallon, térasse,cuisine,garrage et un espace jeux</p>
    </div>
    <div class=\"col-sm-3\"> 
      <img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/IMG_0975[1].JPG"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
     <p>Maison à louer</p>
      <p>4 chambre, 2 sallons, cuisine,piscine,jardin</p>
   
    </div>
    <div class=\"col-sm-3\"> 
      <img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/images.jpeg"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
     <p>Immeuble </p>
      <p>3 etage de 10 appartements</p>
   
    </div>
    
  </div>
</div><br>

<footer class=\"container-fluid text-center\">
<footer class=\"mg-footer\">
\t\t\t<div class=\"mg-footer-widget\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Instagram</h2>
\t\t\t\t\t\t\t\t<ul class=\"mg-instagram\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/1.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/2.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/3.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/4.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">En partenariat</h2>
\t\t\t\t\t\t\t\t
        <img src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/logo-orange.png"), "html", null, true);
        echo "\" alt=\"Image\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Réseaux Sociaux</h2>
\t\t\t\t\t\t\t\t<p>Suivez-nous sur les réseaux sociaux.</p>
\t\t\t\t\t\t\t\t<ul class=\"mg-footer-social\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-twitter-square\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-pinterest-square\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-rss\"></i></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"mg-copyright\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<p>&copy; 2018 <a href=\"http://www.sonatelacademy.sn\">Immobilier de luxe</a>. tout droits reservés.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>

</footer>

";
        
        $__internal_8c80e7b9fc78a6d39604c6697e16215dff770858f6792e7119379ae46a246c64->leave($__internal_8c80e7b9fc78a6d39604c6697e16215dff770858f6792e7119379ae46a246c64_prof);

        
        $__internal_671b30d990060c80fd0f62b15b29ae6377487d1b7da094d05da8ec3ab16e3b0e->leave($__internal_671b30d990060c80fd0f62b15b29ae6377487d1b7da094d05da8ec3ab16e3b0e_prof);

    }

    public function getTemplateName()
    {
        return "GSTImmobilierBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 163,  250 => 154,  246 => 153,  242 => 152,  238 => 151,  217 => 133,  208 => 127,  200 => 122,  157 => 82,  149 => 77,  140 => 71,  132 => 66,  107 => 43,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}GSTImmobilierBundle:DefaultController:index{% endblock %}

{% block body %}

<div class=\"container-fluid\">
  <img src=\"{{asset('image/téléchargement.png')}}\" alt=\"\" /> 
 
</div>
<br/>

<nav class=\"navbar navbar-expand-sm bg-dark navbar-dark sticky-top\">
  <ul class=\"navbar navbar-nav\">
    <li class=\"nav-item\">
      <a class=\"navbar-brand\" href=\"#\">Accueil</a>
    </li>
    <li class=\"nav-item\">
      <a class=\"navbar-brand\" href=\"#\">Nos bien</a>
    </li>
    <li class=\"nav-item\">
      <a class=\"navbar-brand\" href=\"#\">A propros</a>
    </li>
    <li class=\"nav-item\">
      <a class=\"navbar-brand\" href=\"#\">Mon compte</a>
    </li>
     
  </ul>
 
</nav>
<div class=\"container text-center\">
<nav class=\"navbar navbar-light bg-faded\">
  <form class=\"form-inline\">
    <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Veillez saisir la localité\">
  </form>
</nav>
<nav class=\"navbar navbar-light bg-faded\">
  <form class=\"form-inline\" action=\"\" method=\"post\">
<select>
    {# {% for type in types %}
  <option > {{type.libelletype}} </option>
  {% endfor %} #}
  
</select>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<div class=\"input-group\">
  <input type=\"text\" class=\"form-control\" placeholder=\"prix_location\" aria-describedby=\"basic-addon2\">
</div>&nbsp&nbsp&nbsp&nbsp
    <button class=\"btn btn-outline-primary my-2 my-sm-0\" type=\"submit\" value=\"Recherche\">Recherche</button>

  </form>
</nav>
    </div>

<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <!-- Indicators -->
    <ol class=\"carousel-indicators\">
      <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\" role=\"listbox\">
      <div class=\"item active\">
        <img src=\"{{asset('image/img.jpg')}}\" alt=\"Image\">

      </div>

      <div class=\"item\">
        <img src=\"{{asset('image/Senegalnew.jpg')}}\" alt=\"Image\">
        
        
      </div>

      <div class=\"item\">
        <img src=\"{{asset('image/33675-1.jpg')}}\" alt=\"Image\">
      
      </div>

      <div class=\"item\">
        <img src=\"{{asset('image/33675-2.jpg')}}\" alt=\"Image\">
      
      </div>
   </div>

    <!-- Left and right controls -->
    <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
      <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
      <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
      <span class=\"sr-only\">Next</span>
    </a>
</div>
  
<div class=\"container text-center\">
<br/>
  <div class=\"row\">
  <div class=\"col-sm-3\">
    \t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Contactez-nous</h2>
\t\t\t\t\t\t\t\t<address>
\t\t\t\t\t\t\t\t\t<strong>Immobilier de luxe</strong><br>
\t\t\t\t\t\t\t\t\tRue-Aline Sitoe Diatta<br>
\t\t\t\t\t\t\t\t</address>
\t\t\t\t
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tTel : 221 33 000 21 40
                  Email : immoluxe@gmail.com
\t\t\t\t\t\t\t\t</p>
\t\t<strong>Service disponible</strong><br>
Du Lundi au Vendredi <br>
De 9H à 19H
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
    </div>
    <div class=\"col-sm-3\">
      <img src=\"{{asset('image/41492.jpg')}}\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
      <p>Maison à vendre</p>
      <p>3 chambre et Sallon, térasse,cuisine,garrage et un espace jeux</p>
    </div>
    <div class=\"col-sm-3\"> 
      <img src=\"{{asset('image/IMG_0975[1].JPG')}}\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
     <p>Maison à louer</p>
      <p>4 chambre, 2 sallons, cuisine,piscine,jardin</p>
   
    </div>
    <div class=\"col-sm-3\"> 
      <img src=\"{{asset('image/images.jpeg')}}\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
     <p>Immeuble </p>
      <p>3 etage de 10 appartements</p>
   
    </div>
    
  </div>
</div><br>

<footer class=\"container-fluid text-center\">
<footer class=\"mg-footer\">
\t\t\t<div class=\"mg-footer-widget\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Instagram</h2>
\t\t\t\t\t\t\t\t<ul class=\"mg-instagram\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"{{asset('image/1.png')}}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"{{asset('image/2.png')}}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"{{asset('image/3.png')}}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"{{asset('image/4.png')}}\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">En partenariat</h2>
\t\t\t\t\t\t\t\t
        <img src=\"{{asset('image/logo-orange.png')}}\" alt=\"Image\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Réseaux Sociaux</h2>
\t\t\t\t\t\t\t\t<p>Suivez-nous sur les réseaux sociaux.</p>
\t\t\t\t\t\t\t\t<ul class=\"mg-footer-social\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-facebook\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-twitter-square\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-pinterest-square\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fab fa-google-plus\"></i></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-rss\"></i></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"mg-copyright\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<p>&copy; 2018 <a href=\"http://www.sonatelacademy.sn\">Immobilier de luxe</a>. tout droits reservés.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>

</footer>

{% endblock %}", "GSTImmobilierBundle:Default:index.html.twig", "/var/www/html/Agence_immobilier/Immobilier/src/GST/ImmobilierBundle/Resources/views/Default/index.html.twig");
    }
}

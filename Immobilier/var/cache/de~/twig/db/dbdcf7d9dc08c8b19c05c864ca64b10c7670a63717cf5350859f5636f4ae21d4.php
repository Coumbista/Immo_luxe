<?php

/* GSTImmobilierBundle:Front:layout.html.twig */
class __TwigTemplate_b8f3ae07446289147f11c095acb874e9c6fd65ad30a368363c7fd38e95338943 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GSTImmobilierBundle:Front:layout.html.twig", 1);
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
        $__internal_9a8288dcbbebf313f4886b3d9b42ff22dae269cb8ebc47dca4c682adbfcbc59b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a8288dcbbebf313f4886b3d9b42ff22dae269cb8ebc47dca4c682adbfcbc59b->enter($__internal_9a8288dcbbebf313f4886b3d9b42ff22dae269cb8ebc47dca4c682adbfcbc59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Front:layout.html.twig"));

        $__internal_df49cb573d19949e0c22c90f161047db0f6b0b8c5a19b31c7e8ac4a372916391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df49cb573d19949e0c22c90f161047db0f6b0b8c5a19b31c7e8ac4a372916391->enter($__internal_df49cb573d19949e0c22c90f161047db0f6b0b8c5a19b31c7e8ac4a372916391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Front:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a8288dcbbebf313f4886b3d9b42ff22dae269cb8ebc47dca4c682adbfcbc59b->leave($__internal_9a8288dcbbebf313f4886b3d9b42ff22dae269cb8ebc47dca4c682adbfcbc59b_prof);

        
        $__internal_df49cb573d19949e0c22c90f161047db0f6b0b8c5a19b31c7e8ac4a372916391->leave($__internal_df49cb573d19949e0c22c90f161047db0f6b0b8c5a19b31c7e8ac4a372916391_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_17675ed2894bdb03d6542f3615285e663afe71e28b5f4b0fdae0c54dedbd2dc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17675ed2894bdb03d6542f3615285e663afe71e28b5f4b0fdae0c54dedbd2dc1->enter($__internal_17675ed2894bdb03d6542f3615285e663afe71e28b5f4b0fdae0c54dedbd2dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7fb55407af9348a43390083df6cb0700d85744bfe41df9008d9d97ad2eb5f43f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb55407af9348a43390083df6cb0700d85744bfe41df9008d9d97ad2eb5f43f->enter($__internal_7fb55407af9348a43390083df6cb0700d85744bfe41df9008d9d97ad2eb5f43f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GSTImmobilierBundle:DefaultController:index";
        
        $__internal_7fb55407af9348a43390083df6cb0700d85744bfe41df9008d9d97ad2eb5f43f->leave($__internal_7fb55407af9348a43390083df6cb0700d85744bfe41df9008d9d97ad2eb5f43f_prof);

        
        $__internal_17675ed2894bdb03d6542f3615285e663afe71e28b5f4b0fdae0c54dedbd2dc1->leave($__internal_17675ed2894bdb03d6542f3615285e663afe71e28b5f4b0fdae0c54dedbd2dc1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a706b85534337a528f69d3364f7c9710bd63d1fa074ff3fbffe1a405284be5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a706b85534337a528f69d3364f7c9710bd63d1fa074ff3fbffe1a405284be5a->enter($__internal_0a706b85534337a528f69d3364f7c9710bd63d1fa074ff3fbffe1a405284be5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_40e36c94cd13bed2688599a98d82f9d3515ba1888c206b8120b9dd221fc968ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e36c94cd13bed2688599a98d82f9d3515ba1888c206b8120b9dd221fc968ed->enter($__internal_40e36c94cd13bed2688599a98d82f9d3515ba1888c206b8120b9dd221fc968ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container\">
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
<form method=\"post\">
  <div class=\"form-group\" style=\"margin-left:300px; width:1500px; padding-top:10px;\" >
    <div class=\"input-group input-group-sm icon-addon addon-sm\" style=\"margin-left:120px; width:500px; padding-top:10px;\">
        <input type=\"text\" placeholder=\"saisissze votre prix\"style=\"text-align:center\" name=\"prixLoc\" id=\"schbox\" class=\"form-control input-sm\">
       
    </div>
</div>
 
<div class=\"form-group \" style=\"width:900px; display:flex; margin-left:500px; \" >
    <div class=\"form-group\">
    <div class=\"icon-addon addon-sm\">
    <form method=\"post\">
     <input type=\"text\"style=\"text-align:center\" name=\"localite\" id=\"schbox\" class=\"form-control input-sm\">

        ";
        // line 53
        echo "        <i class=\"icon icon-search\"></i>
    </div>
    </form>
</div>&nbsp;&nbsp;
     <div class=\"form-group\">
    <div class=\"icon-addon addon-sm\">
        <select class=\"form-control input-sm\">
          <option placeholder=\"choisir un type de bien\"></option>
              ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? $this->getContext($context, "types")));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            echo "              
                 <option > ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "libelletype", array()), "html", null, true);
            echo " </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </select>
        <i class=\"icon icon-search\"></i>
    </div>
</div>
    &nbsp;&nbsp;&nbsp;

  
</select>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
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
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/img.jpg"), "html", null, true);
        echo "\" alt=\"Image\">

      </div>

      <div class=\"item\">
        <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/Senegalnew.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
        
        
      </div>

      <div class=\"item\">
        <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/33675-1.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
      
      </div>

      <div class=\"item\">
        <img src=\"";
        // line 106
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
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/41492.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
      <p>Maison à vendre</p>
      <p>3 chambre et Sallon, térasse,cuisine,garrage et un espace jeux</p>
    </div>
    <div class=\"col-sm-3\"> 
      <img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/IMG_0975[1].JPG"), "html", null, true);
        echo "\" class=\"img-responsive\" style=\"width:100%\" alt=\"Image\">
     <p>Maison à louer</p>
      <p>4 chambre, 2 sallons, cuisine,piscine,jardin</p>
   
    </div>
    <div class=\"col-sm-3\"> 
      <img src=\"";
        // line 157
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
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/1.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/2.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/3.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 178
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
        // line 187
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
        
        $__internal_40e36c94cd13bed2688599a98d82f9d3515ba1888c206b8120b9dd221fc968ed->leave($__internal_40e36c94cd13bed2688599a98d82f9d3515ba1888c206b8120b9dd221fc968ed_prof);

        
        $__internal_0a706b85534337a528f69d3364f7c9710bd63d1fa074ff3fbffe1a405284be5a->leave($__internal_0a706b85534337a528f69d3364f7c9710bd63d1fa074ff3fbffe1a405284be5a_prof);

    }

    public function getTemplateName()
    {
        return "GSTImmobilierBundle:Front:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 187,  284 => 178,  280 => 177,  276 => 176,  272 => 175,  251 => 157,  242 => 151,  234 => 146,  191 => 106,  183 => 101,  174 => 95,  166 => 90,  138 => 64,  130 => 62,  124 => 61,  114 => 53,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

<div class=\"container\">
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
<form method=\"post\">
  <div class=\"form-group\" style=\"margin-left:300px; width:1500px; padding-top:10px;\" >
    <div class=\"input-group input-group-sm icon-addon addon-sm\" style=\"margin-left:120px; width:500px; padding-top:10px;\">
        <input type=\"text\" placeholder=\"saisissze votre prix\"style=\"text-align:center\" name=\"prixLoc\" id=\"schbox\" class=\"form-control input-sm\">
       
    </div>
</div>
 
<div class=\"form-group \" style=\"width:900px; display:flex; margin-left:500px; \" >
    <div class=\"form-group\">
    <div class=\"icon-addon addon-sm\">
    <form method=\"post\">
     <input type=\"text\"style=\"text-align:center\" name=\"localite\" id=\"schbox\" class=\"form-control input-sm\">

        {# <select class=\"form-control input-sm\" >
         <option placeholder=\"choisir une localité\"></option>
                 {% for localite in localites %}            
                 <option > {{localite.libelleloca}} </option>
                  {% endfor %}
        </select> #}
        <i class=\"icon icon-search\"></i>
    </div>
    </form>
</div>&nbsp;&nbsp;
     <div class=\"form-group\">
    <div class=\"icon-addon addon-sm\">
        <select class=\"form-control input-sm\">
          <option placeholder=\"choisir un type de bien\"></option>
              {% for type in types %}              
                 <option > {{type.libelletype}} </option>
            {% endfor %}
        </select>
        <i class=\"icon icon-search\"></i>
    </div>
</div>
    &nbsp;&nbsp;&nbsp;

  
</select>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
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

{% endblock %}", "GSTImmobilierBundle:Front:layout.html.twig", "/var/www/html/Agence_immobilier/Immobilier/src/GST/ImmobilierBundle/Resources/views/Front/layout.html.twig");
    }
}

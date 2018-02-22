<?php

/* ::layout.html.twig */
class __TwigTemplate_ce9fc11672234fc82c3a944478c40340c2902458cf6b826e094b56e1b615600d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_154537e2f87a0ceb44f8540ddacfc4907f9f4a0f4997a6aea351c054e179757d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_154537e2f87a0ceb44f8540ddacfc4907f9f4a0f4997a6aea351c054e179757d->enter($__internal_154537e2f87a0ceb44f8540ddacfc4907f9f4a0f4997a6aea351c054e179757d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_6e1f402a7305c9fd617aa6fae3bbf29dfb1d7278498b793368c71ce9732c1e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e1f402a7305c9fd617aa6fae3bbf29dfb1d7278498b793368c71ce9732c1e19->enter($__internal_6e1f402a7305c9fd617aa6fae3bbf29dfb1d7278498b793368c71ce9732c1e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>

<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
 <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
       \t\t<script defer src=\"https://use.fontawesome.com/releases/v5.0.6/js/all.js\"></script>
           <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
             <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
             <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
       
 
    </head>
   
    <body>
    <div class=\"container\">
  <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/téléchargement.png"), "html", null, true);
        echo "\" alt=\"\" /> 
 
</div>



<br/>
  ";
        // line 34
        $this->displayBlock('header', $context, $blocks);
        // line 99
        echo " <p>
                        <h1 style=\"font-family:Goudy Old style;\">
                            <center style=\"font-family:Goudy; color:grey\"><i>Vous trouverez les meilleurs produits ICI!</i></center>
                        </h1>
                    </p>
<div class=\"container text-center\">
<nav class=\"navbar navbar-light bg-faded\">
<form method=\"post\">
  <div class=\"form-group\" style=\"margin-left:500px; width:1500px; padding-top:10px;\" >
    <div class=\"input-group input-group-sm icon-addon addon-sm\" >
        <input type=\"text\" placeholder=\"saisissze votre prix\"style=\"text-align:center\" name=\"prix_loc\" class=\"form-control input-sm\">
       
    </div>
</div>
 
<div class=\"form-group \" style=\"width:900px; display:flex; margin-left:500px; \" >
    <div class=\"form-group\">
    <div class=\"icon-addon addon-sm\">      
        <select class=\"form-control input-sm\" name=\"localite\">
         <option placeholder=\"choisir une localité\"></option>
                 ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["localites"]) || array_key_exists("localites", $context) ? $context["localites"] : (function () { throw new Twig_Error_Runtime('Variable "localites" does not exist.', 119, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["localite"]) {
            // line 120
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["localite"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["localite"], "libelleloca", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['localite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "        </select>
        <i class=\"icon icon-search\"></i>
    </div>
    
</div><br>
     <div class=\"form-group\" style=\"margin-top:-20\">
    <div class=\"icon-addon addon-sm\">
        <select class=\"form-control input-sm\" name=\"typebien\">
          <option placeholder=\"choisir un type de bien\"></option>
              ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new Twig_Error_Runtime('Variable "types" does not exist.', 131, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            echo "              
                 <option value=\"";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["type"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["type"], "libelletype", array()), "html", null, true);
            echo " </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
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
   ";
        // line 170
        echo "      ";
        $this->displayBlock('body', $context, $blocks);
        // line 171
        echo "  ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 172
        echo "  ";
        $this->displayBlock('footer', $context, $blocks);
        // line 224
        echo "  </body>

<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
";
        // line 229
        echo "</html>";
        
        $__internal_154537e2f87a0ceb44f8540ddacfc4907f9f4a0f4997a6aea351c054e179757d->leave($__internal_154537e2f87a0ceb44f8540ddacfc4907f9f4a0f4997a6aea351c054e179757d_prof);

        
        $__internal_6e1f402a7305c9fd617aa6fae3bbf29dfb1d7278498b793368c71ce9732c1e19->leave($__internal_6e1f402a7305c9fd617aa6fae3bbf29dfb1d7278498b793368c71ce9732c1e19_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac8546b919b74dacee06577502359baef0c35027573a064814d1561adedf7422 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac8546b919b74dacee06577502359baef0c35027573a064814d1561adedf7422->enter($__internal_ac8546b919b74dacee06577502359baef0c35027573a064814d1561adedf7422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bace43e54fab0194a39ae909e06908176304e0399daf962925bfcb0ce3a57864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bace43e54fab0194a39ae909e06908176304e0399daf962925bfcb0ce3a57864->enter($__internal_bace43e54fab0194a39ae909e06908176304e0399daf962925bfcb0ce3a57864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bace43e54fab0194a39ae909e06908176304e0399daf962925bfcb0ce3a57864->leave($__internal_bace43e54fab0194a39ae909e06908176304e0399daf962925bfcb0ce3a57864_prof);

        
        $__internal_ac8546b919b74dacee06577502359baef0c35027573a064814d1561adedf7422->leave($__internal_ac8546b919b74dacee06577502359baef0c35027573a064814d1561adedf7422_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3fd464243827809ec8e3287697807c92bbf9ca58e1227a16bcc5ddd6178d61d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fd464243827809ec8e3287697807c92bbf9ca58e1227a16bcc5ddd6178d61d2->enter($__internal_3fd464243827809ec8e3287697807c92bbf9ca58e1227a16bcc5ddd6178d61d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d1b5725fb67768ca0d9a4e5217c0f17930e437ef39a14b7bfd27c64f44f7ab3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b5725fb67768ca0d9a4e5217c0f17930e437ef39a14b7bfd27c64f44f7ab3e->enter($__internal_d1b5725fb67768ca0d9a4e5217c0f17930e437ef39a14b7bfd27c64f44f7ab3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d1b5725fb67768ca0d9a4e5217c0f17930e437ef39a14b7bfd27c64f44f7ab3e->leave($__internal_d1b5725fb67768ca0d9a4e5217c0f17930e437ef39a14b7bfd27c64f44f7ab3e_prof);

        
        $__internal_3fd464243827809ec8e3287697807c92bbf9ca58e1227a16bcc5ddd6178d61d2->leave($__internal_3fd464243827809ec8e3287697807c92bbf9ca58e1227a16bcc5ddd6178d61d2_prof);

    }

    // line 34
    public function block_header($context, array $blocks = array())
    {
        $__internal_39ad61fa3bc216b1627c631777627bbb4852b23eba7f83a4d834eb020251f043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39ad61fa3bc216b1627c631777627bbb4852b23eba7f83a4d834eb020251f043->enter($__internal_39ad61fa3bc216b1627c631777627bbb4852b23eba7f83a4d834eb020251f043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_990cb373e336e9e97f721dd73a9327f3882b6fe91626fdb32a95982b8f8d26cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_990cb373e336e9e97f721dd73a9327f3882b6fe91626fdb32a95982b8f8d26cb->enter($__internal_990cb373e336e9e97f721dd73a9327f3882b6fe91626fdb32a95982b8f8d26cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 35
        echo "    ";
        // line 36
        echo "    <nav class=\"navbar navbar-expand-sm bg-dark navbar-dark sticky-top\">
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
         ";
        // line 53
        echo "</nav>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/img1.jpg"), "html", null, true);
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

";
        
        $__internal_990cb373e336e9e97f721dd73a9327f3882b6fe91626fdb32a95982b8f8d26cb->leave($__internal_990cb373e336e9e97f721dd73a9327f3882b6fe91626fdb32a95982b8f8d26cb_prof);

        
        $__internal_39ad61fa3bc216b1627c631777627bbb4852b23eba7f83a4d834eb020251f043->leave($__internal_39ad61fa3bc216b1627c631777627bbb4852b23eba7f83a4d834eb020251f043_prof);

    }

    // line 170
    public function block_body($context, array $blocks = array())
    {
        $__internal_e60cd2c020285e39f08c86815283657f3bf7fe7cf6b13e7b2d15dd64509a4c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e60cd2c020285e39f08c86815283657f3bf7fe7cf6b13e7b2d15dd64509a4c96->enter($__internal_e60cd2c020285e39f08c86815283657f3bf7fe7cf6b13e7b2d15dd64509a4c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b5a41695f1c4faab37390643e121fa1691078423a5e7d188be37c37e1a91e5c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a41695f1c4faab37390643e121fa1691078423a5e7d188be37c37e1a91e5c9->enter($__internal_b5a41695f1c4faab37390643e121fa1691078423a5e7d188be37c37e1a91e5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b5a41695f1c4faab37390643e121fa1691078423a5e7d188be37c37e1a91e5c9->leave($__internal_b5a41695f1c4faab37390643e121fa1691078423a5e7d188be37c37e1a91e5c9_prof);

        
        $__internal_e60cd2c020285e39f08c86815283657f3bf7fe7cf6b13e7b2d15dd64509a4c96->leave($__internal_e60cd2c020285e39f08c86815283657f3bf7fe7cf6b13e7b2d15dd64509a4c96_prof);

    }

    // line 171
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_29939e40bb97735db54900729d957d550cd8823f88b9620cb8268cc3dd425919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29939e40bb97735db54900729d957d550cd8823f88b9620cb8268cc3dd425919->enter($__internal_29939e40bb97735db54900729d957d550cd8823f88b9620cb8268cc3dd425919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4cbe8567840945841ca641f937aa4e3380b0064aa79b573a9992c9277a705767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cbe8567840945841ca641f937aa4e3380b0064aa79b573a9992c9277a705767->enter($__internal_4cbe8567840945841ca641f937aa4e3380b0064aa79b573a9992c9277a705767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4cbe8567840945841ca641f937aa4e3380b0064aa79b573a9992c9277a705767->leave($__internal_4cbe8567840945841ca641f937aa4e3380b0064aa79b573a9992c9277a705767_prof);

        
        $__internal_29939e40bb97735db54900729d957d550cd8823f88b9620cb8268cc3dd425919->leave($__internal_29939e40bb97735db54900729d957d550cd8823f88b9620cb8268cc3dd425919_prof);

    }

    // line 172
    public function block_footer($context, array $blocks = array())
    {
        $__internal_1a9d85adc2f8c17217477d1c38f54f0f1081bcf93db987c34df33c98ff2b9ee4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a9d85adc2f8c17217477d1c38f54f0f1081bcf93db987c34df33c98ff2b9ee4->enter($__internal_1a9d85adc2f8c17217477d1c38f54f0f1081bcf93db987c34df33c98ff2b9ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_99ea2374c7a828ada9cf91eac0678744c960cd734b99cd4b4bf3f066b9b4eacc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99ea2374c7a828ada9cf91eac0678744c960cd734b99cd4b4bf3f066b9b4eacc->enter($__internal_99ea2374c7a828ada9cf91eac0678744c960cd734b99cd4b4bf3f066b9b4eacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 173
        echo "<footer class=\"container-fluid text-center\">
<footer class=\"mg-footer\">
\t\t\t<div class=\"mg-footer-widget\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-3 col-sm-6\">
\t\t\t\t\t\t<div class=\"widget\">
\t\t\t\t\t\t\t\t<h2 class=\"mg-widget-title\">Instagram</h2>
\t\t\t\t\t\t\t\t<ul class=\"mg-instagram\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/1.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/2.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/3.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 185
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
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/logo-orange.png"), "html", null, true);
        echo "\" alt=\"Image\"></div>
\t\t\t\t\t\t</div>  
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
        
        $__internal_99ea2374c7a828ada9cf91eac0678744c960cd734b99cd4b4bf3f066b9b4eacc->leave($__internal_99ea2374c7a828ada9cf91eac0678744c960cd734b99cd4b4bf3f066b9b4eacc_prof);

        
        $__internal_1a9d85adc2f8c17217477d1c38f54f0f1081bcf93db987c34df33c98ff2b9ee4->leave($__internal_1a9d85adc2f8c17217477d1c38f54f0f1081bcf93db987c34df33c98ff2b9ee4_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 194,  392 => 185,  388 => 184,  384 => 183,  380 => 182,  369 => 173,  360 => 172,  343 => 171,  326 => 170,  299 => 82,  291 => 77,  282 => 71,  274 => 66,  259 => 53,  241 => 36,  239 => 35,  230 => 34,  213 => 8,  195 => 7,  185 => 229,  179 => 224,  176 => 172,  173 => 171,  170 => 170,  155 => 134,  145 => 132,  139 => 131,  128 => 122,  117 => 120,  113 => 119,  91 => 99,  89 => 34,  79 => 27,  69 => 20,  65 => 19,  61 => 18,  57 => 17,  45 => 9,  43 => 8,  39 => 7,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>

<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
 <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
       \t\t<script defer src=\"https://use.fontawesome.com/releases/v5.0.6/js/all.js\"></script>
           <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\" type=\"text/css\" />
            <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">
             <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
             <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
       
 
    </head>
   
    <body>
    <div class=\"container\">
  <img src=\"{{asset('image/téléchargement.png')}}\" alt=\"\" /> 
 
</div>



<br/>
  {% block header %}
    {# le menu navbar #}
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
         {# partie recherche #}
</nav>
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
        <img src=\"{{asset('image/img1.jpg')}}\" alt=\"Image\">
      
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

{% endblock %}
 <p>
                        <h1 style=\"font-family:Goudy Old style;\">
                            <center style=\"font-family:Goudy; color:grey\"><i>Vous trouverez les meilleurs produits ICI!</i></center>
                        </h1>
                    </p>
<div class=\"container text-center\">
<nav class=\"navbar navbar-light bg-faded\">
<form method=\"post\">
  <div class=\"form-group\" style=\"margin-left:500px; width:1500px; padding-top:10px;\" >
    <div class=\"input-group input-group-sm icon-addon addon-sm\" >
        <input type=\"text\" placeholder=\"saisissze votre prix\"style=\"text-align:center\" name=\"prix_loc\" class=\"form-control input-sm\">
       
    </div>
</div>
 
<div class=\"form-group \" style=\"width:900px; display:flex; margin-left:500px; \" >
    <div class=\"form-group\">
    <div class=\"icon-addon addon-sm\">      
        <select class=\"form-control input-sm\" name=\"localite\">
         <option placeholder=\"choisir une localité\"></option>
                 {% for localite in localites %}
                    <option value=\"{{ localite.id }}\">{{ localite.libelleloca }}</option>
                    {% endfor %}
        </select>
        <i class=\"icon icon-search\"></i>
    </div>
    
</div><br>
     <div class=\"form-group\" style=\"margin-top:-20\">
    <div class=\"icon-addon addon-sm\">
        <select class=\"form-control input-sm\" name=\"typebien\">
          <option placeholder=\"choisir un type de bien\"></option>
              {% for type in types %}              
                 <option value=\"{{ type.id }}\"> {{type.libelletype}} </option>
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
   {# {% block div %}
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
    {% endblock %} #}
      {% block body %}{% endblock %}
  {% block javascripts %}{% endblock %}
  {% block footer %}
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
{% endblock %}
  </body>

<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
{# <script src=\"{{asset('js/map.js')}}\"></script> #}
</html>", "::layout.html.twig", "/var/www/html/Agence_immobilier/Immobilier/app/Resources/views/layout.html.twig");
    }
}

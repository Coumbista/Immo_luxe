<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_59d0bf3fd00ae185636ea10ffae63cfc8aa1c58a8e829e7daafb66ea11ae57a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'footer' => array($this, 'block_footer'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c0cd72202d73f15489ad0b9e2cf00a99c6a9efb48aff76f1662075330522f90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c0cd72202d73f15489ad0b9e2cf00a99c6a9efb48aff76f1662075330522f90->enter($__internal_7c0cd72202d73f15489ad0b9e2cf00a99c6a9efb48aff76f1662075330522f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_d4f71408b960289b9857e4af3bc889b64ae00bfa5bd64bbef722b67db9325ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f71408b960289b9857e4af3bc889b64ae00bfa5bd64bbef722b67db9325ef3->enter($__internal_d4f71408b960289b9857e4af3bc889b64ae00bfa5bd64bbef722b67db9325ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
";
        // line 7
        $this->displayBlock('header', $context, $blocks);
        // line 120
        echo "
  
      ";
        // line 122
        $this->displayBlock('body', $context, $blocks);
        // line 123
        echo "  ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 124
        echo "  ";
        $this->displayBlock('footer', $context, $blocks);
        // line 176
        echo "  </body>

<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\"></script>
<script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=false\"></script>
        <div>
            ";
        // line 181
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 182
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 182, $this->getSourceContext()); })()), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 183
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 184
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 187
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 189
        echo "        </div>

        ";
        // line 191
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 191, $this->getSourceContext()); })()), "request", array()), "hasPreviousSession", array())) {
            // line 192
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 192, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 193
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 194
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 195
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 198
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            echo "        ";
        }
        // line 200
        echo "
        <div>
            ";
        // line 202
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 204
        echo "        </div>

    </body>
</html>
";
        
        $__internal_7c0cd72202d73f15489ad0b9e2cf00a99c6a9efb48aff76f1662075330522f90->leave($__internal_7c0cd72202d73f15489ad0b9e2cf00a99c6a9efb48aff76f1662075330522f90_prof);

        
        $__internal_d4f71408b960289b9857e4af3bc889b64ae00bfa5bd64bbef722b67db9325ef3->leave($__internal_d4f71408b960289b9857e4af3bc889b64ae00bfa5bd64bbef722b67db9325ef3_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_6850c89e42b003e60a4353ba24b3a8c1f128763102d7e6fd552f41406e4b9ab1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6850c89e42b003e60a4353ba24b3a8c1f128763102d7e6fd552f41406e4b9ab1->enter($__internal_6850c89e42b003e60a4353ba24b3a8c1f128763102d7e6fd552f41406e4b9ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_58740e49f2862d0b377e7aa5e66bc3c4d225549b3859f311419585b1be013c13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58740e49f2862d0b377e7aa5e66bc3c4d225549b3859f311419585b1be013c13->enter($__internal_58740e49f2862d0b377e7aa5e66bc3c4d225549b3859f311419585b1be013c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "    ";
        // line 9
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
        // line 26
        echo "</nav>
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
                 ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["localites"]) || array_key_exists("localites", $context) ? $context["localites"] : (function () { throw new Twig_Error_Runtime('Variable "localites" does not exist.', 47, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["localite"]) {
            // line 48
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
        // line 50
        echo "        </select>
        <i class=\"icon icon-search\"></i>
    </div>
    
</div><br>
     <div class=\"form-group\" style=\"margin-top:-20\">
    <div class=\"icon-addon addon-sm\">
        <select class=\"form-control input-sm\" name=\"typebien\">
          <option placeholder=\"choisir un type de bien\"></option>
              ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new Twig_Error_Runtime('Variable "types" does not exist.', 59, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            echo "              
                 <option value=\"";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["type"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["type"], "libelletype", array()), "html", null, true);
            echo " </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
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
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/img.jpg"), "html", null, true);
        echo "\" alt=\"Image\">

      </div>

      <div class=\"item\">
        <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/Senegalnew.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
        
        
      </div>

      <div class=\"item\">
        <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/img1.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
      
      </div>

      <div class=\"item\">
        <img src=\"";
        // line 103
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
        
        $__internal_58740e49f2862d0b377e7aa5e66bc3c4d225549b3859f311419585b1be013c13->leave($__internal_58740e49f2862d0b377e7aa5e66bc3c4d225549b3859f311419585b1be013c13_prof);

        
        $__internal_6850c89e42b003e60a4353ba24b3a8c1f128763102d7e6fd552f41406e4b9ab1->leave($__internal_6850c89e42b003e60a4353ba24b3a8c1f128763102d7e6fd552f41406e4b9ab1_prof);

    }

    // line 122
    public function block_body($context, array $blocks = array())
    {
        $__internal_f287f46ca5146c21e4265cdb186ef46285f354bfaa90511b4a42390c6f5738dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f287f46ca5146c21e4265cdb186ef46285f354bfaa90511b4a42390c6f5738dd->enter($__internal_f287f46ca5146c21e4265cdb186ef46285f354bfaa90511b4a42390c6f5738dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef7de25e1378ac0f804bb101faeabe340a2a0c1c2830f75bdb38d8839a288749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef7de25e1378ac0f804bb101faeabe340a2a0c1c2830f75bdb38d8839a288749->enter($__internal_ef7de25e1378ac0f804bb101faeabe340a2a0c1c2830f75bdb38d8839a288749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ef7de25e1378ac0f804bb101faeabe340a2a0c1c2830f75bdb38d8839a288749->leave($__internal_ef7de25e1378ac0f804bb101faeabe340a2a0c1c2830f75bdb38d8839a288749_prof);

        
        $__internal_f287f46ca5146c21e4265cdb186ef46285f354bfaa90511b4a42390c6f5738dd->leave($__internal_f287f46ca5146c21e4265cdb186ef46285f354bfaa90511b4a42390c6f5738dd_prof);

    }

    // line 123
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dc6522d8cf45037ff3331facb751205981df13ab3891e41ebac2469669dec85d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc6522d8cf45037ff3331facb751205981df13ab3891e41ebac2469669dec85d->enter($__internal_dc6522d8cf45037ff3331facb751205981df13ab3891e41ebac2469669dec85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4535ca96b78e7c36291e4617a1178d57eabf748df00bb98e0e9eb8451553185b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4535ca96b78e7c36291e4617a1178d57eabf748df00bb98e0e9eb8451553185b->enter($__internal_4535ca96b78e7c36291e4617a1178d57eabf748df00bb98e0e9eb8451553185b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4535ca96b78e7c36291e4617a1178d57eabf748df00bb98e0e9eb8451553185b->leave($__internal_4535ca96b78e7c36291e4617a1178d57eabf748df00bb98e0e9eb8451553185b_prof);

        
        $__internal_dc6522d8cf45037ff3331facb751205981df13ab3891e41ebac2469669dec85d->leave($__internal_dc6522d8cf45037ff3331facb751205981df13ab3891e41ebac2469669dec85d_prof);

    }

    // line 124
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c6d700a315a5ecbce3e946611f8121dec77837d8a9e42e7239ca99149b10ab2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6d700a315a5ecbce3e946611f8121dec77837d8a9e42e7239ca99149b10ab2e->enter($__internal_c6d700a315a5ecbce3e946611f8121dec77837d8a9e42e7239ca99149b10ab2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_64672139f27169658a1b87f78bff2ced0005adc431e076ac128e78a91b4dcbae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64672139f27169658a1b87f78bff2ced0005adc431e076ac128e78a91b4dcbae->enter($__internal_64672139f27169658a1b87f78bff2ced0005adc431e076ac128e78a91b4dcbae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 125
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
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/1.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/2.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/3.png"), "html", null, true);
        echo "\" alt=\"\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"";
        // line 137
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
        // line 146
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
        
        $__internal_64672139f27169658a1b87f78bff2ced0005adc431e076ac128e78a91b4dcbae->leave($__internal_64672139f27169658a1b87f78bff2ced0005adc431e076ac128e78a91b4dcbae_prof);

        
        $__internal_c6d700a315a5ecbce3e946611f8121dec77837d8a9e42e7239ca99149b10ab2e->leave($__internal_c6d700a315a5ecbce3e946611f8121dec77837d8a9e42e7239ca99149b10ab2e_prof);

    }

    // line 202
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_89410275351b5df16f581b2413ba61b7f766eb10d301510580279312b72ed35a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89410275351b5df16f581b2413ba61b7f766eb10d301510580279312b72ed35a->enter($__internal_89410275351b5df16f581b2413ba61b7f766eb10d301510580279312b72ed35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_886bd9776064a816d1087481da4af35930e4a9f28be70507479e8499fe5f4c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_886bd9776064a816d1087481da4af35930e4a9f28be70507479e8499fe5f4c3f->enter($__internal_886bd9776064a816d1087481da4af35930e4a9f28be70507479e8499fe5f4c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 203
        echo "            ";
        
        $__internal_886bd9776064a816d1087481da4af35930e4a9f28be70507479e8499fe5f4c3f->leave($__internal_886bd9776064a816d1087481da4af35930e4a9f28be70507479e8499fe5f4c3f_prof);

        
        $__internal_89410275351b5df16f581b2413ba61b7f766eb10d301510580279312b72ed35a->leave($__internal_89410275351b5df16f581b2413ba61b7f766eb10d301510580279312b72ed35a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  443 => 203,  434 => 202,  394 => 146,  382 => 137,  378 => 136,  374 => 135,  370 => 134,  359 => 125,  350 => 124,  333 => 123,  316 => 122,  289 => 103,  281 => 98,  272 => 92,  264 => 87,  237 => 62,  227 => 60,  221 => 59,  210 => 50,  199 => 48,  195 => 47,  172 => 26,  154 => 9,  152 => 8,  143 => 7,  129 => 204,  127 => 202,  123 => 200,  120 => 199,  114 => 198,  105 => 195,  100 => 194,  95 => 193,  90 => 192,  88 => 191,  84 => 189,  76 => 187,  70 => 184,  66 => 183,  61 => 182,  59 => 181,  52 => 176,  49 => 124,  46 => 123,  44 => 122,  40 => 120,  38 => 7,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
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
        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>

    </body>
</html>
", "@FOSUser/layout.html.twig", "/var/www/html/Agence_immobilier/Immobilier/vendor/friendsofsymfony/user-bundle/Resources/views/layout.html.twig");
    }
}

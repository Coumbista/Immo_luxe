<?php

/* GSTImmobilierBundle:Front:search_bien.html.twig */
class __TwigTemplate_7e46ba793c32fb3799da40a5367787d30d8c10caaaff00aa5e4f55cdaea5c04f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "GSTImmobilierBundle:Front:search_bien.html.twig", 1);
        $this->blocks = array(
            'contact' => array($this, 'block_contact'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_158ca1f1e5836611f4e5716a0f9069ec0fe9b69579a45b058e52874aef0ead93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_158ca1f1e5836611f4e5716a0f9069ec0fe9b69579a45b058e52874aef0ead93->enter($__internal_158ca1f1e5836611f4e5716a0f9069ec0fe9b69579a45b058e52874aef0ead93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Front:search_bien.html.twig"));

        $__internal_f6809efc0f0bed6ac0c5f8dad68e65adadb283a5e8a09c4df81770c88f20989d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6809efc0f0bed6ac0c5f8dad68e65adadb283a5e8a09c4df81770c88f20989d->enter($__internal_f6809efc0f0bed6ac0c5f8dad68e65adadb283a5e8a09c4df81770c88f20989d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Front:search_bien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_158ca1f1e5836611f4e5716a0f9069ec0fe9b69579a45b058e52874aef0ead93->leave($__internal_158ca1f1e5836611f4e5716a0f9069ec0fe9b69579a45b058e52874aef0ead93_prof);

        
        $__internal_f6809efc0f0bed6ac0c5f8dad68e65adadb283a5e8a09c4df81770c88f20989d->leave($__internal_f6809efc0f0bed6ac0c5f8dad68e65adadb283a5e8a09c4df81770c88f20989d_prof);

    }

    // line 5
    public function block_contact($context, array $blocks = array())
    {
        $__internal_93606176a3af14b834b1f39606bec437ac3b31deac1eb3cc8c45bc4ca1bb9835 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93606176a3af14b834b1f39606bec437ac3b31deac1eb3cc8c45bc4ca1bb9835->enter($__internal_93606176a3af14b834b1f39606bec437ac3b31deac1eb3cc8c45bc4ca1bb9835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        $__internal_35e7b72263f8c685e8ab413424c2166b9446606cafce2501f8962b3ac59ec53a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35e7b72263f8c685e8ab413424c2166b9446606cafce2501f8962b3ac59ec53a->enter($__internal_35e7b72263f8c685e8ab413424c2166b9446606cafce2501f8962b3ac59ec53a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        // line 6
        echo "<style>
.rower{
    display:flex;
    flex-direction:row;
}
li{
    list-style:none;
    font-size:12px;
}
</style>
 ";
        // line 63
        echo "<div class=\"container text-center\">
        <h3><em style=\"font-size:32px;\">Y'a que du Luxe</em></h3><br>
        <div class=\"row rower\">
            <div class=\"col-sm-3\">
                <div class=\"well\">
               <h3> conctact</h3>
    
                <h5>immobilier de luxe</h5>
                <h5>rue berenger Dakar CTIC</h5>
                <h5>tel:781547863</h5>
                <h5>email: immobilierdeluxe@gmail.com</h5>
            </div>
                </div>
          


  <div class=\"col-sm-9 \" >
    <ul style=\"display: flex;\">
        ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new Twig_Error_Runtime('Variable "biens" does not exist.', 81, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 82
            echo "            <div class=\"card text-white \">
              <img class=\"card-img-top\" src=\"\" alt=\"\">
              <div class=\"card-body\">
              
            <li>
                <ul>
                  <!-- Indicators -->
    <ol class=\"carousel-indicators\">
      <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
    </ol>
  
 <div class=\"carousel-inner\" role=\"listbox\">
      <div class=\"item active\">
        <img src=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" alt=\"Image\">

      </div>
        ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new Twig_Error_Runtime('Variable "biens" does not exist.', 101, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
                // line 102
                echo "       <div class=\"carousel-inner\" role=\"listbox\">
      <div class=\"item \">
        <img src=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
                echo "\" alt=\"Image\">
      </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "      
</div>

                    <li> <b>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "typebien", array()), "libelletype", array()), "html", null, true);
            echo "</b><b style=\"margin-left:20px;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "prix_loc", array()), "html", null, true);
            echo "</b></li>
                    <li> ";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "description", array()), "html", null, true);
            echo "  </li>
                    <li> <b>";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "localite", array()), "libelleloca", array()), "html", null, true);
            echo " </b></li>
                    </ul>
                    </li> 
                    <a href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserverBien", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary col-12\"style=\"margin-left:150px;\">reserver</a>
          
            </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "        </ul>
    </div><br>
    ";
        
        $__internal_35e7b72263f8c685e8ab413424c2166b9446606cafce2501f8962b3ac59ec53a->leave($__internal_35e7b72263f8c685e8ab413424c2166b9446606cafce2501f8962b3ac59ec53a_prof);

        
        $__internal_93606176a3af14b834b1f39606bec437ac3b31deac1eb3cc8c45bc4ca1bb9835->leave($__internal_93606176a3af14b834b1f39606bec437ac3b31deac1eb3cc8c45bc4ca1bb9835_prof);

    }

    public function getTemplateName()
    {
        return "GSTImmobilierBundle:Front:search_bien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 120,  149 => 115,  143 => 112,  139 => 111,  133 => 110,  128 => 107,  118 => 104,  114 => 102,  110 => 101,  103 => 98,  85 => 82,  81 => 81,  61 => 63,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}



{% block contact %}
<style>
.rower{
    display:flex;
    flex-direction:row;
}
li{
    list-style:none;
    font-size:12px;
}
</style>
 {# {% block content %}
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
        <img src=\"{{ asset('image/')}}{{ bien.images[0].image }}\" alt=\"Image\">

      </div>

      <div class=\"item\">
        <img src=\"{{asset('image/Senegalnew.jpg')}}\" alt=\"Image\">
        
        
      </div>

      <div class=\"item\">
        <img src=\"{{asset('image/tof.JPG')}}\" alt=\"Image\">
      
      </div>

      <div class=\"item\">
        <img src=\"{{asset('image/img1.jpg')}}\" alt=\"Image\">
      
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
  #}
<div class=\"container text-center\">
        <h3><em style=\"font-size:32px;\">Y'a que du Luxe</em></h3><br>
        <div class=\"row rower\">
            <div class=\"col-sm-3\">
                <div class=\"well\">
               <h3> conctact</h3>
    
                <h5>immobilier de luxe</h5>
                <h5>rue berenger Dakar CTIC</h5>
                <h5>tel:781547863</h5>
                <h5>email: immobilierdeluxe@gmail.com</h5>
            </div>
                </div>
          


  <div class=\"col-sm-9 \" >
    <ul style=\"display: flex;\">
        {% for bien in biens %}
            <div class=\"card text-white \">
              <img class=\"card-img-top\" src=\"\" alt=\"\">
              <div class=\"card-body\">
              
            <li>
                <ul>
                  <!-- Indicators -->
    <ol class=\"carousel-indicators\">
      <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
      <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
    </ol>
  
 <div class=\"carousel-inner\" role=\"listbox\">
      <div class=\"item active\">
        <img src=\"{{ asset('image/')}}{{ bien.images[0].image }}\" alt=\"Image\">

      </div>
        {% for bien in biens %}
       <div class=\"carousel-inner\" role=\"listbox\">
      <div class=\"item \">
        <img src=\"{{ asset('image/')}}{{ bien.images[0].image }}\" alt=\"Image\">
      </div>
      {% endfor %}
      
</div>

                    <li> <b>{{ bien.typebien.libelletype}}</b><b style=\"margin-left:20px;\">{{ bien.prix_loc }}</b></li>
                    <li> {{ bien.description }}  </li>
                    <li> <b>{{ bien.localite.libelleloca }} </b></li>
                    </ul>
                    </li> 
                    <a href=\"{{path('reserverBien', {'id':bien.id})}}\" class=\"btn btn-primary col-12\"style=\"margin-left:150px;\">reserver</a>
          
            </div>
            </div>
        {% endfor %}
        </ul>
    </div><br>
    {% endblock %}
                               
                             
           
                
{#          
          </div>
      </div>
 </div>
      {% endblock %}
      <div class=\"col-lg-12\">
        <ul style=\"display: flex;\">
        {% for bien in biens %}
            <div class=\"card text-white bg-primary\">
              <img class=\"card-img-top\" src=\"\" alt=\"\">
              <div class=\"card-body\">
              
            <li>
                <ul>
                    {% for image in bien.images %}
                        <li>
                        <img src=\"{{asset('assets/img/photo/'~image.image)}}\"class=\"img\">
                        </li>
                    {% endfor %}
                    <li>{{bien.typebien}}</li>
                    <li>{{bien.nombien}}</li>
                    <li>{{bien.prixlocation }}</li>
                </ul>
                <a href=\"{{path('reserver', {'id':bien.id})}}\"><button><span class=\"violet\">RESERVER</span></button></a>
            </li>
            </div>
            </div>
        {% endfor %}
        </ul>
    </div> #}
 

                                          
                                    {# {{ bien.nombien }}   #}
                                   
                                                               
               
                                         
                     
                               
                    
          

", "GSTImmobilierBundle:Front:search_bien.html.twig", "/var/www/html/Agence_immobilier/Immobilier/src/GST/ImmobilierBundle/Resources/views/Front/search_bien.html.twig");
    }
}

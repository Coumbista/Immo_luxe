<?php

/* GSTImmobilierBundle:Front:search_bien.html.twig */
class __TwigTemplate_592e8f0365acf9dcf76d017803c5a5eb0d7b9a514191d5c871b2c12b27c662a8 extends Twig_Template
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
        $__internal_dd0ecaf731249373fc2fb18120a4c2b6401d39eb6e0266e9647636d7bdfb0d27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd0ecaf731249373fc2fb18120a4c2b6401d39eb6e0266e9647636d7bdfb0d27->enter($__internal_dd0ecaf731249373fc2fb18120a4c2b6401d39eb6e0266e9647636d7bdfb0d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Front:search_bien.html.twig"));

        $__internal_182cd9d5adcfa324e7751010109c9043cff1987e3027b7912c29209634b2a792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_182cd9d5adcfa324e7751010109c9043cff1987e3027b7912c29209634b2a792->enter($__internal_182cd9d5adcfa324e7751010109c9043cff1987e3027b7912c29209634b2a792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Front:search_bien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd0ecaf731249373fc2fb18120a4c2b6401d39eb6e0266e9647636d7bdfb0d27->leave($__internal_dd0ecaf731249373fc2fb18120a4c2b6401d39eb6e0266e9647636d7bdfb0d27_prof);

        
        $__internal_182cd9d5adcfa324e7751010109c9043cff1987e3027b7912c29209634b2a792->leave($__internal_182cd9d5adcfa324e7751010109c9043cff1987e3027b7912c29209634b2a792_prof);

    }

    // line 5
    public function block_contact($context, array $blocks = array())
    {
        $__internal_0ec00d8b35515356deffc8f77385054e9a28b017c533a39e1d4daedd97a1c4c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ec00d8b35515356deffc8f77385054e9a28b017c533a39e1d4daedd97a1c4c5->enter($__internal_0ec00d8b35515356deffc8f77385054e9a28b017c533a39e1d4daedd97a1c4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

        $__internal_b0d161bae876de0f790e393390e6e526172d5d24bf81745ee1e0bd18b206f2e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d161bae876de0f790e393390e6e526172d5d24bf81745ee1e0bd18b206f2e8->enter($__internal_b0d161bae876de0f790e393390e6e526172d5d24bf81745ee1e0bd18b206f2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contact"));

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
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new Twig_Error_Runtime('Variable "biens" does not exist.', 34, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 35
            echo "            <div class=\"card text-white \">
              <img class=\"card-img-top\" src=\"\" alt=\"\">
              <div class=\"card-body\">
              
            <li>
                <ul>
 <img  src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" alt=\"\" style=\"width:200px;\">
                    <li> <b>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "typebien", array()), "libelletype", array()), "html", null, true);
            echo "</b><b style=\"margin-left:20px;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "prix_loc", array()), "html", null, true);
            echo "</b></li>
                    <li> ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "description", array()), "html", null, true);
            echo "  </li>
                    <li> <b>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "localite", array()), "libelleloca", array()), "html", null, true);
            echo " </b></li>
                    </ul>
                    </li> 
                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserverBien", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary col-12\"style=\"margin-left:150px;\">reserver</a>
          
            </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </ul>
    </div><br>
    ";
        
        $__internal_b0d161bae876de0f790e393390e6e526172d5d24bf81745ee1e0bd18b206f2e8->leave($__internal_b0d161bae876de0f790e393390e6e526172d5d24bf81745ee1e0bd18b206f2e8_prof);

        
        $__internal_0ec00d8b35515356deffc8f77385054e9a28b017c533a39e1d4daedd97a1c4c5->leave($__internal_0ec00d8b35515356deffc8f77385054e9a28b017c533a39e1d4daedd97a1c4c5_prof);

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
        return array (  123 => 52,  112 => 47,  106 => 44,  102 => 43,  96 => 42,  91 => 41,  83 => 35,  79 => 34,  49 => 6,  40 => 5,  11 => 1,);
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
 <img  src=\"{{ asset('image/')}}{{ bien.images[0].image }}\" alt=\"\" style=\"width:200px;\">
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

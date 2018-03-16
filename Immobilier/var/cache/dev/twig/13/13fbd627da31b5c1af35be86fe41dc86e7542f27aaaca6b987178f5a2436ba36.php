<?php

/* GSTImmobilierBundle:Front:search_bien.html.twig */
class __TwigTemplate_bbb550fa999b369f4bff32060ff9cad62b17ae4d695dfb62025b3a188cb5b815 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::reservation.html.twig", "GSTImmobilierBundle:Front:search_bien.html.twig", 1);
        $this->blocks = array(
            'photo' => array($this, 'block_photo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::reservation.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c8872a305f7b3ac7004daf4138d33c2aa205667c58872c61d65c10913c1c632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c8872a305f7b3ac7004daf4138d33c2aa205667c58872c61d65c10913c1c632->enter($__internal_3c8872a305f7b3ac7004daf4138d33c2aa205667c58872c61d65c10913c1c632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Front:search_bien.html.twig"));

        $__internal_36aa3d6ffbb62ba516101d64c483ba722c81614f9f3c8fc53315dc0ff66e322a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36aa3d6ffbb62ba516101d64c483ba722c81614f9f3c8fc53315dc0ff66e322a->enter($__internal_36aa3d6ffbb62ba516101d64c483ba722c81614f9f3c8fc53315dc0ff66e322a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Front:search_bien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c8872a305f7b3ac7004daf4138d33c2aa205667c58872c61d65c10913c1c632->leave($__internal_3c8872a305f7b3ac7004daf4138d33c2aa205667c58872c61d65c10913c1c632_prof);

        
        $__internal_36aa3d6ffbb62ba516101d64c483ba722c81614f9f3c8fc53315dc0ff66e322a->leave($__internal_36aa3d6ffbb62ba516101d64c483ba722c81614f9f3c8fc53315dc0ff66e322a_prof);

    }

    // line 5
    public function block_photo($context, array $blocks = array())
    {
        $__internal_4b66fc3d67c0a96078651c667f8d12266e84d79939e5340c1ff0290f29571c55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b66fc3d67c0a96078651c667f8d12266e84d79939e5340c1ff0290f29571c55->enter($__internal_4b66fc3d67c0a96078651c667f8d12266e84d79939e5340c1ff0290f29571c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "photo"));

        $__internal_7f6c0c7f545a7d6a83ff40889dcc9ddb8bedbae83b039f71a119ed90a884d41e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f6c0c7f545a7d6a83ff40889dcc9ddb8bedbae83b039f71a119ed90a884d41e->enter($__internal_7f6c0c7f545a7d6a83ff40889dcc9ddb8bedbae83b039f71a119ed90a884d41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "photo"));

        // line 6
        echo "

        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new Twig_Error_Runtime('Variable "biens" does not exist.', 8, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 9
            echo "     
           <div class=\"col-lg-4 col-md-4 col-sm-6\">
\t\t\t\t\t<a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" class=\"fh5co-card-item image-popup\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<div class=\"overlay\"><i class=\"ti-plus\"></i></div>
\t\t\t\t\t\t\t<img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" alt=\"Image\" class=\"img-responsive\">
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"fh5co-text\">
\t\t\t\t\t\t\t<h2>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "typebien", array()), "libelletype", array()), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t<p>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "prix_loc", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "localite", array()), "libelleloca", array()), "html", null, true);
            echo "..</p>
\t\t\t\t\t\t\t<p><a  href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reserverBien", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["bien"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">Détail</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>     

             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "      


    ";
        
        $__internal_7f6c0c7f545a7d6a83ff40889dcc9ddb8bedbae83b039f71a119ed90a884d41e->leave($__internal_7f6c0c7f545a7d6a83ff40889dcc9ddb8bedbae83b039f71a119ed90a884d41e_prof);

        
        $__internal_4b66fc3d67c0a96078651c667f8d12266e84d79939e5340c1ff0290f29571c55->leave($__internal_4b66fc3d67c0a96078651c667f8d12266e84d79939e5340c1ff0290f29571c55_prof);

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
        return array (  97 => 25,  85 => 19,  79 => 18,  75 => 17,  68 => 14,  61 => 11,  57 => 9,  53 => 8,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::reservation.html.twig\" %}



{% block photo %}


        {% for bien in biens %}
     
           <div class=\"col-lg-4 col-md-4 col-sm-6\">
\t\t\t\t\t<a href=\"{{ asset('image/')}}{{ bien.images[0].image }}\" class=\"fh5co-card-item image-popup\">
\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t<div class=\"overlay\"><i class=\"ti-plus\"></i></div>
\t\t\t\t\t\t\t<img src=\"{{ asset('image/')}}{{ bien.images[0].image }}\" alt=\"Image\" class=\"img-responsive\">
\t\t\t\t\t\t</figure>
\t\t\t\t\t\t<div class=\"fh5co-text\">
\t\t\t\t\t\t\t<h2>{{ bien.typebien.libelletype}}</h2>
\t\t\t\t\t\t\t<p>{{ bien.prix_loc }}, {{ bien.localite.libelleloca }}..</p>
\t\t\t\t\t\t\t<p><a  href=\"{{path('reserverBien', {'id':bien.id})}}\" class=\"btn btn-primary\">Détail</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</a>
\t\t\t\t</div>     

             {% endfor %}
      


    {% endblock %}
                               
                             
           


                                          
                                   
                                                               
               
                                         
                     
                               
                    
          

", "GSTImmobilierBundle:Front:search_bien.html.twig", "/var/www/html/Agence_immobilier/Immobilier/src/GST/ImmobilierBundle/Resources/views/Front/search_bien.html.twig");
    }
}

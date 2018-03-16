<?php

/* GSTImmobilierBundle:Admin:listbienpro.html.twig */
class __TwigTemplate_4306d337ea07b84b093e260da774b005fefd03c3de0bc9740bf532d68ce1a060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::back.html.twig", "GSTImmobilierBundle:Admin:listbienpro.html.twig", 1);
        $this->blocks = array(
            'recharge' => array($this, 'block_recharge'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55f66d31a4f233a4c3ad23bb92e76429dafd47c559af185d7c4bd936b1d93bcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55f66d31a4f233a4c3ad23bb92e76429dafd47c559af185d7c4bd936b1d93bcf->enter($__internal_55f66d31a4f233a4c3ad23bb92e76429dafd47c559af185d7c4bd936b1d93bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Admin:listbienpro.html.twig"));

        $__internal_63d4ae501361f596585b7eaa30b02f5f6fbcdcdd292486abb5ebaf2ab0eed1e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d4ae501361f596585b7eaa30b02f5f6fbcdcdd292486abb5ebaf2ab0eed1e3->enter($__internal_63d4ae501361f596585b7eaa30b02f5f6fbcdcdd292486abb5ebaf2ab0eed1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Admin:listbienpro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55f66d31a4f233a4c3ad23bb92e76429dafd47c559af185d7c4bd936b1d93bcf->leave($__internal_55f66d31a4f233a4c3ad23bb92e76429dafd47c559af185d7c4bd936b1d93bcf_prof);

        
        $__internal_63d4ae501361f596585b7eaa30b02f5f6fbcdcdd292486abb5ebaf2ab0eed1e3->leave($__internal_63d4ae501361f596585b7eaa30b02f5f6fbcdcdd292486abb5ebaf2ab0eed1e3_prof);

    }

    // line 2
    public function block_recharge($context, array $blocks = array())
    {
        $__internal_e295482c6d132424da62c05c63dfbaf2a041d6bbf1b0b850724f8a130065bf25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e295482c6d132424da62c05c63dfbaf2a041d6bbf1b0b850724f8a130065bf25->enter($__internal_e295482c6d132424da62c05c63dfbaf2a041d6bbf1b0b850724f8a130065bf25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recharge"));

        $__internal_4adc7c9b0537a20e15a56c845ac55466819dcfc3047fbeba3c932b6ecdc159f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4adc7c9b0537a20e15a56c845ac55466819dcfc3047fbeba3c932b6ecdc159f3->enter($__internal_4adc7c9b0537a20e15a56c845ac55466819dcfc3047fbeba3c932b6ecdc159f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recharge"));

        // line 3
        echo "<table class=\"table\" id=\"myTable\" >
  <thead>
    <tr>
      <th>Nom du bien</th>
      <th>Description</th>
        <th>Image</th>
       ";
        // line 16
        echo "    </tr>
  </thead>
 ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bienpros"]) || array_key_exists("bienpros", $context) ? $context["bienpros"] : (function () { throw new Twig_Error_Runtime('Variable "bienpros" does not exist.', 18, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bienpro"]) {
            // line 19
            echo " <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bienpro"], "nom", array()), "html", null, true);
            echo "</td>
  <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bienpro"], "montantvoulu", array()), "html", null, true);
            echo "</td>
 <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["bienpro"], "description", array()), "html", null, true);
            echo "</td>
<td> <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["bienpro"], "imagepros", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" alt=\"Image\" class=\"img-responsive\"></td>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bienpro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo " </table>
 ";
        
        $__internal_4adc7c9b0537a20e15a56c845ac55466819dcfc3047fbeba3c932b6ecdc159f3->leave($__internal_4adc7c9b0537a20e15a56c845ac55466819dcfc3047fbeba3c932b6ecdc159f3_prof);

        
        $__internal_e295482c6d132424da62c05c63dfbaf2a041d6bbf1b0b850724f8a130065bf25->leave($__internal_e295482c6d132424da62c05c63dfbaf2a041d6bbf1b0b850724f8a130065bf25_prof);

    }

    public function getTemplateName()
    {
        return "GSTImmobilierBundle:Admin:listbienpro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 24,  78 => 22,  74 => 21,  70 => 20,  65 => 19,  61 => 18,  57 => 16,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::back.html.twig\" %}
{% block recharge %}
<table class=\"table\" id=\"myTable\" >
  <thead>
    <tr>
      <th>Nom du bien</th>
      <th>Description</th>
        <th>Image</th>
       {# <th>Localite du Bien</th>
         <th>Type du bien</th>
          <th>Prix location</th>
           <th>Image</th>              
          <th>Opération</th>
           <th>Etat</th> 
       #}
    </tr>
  </thead>
 {% for bienpro in bienpros %}
 <td>{{ bienpro.nom}}</td>
  <td>{{bienpro.montantvoulu}}</td>
 <td>{{bienpro.description}}</td>
<td> <img src=\"{{ asset('image/')}}{{ (bienpro.imagepros[0].image )}}\" alt=\"Image\" class=\"img-responsive\"></td>
 {% endfor %}
 </table>
 {% endblock %}
                           
{# <div class=\"col-lg-1\">
                                            <button id=\"addType\" type=\"button\" class=\"btn btn-custom btn-primary waves-effect waves-light\"><i class=\"fa fa-plus\"></i></button>
                                        </div> #}
", "GSTImmobilierBundle:Admin:listbienpro.html.twig", "/var/www/html/Agence_immobilier/Immobilier/src/GST/ImmobilierBundle/Resources/views/Admin/listbienpro.html.twig");
    }
}

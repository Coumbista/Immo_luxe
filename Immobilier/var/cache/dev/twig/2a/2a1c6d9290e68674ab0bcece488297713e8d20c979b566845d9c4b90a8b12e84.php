<?php

/* GSTImmobilierBundle:Admin:listereserve.html.twig */
class __TwigTemplate_c4fd2a49764147620731d91f1af3b14dff289e8da3ffa32c51f5591a1cf75520 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GSTImmobilierBundle:Admin:listereserve.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_044ab88db931a41bfb0bfc517617de23aa49e1eabf907bff4eb271be9ddaa1a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_044ab88db931a41bfb0bfc517617de23aa49e1eabf907bff4eb271be9ddaa1a8->enter($__internal_044ab88db931a41bfb0bfc517617de23aa49e1eabf907bff4eb271be9ddaa1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Admin:listereserve.html.twig"));

        $__internal_c9199883f761034043fe4c8c596f145793f71d3441489ef3ccd02639a7159022 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9199883f761034043fe4c8c596f145793f71d3441489ef3ccd02639a7159022->enter($__internal_c9199883f761034043fe4c8c596f145793f71d3441489ef3ccd02639a7159022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Admin:listereserve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_044ab88db931a41bfb0bfc517617de23aa49e1eabf907bff4eb271be9ddaa1a8->leave($__internal_044ab88db931a41bfb0bfc517617de23aa49e1eabf907bff4eb271be9ddaa1a8_prof);

        
        $__internal_c9199883f761034043fe4c8c596f145793f71d3441489ef3ccd02639a7159022->leave($__internal_c9199883f761034043fe4c8c596f145793f71d3441489ef3ccd02639a7159022_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6e4aa69ad96c756a3b904a3632dd0ef319b66540081c260aa403e9bb4f56a47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6e4aa69ad96c756a3b904a3632dd0ef319b66540081c260aa403e9bb4f56a47->enter($__internal_a6e4aa69ad96c756a3b904a3632dd0ef319b66540081c260aa403e9bb4f56a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e08a573f1a8378beb18085f0e3da542ad04f15f14dc0953a8bc9d933d39ce932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e08a573f1a8378beb18085f0e3da542ad04f15f14dc0953a8bc9d933d39ce932->enter($__internal_e08a573f1a8378beb18085f0e3da542ad04f15f14dc0953a8bc9d933d39ce932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"jumbotron text-center\">
  <h1>Immobilier De Luxe</h1>
  <p>Réservation en cour!</p> 
</div>
  
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-lg-5\">
       </div>
       </div>
 <div class=\"row\">
<div class=\"col-lg-12\" id=\"contenu\">
<table class=\"table\" id=\"myTable\" >
  <thead>
    <tr>
      <th>Nom Client</th>
      <th>Adresse du client</th>
       <th>Bien</th>
        <th>Localite du Bien</th>
         <th>Type du bien</th>
          <th>Prix location</th>
           <th>Image</th>
       
          <th>Opération</th>
      
    </tr>
  </thead>
  ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reserves"]) || array_key_exists("reserves", $context) ? $context["reserves"] : (function () { throw new Twig_Error_Runtime('Variable "reserves" does not exist.', 30, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 31
            echo "<tr>
<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "client", array()), "nomclient", array()), "html", null, true);
            echo "</td>
<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "client", array()), "adresseclient", array()), "html", null, true);
            echo "</td>
<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "bien", array()), "nombien", array()), "html", null, true);
            echo "</td>
<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "bien", array()), "localite", array()), "libelleloca", array()), "html", null, true);
            echo "</td>
<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "bien", array()), "typebien", array()), "libelletype", array()), "html", null, true);
            echo "</td>
<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "bien", array()), "prix_loc", array()), "html", null, true);
            echo "</td>
<td><img  src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "bien", array()), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" alt=\"\" style=\"width:100px;\"></td>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</tr>
</table>
</div>
</div>
";
        // line 50
        echo "
";
        
        $__internal_e08a573f1a8378beb18085f0e3da542ad04f15f14dc0953a8bc9d933d39ce932->leave($__internal_e08a573f1a8378beb18085f0e3da542ad04f15f14dc0953a8bc9d933d39ce932_prof);

        
        $__internal_a6e4aa69ad96c756a3b904a3632dd0ef319b66540081c260aa403e9bb4f56a47->leave($__internal_a6e4aa69ad96c756a3b904a3632dd0ef319b66540081c260aa403e9bb4f56a47_prof);

    }

    public function getTemplateName()
    {
        return "GSTImmobilierBundle:Admin:listereserve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 50,  120 => 42,  109 => 38,  105 => 37,  101 => 36,  97 => 35,  93 => 34,  89 => 33,  85 => 32,  82 => 31,  78 => 30,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block body %}
<div class=\"jumbotron text-center\">
  <h1>Immobilier De Luxe</h1>
  <p>Réservation en cour!</p> 
</div>
  
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-lg-5\">
       </div>
       </div>
 <div class=\"row\">
<div class=\"col-lg-12\" id=\"contenu\">
<table class=\"table\" id=\"myTable\" >
  <thead>
    <tr>
      <th>Nom Client</th>
      <th>Adresse du client</th>
       <th>Bien</th>
        <th>Localite du Bien</th>
         <th>Type du bien</th>
          <th>Prix location</th>
           <th>Image</th>
       
          <th>Opération</th>
      
    </tr>
  </thead>
  {%for reservation in reserves %}
<tr>
<td>{{reservation.client.nomclient}}</td>
<td>{{reservation.client.adresseclient}}</td>
<td>{{reservation.bien.nombien}}</td>
<td>{{reservation.bien.localite.libelleloca}}</td>
<td>{{reservation.bien.typebien.libelletype}}</td>
<td>{{reservation.bien.prix_loc}}</td>
<td><img  src=\"{{ asset('image/')}}{{ reservation.bien.images[0].image }}\" alt=\"\" style=\"width:100px;\"></td>


{% endfor %}
</tr>
</table>
</div>
</div>
{# {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/datatables.css') }}\">

{% endblock %} #}

{% endblock %}", "GSTImmobilierBundle:Admin:listereserve.html.twig", "/var/www/html/Agence_immobilier/Immobilier/src/GST/ImmobilierBundle/Resources/views/Admin/listereserve.html.twig");
    }
}

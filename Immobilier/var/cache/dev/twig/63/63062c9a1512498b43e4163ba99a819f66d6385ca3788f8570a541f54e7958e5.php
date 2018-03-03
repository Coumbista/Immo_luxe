<?php

/* GSTImmobilierBundle:Admin:listereserve.html.twig */
class __TwigTemplate_020b382a5f4b407399bd11a2535f2185d8db7d354df4c11a0f64c90dd25852f9 extends Twig_Template
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
        $__internal_da60ad37e0431d72c3ad29d6a770d4f859bc8501131df8d315eef6065f1cfdb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da60ad37e0431d72c3ad29d6a770d4f859bc8501131df8d315eef6065f1cfdb4->enter($__internal_da60ad37e0431d72c3ad29d6a770d4f859bc8501131df8d315eef6065f1cfdb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Admin:listereserve.html.twig"));

        $__internal_7b81bceec6d22a68116b5b8ec9bec0665513badb68f8263245297a87adb28bb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b81bceec6d22a68116b5b8ec9bec0665513badb68f8263245297a87adb28bb2->enter($__internal_7b81bceec6d22a68116b5b8ec9bec0665513badb68f8263245297a87adb28bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Admin:listereserve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da60ad37e0431d72c3ad29d6a770d4f859bc8501131df8d315eef6065f1cfdb4->leave($__internal_da60ad37e0431d72c3ad29d6a770d4f859bc8501131df8d315eef6065f1cfdb4_prof);

        
        $__internal_7b81bceec6d22a68116b5b8ec9bec0665513badb68f8263245297a87adb28bb2->leave($__internal_7b81bceec6d22a68116b5b8ec9bec0665513badb68f8263245297a87adb28bb2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d7aa83fa20f3fb248386fa74450d03748264a772548e21095772da1cad7e959 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d7aa83fa20f3fb248386fa74450d03748264a772548e21095772da1cad7e959->enter($__internal_6d7aa83fa20f3fb248386fa74450d03748264a772548e21095772da1cad7e959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c47ce77a31539bd63ab92d6cceb270129dab66e25bcd9c57f77af7331fbd68cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c47ce77a31539bd63ab92d6cceb270129dab66e25bcd9c57f77af7331fbd68cf->enter($__internal_c47ce77a31539bd63ab92d6cceb270129dab66e25bcd9c57f77af7331fbd68cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reserves"]) || array_key_exists("reserves", $context) ? $context["reserves"] : (function () { throw new Twig_Error_Runtime('Variable "reserves" does not exist.', 29, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 30
            echo "<tr>
<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "client", array()), "nomclient", array()), "html", null, true);
            echo "</td>
<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "client", array()), "adresseclient", array()), "html", null, true);
            echo "</td>
<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "bien", array()), "nombien", array()), "html", null, true);
            echo "</td>
<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "bien", array()), "localite", array()), "libelleloca", array()), "html", null, true);
            echo "</td>
<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "bien", array()), "typebien", array()), "libelletype", array()), "html", null, true);
            echo "</td>
<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "bien", array()), "prix_loc", array()), "html", null, true);
            echo "</td>
<td><img  src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "bien", array()), "images", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" alt=\"\" style=\"width:100px;\"></td>
 <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("detailreserver", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["reservation"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary col-12\"style=\"margin-left:50px;\">Detail</a></td>


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
        
        $__internal_c47ce77a31539bd63ab92d6cceb270129dab66e25bcd9c57f77af7331fbd68cf->leave($__internal_c47ce77a31539bd63ab92d6cceb270129dab66e25bcd9c57f77af7331fbd68cf_prof);

        
        $__internal_6d7aa83fa20f3fb248386fa74450d03748264a772548e21095772da1cad7e959->leave($__internal_6d7aa83fa20f3fb248386fa74450d03748264a772548e21095772da1cad7e959_prof);

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
        return array (  129 => 50,  123 => 42,  113 => 38,  108 => 37,  104 => 36,  100 => 35,  96 => 34,  92 => 33,  88 => 32,  84 => 31,  81 => 30,  77 => 29,  49 => 3,  40 => 2,  11 => 1,);
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
 <td><a href=\"{{path('detailreserver', {'id':reservation.id})}}\" class=\"btn btn-primary col-12\"style=\"margin-left:50px;\">Detail</a></td>


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

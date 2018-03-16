<?php

/* GSTImmobilierBundle:Admin:listreservePro.html.twig */
class __TwigTemplate_95f988eb4c0e5fc5247cac906a69e8d78a844114e4871c2b6f7595ad7fa61056 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::back.html.twig", "GSTImmobilierBundle:Admin:listreservePro.html.twig", 1);
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
        $__internal_2435ed064f31ea906684fc17823422ed45bb5ba47f480773fa388488b630a6c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2435ed064f31ea906684fc17823422ed45bb5ba47f480773fa388488b630a6c4->enter($__internal_2435ed064f31ea906684fc17823422ed45bb5ba47f480773fa388488b630a6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Admin:listreservePro.html.twig"));

        $__internal_e239dcda21e1ac6802f0f8abbb0ac991d32cf7dccb6f853e673029820eff6b8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e239dcda21e1ac6802f0f8abbb0ac991d32cf7dccb6f853e673029820eff6b8d->enter($__internal_e239dcda21e1ac6802f0f8abbb0ac991d32cf7dccb6f853e673029820eff6b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Admin:listreservePro.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2435ed064f31ea906684fc17823422ed45bb5ba47f480773fa388488b630a6c4->leave($__internal_2435ed064f31ea906684fc17823422ed45bb5ba47f480773fa388488b630a6c4_prof);

        
        $__internal_e239dcda21e1ac6802f0f8abbb0ac991d32cf7dccb6f853e673029820eff6b8d->leave($__internal_e239dcda21e1ac6802f0f8abbb0ac991d32cf7dccb6f853e673029820eff6b8d_prof);

    }

    // line 2
    public function block_recharge($context, array $blocks = array())
    {
        $__internal_94315a7f54291544537a11ef2e5a705bac4f0a957e976c715a61ccc7a1b48579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94315a7f54291544537a11ef2e5a705bac4f0a957e976c715a61ccc7a1b48579->enter($__internal_94315a7f54291544537a11ef2e5a705bac4f0a957e976c715a61ccc7a1b48579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recharge"));

        $__internal_42e329400fa9234342ec5b4a82d344dc5fd3078f6aab6706e98b49dc48799244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42e329400fa9234342ec5b4a82d344dc5fd3078f6aab6706e98b49dc48799244->enter($__internal_42e329400fa9234342ec5b4a82d344dc5fd3078f6aab6706e98b49dc48799244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "recharge"));

        // line 3
        echo "
  

 
 <div class=\"row\">
<div class=\"col-lg-12\" id=\"contenu\">
<table class=\"table\" id=\"myTable\" >
  <thead>
    <tr>
      <th style=\"font-size:12px;\"> Proprietaire</th>
      <th style=\"font-size:12px;\">Adresse</th>
       <th style=\"font-size:12px;\">Tel</th>
       <th style=\"font-size:12px;\"> Bien</th>
        <th style=\"font-size:12px;\"> Description</th>
        <th style=\"font-size:12px;\">Localite</th>
         <th style=\"font-size:12px;\">Type </th>
          <th style=\"font-size:12px;\">Montant </th> 
           <th style=\"font-size:12px;\">Etat</th>           
           <th style=\"font-size:12px;\">Image</th>          
         
      
    </tr>
  </thead>
  ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reserves"]) || array_key_exists("reserves", $context) ? $context["reserves"] : (function () { throw new Twig_Error_Runtime('Variable "reserves" does not exist.', 26, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reserve_pro"]) {
            // line 27
            echo "<tr>
<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["reserve_pro"], "proprietaire", array()), "nomcomplet", array()), "html", null, true);
            echo "</td>
<td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["reserve_pro"], "proprietaire", array()), "adressepro", array()), "html", null, true);
            echo "</td>
<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["reserve_pro"], "proprietaire", array()), "telpro", array()), "html", null, true);
            echo "</td>
<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["reserve_pro"], "bienpro", array()), "nom", array()), "html", null, true);
            echo "</td>
<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["reserve_pro"], "bienpro", array()), "description", array()), "html", null, true);
            echo "</td>
<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["reserve_pro"], "bienpro", array()), "localite", array()), "libelleloca", array()), "html", null, true);
            echo "</td>
<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["reserve_pro"], "bienpro", array()), "typebien", array()), "libelletype", array()), "html", null, true);
            echo "</td>
<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["reserve_pro"], "bienpro", array()), "montantvoulu", array()), "html", null, true);
            echo "</td>
<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["reserve_pro"], "etat", array()), "html", null, true);
            echo "<a href=\"#\">En cours</a></td>
<td><img  src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("image/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["reserve_pro"], "bienpro", array()), "imagepros", array()), 0, array(), "array"), "image", array()), "html", null, true);
            echo "\" alt=\"\"style=\"width:200px;\"></td>
 ";
            // line 39
            echo "
";
            // line 46
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserve_pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</tr>
</table>
</div>
</div>
";
        // line 57
        echo "
";
        
        $__internal_42e329400fa9234342ec5b4a82d344dc5fd3078f6aab6706e98b49dc48799244->leave($__internal_42e329400fa9234342ec5b4a82d344dc5fd3078f6aab6706e98b49dc48799244_prof);

        
        $__internal_94315a7f54291544537a11ef2e5a705bac4f0a957e976c715a61ccc7a1b48579->leave($__internal_94315a7f54291544537a11ef2e5a705bac4f0a957e976c715a61ccc7a1b48579_prof);

    }

    public function getTemplateName()
    {
        return "GSTImmobilierBundle:Admin:listreservePro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 57,  133 => 49,  125 => 46,  122 => 39,  117 => 37,  113 => 36,  109 => 35,  105 => 34,  101 => 33,  97 => 32,  93 => 31,  89 => 30,  85 => 29,  81 => 28,  78 => 27,  74 => 26,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::back.html.twig\" %}
{% block recharge %}

  

 
 <div class=\"row\">
<div class=\"col-lg-12\" id=\"contenu\">
<table class=\"table\" id=\"myTable\" >
  <thead>
    <tr>
      <th style=\"font-size:12px;\"> Proprietaire</th>
      <th style=\"font-size:12px;\">Adresse</th>
       <th style=\"font-size:12px;\">Tel</th>
       <th style=\"font-size:12px;\"> Bien</th>
        <th style=\"font-size:12px;\"> Description</th>
        <th style=\"font-size:12px;\">Localite</th>
         <th style=\"font-size:12px;\">Type </th>
          <th style=\"font-size:12px;\">Montant </th> 
           <th style=\"font-size:12px;\">Etat</th>           
           <th style=\"font-size:12px;\">Image</th>          
         
      
    </tr>
  </thead>
  {%for reserve_pro in reserves %}
<tr>
<td>{{reserve_pro.proprietaire.nomcomplet}}</td>
<td>{{reserve_pro.proprietaire.adressepro}}</td>
<td>{{reserve_pro.proprietaire.telpro}}</td>
<td>{{reserve_pro.bienpro.nom}}</td>
<td>{{reserve_pro.bienpro.description}}</td>
<td>{{reserve_pro.bienpro.localite.libelleloca}}</td>
<td>{{reserve_pro.bienpro.typebien.libelletype}}</td>
<td>{{reserve_pro.bienpro.montantvoulu}}</td>
<td>{{reserve_pro.etat}}<a href=\"#\">En cours</a></td>
<td><img  src=\"{{ asset('image/')}}{{ reserve_pro.bienpro.imagepros[0].image }}\" alt=\"\"style=\"width:200px;\"></td>
 {# <td><a href=\"{{path('detailreserver', {'id':reservation.id})}}\" class=\"btn btn-primary col-12\"style=\"margin-left:50px;\">Detail</a></td> #}

{# {% if reservation.etat == 0 %}

<td><a href=\"{{path('etatreservation',{'id':reservation.id})}}\">En cours</a></td>
{% else %}
<td><a href=\"{{path('etatreservation',{'id':reservation.id})}}\">Validé</a></td>
{% endif %} #}


{% endfor %}
</tr>
</table>
</div>
</div>
{# {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/datatables.css') }}\">

{% endblock %} #}

{% endblock %}", "GSTImmobilierBundle:Admin:listreservePro.html.twig", "/var/www/html/Agence_immobilier/Immobilier/src/GST/ImmobilierBundle/Resources/views/Admin/listreservePro.html.twig");
    }
}

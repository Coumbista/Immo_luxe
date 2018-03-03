<?php

/* GSTImmobilierBundle:Admin:save.html.twig */
class __TwigTemplate_7e0f011ac23c67c2891b4af864cc6a263510d796ee817a796a011797f5fd9f0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GSTImmobilierBundle:Admin:save.html.twig", 1);
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
        $__internal_2a9e04986c988391e1a5b05790485e22d14f0e468844378fd5a77e06e320744b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a9e04986c988391e1a5b05790485e22d14f0e468844378fd5a77e06e320744b->enter($__internal_2a9e04986c988391e1a5b05790485e22d14f0e468844378fd5a77e06e320744b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Admin:save.html.twig"));

        $__internal_6e3f50bac920594d3450b478a68a2e673a88660e18bd187b5edc398dce42d283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e3f50bac920594d3450b478a68a2e673a88660e18bd187b5edc398dce42d283->enter($__internal_6e3f50bac920594d3450b478a68a2e673a88660e18bd187b5edc398dce42d283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Admin:save.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a9e04986c988391e1a5b05790485e22d14f0e468844378fd5a77e06e320744b->leave($__internal_2a9e04986c988391e1a5b05790485e22d14f0e468844378fd5a77e06e320744b_prof);

        
        $__internal_6e3f50bac920594d3450b478a68a2e673a88660e18bd187b5edc398dce42d283->leave($__internal_6e3f50bac920594d3450b478a68a2e673a88660e18bd187b5edc398dce42d283_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2071ec56afedbbc0e8aeb94f3742384ee3b0d915409b908214008c3d03bb68a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2071ec56afedbbc0e8aeb94f3742384ee3b0d915409b908214008c3d03bb68a7->enter($__internal_2071ec56afedbbc0e8aeb94f3742384ee3b0d915409b908214008c3d03bb68a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_97974d5eaa58b2014c118b0edcf1d5702c0dee96a2b5b1a36803d61c6a2f7189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97974d5eaa58b2014c118b0edcf1d5702c0dee96a2b5b1a36803d61c6a2f7189->enter($__internal_97974d5eaa58b2014c118b0edcf1d5702c0dee96a2b5b1a36803d61c6a2f7189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"jumbotron text-center\">
  <h1>Immobilier De Luxe</h1>
  <p>Terme du contrat!</p> 
</div>
  
<div class=\"container\">
<h1 style=\"margin-left:400px;font-size:30px; color:grey; font-family: Goudy\"> Terme du contrat</h1>
<hr style=\"border: solid 1px grey; margin-left:150px;\">
<form name=\"reservations\">

  <div>
<div class=\"card\" style=\"width:800px; margin-bottom:50px;  margin-left:250px;\" >
  <div class=\"card-header \" style=\"background-color:lightgrey; opacity:0.7\">
<p style=\"margin-left:50px;font-size:30px; font-family: Goudy\">Information sur le client</p >
  </div>
  <div class=\"card-body\" >
 <p style=\"margin-left:150px;\"> <b>Nom client:</b>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 19, $this->getSourceContext()); })()), "client", array()), "nomclient", array()), "html", null, true);
        echo "</p>

<p style=\"margin-left:150px;\"> <b>Tel:</b>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 21, $this->getSourceContext()); })()), "client", array()), "telclient", array()), "html", null, true);
        echo "</p>
<p style=\"margin-left:150px;\" > <b>Adresse:</b>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 22, $this->getSourceContext()); })()), "client", array()), "adresseclient", array()), "html", null, true);
        echo "</p>
<p style=\"margin-left:150px;\"> <b>Email:</b>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 23, $this->getSourceContext()); })()), "client", array()), "emailclient", array()), "html", null, true);
        echo "</p>
  </div>

<div class=\"card\" style=\"width:800px; margin-bottom:50px; \">
  <div class=\"card-header\" style=\"background-color:lightgrey; opacity:0.7\">
<p style=\"font-size:30px; font-family: Goudy\">Information sur le bien</p >
  </div>
  <div class=\"card-body\">

<p style=\"margin-left:150px;\">  <b>Typebien:</b>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 32, $this->getSourceContext()); })()), "bien", array()), "typebien", array()), "libelletype", array()), "html", null, true);
        echo "</p>
<p style=\"margin-left:150px;\"> <b>Prix:</b>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 33, $this->getSourceContext()); })()), "bien", array()), "prix_loc", array()), "html", null, true);
        echo "</p>
<p style=\"margin-left:150px;\"> <b>Description</b>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 34, $this->getSourceContext()); })()), "bien", array()), "description", array()), "html", null, true);
        echo "</p>



      </div>
</div>

       
         ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["texts"]) || array_key_exists("texts", $context) ? $context["texts"] : (function () { throw new Twig_Error_Runtime('Variable "texts" does not exist.', 42, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
            // line 43
            echo "          </textarea> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["text"], "text", array()), "html", null, true);
            echo "</textarea>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "         
         <form method=\"post\">
         <ul>
        <li style=\"list-style:none\"> <b>Caution:</b><input name=\"caution\"type=\"number\"value=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 48, $this->getSourceContext()); })()), "bien", array()), "prix_loc", array()), "html", null, true);
        echo "\"></li>
       <li  style=\"list-style:none\"> <b> Mensualité:</b><input name=\"mensualite\"type=\"number\"value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 49, $this->getSourceContext()); })()), "bien", array()), "prix_loc", array()), "html", null, true);
        echo "\"></li>
       <li  style=\"list-style:none\"><b>Total:</b><input name=\"total\"value=\"";
        // line 50
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 50, $this->getSourceContext()); })()), "bien", array()), "prix_loc", array()) * 2), "html", null, true);
        echo "\"></li>
       <strong>
    <input type=\"checkbox\" name=\"duree\"> contrat d'une durée d'un an renouvelable
    </strong><br>
     </div>
     ";
        // line 56
        echo "  <input type=\"radio\" name=\"nancy\"value=\"\" id=\"acc\">Accepter</input>
         <input type=\"radio\" name=\"nancy\" value=\"\" id=\"ref\">Refuser</input>
         <input class=\"btn btn-info\"  type=\"submit\" name=\"submit\" value=\"Enregistrer\" id=\"enregistre\" disabled=\"disabled\"  >
         <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pdf", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 59, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-info\" >EN Pdf</a>
    </form>
     </div>
   </div>
   
    </div>
</div>
<div class=\"row\">
<div class=\"col-lg-12 bg-dark\" style=\"height:300px;\"> pied de page</div>
</div>
  </div>
  <script>
\$(document).ready(function(){
    \$(\"input[name=nancy]\").on(\"change\",function(){
        if(\$(\"#acc\").is(':checked') || \$(\"#ref\").is(':checked')){
        // alert('checked');
       \$(\"#enregistre\").removeAttr('disabled');
    }
    }); 
     });
</script>
";
        
        $__internal_97974d5eaa58b2014c118b0edcf1d5702c0dee96a2b5b1a36803d61c6a2f7189->leave($__internal_97974d5eaa58b2014c118b0edcf1d5702c0dee96a2b5b1a36803d61c6a2f7189_prof);

        
        $__internal_2071ec56afedbbc0e8aeb94f3742384ee3b0d915409b908214008c3d03bb68a7->leave($__internal_2071ec56afedbbc0e8aeb94f3742384ee3b0d915409b908214008c3d03bb68a7_prof);

    }

    public function getTemplateName()
    {
        return "GSTImmobilierBundle:Admin:save.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 59,  145 => 56,  137 => 50,  133 => 49,  129 => 48,  124 => 45,  115 => 43,  111 => 42,  100 => 34,  96 => 33,  92 => 32,  80 => 23,  76 => 22,  72 => 21,  67 => 19,  49 => 3,  40 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block body %}
<div class=\"jumbotron text-center\">
  <h1>Immobilier De Luxe</h1>
  <p>Terme du contrat!</p> 
</div>
  
<div class=\"container\">
<h1 style=\"margin-left:400px;font-size:30px; color:grey; font-family: Goudy\"> Terme du contrat</h1>
<hr style=\"border: solid 1px grey; margin-left:150px;\">
<form name=\"reservations\">

  <div>
<div class=\"card\" style=\"width:800px; margin-bottom:50px;  margin-left:250px;\" >
  <div class=\"card-header \" style=\"background-color:lightgrey; opacity:0.7\">
<p style=\"margin-left:50px;font-size:30px; font-family: Goudy\">Information sur le client</p >
  </div>
  <div class=\"card-body\" >
 <p style=\"margin-left:150px;\"> <b>Nom client:</b>{{ reservation.client.nomclient}}</p>

<p style=\"margin-left:150px;\"> <b>Tel:</b>{{ reservation.client.telclient}}</p>
<p style=\"margin-left:150px;\" > <b>Adresse:</b>{{ reservation.client.adresseclient}}</p>
<p style=\"margin-left:150px;\"> <b>Email:</b>{{ reservation.client.emailclient}}</p>
  </div>

<div class=\"card\" style=\"width:800px; margin-bottom:50px; \">
  <div class=\"card-header\" style=\"background-color:lightgrey; opacity:0.7\">
<p style=\"font-size:30px; font-family: Goudy\">Information sur le bien</p >
  </div>
  <div class=\"card-body\">

<p style=\"margin-left:150px;\">  <b>Typebien:</b>{{reservation.bien.typebien.libelletype}}</p>
<p style=\"margin-left:150px;\"> <b>Prix:</b>{{ reservation.bien.prix_loc}}</p>
<p style=\"margin-left:150px;\"> <b>Description</b>{{ reservation.bien.description}}</p>



      </div>
</div>

       
         {% for text in texts %}
          </textarea> {{text.text}}</textarea>
         {% endfor %}
         
         <form method=\"post\">
         <ul>
        <li style=\"list-style:none\"> <b>Caution:</b><input name=\"caution\"type=\"number\"value=\"{{reservation.bien.prix_loc}}\"></li>
       <li  style=\"list-style:none\"> <b> Mensualité:</b><input name=\"mensualite\"type=\"number\"value=\"{{reservation.bien.prix_loc}}\"></li>
       <li  style=\"list-style:none\"><b>Total:</b><input name=\"total\"value=\"{{reservation.bien.prix_loc *2}}\"></li>
       <strong>
    <input type=\"checkbox\" name=\"duree\"> contrat d'une durée d'un an renouvelable
    </strong><br>
     </div>
     {# <div class=\"card-footer text-muted\"> #}
  <input type=\"radio\" name=\"nancy\"value=\"\" id=\"acc\">Accepter</input>
         <input type=\"radio\" name=\"nancy\" value=\"\" id=\"ref\">Refuser</input>
         <input class=\"btn btn-info\"  type=\"submit\" name=\"submit\" value=\"Enregistrer\" id=\"enregistre\" disabled=\"disabled\"  >
         <a href=\"{{path('pdf', {'id':reservation.id})}}\" class=\"btn btn-info\" >EN Pdf</a>
    </form>
     </div>
   </div>
   
    </div>
</div>
<div class=\"row\">
<div class=\"col-lg-12 bg-dark\" style=\"height:300px;\"> pied de page</div>
</div>
  </div>
  <script>
\$(document).ready(function(){
    \$(\"input[name=nancy]\").on(\"change\",function(){
        if(\$(\"#acc\").is(':checked') || \$(\"#ref\").is(':checked')){
        // alert('checked');
       \$(\"#enregistre\").removeAttr('disabled');
    }
    }); 
     });
</script>
{% endblock %}
", "GSTImmobilierBundle:Admin:save.html.twig", "/var/www/html/Agence_immobilier/Immobilier/src/GST/ImmobilierBundle/Resources/views/Admin/save.html.twig");
    }
}

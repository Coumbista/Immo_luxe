<?php

/* GSTImmobilierBundle:Admin:pdf.html.twig */
class __TwigTemplate_91e7502f7694586d13f0b3f04f6bde6cbc966ca1d7e3ea7e82dc41d7261217b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "GSTImmobilierBundle:Admin:pdf.html.twig", 1);
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
        $__internal_afd0dbf2cf9751f42e6eb5e95a87868306b92af38dfac2a3154ffbbc10d92abf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afd0dbf2cf9751f42e6eb5e95a87868306b92af38dfac2a3154ffbbc10d92abf->enter($__internal_afd0dbf2cf9751f42e6eb5e95a87868306b92af38dfac2a3154ffbbc10d92abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Admin:pdf.html.twig"));

        $__internal_f9b09173c55c49a89bef8e99634f6699d873a3959aab2a82b3ba73765d600351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b09173c55c49a89bef8e99634f6699d873a3959aab2a82b3ba73765d600351->enter($__internal_f9b09173c55c49a89bef8e99634f6699d873a3959aab2a82b3ba73765d600351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Admin:pdf.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afd0dbf2cf9751f42e6eb5e95a87868306b92af38dfac2a3154ffbbc10d92abf->leave($__internal_afd0dbf2cf9751f42e6eb5e95a87868306b92af38dfac2a3154ffbbc10d92abf_prof);

        
        $__internal_f9b09173c55c49a89bef8e99634f6699d873a3959aab2a82b3ba73765d600351->leave($__internal_f9b09173c55c49a89bef8e99634f6699d873a3959aab2a82b3ba73765d600351_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7b0b8f6b5f10185fb21c41d35f1d168c0c05425db0c428fca9276facea9f4b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7b0b8f6b5f10185fb21c41d35f1d168c0c05425db0c428fca9276facea9f4b4->enter($__internal_b7b0b8f6b5f10185fb21c41d35f1d168c0c05425db0c428fca9276facea9f4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f497117306c6bcc00a48fb89ab8faa7fd288cfae872d8b399b9ebeaf8580cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f497117306c6bcc00a48fb89ab8faa7fd288cfae872d8b399b9ebeaf8580cd9->enter($__internal_0f497117306c6bcc00a48fb89ab8faa7fd288cfae872d8b399b9ebeaf8580cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <div class=\"jumbotron text-center\">
  <h1>Immobilier De Luxe</h1>
  <p>Terme du contrat!</p> 
</div>
  
<div class=\"container\">
  <div class=\"row\" style=\"width:300px;margin-left:300px;margin-top:-100px;\">
    <div class=\"col-lg-12\">
    
   <div class=\"card\">
     <div class=\"card-header\">
      Therme du contrat
     </div>
     <div class=\"card-body\">
       <h4 class=\"card-title\">Title</h4>
       <p class=\"card-text\"> 
       ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 20, $this->getSourceContext()); })()), "client", array()), "nomclient", array()), "html", null, true);
        echo "
         ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 21, $this->getSourceContext()); })()), "client", array()), "telclient", array()), "html", null, true);
        echo "
         ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 22, $this->getSourceContext()); })()), "client", array()), "adresseclient", array()), "html", null, true);
        echo "        
          ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 23, $this->getSourceContext()); })()), "client", array()), "emailclient", array()), "html", null, true);
        echo "
        
         ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 25, $this->getSourceContext()); })()), "bien", array()), "localite", array()), "libelleloca", array()), "html", null, true);
        echo "
         ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 26, $this->getSourceContext()); })()), "bien", array()), "typebien", array()), "libelletype", array()), "html", null, true);
        echo "</p>
         ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["texts"]) || array_key_exists("texts", $context) ? $context["texts"] : (function () { throw new Twig_Error_Runtime('Variable "texts" does not exist.', 27, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
            // line 28
            echo "         <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["text"], "text", array()), "html", null, true);
            echo "</p>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "         <form method=\"post\">
         <ul>
        <li> <b>Caution:</b><input name=\"caution\"type=\"number\"value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 32, $this->getSourceContext()); })()), "bien", array()), "prix_loc", array()), "html", null, true);
        echo "\"></li>
       <li> <b> Mensualité:</b><input name=\"mensualite\"type=\"number\"value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 33, $this->getSourceContext()); })()), "bien", array()), "prix_loc", array()), "html", null, true);
        echo "\"></li>
       <li><b>Total:</b><input name=\"total\"value=\"";
        // line 34
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new Twig_Error_Runtime('Variable "reservation" does not exist.', 34, $this->getSourceContext()); })()), "bien", array()), "prix_loc", array()) * 2), "html", null, true);
        echo "\"></li>
       <strong>
    <input type=\"checkbox\" name=\"duree\"> contrat d'une durée d'un an renouvelable
    </strong><br>
     </div>
     ";
        // line 40
        echo "  
       ";
        // line 44
        echo "    </form>
     </div>
   </div>
   
    </div>
</div>
";
        // line 51
        echo "  </div>
";
        
        $__internal_0f497117306c6bcc00a48fb89ab8faa7fd288cfae872d8b399b9ebeaf8580cd9->leave($__internal_0f497117306c6bcc00a48fb89ab8faa7fd288cfae872d8b399b9ebeaf8580cd9_prof);

        
        $__internal_b7b0b8f6b5f10185fb21c41d35f1d168c0c05425db0c428fca9276facea9f4b4->leave($__internal_b7b0b8f6b5f10185fb21c41d35f1d168c0c05425db0c428fca9276facea9f4b4_prof);

    }

    public function getTemplateName()
    {
        return "GSTImmobilierBundle:Admin:pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 51,  129 => 44,  126 => 40,  118 => 34,  114 => 33,  110 => 32,  106 => 30,  97 => 28,  93 => 27,  89 => 26,  85 => 25,  80 => 23,  76 => 22,  72 => 21,  68 => 20,  49 => 3,  40 => 2,  11 => 1,);
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
  <div class=\"row\" style=\"width:300px;margin-left:300px;margin-top:-100px;\">
    <div class=\"col-lg-12\">
    
   <div class=\"card\">
     <div class=\"card-header\">
      Therme du contrat
     </div>
     <div class=\"card-body\">
       <h4 class=\"card-title\">Title</h4>
       <p class=\"card-text\"> 
       {{reservation.client.nomclient}}
         {{reservation.client.telclient}}
         {{reservation.client.adresseclient}}        
          {{reservation.client.emailclient}}
        
         {{reservation.bien.localite.libelleloca}}
         {{reservation.bien.typebien.libelletype}}</p>
         {% for text in texts %}
         <p>{{text.text}}</p>
         {% endfor %}
         <form method=\"post\">
         <ul>
        <li> <b>Caution:</b><input name=\"caution\"type=\"number\"value=\"{{reservation.bien.prix_loc}}\"></li>
       <li> <b> Mensualité:</b><input name=\"mensualite\"type=\"number\"value=\"{{reservation.bien.prix_loc}}\"></li>
       <li><b>Total:</b><input name=\"total\"value=\"{{reservation.bien.prix_loc *2}}\"></li>
       <strong>
    <input type=\"checkbox\" name=\"duree\"> contrat d'une durée d'un an renouvelable
    </strong><br>
     </div>
     {# <div class=\"card-footer text-muted\"> #}
  
       {# <input type=\"radio\" name=\"radio\"value=\"\">Accepter</input>
         <input type=\"radio\" name=\"radio\" value=\"\">Refuser</input><br>
         <a href=\"{{path('pdf', {'id':reservation.id})}}\"> <input class=\"btn btn-info\" type=\"submit\" name=\"submit\" value=\"Enregistrer\" id=\"enregister\"  ></a> #}
    </form>
     </div>
   </div>
   
    </div>
</div>
{# <p> <a href=\"{{path('pdf0', {'id':reservation.id})}}\">Imprimer</a></p> #}
  </div>
{% endblock %}
", "GSTImmobilierBundle:Admin:pdf.html.twig", "/var/www/html/Agence_immobilier/Immobilier/src/GST/ImmobilierBundle/Resources/views/Admin/pdf.html.twig");
    }
}

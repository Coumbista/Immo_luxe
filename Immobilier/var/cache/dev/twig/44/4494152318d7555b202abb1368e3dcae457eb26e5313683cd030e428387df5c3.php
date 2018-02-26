<?php

/* GSTImmobilierBundle:Front:reservation.html.twig */
class __TwigTemplate_ef082e365109e594f55b8dbb0bbf8c4b08fcd1e495a359632ecd7739acd8b122 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "GSTImmobilierBundle:Front:reservation.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d86a34cbad974f7ab7c33f6448551c83a69ebc68cfa45de6a376131501f9635 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d86a34cbad974f7ab7c33f6448551c83a69ebc68cfa45de6a376131501f9635->enter($__internal_4d86a34cbad974f7ab7c33f6448551c83a69ebc68cfa45de6a376131501f9635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Front:reservation.html.twig"));

        $__internal_d5b15d3b4f5cdd4343e49754550fbb0db6e2e855647514496dc09c858d359909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b15d3b4f5cdd4343e49754550fbb0db6e2e855647514496dc09c858d359909->enter($__internal_d5b15d3b4f5cdd4343e49754550fbb0db6e2e855647514496dc09c858d359909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Front:reservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d86a34cbad974f7ab7c33f6448551c83a69ebc68cfa45de6a376131501f9635->leave($__internal_4d86a34cbad974f7ab7c33f6448551c83a69ebc68cfa45de6a376131501f9635_prof);

        
        $__internal_d5b15d3b4f5cdd4343e49754550fbb0db6e2e855647514496dc09c858d359909->leave($__internal_d5b15d3b4f5cdd4343e49754550fbb0db6e2e855647514496dc09c858d359909_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f34e6496b0ffbf9e77fa9707a86505807e2f49513fdd6652d90eb7beecaa224d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f34e6496b0ffbf9e77fa9707a86505807e2f49513fdd6652d90eb7beecaa224d->enter($__internal_f34e6496b0ffbf9e77fa9707a86505807e2f49513fdd6652d90eb7beecaa224d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0cb1553eb553c4115c0e210a1ae1fa96eaaf65d384faa268a27010a5e971bf7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cb1553eb553c4115c0e210a1ae1fa96eaaf65d384faa268a27010a5e971bf7b->enter($__internal_0cb1553eb553c4115c0e210a1ae1fa96eaaf65d384faa268a27010a5e971bf7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "GSTImmobilierBundle:Front:reserver";
        
        $__internal_0cb1553eb553c4115c0e210a1ae1fa96eaaf65d384faa268a27010a5e971bf7b->leave($__internal_0cb1553eb553c4115c0e210a1ae1fa96eaaf65d384faa268a27010a5e971bf7b_prof);

        
        $__internal_f34e6496b0ffbf9e77fa9707a86505807e2f49513fdd6652d90eb7beecaa224d->leave($__internal_f34e6496b0ffbf9e77fa9707a86505807e2f49513fdd6652d90eb7beecaa224d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_157b185d41663737d8f57e32a322909ccac62bb6088cc1133f4f63e9b966b2d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_157b185d41663737d8f57e32a322909ccac62bb6088cc1133f4f63e9b966b2d6->enter($__internal_157b185d41663737d8f57e32a322909ccac62bb6088cc1133f4f63e9b966b2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c099712fff28ef03afd85320a545e03a56440fa167ed90b411c291f32f85c0ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c099712fff28ef03afd85320a545e03a56440fa167ed90b411c291f32f85c0ba->enter($__internal_c099712fff28ef03afd85320a545e03a56440fa167ed90b411c291f32f85c0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style >
";
        // line 12
        echo "</style>

<div class=\"jumbotron text-center\">
  <h1>Immobilier De Luxe</h1>
  <p>Nous somme à votre service <em style=\"color:blue;\">24h/24</em>!</p> 
</div>
  
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-sm-5\">
   ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'form');
        echo "
  
    </div>

<div class=\"col-sm-5\" id=\"contenu\">
<form>
<label for=\"email\"> Login</label>
<input type=\"text\" value=\"\" name=\"emailclient\"><br>
<label for=\"pwd\"> Password</label>
<input type=\"password\" value=\"\" name=\"password\">
</form>
</div>

        
      ";
        
        $__internal_c099712fff28ef03afd85320a545e03a56440fa167ed90b411c291f32f85c0ba->leave($__internal_c099712fff28ef03afd85320a545e03a56440fa167ed90b411c291f32f85c0ba_prof);

        
        $__internal_157b185d41663737d8f57e32a322909ccac62bb6088cc1133f4f63e9b966b2d6->leave($__internal_157b185d41663737d8f57e32a322909ccac62bb6088cc1133f4f63e9b966b2d6_prof);

    }

    public function getTemplateName()
    {
        return "GSTImmobilierBundle:Front:reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 22,  71 => 12,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}
 
{% block title %}GSTImmobilierBundle:Front:reserver{% endblock %}
{# {% block content %}{% endblock %} #}
{% block body %}
<style >
{# form{
  width:200px;
  margin-left:300px;
   
} #}
</style>

<div class=\"jumbotron text-center\">
  <h1>Immobilier De Luxe</h1>
  <p>Nous somme à votre service <em style=\"color:blue;\">24h/24</em>!</p> 
</div>
  
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-sm-5\">
   {{ form (form)}}
  
    </div>

<div class=\"col-sm-5\" id=\"contenu\">
<form>
<label for=\"email\"> Login</label>
<input type=\"text\" value=\"\" name=\"emailclient\"><br>
<label for=\"pwd\"> Password</label>
<input type=\"password\" value=\"\" name=\"password\">
</form>
</div>

        
      {% endblock %}

", "GSTImmobilierBundle:Front:reservation.html.twig", "/var/www/html/Agence_immobilier/Immobilier/src/GST/ImmobilierBundle/Resources/views/Front/reservation.html.twig");
    }
}

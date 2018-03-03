<?php

/* GSTImmobilierBundle:Front:reserver.html.twig */
class __TwigTemplate_0fda26bf74f71c2182b10fc2b5551c047a5751cf6246a28dc3d5e311ca92ac94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "GSTImmobilierBundle:Front:reserver.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ae88832a000ef5710c98969fb1549b0b74b7c5b77a32790862e84f18c802977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ae88832a000ef5710c98969fb1549b0b74b7c5b77a32790862e84f18c802977->enter($__internal_9ae88832a000ef5710c98969fb1549b0b74b7c5b77a32790862e84f18c802977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Front:reserver.html.twig"));

        $__internal_d92acc4f68892db5c1b82acd55c747f2df74f4d9073492b3405da4901a7b3c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92acc4f68892db5c1b82acd55c747f2df74f4d9073492b3405da4901a7b3c23->enter($__internal_d92acc4f68892db5c1b82acd55c747f2df74f4d9073492b3405da4901a7b3c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSTImmobilierBundle:Front:reserver.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ae88832a000ef5710c98969fb1549b0b74b7c5b77a32790862e84f18c802977->leave($__internal_9ae88832a000ef5710c98969fb1549b0b74b7c5b77a32790862e84f18c802977_prof);

        
        $__internal_d92acc4f68892db5c1b82acd55c747f2df74f4d9073492b3405da4901a7b3c23->leave($__internal_d92acc4f68892db5c1b82acd55c747f2df74f4d9073492b3405da4901a7b3c23_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_7febd90e3327258ebc8d7e63c4264739a45e0757dbec2bffa146245fbc9a8e78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7febd90e3327258ebc8d7e63c4264739a45e0757dbec2bffa146245fbc9a8e78->enter($__internal_7febd90e3327258ebc8d7e63c4264739a45e0757dbec2bffa146245fbc9a8e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_65620f3c519f5d2468539965d66f64c91849068cc5c833f5eab9bad10d8a6f2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65620f3c519f5d2468539965d66f64c91849068cc5c833f5eab9bad10d8a6f2d->enter($__internal_65620f3c519f5d2468539965d66f64c91849068cc5c833f5eab9bad10d8a6f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container\">
    <h1 style=\"font-family:; color:grey\"> Votre réservation a été prise en charge</h1>
    <h1>
</div>
";
        
        $__internal_65620f3c519f5d2468539965d66f64c91849068cc5c833f5eab9bad10d8a6f2d->leave($__internal_65620f3c519f5d2468539965d66f64c91849068cc5c833f5eab9bad10d8a6f2d_prof);

        
        $__internal_7febd90e3327258ebc8d7e63c4264739a45e0757dbec2bffa146245fbc9a8e78->leave($__internal_7febd90e3327258ebc8d7e63c4264739a45e0757dbec2bffa146245fbc9a8e78_prof);

    }

    public function getTemplateName()
    {
        return "GSTImmobilierBundle:Front:reserver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}

{# {% block title %}Détail-produit{% endblock %} #}
{% block body %}
<div class=\"container\">
    <h1 style=\"font-family:; color:grey\"> Votre réservation a été prise en charge</h1>
    <h1>
</div>
{% endblock %}", "GSTImmobilierBundle:Front:reserver.html.twig", "/var/www/html/Agence_immobilier/Immobilier/src/GST/ImmobilierBundle/Resources/views/Front/reserver.html.twig");
    }
}

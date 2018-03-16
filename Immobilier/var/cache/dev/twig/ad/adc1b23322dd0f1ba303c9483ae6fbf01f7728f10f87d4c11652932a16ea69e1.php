<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_6350e295f2debe842714a7be4011ffc2c32913bada137907d68fd8135ea3ff43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13516594467b2010156aa4eeaa7f9b764075ee5f4ab9a7a678b107d3220cf1e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13516594467b2010156aa4eeaa7f9b764075ee5f4ab9a7a678b107d3220cf1e5->enter($__internal_13516594467b2010156aa4eeaa7f9b764075ee5f4ab9a7a678b107d3220cf1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_a2c0190b10ad6a35c16c3a331cc5fa4b5d1308ba72104b01f8613861241020a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c0190b10ad6a35c16c3a331cc5fa4b5d1308ba72104b01f8613861241020a2->enter($__internal_a2c0190b10ad6a35c16c3a331cc5fa4b5d1308ba72104b01f8613861241020a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13516594467b2010156aa4eeaa7f9b764075ee5f4ab9a7a678b107d3220cf1e5->leave($__internal_13516594467b2010156aa4eeaa7f9b764075ee5f4ab9a7a678b107d3220cf1e5_prof);

        
        $__internal_a2c0190b10ad6a35c16c3a331cc5fa4b5d1308ba72104b01f8613861241020a2->leave($__internal_a2c0190b10ad6a35c16c3a331cc5fa4b5d1308ba72104b01f8613861241020a2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fe6e8af08e50d5fc236ca67fa71f528248ce5fe5e4c06b11e0c9be8e0ab6348c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe6e8af08e50d5fc236ca67fa71f528248ce5fe5e4c06b11e0c9be8e0ab6348c->enter($__internal_fe6e8af08e50d5fc236ca67fa71f528248ce5fe5e4c06b11e0c9be8e0ab6348c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_71dd876c9b083e6428cff7f48824eb271a42e44116ea9d53c1eabc2e92f39d77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71dd876c9b083e6428cff7f48824eb271a42e44116ea9d53c1eabc2e92f39d77->enter($__internal_71dd876c9b083e6428cff7f48824eb271a42e44116ea9d53c1eabc2e92f39d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_71dd876c9b083e6428cff7f48824eb271a42e44116ea9d53c1eabc2e92f39d77->leave($__internal_71dd876c9b083e6428cff7f48824eb271a42e44116ea9d53c1eabc2e92f39d77_prof);

        
        $__internal_fe6e8af08e50d5fc236ca67fa71f528248ce5fe5e4c06b11e0c9be8e0ab6348c->leave($__internal_fe6e8af08e50d5fc236ca67fa71f528248ce5fe5e4c06b11e0c9be8e0ab6348c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/var/www/html/Agence_immobilier/Immobilier/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}

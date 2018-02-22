<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_4da75526841dffd9cd4f0853457337fc4908ca6279c20170d1c151c69abde69d extends Twig_Template
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
        $__internal_71039c3d515886d493531706bb9c538c92cd1f01ad5679a0de67c7083d053b87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71039c3d515886d493531706bb9c538c92cd1f01ad5679a0de67c7083d053b87->enter($__internal_71039c3d515886d493531706bb9c538c92cd1f01ad5679a0de67c7083d053b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_f121b0c384a834c9af3e06f08a6adb00c412316fce64842cebe8b0d3177fa8f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f121b0c384a834c9af3e06f08a6adb00c412316fce64842cebe8b0d3177fa8f9->enter($__internal_f121b0c384a834c9af3e06f08a6adb00c412316fce64842cebe8b0d3177fa8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71039c3d515886d493531706bb9c538c92cd1f01ad5679a0de67c7083d053b87->leave($__internal_71039c3d515886d493531706bb9c538c92cd1f01ad5679a0de67c7083d053b87_prof);

        
        $__internal_f121b0c384a834c9af3e06f08a6adb00c412316fce64842cebe8b0d3177fa8f9->leave($__internal_f121b0c384a834c9af3e06f08a6adb00c412316fce64842cebe8b0d3177fa8f9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7025455017de0a5a4125adf812f758c48290052a362d268795826dfb7c821a22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7025455017de0a5a4125adf812f758c48290052a362d268795826dfb7c821a22->enter($__internal_7025455017de0a5a4125adf812f758c48290052a362d268795826dfb7c821a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6b98b0fc1c71a2ec8a2a116e1f75be2ee96432102360d571feaf76ad117a49ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b98b0fc1c71a2ec8a2a116e1f75be2ee96432102360d571feaf76ad117a49ac->enter($__internal_6b98b0fc1c71a2ec8a2a116e1f75be2ee96432102360d571feaf76ad117a49ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_6b98b0fc1c71a2ec8a2a116e1f75be2ee96432102360d571feaf76ad117a49ac->leave($__internal_6b98b0fc1c71a2ec8a2a116e1f75be2ee96432102360d571feaf76ad117a49ac_prof);

        
        $__internal_7025455017de0a5a4125adf812f758c48290052a362d268795826dfb7c821a22->leave($__internal_7025455017de0a5a4125adf812f758c48290052a362d268795826dfb7c821a22_prof);

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

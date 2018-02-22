<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_298cf54c58792f25ac8818fef990ce8056f723f4629c475495d5bb707b3416cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_996df3e13aaea2d5939727a602d44d91ac74f0114060689a9edb4878cad9f039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_996df3e13aaea2d5939727a602d44d91ac74f0114060689a9edb4878cad9f039->enter($__internal_996df3e13aaea2d5939727a602d44d91ac74f0114060689a9edb4878cad9f039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_51c656e3aecf264027d4cc01563fe8bfb519972f404f0d2a41f0dfd797a43837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c656e3aecf264027d4cc01563fe8bfb519972f404f0d2a41f0dfd797a43837->enter($__internal_51c656e3aecf264027d4cc01563fe8bfb519972f404f0d2a41f0dfd797a43837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_996df3e13aaea2d5939727a602d44d91ac74f0114060689a9edb4878cad9f039->leave($__internal_996df3e13aaea2d5939727a602d44d91ac74f0114060689a9edb4878cad9f039_prof);

        
        $__internal_51c656e3aecf264027d4cc01563fe8bfb519972f404f0d2a41f0dfd797a43837->leave($__internal_51c656e3aecf264027d4cc01563fe8bfb519972f404f0d2a41f0dfd797a43837_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4a14676ce06dd2def11f814afd2b199eb98d610c3662a63bfb3ac42fa73c7f84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a14676ce06dd2def11f814afd2b199eb98d610c3662a63bfb3ac42fa73c7f84->enter($__internal_4a14676ce06dd2def11f814afd2b199eb98d610c3662a63bfb3ac42fa73c7f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bee831b692ce660794e957be96e449d02ab83d3a37ad920d5569c7d255f8702f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bee831b692ce660794e957be96e449d02ab83d3a37ad920d5569c7d255f8702f->enter($__internal_bee831b692ce660794e957be96e449d02ab83d3a37ad920d5569c7d255f8702f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 7, $this->getSourceContext()); })())) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) || array_key_exists("targetUrl", $context) ? $context["targetUrl"] : (function () { throw new Twig_Error_Runtime('Variable "targetUrl" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_bee831b692ce660794e957be96e449d02ab83d3a37ad920d5569c7d255f8702f->leave($__internal_bee831b692ce660794e957be96e449d02ab83d3a37ad920d5569c7d255f8702f_prof);

        
        $__internal_4a14676ce06dd2def11f814afd2b199eb98d610c3662a63bfb3ac42fa73c7f84->leave($__internal_4a14676ce06dd2def11f814afd2b199eb98d610c3662a63bfb3ac42fa73c7f84_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/var/www/html/Agence_immobilier/Immobilier/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}

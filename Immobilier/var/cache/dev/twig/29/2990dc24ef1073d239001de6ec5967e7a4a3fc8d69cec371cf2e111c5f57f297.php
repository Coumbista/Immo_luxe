<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_b8b9b5339bbdc148dd497ae95e9f9e44d12232f5f6ebdac9efa5346aecea907f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_9f9eed1be5b7568c6f4137959b3ef238490c727e59ba1ee46e6fd4137119d98a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f9eed1be5b7568c6f4137959b3ef238490c727e59ba1ee46e6fd4137119d98a->enter($__internal_9f9eed1be5b7568c6f4137959b3ef238490c727e59ba1ee46e6fd4137119d98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_ba90f6d7c6957b090a71b53830441281b4b93fcf1617a385dca7ff5f613ee774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba90f6d7c6957b090a71b53830441281b4b93fcf1617a385dca7ff5f613ee774->enter($__internal_ba90f6d7c6957b090a71b53830441281b4b93fcf1617a385dca7ff5f613ee774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f9eed1be5b7568c6f4137959b3ef238490c727e59ba1ee46e6fd4137119d98a->leave($__internal_9f9eed1be5b7568c6f4137959b3ef238490c727e59ba1ee46e6fd4137119d98a_prof);

        
        $__internal_ba90f6d7c6957b090a71b53830441281b4b93fcf1617a385dca7ff5f613ee774->leave($__internal_ba90f6d7c6957b090a71b53830441281b4b93fcf1617a385dca7ff5f613ee774_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_49e3565d406a808f187a032071eb547f0deef36a8a049703e71503070ecd065e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49e3565d406a808f187a032071eb547f0deef36a8a049703e71503070ecd065e->enter($__internal_49e3565d406a808f187a032071eb547f0deef36a8a049703e71503070ecd065e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6b3b1cd6cd54c4cfe49d66b0581960a55c18ee310bb8d8cb0d1abb00f82d8601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b3b1cd6cd54c4cfe49d66b0581960a55c18ee310bb8d8cb0d1abb00f82d8601->enter($__internal_6b3b1cd6cd54c4cfe49d66b0581960a55c18ee310bb8d8cb0d1abb00f82d8601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_6b3b1cd6cd54c4cfe49d66b0581960a55c18ee310bb8d8cb0d1abb00f82d8601->leave($__internal_6b3b1cd6cd54c4cfe49d66b0581960a55c18ee310bb8d8cb0d1abb00f82d8601_prof);

        
        $__internal_49e3565d406a808f187a032071eb547f0deef36a8a049703e71503070ecd065e->leave($__internal_49e3565d406a808f187a032071eb547f0deef36a8a049703e71503070ecd065e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/var/www/html/Agence_immobilier/Immobilier/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}

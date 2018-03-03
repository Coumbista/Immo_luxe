<?php

/* @EasyAdmin/default/field_date.html.twig */
class __TwigTemplate_59563baea3932c5e036a493b0b93bccbf7ea43853dcd0f2d702b56e40cd1492b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3f8376f39a9e19bdeae658d45d07876b9d133b7fcfa27b0ae78b4d5681804e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3f8376f39a9e19bdeae658d45d07876b9d133b7fcfa27b0ae78b4d5681804e2->enter($__internal_c3f8376f39a9e19bdeae658d45d07876b9d133b7fcfa27b0ae78b4d5681804e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_date.html.twig"));

        $__internal_5d417a271aa68c66eeab82c78c91cffb70826186c52c43a2b22eb7d0215f1792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d417a271aa68c66eeab82c78c91cffb70826186c52c43a2b22eb7d0215f1792->enter($__internal_5d417a271aa68c66eeab82c78c91cffb70826186c52c43a2b22eb7d0215f1792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 1, $this->getSourceContext()); })()), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_c3f8376f39a9e19bdeae658d45d07876b9d133b7fcfa27b0ae78b4d5681804e2->leave($__internal_c3f8376f39a9e19bdeae658d45d07876b9d133b7fcfa27b0ae78b4d5681804e2_prof);

        
        $__internal_5d417a271aa68c66eeab82c78c91cffb70826186c52c43a2b22eb7d0215f1792->leave($__internal_5d417a271aa68c66eeab82c78c91cffb70826186c52c43a2b22eb7d0215f1792_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ value|date(field_options.format) }}
", "@EasyAdmin/default/field_date.html.twig", "/var/www/html/Agence_immobilier/Immobilier/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_date.html.twig");
    }
}

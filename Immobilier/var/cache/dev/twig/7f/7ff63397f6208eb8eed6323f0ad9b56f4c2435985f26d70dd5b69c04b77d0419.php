<?php

/* @EasyAdmin/default/field_datetime.html.twig */
class __TwigTemplate_8ddceb183f566a09de57303f72ac9b53788594658f1be622e77076917ef6ad2a extends Twig_Template
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
        $__internal_1289d688cbf50470c4d225d7b0b903f721ab5919d8b91ae5fb12fdda5a96c2b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1289d688cbf50470c4d225d7b0b903f721ab5919d8b91ae5fb12fdda5a96c2b5->enter($__internal_1289d688cbf50470c4d225d7b0b903f721ab5919d8b91ae5fb12fdda5a96c2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        $__internal_6f4fb810a9c57a8ff05fc398a026e579630437fad455fa295b42ee6641d0f9f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f4fb810a9c57a8ff05fc398a026e579630437fad455fa295b42ee6641d0f9f7->enter($__internal_6f4fb810a9c57a8ff05fc398a026e579630437fad455fa295b42ee6641d0f9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 1, $this->getSourceContext()); })()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 1, $this->getSourceContext()); })()), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_1289d688cbf50470c4d225d7b0b903f721ab5919d8b91ae5fb12fdda5a96c2b5->leave($__internal_1289d688cbf50470c4d225d7b0b903f721ab5919d8b91ae5fb12fdda5a96c2b5_prof);

        
        $__internal_6f4fb810a9c57a8ff05fc398a026e579630437fad455fa295b42ee6641d0f9f7->leave($__internal_6f4fb810a9c57a8ff05fc398a026e579630437fad455fa295b42ee6641d0f9f7_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_datetime.html.twig";
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
", "@EasyAdmin/default/field_datetime.html.twig", "/var/www/html/Agence_immobilier/Immobilier/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_datetime.html.twig");
    }
}

<?php

/* @EasyAdmin/default/field_integer.html.twig */
class __TwigTemplate_3c605dffc5fdfb8444fe7f3cfb71e54bf25392c7e6dceec06eea2d49229035d2 extends Twig_Template
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
        $__internal_b4b71e46a66f7b72db9928a1826a1e888e4c69ab845198b71384733b97962a6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4b71e46a66f7b72db9928a1826a1e888e4c69ab845198b71384733b97962a6d->enter($__internal_b4b71e46a66f7b72db9928a1826a1e888e4c69ab845198b71384733b97962a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_integer.html.twig"));

        $__internal_742d2c57b984cb78c6537ff307cc1fda90239d540f968aeca865e8de4cfc4779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_742d2c57b984cb78c6537ff307cc1fda90239d540f968aeca865e8de4cfc4779->enter($__internal_742d2c57b984cb78c6537ff307cc1fda90239d540f968aeca865e8de4cfc4779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_integer.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 1, $this->getSourceContext()); })()), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new Twig_Error_Runtime('Variable "field_options" does not exist.', 2, $this->getSourceContext()); })()), "format", array()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })())), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })())), "html", null, true);
            echo "
";
        }
        
        $__internal_b4b71e46a66f7b72db9928a1826a1e888e4c69ab845198b71384733b97962a6d->leave($__internal_b4b71e46a66f7b72db9928a1826a1e888e4c69ab845198b71384733b97962a6d_prof);

        
        $__internal_742d2c57b984cb78c6537ff307cc1fda90239d540f968aeca865e8de4cfc4779->leave($__internal_742d2c57b984cb78c6537ff307cc1fda90239d540f968aeca865e8de4cfc4779_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if field_options.format %}
    {{ field_options.format|format(value) }}
{% else %}
    {{ value|number_format }}
{% endif %}
", "@EasyAdmin/default/field_integer.html.twig", "/var/www/html/Agence_immobilier/Immobilier/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_integer.html.twig");
    }
}

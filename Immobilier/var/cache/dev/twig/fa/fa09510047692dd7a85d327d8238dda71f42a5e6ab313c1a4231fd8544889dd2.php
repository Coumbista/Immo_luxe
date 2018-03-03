<?php

/* @EasyAdmin/default/field_toggle.html.twig */
class __TwigTemplate_16f23dd3b357fbacf0be8d3d38a5b2eb2914371ab6b8ec9c1fa933ff355dc2cd extends Twig_Template
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
        $__internal_567c86f3f45d4155769ba0a6f56ca276571f1a13bb022c41af0b7a37c02fa978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_567c86f3f45d4155769ba0a6f56ca276571f1a13bb022c41af0b7a37c02fa978->enter($__internal_567c86f3f45d4155769ba0a6f56ca276571f1a13bb022c41af0b7a37c02fa978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_toggle.html.twig"));

        $__internal_ded8ec7bddba0ec400f63f6f152b19eea2e2a1ad94c12380cc235df1b5e13878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded8ec7bddba0ec400f63f6f152b19eea2e2a1ad94c12380cc235df1b5e13878->enter($__internal_ded8ec7bddba0ec400f63f6f152b19eea2e2a1ad94c12380cc235df1b5e13878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_toggle.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((((isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 3, $this->getSourceContext()); })()) == "show") || twig_in_filter("edit", twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["backend_config"]) || array_key_exists("backend_config", $context) ? $context["backend_config"] : (function () { throw new Twig_Error_Runtime('Variable "backend_config" does not exist.', 3, $this->getSourceContext()); })()), "disabled_actions", array())))) {
            // line 4
            echo "    ";
            if (((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })()) == true)) {
                // line 5
                echo "        <span class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            } else {
                // line 7
                echo "        <span class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            }
        } else {
            // line 10
            echo "    <input type=\"checkbox\" ";
            echo ((((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 10, $this->getSourceContext()); })()) == true)) ? ("checked") : (""));
            echo "
       data-toggle=\"toggle\" data-size=\"mini\"
       data-onstyle=\"success\" data-offstyle=\"danger\"
       data-on=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "\" data-off=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "\">
";
        }
        
        $__internal_567c86f3f45d4155769ba0a6f56ca276571f1a13bb022c41af0b7a37c02fa978->leave($__internal_567c86f3f45d4155769ba0a6f56ca276571f1a13bb022c41af0b7a37c02fa978_prof);

        
        $__internal_ded8ec7bddba0ec400f63f6f152b19eea2e2a1ad94c12380cc235df1b5e13878->leave($__internal_ded8ec7bddba0ec400f63f6f152b19eea2e2a1ad94c12380cc235df1b5e13878_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  46 => 10,  39 => 7,  33 => 5,  30 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

{% if view == 'show' or ('edit' in backend_config.disabled_actions) %}
    {% if value == true %}
        <span class=\"label label-success\">{{ 'label.true'|trans }}</span>
    {% else %}
        <span class=\"label label-danger\">{{ 'label.false'|trans }}</span>
    {% endif %}
{% else %}
    <input type=\"checkbox\" {{ value == true ? 'checked' : '' }}
       data-toggle=\"toggle\" data-size=\"mini\"
       data-onstyle=\"success\" data-offstyle=\"danger\"
       data-on=\"{{ 'label.true'|trans }}\" data-off=\"{{ 'label.false'|trans }}\">
{% endif %}
", "@EasyAdmin/default/field_toggle.html.twig", "/var/www/html/Agence_immobilier/Immobilier/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_toggle.html.twig");
    }
}

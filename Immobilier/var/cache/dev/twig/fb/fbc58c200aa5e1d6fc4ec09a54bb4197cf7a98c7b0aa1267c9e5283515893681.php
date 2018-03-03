<?php

/* @EasyAdmin/default/field_string.html.twig */
class __TwigTemplate_28f8d6cda687b3f4a5c8d88d4624c5086d8dea863ef7b2e0fe10fff3237b594a extends Twig_Template
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
        $__internal_a3a336385df173b60bf66b69a3907d7a9aa8a578f067ec33514b897240d13ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3a336385df173b60bf66b69a3907d7a9aa8a578f067ec33514b897240d13ad3->enter($__internal_a3a336385df173b60bf66b69a3907d7a9aa8a578f067ec33514b897240d13ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        $__internal_6ae91092cf43094b6d1c8c7791acd80ef2f637f4c8064bee24bee879143a21fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae91092cf43094b6d1c8c7791acd80ef2f637f4c8064bee24bee879143a21fb->enter($__internal_6ae91092cf43094b6d1c8c7791acd80ef2f637f4c8064bee24bee879143a21fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        // line 1
        if (((isset($context["view"]) || array_key_exists("view", $context) ? $context["view"] : (function () { throw new Twig_Error_Runtime('Variable "view" does not exist.', 1, $this->getSourceContext()); })()) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 4, $this->getSourceContext()); })())), "html", null, true);
            echo "
";
        }
        
        $__internal_a3a336385df173b60bf66b69a3907d7a9aa8a578f067ec33514b897240d13ad3->leave($__internal_a3a336385df173b60bf66b69a3907d7a9aa8a578f067ec33514b897240d13ad3_prof);

        
        $__internal_6ae91092cf43094b6d1c8c7791acd80ef2f637f4c8064bee24bee879143a21fb->leave($__internal_6ae91092cf43094b6d1c8c7791acd80ef2f637f4c8064bee24bee879143a21fb_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_string.html.twig";
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
        return new Twig_Source("{% if view == 'show' %}
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "@EasyAdmin/default/field_string.html.twig", "/var/www/html/Agence_immobilier/Immobilier/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_string.html.twig");
    }
}

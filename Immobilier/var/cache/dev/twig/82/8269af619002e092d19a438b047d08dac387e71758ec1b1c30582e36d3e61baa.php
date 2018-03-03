<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_2c28117c35e706f8280e1566c044e1c1af8f1e913c3f3f90f6b3d15385297ef6 extends Twig_Template
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
        $__internal_1e3de14de6485bd584209331b93d3fa8d6056f9d11b1caaf831e14936740b97d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e3de14de6485bd584209331b93d3fa8d6056f9d11b1caaf831e14936740b97d->enter($__internal_1e3de14de6485bd584209331b93d3fa8d6056f9d11b1caaf831e14936740b97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        $__internal_ed3d86544d6ed152c05c05dbde6391732c8b61e5021090c78d1bc2424d30f71d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed3d86544d6ed152c05c05dbde6391732c8b61e5021090c78d1bc2424d30f71d->enter($__internal_ed3d86544d6ed152c05c05dbde6391732c8b61e5021090c78d1bc2424d30f71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 2, $this->getSourceContext()); })()), "html", null, true);
        echo "
";
        
        $__internal_1e3de14de6485bd584209331b93d3fa8d6056f9d11b1caaf831e14936740b97d->leave($__internal_1e3de14de6485bd584209331b93d3fa8d6056f9d11b1caaf831e14936740b97d_prof);

        
        $__internal_ed3d86544d6ed152c05c05dbde6391732c8b61e5021090c78d1bc2424d30f71d->leave($__internal_ed3d86544d6ed152c05c05dbde6391732c8b61e5021090c78d1bc2424d30f71d_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "@EasyAdmin/default/field_id.html.twig", "/var/www/html/Agence_immobilier/Immobilier/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_id.html.twig");
    }
}

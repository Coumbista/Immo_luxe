<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_faafd446f3b89ef21f33bce88bbebc7fb095e8bce981a02bc5860c431990ca8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d92f7ba16cfaae222d0c465eda4ee1627ec53748204b92002148719646ee6401 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d92f7ba16cfaae222d0c465eda4ee1627ec53748204b92002148719646ee6401->enter($__internal_d92f7ba16cfaae222d0c465eda4ee1627ec53748204b92002148719646ee6401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d6ef05881f7d7305639de0070715d4e1b061554ec45717b820c44094fd13bab0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ef05881f7d7305639de0070715d4e1b061554ec45717b820c44094fd13bab0->enter($__internal_d6ef05881f7d7305639de0070715d4e1b061554ec45717b820c44094fd13bab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d92f7ba16cfaae222d0c465eda4ee1627ec53748204b92002148719646ee6401->leave($__internal_d92f7ba16cfaae222d0c465eda4ee1627ec53748204b92002148719646ee6401_prof);

        
        $__internal_d6ef05881f7d7305639de0070715d4e1b061554ec45717b820c44094fd13bab0->leave($__internal_d6ef05881f7d7305639de0070715d4e1b061554ec45717b820c44094fd13bab0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1a6acd6cae841d295d09476af2c78477a6af40d80b1ff50a5e7d2052469e16fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a6acd6cae841d295d09476af2c78477a6af40d80b1ff50a5e7d2052469e16fa->enter($__internal_1a6acd6cae841d295d09476af2c78477a6af40d80b1ff50a5e7d2052469e16fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d7e60c47bc3400f57b59a28f79336fa28fc1ae5ccb6f3305ff18469595d3db98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e60c47bc3400f57b59a28f79336fa28fc1ae5ccb6f3305ff18469595d3db98->enter($__internal_d7e60c47bc3400f57b59a28f79336fa28fc1ae5ccb6f3305ff18469595d3db98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d7e60c47bc3400f57b59a28f79336fa28fc1ae5ccb6f3305ff18469595d3db98->leave($__internal_d7e60c47bc3400f57b59a28f79336fa28fc1ae5ccb6f3305ff18469595d3db98_prof);

        
        $__internal_1a6acd6cae841d295d09476af2c78477a6af40d80b1ff50a5e7d2052469e16fa->leave($__internal_1a6acd6cae841d295d09476af2c78477a6af40d80b1ff50a5e7d2052469e16fa_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f5ed091ce5017ee0a2cdfab9e16ce2441275983120a2e67a1055ee9a3ec69a58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5ed091ce5017ee0a2cdfab9e16ce2441275983120a2e67a1055ee9a3ec69a58->enter($__internal_f5ed091ce5017ee0a2cdfab9e16ce2441275983120a2e67a1055ee9a3ec69a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b3ca876bd198ee569ffab6963786164776eaa7c3cc02b6fd04df1922a406c47d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ca876bd198ee569ffab6963786164776eaa7c3cc02b6fd04df1922a406c47d->enter($__internal_b3ca876bd198ee569ffab6963786164776eaa7c3cc02b6fd04df1922a406c47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b3ca876bd198ee569ffab6963786164776eaa7c3cc02b6fd04df1922a406c47d->leave($__internal_b3ca876bd198ee569ffab6963786164776eaa7c3cc02b6fd04df1922a406c47d_prof);

        
        $__internal_f5ed091ce5017ee0a2cdfab9e16ce2441275983120a2e67a1055ee9a3ec69a58->leave($__internal_f5ed091ce5017ee0a2cdfab9e16ce2441275983120a2e67a1055ee9a3ec69a58_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fe7b4830a9b01a04fecffdd14f709837b1e0505276be0a78a5acecfaa8365208 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe7b4830a9b01a04fecffdd14f709837b1e0505276be0a78a5acecfaa8365208->enter($__internal_fe7b4830a9b01a04fecffdd14f709837b1e0505276be0a78a5acecfaa8365208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1e4b12827bd235881b03b5e49802111565cdb602e8476c81b09e3ad275d58baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e4b12827bd235881b03b5e49802111565cdb602e8476c81b09e3ad275d58baa->enter($__internal_1e4b12827bd235881b03b5e49802111565cdb602e8476c81b09e3ad275d58baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_1e4b12827bd235881b03b5e49802111565cdb602e8476c81b09e3ad275d58baa->leave($__internal_1e4b12827bd235881b03b5e49802111565cdb602e8476c81b09e3ad275d58baa_prof);

        
        $__internal_fe7b4830a9b01a04fecffdd14f709837b1e0505276be0a78a5acecfaa8365208->leave($__internal_fe7b4830a9b01a04fecffdd14f709837b1e0505276be0a78a5acecfaa8365208_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/Agence_immobilier/Immobilier/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

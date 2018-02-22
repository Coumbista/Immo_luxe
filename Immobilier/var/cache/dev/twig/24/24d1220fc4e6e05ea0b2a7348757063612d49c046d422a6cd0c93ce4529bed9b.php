<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f193e8972f909f895db6d11452d75c7c5b5177002b9f2fa21a6b626111d3b72a extends Twig_Template
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
        $__internal_8ea672cfbe47fc4826b1bb41f5a4e7e8774c7ee346d4850725637a8c60c636df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ea672cfbe47fc4826b1bb41f5a4e7e8774c7ee346d4850725637a8c60c636df->enter($__internal_8ea672cfbe47fc4826b1bb41f5a4e7e8774c7ee346d4850725637a8c60c636df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_fde0f48521433470a60c8519a4efe98503334504601128672368a04794c5c3cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde0f48521433470a60c8519a4efe98503334504601128672368a04794c5c3cf->enter($__internal_fde0f48521433470a60c8519a4efe98503334504601128672368a04794c5c3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ea672cfbe47fc4826b1bb41f5a4e7e8774c7ee346d4850725637a8c60c636df->leave($__internal_8ea672cfbe47fc4826b1bb41f5a4e7e8774c7ee346d4850725637a8c60c636df_prof);

        
        $__internal_fde0f48521433470a60c8519a4efe98503334504601128672368a04794c5c3cf->leave($__internal_fde0f48521433470a60c8519a4efe98503334504601128672368a04794c5c3cf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2589fe6187a3b4e6b64adc7eaa7ba346da450c1ce4db3790a957a54cbc9b457c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2589fe6187a3b4e6b64adc7eaa7ba346da450c1ce4db3790a957a54cbc9b457c->enter($__internal_2589fe6187a3b4e6b64adc7eaa7ba346da450c1ce4db3790a957a54cbc9b457c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_616479e131ff61b9edb2239430f122e250be15313cecc1880a93be7d85373537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_616479e131ff61b9edb2239430f122e250be15313cecc1880a93be7d85373537->enter($__internal_616479e131ff61b9edb2239430f122e250be15313cecc1880a93be7d85373537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_616479e131ff61b9edb2239430f122e250be15313cecc1880a93be7d85373537->leave($__internal_616479e131ff61b9edb2239430f122e250be15313cecc1880a93be7d85373537_prof);

        
        $__internal_2589fe6187a3b4e6b64adc7eaa7ba346da450c1ce4db3790a957a54cbc9b457c->leave($__internal_2589fe6187a3b4e6b64adc7eaa7ba346da450c1ce4db3790a957a54cbc9b457c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_acb2253a9f90baf9ba807b4e52906f36ceb76e31a158b82131e73a8fcf14aabf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acb2253a9f90baf9ba807b4e52906f36ceb76e31a158b82131e73a8fcf14aabf->enter($__internal_acb2253a9f90baf9ba807b4e52906f36ceb76e31a158b82131e73a8fcf14aabf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_85bf255281bc408bcda6de6fd235cd0baf4e15dd5c09ce6b8e65dbf32f2f669f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85bf255281bc408bcda6de6fd235cd0baf4e15dd5c09ce6b8e65dbf32f2f669f->enter($__internal_85bf255281bc408bcda6de6fd235cd0baf4e15dd5c09ce6b8e65dbf32f2f669f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_85bf255281bc408bcda6de6fd235cd0baf4e15dd5c09ce6b8e65dbf32f2f669f->leave($__internal_85bf255281bc408bcda6de6fd235cd0baf4e15dd5c09ce6b8e65dbf32f2f669f_prof);

        
        $__internal_acb2253a9f90baf9ba807b4e52906f36ceb76e31a158b82131e73a8fcf14aabf->leave($__internal_acb2253a9f90baf9ba807b4e52906f36ceb76e31a158b82131e73a8fcf14aabf_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f792b2c29123e432533e69ab49f7d7677557e9825e969e51118e7865835ed2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f792b2c29123e432533e69ab49f7d7677557e9825e969e51118e7865835ed2e->enter($__internal_6f792b2c29123e432533e69ab49f7d7677557e9825e969e51118e7865835ed2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_747205f3909ccef0bc6afaf300fc71c8cc7af2fcc02bc76793f9f2fe415ffff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_747205f3909ccef0bc6afaf300fc71c8cc7af2fcc02bc76793f9f2fe415ffff1->enter($__internal_747205f3909ccef0bc6afaf300fc71c8cc7af2fcc02bc76793f9f2fe415ffff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_747205f3909ccef0bc6afaf300fc71c8cc7af2fcc02bc76793f9f2fe415ffff1->leave($__internal_747205f3909ccef0bc6afaf300fc71c8cc7af2fcc02bc76793f9f2fe415ffff1_prof);

        
        $__internal_6f792b2c29123e432533e69ab49f7d7677557e9825e969e51118e7865835ed2e->leave($__internal_6f792b2c29123e432533e69ab49f7d7677557e9825e969e51118e7865835ed2e_prof);

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

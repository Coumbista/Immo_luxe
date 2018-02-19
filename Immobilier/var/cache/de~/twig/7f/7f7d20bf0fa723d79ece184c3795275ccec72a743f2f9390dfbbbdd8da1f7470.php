<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8036970b2f6c4eebcb26741f343431e46198547e170ecb11af2f9ef3d6502a5f extends Twig_Template
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
        $__internal_5ce24f91847168a82a663c421c35ef549a9bbe7f04ccdddc5019ceadc8fe7390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ce24f91847168a82a663c421c35ef549a9bbe7f04ccdddc5019ceadc8fe7390->enter($__internal_5ce24f91847168a82a663c421c35ef549a9bbe7f04ccdddc5019ceadc8fe7390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_70625b306713fd2fe5de2ea395a40c02ffa71f4f0505300878de89cbb04daacd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70625b306713fd2fe5de2ea395a40c02ffa71f4f0505300878de89cbb04daacd->enter($__internal_70625b306713fd2fe5de2ea395a40c02ffa71f4f0505300878de89cbb04daacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ce24f91847168a82a663c421c35ef549a9bbe7f04ccdddc5019ceadc8fe7390->leave($__internal_5ce24f91847168a82a663c421c35ef549a9bbe7f04ccdddc5019ceadc8fe7390_prof);

        
        $__internal_70625b306713fd2fe5de2ea395a40c02ffa71f4f0505300878de89cbb04daacd->leave($__internal_70625b306713fd2fe5de2ea395a40c02ffa71f4f0505300878de89cbb04daacd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6981c60c93b802c2e18e0ac76de29109887a97d436c7c834809d3e3bd87a7990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6981c60c93b802c2e18e0ac76de29109887a97d436c7c834809d3e3bd87a7990->enter($__internal_6981c60c93b802c2e18e0ac76de29109887a97d436c7c834809d3e3bd87a7990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6de6fb07d630b10a8a00de3a2bd769ab6ca079431135afd4cc5ffaa09bd40a16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6de6fb07d630b10a8a00de3a2bd769ab6ca079431135afd4cc5ffaa09bd40a16->enter($__internal_6de6fb07d630b10a8a00de3a2bd769ab6ca079431135afd4cc5ffaa09bd40a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6de6fb07d630b10a8a00de3a2bd769ab6ca079431135afd4cc5ffaa09bd40a16->leave($__internal_6de6fb07d630b10a8a00de3a2bd769ab6ca079431135afd4cc5ffaa09bd40a16_prof);

        
        $__internal_6981c60c93b802c2e18e0ac76de29109887a97d436c7c834809d3e3bd87a7990->leave($__internal_6981c60c93b802c2e18e0ac76de29109887a97d436c7c834809d3e3bd87a7990_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ac0b6b2b7cb27b9781706d062eb6c7cb76073cf2a625730c44441ad2ce449e61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac0b6b2b7cb27b9781706d062eb6c7cb76073cf2a625730c44441ad2ce449e61->enter($__internal_ac0b6b2b7cb27b9781706d062eb6c7cb76073cf2a625730c44441ad2ce449e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_79283c59ebcfe1a9ca08b8617d2575d9fd468e6cc5216b5393f6cace3ac1ff6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79283c59ebcfe1a9ca08b8617d2575d9fd468e6cc5216b5393f6cace3ac1ff6c->enter($__internal_79283c59ebcfe1a9ca08b8617d2575d9fd468e6cc5216b5393f6cace3ac1ff6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_79283c59ebcfe1a9ca08b8617d2575d9fd468e6cc5216b5393f6cace3ac1ff6c->leave($__internal_79283c59ebcfe1a9ca08b8617d2575d9fd468e6cc5216b5393f6cace3ac1ff6c_prof);

        
        $__internal_ac0b6b2b7cb27b9781706d062eb6c7cb76073cf2a625730c44441ad2ce449e61->leave($__internal_ac0b6b2b7cb27b9781706d062eb6c7cb76073cf2a625730c44441ad2ce449e61_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7617a6aa7462f824ddca1f67032bf2480552d9a7daef4b15cdd5354a7866f6d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7617a6aa7462f824ddca1f67032bf2480552d9a7daef4b15cdd5354a7866f6d9->enter($__internal_7617a6aa7462f824ddca1f67032bf2480552d9a7daef4b15cdd5354a7866f6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7607692bdced66da6672aac6046b85037f11c8d7aed19b30dd4f7f54f5242527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7607692bdced66da6672aac6046b85037f11c8d7aed19b30dd4f7f54f5242527->enter($__internal_7607692bdced66da6672aac6046b85037f11c8d7aed19b30dd4f7f54f5242527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_7607692bdced66da6672aac6046b85037f11c8d7aed19b30dd4f7f54f5242527->leave($__internal_7607692bdced66da6672aac6046b85037f11c8d7aed19b30dd4f7f54f5242527_prof);

        
        $__internal_7617a6aa7462f824ddca1f67032bf2480552d9a7daef4b15cdd5354a7866f6d9->leave($__internal_7617a6aa7462f824ddca1f67032bf2480552d9a7daef4b15cdd5354a7866f6d9_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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

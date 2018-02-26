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
        $__internal_ee0dfbdcd73028ea791cc19020a83d84fd22b5ebd3d38f0542d54df7b4245ce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee0dfbdcd73028ea791cc19020a83d84fd22b5ebd3d38f0542d54df7b4245ce9->enter($__internal_ee0dfbdcd73028ea791cc19020a83d84fd22b5ebd3d38f0542d54df7b4245ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_dc59553d26ff0f84758221d4fcf57c10a24a1922480f89dbf523ca65de9bae64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc59553d26ff0f84758221d4fcf57c10a24a1922480f89dbf523ca65de9bae64->enter($__internal_dc59553d26ff0f84758221d4fcf57c10a24a1922480f89dbf523ca65de9bae64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee0dfbdcd73028ea791cc19020a83d84fd22b5ebd3d38f0542d54df7b4245ce9->leave($__internal_ee0dfbdcd73028ea791cc19020a83d84fd22b5ebd3d38f0542d54df7b4245ce9_prof);

        
        $__internal_dc59553d26ff0f84758221d4fcf57c10a24a1922480f89dbf523ca65de9bae64->leave($__internal_dc59553d26ff0f84758221d4fcf57c10a24a1922480f89dbf523ca65de9bae64_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1b76d360458186cbfd30fd3931a603f9649b22fce946dc438782af1d8a99926c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b76d360458186cbfd30fd3931a603f9649b22fce946dc438782af1d8a99926c->enter($__internal_1b76d360458186cbfd30fd3931a603f9649b22fce946dc438782af1d8a99926c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b15ca1c74753919ab0d3e4bdb8599848713057b5b599fd5b6e4333c99ac394d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b15ca1c74753919ab0d3e4bdb8599848713057b5b599fd5b6e4333c99ac394d3->enter($__internal_b15ca1c74753919ab0d3e4bdb8599848713057b5b599fd5b6e4333c99ac394d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b15ca1c74753919ab0d3e4bdb8599848713057b5b599fd5b6e4333c99ac394d3->leave($__internal_b15ca1c74753919ab0d3e4bdb8599848713057b5b599fd5b6e4333c99ac394d3_prof);

        
        $__internal_1b76d360458186cbfd30fd3931a603f9649b22fce946dc438782af1d8a99926c->leave($__internal_1b76d360458186cbfd30fd3931a603f9649b22fce946dc438782af1d8a99926c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8dc6c514cb306acaad22f313ea87f8255b78520a634410b4b678b6ec5e29d184 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dc6c514cb306acaad22f313ea87f8255b78520a634410b4b678b6ec5e29d184->enter($__internal_8dc6c514cb306acaad22f313ea87f8255b78520a634410b4b678b6ec5e29d184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e88719ecb491ffee388060914e4d8c3a65e03def65f93f5cb4e5bf98f749fa74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e88719ecb491ffee388060914e4d8c3a65e03def65f93f5cb4e5bf98f749fa74->enter($__internal_e88719ecb491ffee388060914e4d8c3a65e03def65f93f5cb4e5bf98f749fa74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e88719ecb491ffee388060914e4d8c3a65e03def65f93f5cb4e5bf98f749fa74->leave($__internal_e88719ecb491ffee388060914e4d8c3a65e03def65f93f5cb4e5bf98f749fa74_prof);

        
        $__internal_8dc6c514cb306acaad22f313ea87f8255b78520a634410b4b678b6ec5e29d184->leave($__internal_8dc6c514cb306acaad22f313ea87f8255b78520a634410b4b678b6ec5e29d184_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e99aca7469c00e60d71c2d20d0598bbc3b56822ac2925a5a2736335eb1ab158f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e99aca7469c00e60d71c2d20d0598bbc3b56822ac2925a5a2736335eb1ab158f->enter($__internal_e99aca7469c00e60d71c2d20d0598bbc3b56822ac2925a5a2736335eb1ab158f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2ea38f485d657e8edc9bb93708ca4e141ef8f8813d41eacd4aa50b7cfa8b5199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea38f485d657e8edc9bb93708ca4e141ef8f8813d41eacd4aa50b7cfa8b5199->enter($__internal_2ea38f485d657e8edc9bb93708ca4e141ef8f8813d41eacd4aa50b7cfa8b5199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_2ea38f485d657e8edc9bb93708ca4e141ef8f8813d41eacd4aa50b7cfa8b5199->leave($__internal_2ea38f485d657e8edc9bb93708ca4e141ef8f8813d41eacd4aa50b7cfa8b5199_prof);

        
        $__internal_e99aca7469c00e60d71c2d20d0598bbc3b56822ac2925a5a2736335eb1ab158f->leave($__internal_e99aca7469c00e60d71c2d20d0598bbc3b56822ac2925a5a2736335eb1ab158f_prof);

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

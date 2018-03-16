<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_5293df33c60afce6a89541fa56580e3a55831353e97e63a7aee42baa58ecddc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d8fa3ac5249e643298e1075725544c3d92a3394d28304b7d52d88b0a4def572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d8fa3ac5249e643298e1075725544c3d92a3394d28304b7d52d88b0a4def572->enter($__internal_1d8fa3ac5249e643298e1075725544c3d92a3394d28304b7d52d88b0a4def572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_c3b5a22a165693fcf0af440f85ccdca590f6cb7f22b231983f0fa18b5fc9f340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3b5a22a165693fcf0af440f85ccdca590f6cb7f22b231983f0fa18b5fc9f340->enter($__internal_c3b5a22a165693fcf0af440f85ccdca590f6cb7f22b231983f0fa18b5fc9f340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d8fa3ac5249e643298e1075725544c3d92a3394d28304b7d52d88b0a4def572->leave($__internal_1d8fa3ac5249e643298e1075725544c3d92a3394d28304b7d52d88b0a4def572_prof);

        
        $__internal_c3b5a22a165693fcf0af440f85ccdca590f6cb7f22b231983f0fa18b5fc9f340->leave($__internal_c3b5a22a165693fcf0af440f85ccdca590f6cb7f22b231983f0fa18b5fc9f340_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7d35a6a763d43e23c78dd088754f724edf4f162a6538ebf8f417ac3d46cb510d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d35a6a763d43e23c78dd088754f724edf4f162a6538ebf8f417ac3d46cb510d->enter($__internal_7d35a6a763d43e23c78dd088754f724edf4f162a6538ebf8f417ac3d46cb510d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e373efa9835795ea234e8ab0dc61b6f37071e03e42cd51652884c349a3f6eccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e373efa9835795ea234e8ab0dc61b6f37071e03e42cd51652884c349a3f6eccc->enter($__internal_e373efa9835795ea234e8ab0dc61b6f37071e03e42cd51652884c349a3f6eccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_e373efa9835795ea234e8ab0dc61b6f37071e03e42cd51652884c349a3f6eccc->leave($__internal_e373efa9835795ea234e8ab0dc61b6f37071e03e42cd51652884c349a3f6eccc_prof);

        
        $__internal_7d35a6a763d43e23c78dd088754f724edf4f162a6538ebf8f417ac3d46cb510d->leave($__internal_7d35a6a763d43e23c78dd088754f724edf4f162a6538ebf8f417ac3d46cb510d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/Agence_immobilier/Immobilier/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}

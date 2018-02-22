<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_9431ce1584e515b000f755464d5eecd2109c758e493498b375c4daa84105d234 extends Twig_Template
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
        $__internal_1a9076b7036a61cc1fdeec997c1017db4618d271c4bbdbc7f703c6480ca044a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a9076b7036a61cc1fdeec997c1017db4618d271c4bbdbc7f703c6480ca044a9->enter($__internal_1a9076b7036a61cc1fdeec997c1017db4618d271c4bbdbc7f703c6480ca044a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_566106984826dd89bdb2a0c2fb72416cb0bd2bba05dd2858febd1491f93a524a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566106984826dd89bdb2a0c2fb72416cb0bd2bba05dd2858febd1491f93a524a->enter($__internal_566106984826dd89bdb2a0c2fb72416cb0bd2bba05dd2858febd1491f93a524a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a9076b7036a61cc1fdeec997c1017db4618d271c4bbdbc7f703c6480ca044a9->leave($__internal_1a9076b7036a61cc1fdeec997c1017db4618d271c4bbdbc7f703c6480ca044a9_prof);

        
        $__internal_566106984826dd89bdb2a0c2fb72416cb0bd2bba05dd2858febd1491f93a524a->leave($__internal_566106984826dd89bdb2a0c2fb72416cb0bd2bba05dd2858febd1491f93a524a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a1a563d05d5cf92fdccc44cb4e78f152e8b90948308c8389c394ce0c64be6d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1a563d05d5cf92fdccc44cb4e78f152e8b90948308c8389c394ce0c64be6d44->enter($__internal_a1a563d05d5cf92fdccc44cb4e78f152e8b90948308c8389c394ce0c64be6d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3d7a142998f0c1e1805de526be44c0b097bb441d53ea53493f8d5312d7526fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d7a142998f0c1e1805de526be44c0b097bb441d53ea53493f8d5312d7526fc5->enter($__internal_3d7a142998f0c1e1805de526be44c0b097bb441d53ea53493f8d5312d7526fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_3d7a142998f0c1e1805de526be44c0b097bb441d53ea53493f8d5312d7526fc5->leave($__internal_3d7a142998f0c1e1805de526be44c0b097bb441d53ea53493f8d5312d7526fc5_prof);

        
        $__internal_a1a563d05d5cf92fdccc44cb4e78f152e8b90948308c8389c394ce0c64be6d44->leave($__internal_a1a563d05d5cf92fdccc44cb4e78f152e8b90948308c8389c394ce0c64be6d44_prof);

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

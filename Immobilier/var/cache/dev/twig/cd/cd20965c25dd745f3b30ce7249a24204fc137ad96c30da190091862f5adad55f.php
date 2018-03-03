<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_450f57bac3121d114030d7ffb9a027753d5b0bcaff3110d8296c75cffc168314 extends Twig_Template
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
        $__internal_be9a2e2ad98c698430d482472db815405af636521e6a509b50fa1ebed8b9309f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be9a2e2ad98c698430d482472db815405af636521e6a509b50fa1ebed8b9309f->enter($__internal_be9a2e2ad98c698430d482472db815405af636521e6a509b50fa1ebed8b9309f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_cef6a1155eda4a92a53da7b6e302696390611c4a8706dea99f82f01ce7bcdbd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cef6a1155eda4a92a53da7b6e302696390611c4a8706dea99f82f01ce7bcdbd1->enter($__internal_cef6a1155eda4a92a53da7b6e302696390611c4a8706dea99f82f01ce7bcdbd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be9a2e2ad98c698430d482472db815405af636521e6a509b50fa1ebed8b9309f->leave($__internal_be9a2e2ad98c698430d482472db815405af636521e6a509b50fa1ebed8b9309f_prof);

        
        $__internal_cef6a1155eda4a92a53da7b6e302696390611c4a8706dea99f82f01ce7bcdbd1->leave($__internal_cef6a1155eda4a92a53da7b6e302696390611c4a8706dea99f82f01ce7bcdbd1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_128bb366bfb28b84aaf9bb7165c1c0113369ce7c6c9d6c4bcf2752c0143b947a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_128bb366bfb28b84aaf9bb7165c1c0113369ce7c6c9d6c4bcf2752c0143b947a->enter($__internal_128bb366bfb28b84aaf9bb7165c1c0113369ce7c6c9d6c4bcf2752c0143b947a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_823c0b4bee1c0012116d16f7a2908e7d4f8daa97a359f32fc8e89df7bfce0123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_823c0b4bee1c0012116d16f7a2908e7d4f8daa97a359f32fc8e89df7bfce0123->enter($__internal_823c0b4bee1c0012116d16f7a2908e7d4f8daa97a359f32fc8e89df7bfce0123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_823c0b4bee1c0012116d16f7a2908e7d4f8daa97a359f32fc8e89df7bfce0123->leave($__internal_823c0b4bee1c0012116d16f7a2908e7d4f8daa97a359f32fc8e89df7bfce0123_prof);

        
        $__internal_128bb366bfb28b84aaf9bb7165c1c0113369ce7c6c9d6c4bcf2752c0143b947a->leave($__internal_128bb366bfb28b84aaf9bb7165c1c0113369ce7c6c9d6c4bcf2752c0143b947a_prof);

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

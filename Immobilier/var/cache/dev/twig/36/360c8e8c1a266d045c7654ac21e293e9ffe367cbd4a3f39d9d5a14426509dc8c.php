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
        $__internal_13f17d958fc2ec5f15a654ec954975afd39d257e6920f9da57813f863839ae87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13f17d958fc2ec5f15a654ec954975afd39d257e6920f9da57813f863839ae87->enter($__internal_13f17d958fc2ec5f15a654ec954975afd39d257e6920f9da57813f863839ae87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_a7ae93f488f1c46158fe4eb34e8bcb03bb23d17a5ccae98634b1106f9ccfe47c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ae93f488f1c46158fe4eb34e8bcb03bb23d17a5ccae98634b1106f9ccfe47c->enter($__internal_a7ae93f488f1c46158fe4eb34e8bcb03bb23d17a5ccae98634b1106f9ccfe47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13f17d958fc2ec5f15a654ec954975afd39d257e6920f9da57813f863839ae87->leave($__internal_13f17d958fc2ec5f15a654ec954975afd39d257e6920f9da57813f863839ae87_prof);

        
        $__internal_a7ae93f488f1c46158fe4eb34e8bcb03bb23d17a5ccae98634b1106f9ccfe47c->leave($__internal_a7ae93f488f1c46158fe4eb34e8bcb03bb23d17a5ccae98634b1106f9ccfe47c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_31ce19a7274b1f5244d015fd0659f3be460197e7b9095d83343eb70c4fd2b005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31ce19a7274b1f5244d015fd0659f3be460197e7b9095d83343eb70c4fd2b005->enter($__internal_31ce19a7274b1f5244d015fd0659f3be460197e7b9095d83343eb70c4fd2b005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_eb056b5aecb0e05b9e9390c8a34b86453acfa88b9031a7aaf08fdbb417189677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb056b5aecb0e05b9e9390c8a34b86453acfa88b9031a7aaf08fdbb417189677->enter($__internal_eb056b5aecb0e05b9e9390c8a34b86453acfa88b9031a7aaf08fdbb417189677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_eb056b5aecb0e05b9e9390c8a34b86453acfa88b9031a7aaf08fdbb417189677->leave($__internal_eb056b5aecb0e05b9e9390c8a34b86453acfa88b9031a7aaf08fdbb417189677_prof);

        
        $__internal_31ce19a7274b1f5244d015fd0659f3be460197e7b9095d83343eb70c4fd2b005->leave($__internal_31ce19a7274b1f5244d015fd0659f3be460197e7b9095d83343eb70c4fd2b005_prof);

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

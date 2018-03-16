<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1826c083824dc2f572aaaf1b9d10706ac1ef6c525f9f20ca95da0e43f85c15e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_8fcd389541514bc192c23375185f28968cf65aa5fd819e1fb72660162ac1b6bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fcd389541514bc192c23375185f28968cf65aa5fd819e1fb72660162ac1b6bc->enter($__internal_8fcd389541514bc192c23375185f28968cf65aa5fd819e1fb72660162ac1b6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_814355f71b1bf57f64672308c548be34b11d6f455f3584ec3625350aeee015f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_814355f71b1bf57f64672308c548be34b11d6f455f3584ec3625350aeee015f1->enter($__internal_814355f71b1bf57f64672308c548be34b11d6f455f3584ec3625350aeee015f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fcd389541514bc192c23375185f28968cf65aa5fd819e1fb72660162ac1b6bc->leave($__internal_8fcd389541514bc192c23375185f28968cf65aa5fd819e1fb72660162ac1b6bc_prof);

        
        $__internal_814355f71b1bf57f64672308c548be34b11d6f455f3584ec3625350aeee015f1->leave($__internal_814355f71b1bf57f64672308c548be34b11d6f455f3584ec3625350aeee015f1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c26ac73038dc02728b2c270136c528bc567d9c964b3a22db9dc147f90eb0b5b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c26ac73038dc02728b2c270136c528bc567d9c964b3a22db9dc147f90eb0b5b1->enter($__internal_c26ac73038dc02728b2c270136c528bc567d9c964b3a22db9dc147f90eb0b5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c44f26fb00bee48452a83d449243e73857ad6249a4a3ac7a8186ebf6797e77a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c44f26fb00bee48452a83d449243e73857ad6249a4a3ac7a8186ebf6797e77a2->enter($__internal_c44f26fb00bee48452a83d449243e73857ad6249a4a3ac7a8186ebf6797e77a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c44f26fb00bee48452a83d449243e73857ad6249a4a3ac7a8186ebf6797e77a2->leave($__internal_c44f26fb00bee48452a83d449243e73857ad6249a4a3ac7a8186ebf6797e77a2_prof);

        
        $__internal_c26ac73038dc02728b2c270136c528bc567d9c964b3a22db9dc147f90eb0b5b1->leave($__internal_c26ac73038dc02728b2c270136c528bc567d9c964b3a22db9dc147f90eb0b5b1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_652fc56769437b861668caf0c8328fc2b7d12998ea80bae38f8e17ff37281c4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_652fc56769437b861668caf0c8328fc2b7d12998ea80bae38f8e17ff37281c4e->enter($__internal_652fc56769437b861668caf0c8328fc2b7d12998ea80bae38f8e17ff37281c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d238503338b280a6a261803d50632cbd51a605b49c595fb7b3c7b0df2cfbe86c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d238503338b280a6a261803d50632cbd51a605b49c595fb7b3c7b0df2cfbe86c->enter($__internal_d238503338b280a6a261803d50632cbd51a605b49c595fb7b3c7b0df2cfbe86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d238503338b280a6a261803d50632cbd51a605b49c595fb7b3c7b0df2cfbe86c->leave($__internal_d238503338b280a6a261803d50632cbd51a605b49c595fb7b3c7b0df2cfbe86c_prof);

        
        $__internal_652fc56769437b861668caf0c8328fc2b7d12998ea80bae38f8e17ff37281c4e->leave($__internal_652fc56769437b861668caf0c8328fc2b7d12998ea80bae38f8e17ff37281c4e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_165a8358cc4e19434ffeef41549f49e8bf87fa9688ce482a61a58b302419400f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_165a8358cc4e19434ffeef41549f49e8bf87fa9688ce482a61a58b302419400f->enter($__internal_165a8358cc4e19434ffeef41549f49e8bf87fa9688ce482a61a58b302419400f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4eb84fbd2e4f1fb065230e01233b7b41e9565960869248f770bc8db5fd79f407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eb84fbd2e4f1fb065230e01233b7b41e9565960869248f770bc8db5fd79f407->enter($__internal_4eb84fbd2e4f1fb065230e01233b7b41e9565960869248f770bc8db5fd79f407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_4eb84fbd2e4f1fb065230e01233b7b41e9565960869248f770bc8db5fd79f407->leave($__internal_4eb84fbd2e4f1fb065230e01233b7b41e9565960869248f770bc8db5fd79f407_prof);

        
        $__internal_165a8358cc4e19434ffeef41549f49e8bf87fa9688ce482a61a58b302419400f->leave($__internal_165a8358cc4e19434ffeef41549f49e8bf87fa9688ce482a61a58b302419400f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Agence_immobilier/Immobilier/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

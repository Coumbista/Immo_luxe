<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6536c7a79900b96c5e68c53576e260761a598b11f23c14f40d5e3fe2f833c39a extends Twig_Template
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
        $__internal_e6afc75da79a5956190913fd3ab9cfacb56622ca668095b793c3b6b1288d32b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6afc75da79a5956190913fd3ab9cfacb56622ca668095b793c3b6b1288d32b6->enter($__internal_e6afc75da79a5956190913fd3ab9cfacb56622ca668095b793c3b6b1288d32b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9fe516d685c15a5e6ce71107c206aad20158257a47ff06001f8633b20b161bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe516d685c15a5e6ce71107c206aad20158257a47ff06001f8633b20b161bfa->enter($__internal_9fe516d685c15a5e6ce71107c206aad20158257a47ff06001f8633b20b161bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6afc75da79a5956190913fd3ab9cfacb56622ca668095b793c3b6b1288d32b6->leave($__internal_e6afc75da79a5956190913fd3ab9cfacb56622ca668095b793c3b6b1288d32b6_prof);

        
        $__internal_9fe516d685c15a5e6ce71107c206aad20158257a47ff06001f8633b20b161bfa->leave($__internal_9fe516d685c15a5e6ce71107c206aad20158257a47ff06001f8633b20b161bfa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_772ec61f90120af295349c000f830ec968df0790fc913d3316325bc2b16999fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_772ec61f90120af295349c000f830ec968df0790fc913d3316325bc2b16999fc->enter($__internal_772ec61f90120af295349c000f830ec968df0790fc913d3316325bc2b16999fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9d8096a7aa4e8660f099025b6cae568097e1e1034345f60496315e00e8006abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d8096a7aa4e8660f099025b6cae568097e1e1034345f60496315e00e8006abf->enter($__internal_9d8096a7aa4e8660f099025b6cae568097e1e1034345f60496315e00e8006abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9d8096a7aa4e8660f099025b6cae568097e1e1034345f60496315e00e8006abf->leave($__internal_9d8096a7aa4e8660f099025b6cae568097e1e1034345f60496315e00e8006abf_prof);

        
        $__internal_772ec61f90120af295349c000f830ec968df0790fc913d3316325bc2b16999fc->leave($__internal_772ec61f90120af295349c000f830ec968df0790fc913d3316325bc2b16999fc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0b8b106fcabae6e08dab5eef095e525b116fa1831cc0fe5acc997d8f37eb01b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b8b106fcabae6e08dab5eef095e525b116fa1831cc0fe5acc997d8f37eb01b9->enter($__internal_0b8b106fcabae6e08dab5eef095e525b116fa1831cc0fe5acc997d8f37eb01b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_051c229b4c99461cf63b72252ca6df8103368d2bf2cc15408064d6e2922b268b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_051c229b4c99461cf63b72252ca6df8103368d2bf2cc15408064d6e2922b268b->enter($__internal_051c229b4c99461cf63b72252ca6df8103368d2bf2cc15408064d6e2922b268b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_051c229b4c99461cf63b72252ca6df8103368d2bf2cc15408064d6e2922b268b->leave($__internal_051c229b4c99461cf63b72252ca6df8103368d2bf2cc15408064d6e2922b268b_prof);

        
        $__internal_0b8b106fcabae6e08dab5eef095e525b116fa1831cc0fe5acc997d8f37eb01b9->leave($__internal_0b8b106fcabae6e08dab5eef095e525b116fa1831cc0fe5acc997d8f37eb01b9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2d229791800ddcaf15d19bf6623d7acf5d0470d7c2cfd6db308756603bbecab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d229791800ddcaf15d19bf6623d7acf5d0470d7c2cfd6db308756603bbecab4->enter($__internal_2d229791800ddcaf15d19bf6623d7acf5d0470d7c2cfd6db308756603bbecab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6fe0d05d9a842120cb91cf3462ccf15d84128777864157c854633042071096dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fe0d05d9a842120cb91cf3462ccf15d84128777864157c854633042071096dc->enter($__internal_6fe0d05d9a842120cb91cf3462ccf15d84128777864157c854633042071096dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_6fe0d05d9a842120cb91cf3462ccf15d84128777864157c854633042071096dc->leave($__internal_6fe0d05d9a842120cb91cf3462ccf15d84128777864157c854633042071096dc_prof);

        
        $__internal_2d229791800ddcaf15d19bf6623d7acf5d0470d7c2cfd6db308756603bbecab4->leave($__internal_2d229791800ddcaf15d19bf6623d7acf5d0470d7c2cfd6db308756603bbecab4_prof);

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

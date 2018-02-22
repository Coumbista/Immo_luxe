<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_afdc865d359d165441f3129614822f5216cba1e81b6be52c33845862e8a536c1 extends Twig_Template
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
        $__internal_2710718ca27d87fab1e7501756511ca07e8b19bd19f63bff1a83f8b4bdeb449c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2710718ca27d87fab1e7501756511ca07e8b19bd19f63bff1a83f8b4bdeb449c->enter($__internal_2710718ca27d87fab1e7501756511ca07e8b19bd19f63bff1a83f8b4bdeb449c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_72ccc171a94b3369a806a086f0487bcf0029860768258cbbecb1e7f6abea5f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ccc171a94b3369a806a086f0487bcf0029860768258cbbecb1e7f6abea5f7f->enter($__internal_72ccc171a94b3369a806a086f0487bcf0029860768258cbbecb1e7f6abea5f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2710718ca27d87fab1e7501756511ca07e8b19bd19f63bff1a83f8b4bdeb449c->leave($__internal_2710718ca27d87fab1e7501756511ca07e8b19bd19f63bff1a83f8b4bdeb449c_prof);

        
        $__internal_72ccc171a94b3369a806a086f0487bcf0029860768258cbbecb1e7f6abea5f7f->leave($__internal_72ccc171a94b3369a806a086f0487bcf0029860768258cbbecb1e7f6abea5f7f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bb83b10da1c85a2eba8b2cbbe6641cd2438713f07e16298cc9d58c521d93ea70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb83b10da1c85a2eba8b2cbbe6641cd2438713f07e16298cc9d58c521d93ea70->enter($__internal_bb83b10da1c85a2eba8b2cbbe6641cd2438713f07e16298cc9d58c521d93ea70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2f4e50650b6930655cd2df6186e5915c5aef3dfba1ad5f5a650479259f86c966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4e50650b6930655cd2df6186e5915c5aef3dfba1ad5f5a650479259f86c966->enter($__internal_2f4e50650b6930655cd2df6186e5915c5aef3dfba1ad5f5a650479259f86c966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2f4e50650b6930655cd2df6186e5915c5aef3dfba1ad5f5a650479259f86c966->leave($__internal_2f4e50650b6930655cd2df6186e5915c5aef3dfba1ad5f5a650479259f86c966_prof);

        
        $__internal_bb83b10da1c85a2eba8b2cbbe6641cd2438713f07e16298cc9d58c521d93ea70->leave($__internal_bb83b10da1c85a2eba8b2cbbe6641cd2438713f07e16298cc9d58c521d93ea70_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cb03b5e2156b6474d8970ce5157cf0cd7183f0aa8eb4d1afb194d6f1a4d81372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb03b5e2156b6474d8970ce5157cf0cd7183f0aa8eb4d1afb194d6f1a4d81372->enter($__internal_cb03b5e2156b6474d8970ce5157cf0cd7183f0aa8eb4d1afb194d6f1a4d81372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a33a07e699edea0457f6fe8e1286bd4d1836203619cced225fca56c763a6dc20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a33a07e699edea0457f6fe8e1286bd4d1836203619cced225fca56c763a6dc20->enter($__internal_a33a07e699edea0457f6fe8e1286bd4d1836203619cced225fca56c763a6dc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a33a07e699edea0457f6fe8e1286bd4d1836203619cced225fca56c763a6dc20->leave($__internal_a33a07e699edea0457f6fe8e1286bd4d1836203619cced225fca56c763a6dc20_prof);

        
        $__internal_cb03b5e2156b6474d8970ce5157cf0cd7183f0aa8eb4d1afb194d6f1a4d81372->leave($__internal_cb03b5e2156b6474d8970ce5157cf0cd7183f0aa8eb4d1afb194d6f1a4d81372_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a92c70fc34004f8f4f18b722e8d50404f4f57533691b8c810b92d4a9e124911b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a92c70fc34004f8f4f18b722e8d50404f4f57533691b8c810b92d4a9e124911b->enter($__internal_a92c70fc34004f8f4f18b722e8d50404f4f57533691b8c810b92d4a9e124911b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_82d8e9c7d9281f36c9879030c294de15ea7849558dcab692adc0695346df02f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82d8e9c7d9281f36c9879030c294de15ea7849558dcab692adc0695346df02f0->enter($__internal_82d8e9c7d9281f36c9879030c294de15ea7849558dcab692adc0695346df02f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_82d8e9c7d9281f36c9879030c294de15ea7849558dcab692adc0695346df02f0->leave($__internal_82d8e9c7d9281f36c9879030c294de15ea7849558dcab692adc0695346df02f0_prof);

        
        $__internal_a92c70fc34004f8f4f18b722e8d50404f4f57533691b8c810b92d4a9e124911b->leave($__internal_a92c70fc34004f8f4f18b722e8d50404f4f57533691b8c810b92d4a9e124911b_prof);

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

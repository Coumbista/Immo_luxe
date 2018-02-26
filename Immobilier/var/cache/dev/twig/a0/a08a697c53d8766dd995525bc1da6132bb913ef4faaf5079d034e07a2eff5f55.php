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
        $__internal_101d50b6c6b3d66f46ad231d897a9cd727940047e846492064dea4a011f077d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_101d50b6c6b3d66f46ad231d897a9cd727940047e846492064dea4a011f077d0->enter($__internal_101d50b6c6b3d66f46ad231d897a9cd727940047e846492064dea4a011f077d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e35cd0744e301fd93dcddb24fe993b570c05ac6ff1a7ac8fc4e82765f8c9ae83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e35cd0744e301fd93dcddb24fe993b570c05ac6ff1a7ac8fc4e82765f8c9ae83->enter($__internal_e35cd0744e301fd93dcddb24fe993b570c05ac6ff1a7ac8fc4e82765f8c9ae83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_101d50b6c6b3d66f46ad231d897a9cd727940047e846492064dea4a011f077d0->leave($__internal_101d50b6c6b3d66f46ad231d897a9cd727940047e846492064dea4a011f077d0_prof);

        
        $__internal_e35cd0744e301fd93dcddb24fe993b570c05ac6ff1a7ac8fc4e82765f8c9ae83->leave($__internal_e35cd0744e301fd93dcddb24fe993b570c05ac6ff1a7ac8fc4e82765f8c9ae83_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_01b713bdfad82a3c6ce129356f860d34c1e06da38cee1aa655fecb34d65c2f27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01b713bdfad82a3c6ce129356f860d34c1e06da38cee1aa655fecb34d65c2f27->enter($__internal_01b713bdfad82a3c6ce129356f860d34c1e06da38cee1aa655fecb34d65c2f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c929cc9af3cdbb81a7847e2530edc33394fcda83862802fd244527d128fa0311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c929cc9af3cdbb81a7847e2530edc33394fcda83862802fd244527d128fa0311->enter($__internal_c929cc9af3cdbb81a7847e2530edc33394fcda83862802fd244527d128fa0311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c929cc9af3cdbb81a7847e2530edc33394fcda83862802fd244527d128fa0311->leave($__internal_c929cc9af3cdbb81a7847e2530edc33394fcda83862802fd244527d128fa0311_prof);

        
        $__internal_01b713bdfad82a3c6ce129356f860d34c1e06da38cee1aa655fecb34d65c2f27->leave($__internal_01b713bdfad82a3c6ce129356f860d34c1e06da38cee1aa655fecb34d65c2f27_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a69d09433302eb873923403cef506021f4392ad2d0966935e3a424646048f30f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a69d09433302eb873923403cef506021f4392ad2d0966935e3a424646048f30f->enter($__internal_a69d09433302eb873923403cef506021f4392ad2d0966935e3a424646048f30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0f0d32308454fcc355bfe9436a1e905988464b361bfcfe694b29bc66b0bb4f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f0d32308454fcc355bfe9436a1e905988464b361bfcfe694b29bc66b0bb4f0a->enter($__internal_0f0d32308454fcc355bfe9436a1e905988464b361bfcfe694b29bc66b0bb4f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0f0d32308454fcc355bfe9436a1e905988464b361bfcfe694b29bc66b0bb4f0a->leave($__internal_0f0d32308454fcc355bfe9436a1e905988464b361bfcfe694b29bc66b0bb4f0a_prof);

        
        $__internal_a69d09433302eb873923403cef506021f4392ad2d0966935e3a424646048f30f->leave($__internal_a69d09433302eb873923403cef506021f4392ad2d0966935e3a424646048f30f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_11ce7373dc00ad8bae68905e299284a5343bf20024343a6b72c8d1b3acc98eda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11ce7373dc00ad8bae68905e299284a5343bf20024343a6b72c8d1b3acc98eda->enter($__internal_11ce7373dc00ad8bae68905e299284a5343bf20024343a6b72c8d1b3acc98eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_beba4e8cbd0eec21d75960dd2a3109003cba74394d0176e876b676ddd0c24087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beba4e8cbd0eec21d75960dd2a3109003cba74394d0176e876b676ddd0c24087->enter($__internal_beba4e8cbd0eec21d75960dd2a3109003cba74394d0176e876b676ddd0c24087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_beba4e8cbd0eec21d75960dd2a3109003cba74394d0176e876b676ddd0c24087->leave($__internal_beba4e8cbd0eec21d75960dd2a3109003cba74394d0176e876b676ddd0c24087_prof);

        
        $__internal_11ce7373dc00ad8bae68905e299284a5343bf20024343a6b72c8d1b3acc98eda->leave($__internal_11ce7373dc00ad8bae68905e299284a5343bf20024343a6b72c8d1b3acc98eda_prof);

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

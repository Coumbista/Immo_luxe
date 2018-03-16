<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_42f93e5261c8968d2bdf6120f7ef84ae4e603a495f6650d7cfb2900c4a8cc3f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_468d156e45aeeed898bb24c208caaa4895c6aa91ed517294bbc270dec41577d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_468d156e45aeeed898bb24c208caaa4895c6aa91ed517294bbc270dec41577d3->enter($__internal_468d156e45aeeed898bb24c208caaa4895c6aa91ed517294bbc270dec41577d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_f6df58afa40ad89049fb2a18958c09b474318aade9ad02351754a3289ed5cdc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6df58afa40ad89049fb2a18958c09b474318aade9ad02351754a3289ed5cdc7->enter($__internal_f6df58afa40ad89049fb2a18958c09b474318aade9ad02351754a3289ed5cdc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_468d156e45aeeed898bb24c208caaa4895c6aa91ed517294bbc270dec41577d3->leave($__internal_468d156e45aeeed898bb24c208caaa4895c6aa91ed517294bbc270dec41577d3_prof);

        
        $__internal_f6df58afa40ad89049fb2a18958c09b474318aade9ad02351754a3289ed5cdc7->leave($__internal_f6df58afa40ad89049fb2a18958c09b474318aade9ad02351754a3289ed5cdc7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/var/www/html/Agence_immobilier/Immobilier/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}

<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d8bbe4ab609a7b62230182c28a18eb15f82f8086afd2c8409099a9cb096f4c33 extends Twig_Template
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
        $__internal_099331db076331942ebf6ff9f72146a15495e9ff9be5122ffb2298c989d54d8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_099331db076331942ebf6ff9f72146a15495e9ff9be5122ffb2298c989d54d8d->enter($__internal_099331db076331942ebf6ff9f72146a15495e9ff9be5122ffb2298c989d54d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_46f7af10dc8daa4d39a5a12bc06628e3ee271448434a5982f4c8dc0f4daf4155 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f7af10dc8daa4d39a5a12bc06628e3ee271448434a5982f4c8dc0f4daf4155->enter($__internal_46f7af10dc8daa4d39a5a12bc06628e3ee271448434a5982f4c8dc0f4daf4155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_099331db076331942ebf6ff9f72146a15495e9ff9be5122ffb2298c989d54d8d->leave($__internal_099331db076331942ebf6ff9f72146a15495e9ff9be5122ffb2298c989d54d8d_prof);

        
        $__internal_46f7af10dc8daa4d39a5a12bc06628e3ee271448434a5982f4c8dc0f4daf4155->leave($__internal_46f7af10dc8daa4d39a5a12bc06628e3ee271448434a5982f4c8dc0f4daf4155_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5a87d4b0237d934881e6aa1ad307f1065707f266bb5e6b80a036134add0c0f6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a87d4b0237d934881e6aa1ad307f1065707f266bb5e6b80a036134add0c0f6f->enter($__internal_5a87d4b0237d934881e6aa1ad307f1065707f266bb5e6b80a036134add0c0f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_faf1faa8cc277f8f256fc93789ffd89f3dfc5ff9ce245707d14dbd1a171be0c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf1faa8cc277f8f256fc93789ffd89f3dfc5ff9ce245707d14dbd1a171be0c9->enter($__internal_faf1faa8cc277f8f256fc93789ffd89f3dfc5ff9ce245707d14dbd1a171be0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_faf1faa8cc277f8f256fc93789ffd89f3dfc5ff9ce245707d14dbd1a171be0c9->leave($__internal_faf1faa8cc277f8f256fc93789ffd89f3dfc5ff9ce245707d14dbd1a171be0c9_prof);

        
        $__internal_5a87d4b0237d934881e6aa1ad307f1065707f266bb5e6b80a036134add0c0f6f->leave($__internal_5a87d4b0237d934881e6aa1ad307f1065707f266bb5e6b80a036134add0c0f6f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dbee05647f443084bccda8ecdf551f420b652db3643ac29163eb51a05972c1ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbee05647f443084bccda8ecdf551f420b652db3643ac29163eb51a05972c1ac->enter($__internal_dbee05647f443084bccda8ecdf551f420b652db3643ac29163eb51a05972c1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e7cfeaa51bdd16c84749757035d6b188d71cf331d82ade959ef3a658bf0ea4cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7cfeaa51bdd16c84749757035d6b188d71cf331d82ade959ef3a658bf0ea4cc->enter($__internal_e7cfeaa51bdd16c84749757035d6b188d71cf331d82ade959ef3a658bf0ea4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e7cfeaa51bdd16c84749757035d6b188d71cf331d82ade959ef3a658bf0ea4cc->leave($__internal_e7cfeaa51bdd16c84749757035d6b188d71cf331d82ade959ef3a658bf0ea4cc_prof);

        
        $__internal_dbee05647f443084bccda8ecdf551f420b652db3643ac29163eb51a05972c1ac->leave($__internal_dbee05647f443084bccda8ecdf551f420b652db3643ac29163eb51a05972c1ac_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c4d17213fd6f46bd4baf50402b91893da71be466360dcb3970a0cf70226a8d47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4d17213fd6f46bd4baf50402b91893da71be466360dcb3970a0cf70226a8d47->enter($__internal_c4d17213fd6f46bd4baf50402b91893da71be466360dcb3970a0cf70226a8d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b68713c071be37ebf540d7af2b05a34383418ff82539a8a583280125c258e81f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b68713c071be37ebf540d7af2b05a34383418ff82539a8a583280125c258e81f->enter($__internal_b68713c071be37ebf540d7af2b05a34383418ff82539a8a583280125c258e81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b68713c071be37ebf540d7af2b05a34383418ff82539a8a583280125c258e81f->leave($__internal_b68713c071be37ebf540d7af2b05a34383418ff82539a8a583280125c258e81f_prof);

        
        $__internal_c4d17213fd6f46bd4baf50402b91893da71be466360dcb3970a0cf70226a8d47->leave($__internal_c4d17213fd6f46bd4baf50402b91893da71be466360dcb3970a0cf70226a8d47_prof);

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
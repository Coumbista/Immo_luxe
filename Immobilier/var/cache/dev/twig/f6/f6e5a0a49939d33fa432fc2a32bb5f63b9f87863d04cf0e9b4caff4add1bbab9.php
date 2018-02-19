<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_90aa7d27b5422ef3dabff398945722b09baa1cdca485189c8e6c2148e539afd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0a33166e98b293e886dc7a51825c8f653911acda75df0a26bf4cddf5e20ed76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a33166e98b293e886dc7a51825c8f653911acda75df0a26bf4cddf5e20ed76->enter($__internal_b0a33166e98b293e886dc7a51825c8f653911acda75df0a26bf4cddf5e20ed76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_12eb041c2172e8600a288664726b744e93d573ef3104de69891717fc1aa86808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12eb041c2172e8600a288664726b744e93d573ef3104de69891717fc1aa86808->enter($__internal_12eb041c2172e8600a288664726b744e93d573ef3104de69891717fc1aa86808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0a33166e98b293e886dc7a51825c8f653911acda75df0a26bf4cddf5e20ed76->leave($__internal_b0a33166e98b293e886dc7a51825c8f653911acda75df0a26bf4cddf5e20ed76_prof);

        
        $__internal_12eb041c2172e8600a288664726b744e93d573ef3104de69891717fc1aa86808->leave($__internal_12eb041c2172e8600a288664726b744e93d573ef3104de69891717fc1aa86808_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_78d4cccfd53776e3af6c42502b225c4d38e29c0e29897143e1a340512740e0d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78d4cccfd53776e3af6c42502b225c4d38e29c0e29897143e1a340512740e0d4->enter($__internal_78d4cccfd53776e3af6c42502b225c4d38e29c0e29897143e1a340512740e0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_cdf04736f6d2b5deec7fff3cd3113f61dd58a689656937ce05e031abe86ea3ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf04736f6d2b5deec7fff3cd3113f61dd58a689656937ce05e031abe86ea3ed->enter($__internal_cdf04736f6d2b5deec7fff3cd3113f61dd58a689656937ce05e031abe86ea3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_cdf04736f6d2b5deec7fff3cd3113f61dd58a689656937ce05e031abe86ea3ed->leave($__internal_cdf04736f6d2b5deec7fff3cd3113f61dd58a689656937ce05e031abe86ea3ed_prof);

        
        $__internal_78d4cccfd53776e3af6c42502b225c4d38e29c0e29897143e1a340512740e0d4->leave($__internal_78d4cccfd53776e3af6c42502b225c4d38e29c0e29897143e1a340512740e0d4_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_90506c4fa92ef38eb3fb48a9211444cf98f3bf0610aa5a608bb83a2f38d56b53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90506c4fa92ef38eb3fb48a9211444cf98f3bf0610aa5a608bb83a2f38d56b53->enter($__internal_90506c4fa92ef38eb3fb48a9211444cf98f3bf0610aa5a608bb83a2f38d56b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b49a81cffbdd4eeb6e3c5a314e56c84619a710693ed8303a7db30988541bce8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b49a81cffbdd4eeb6e3c5a314e56c84619a710693ed8303a7db30988541bce8e->enter($__internal_b49a81cffbdd4eeb6e3c5a314e56c84619a710693ed8303a7db30988541bce8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_b49a81cffbdd4eeb6e3c5a314e56c84619a710693ed8303a7db30988541bce8e->leave($__internal_b49a81cffbdd4eeb6e3c5a314e56c84619a710693ed8303a7db30988541bce8e_prof);

        
        $__internal_90506c4fa92ef38eb3fb48a9211444cf98f3bf0610aa5a608bb83a2f38d56b53->leave($__internal_90506c4fa92ef38eb3fb48a9211444cf98f3bf0610aa5a608bb83a2f38d56b53_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/var/www/html/Agence_immobilier/Immobilier/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}

<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cbe7533ba7e4fbb56103997f4660d86ae496e5649f7089b944846bef542c7c66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c41c03260c6c2cd0fcba3fc51bd6b7a852ac46c369409139164c68a38dd996fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c41c03260c6c2cd0fcba3fc51bd6b7a852ac46c369409139164c68a38dd996fb->enter($__internal_c41c03260c6c2cd0fcba3fc51bd6b7a852ac46c369409139164c68a38dd996fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c74a2a8b64f46970224f0853744d944b21ead07b2701327ccf012d1bc539b28c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c74a2a8b64f46970224f0853744d944b21ead07b2701327ccf012d1bc539b28c->enter($__internal_c74a2a8b64f46970224f0853744d944b21ead07b2701327ccf012d1bc539b28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c41c03260c6c2cd0fcba3fc51bd6b7a852ac46c369409139164c68a38dd996fb->leave($__internal_c41c03260c6c2cd0fcba3fc51bd6b7a852ac46c369409139164c68a38dd996fb_prof);

        
        $__internal_c74a2a8b64f46970224f0853744d944b21ead07b2701327ccf012d1bc539b28c->leave($__internal_c74a2a8b64f46970224f0853744d944b21ead07b2701327ccf012d1bc539b28c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_00e8be3237391a417e32d3ed7f333ece6a26a949bfbb832927538fd8f0150420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00e8be3237391a417e32d3ed7f333ece6a26a949bfbb832927538fd8f0150420->enter($__internal_00e8be3237391a417e32d3ed7f333ece6a26a949bfbb832927538fd8f0150420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_34b8da2d1b837f2aa46a04fd152b6037511984bd8702219c2a1b1af64e7ca7b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b8da2d1b837f2aa46a04fd152b6037511984bd8702219c2a1b1af64e7ca7b8->enter($__internal_34b8da2d1b837f2aa46a04fd152b6037511984bd8702219c2a1b1af64e7ca7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_34b8da2d1b837f2aa46a04fd152b6037511984bd8702219c2a1b1af64e7ca7b8->leave($__internal_34b8da2d1b837f2aa46a04fd152b6037511984bd8702219c2a1b1af64e7ca7b8_prof);

        
        $__internal_00e8be3237391a417e32d3ed7f333ece6a26a949bfbb832927538fd8f0150420->leave($__internal_00e8be3237391a417e32d3ed7f333ece6a26a949bfbb832927538fd8f0150420_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4c4442d64832bde86a2af80864cb7edf826893620d49b40aec1dfa20a155ad2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4c4442d64832bde86a2af80864cb7edf826893620d49b40aec1dfa20a155ad2->enter($__internal_d4c4442d64832bde86a2af80864cb7edf826893620d49b40aec1dfa20a155ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_76989f7448d77c365a7b1165d76267a13977a945af03d02a5482c7407ba58081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76989f7448d77c365a7b1165d76267a13977a945af03d02a5482c7407ba58081->enter($__internal_76989f7448d77c365a7b1165d76267a13977a945af03d02a5482c7407ba58081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_76989f7448d77c365a7b1165d76267a13977a945af03d02a5482c7407ba58081->leave($__internal_76989f7448d77c365a7b1165d76267a13977a945af03d02a5482c7407ba58081_prof);

        
        $__internal_d4c4442d64832bde86a2af80864cb7edf826893620d49b40aec1dfa20a155ad2->leave($__internal_d4c4442d64832bde86a2af80864cb7edf826893620d49b40aec1dfa20a155ad2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_0aef40e2a00e6156e3de3da0b461de0a365c811d7cbac24e57bbcd0b06d7b3b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aef40e2a00e6156e3de3da0b461de0a365c811d7cbac24e57bbcd0b06d7b3b7->enter($__internal_0aef40e2a00e6156e3de3da0b461de0a365c811d7cbac24e57bbcd0b06d7b3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a5a6bf394c03d61c71738d90cd2726721d953f6af82792ded11d2821520669b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a5a6bf394c03d61c71738d90cd2726721d953f6af82792ded11d2821520669b->enter($__internal_5a5a6bf394c03d61c71738d90cd2726721d953f6af82792ded11d2821520669b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_5a5a6bf394c03d61c71738d90cd2726721d953f6af82792ded11d2821520669b->leave($__internal_5a5a6bf394c03d61c71738d90cd2726721d953f6af82792ded11d2821520669b_prof);

        
        $__internal_0aef40e2a00e6156e3de3da0b461de0a365c811d7cbac24e57bbcd0b06d7b3b7->leave($__internal_0aef40e2a00e6156e3de3da0b461de0a365c811d7cbac24e57bbcd0b06d7b3b7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/Agence_immobilier/Immobilier/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

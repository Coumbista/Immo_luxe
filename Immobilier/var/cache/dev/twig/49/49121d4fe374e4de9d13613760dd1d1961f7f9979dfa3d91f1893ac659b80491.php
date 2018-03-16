<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_af74ac248a9a72af8159d7d97a58e1adbe8f6f632ce936153880009e1b1c5bcd extends Twig_Template
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
        $__internal_e2826f6e68e6fabdb83086a5c1a478947b7c4e1482748f6bae442f5fd2a4dafe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2826f6e68e6fabdb83086a5c1a478947b7c4e1482748f6bae442f5fd2a4dafe->enter($__internal_e2826f6e68e6fabdb83086a5c1a478947b7c4e1482748f6bae442f5fd2a4dafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_18db86287837e3d044e78766613c05b223393c55c92820580f9c2457a448f594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18db86287837e3d044e78766613c05b223393c55c92820580f9c2457a448f594->enter($__internal_18db86287837e3d044e78766613c05b223393c55c92820580f9c2457a448f594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2826f6e68e6fabdb83086a5c1a478947b7c4e1482748f6bae442f5fd2a4dafe->leave($__internal_e2826f6e68e6fabdb83086a5c1a478947b7c4e1482748f6bae442f5fd2a4dafe_prof);

        
        $__internal_18db86287837e3d044e78766613c05b223393c55c92820580f9c2457a448f594->leave($__internal_18db86287837e3d044e78766613c05b223393c55c92820580f9c2457a448f594_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f58d25cc9a0c922755886e4e07fe78396a36f7e92bac5befa9dee80fb9bc419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f58d25cc9a0c922755886e4e07fe78396a36f7e92bac5befa9dee80fb9bc419->enter($__internal_2f58d25cc9a0c922755886e4e07fe78396a36f7e92bac5befa9dee80fb9bc419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8ed01da830f38323c0272e1786375bd46e31b1c101e55bc8c748969229f3a9dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed01da830f38323c0272e1786375bd46e31b1c101e55bc8c748969229f3a9dc->enter($__internal_8ed01da830f38323c0272e1786375bd46e31b1c101e55bc8c748969229f3a9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8ed01da830f38323c0272e1786375bd46e31b1c101e55bc8c748969229f3a9dc->leave($__internal_8ed01da830f38323c0272e1786375bd46e31b1c101e55bc8c748969229f3a9dc_prof);

        
        $__internal_2f58d25cc9a0c922755886e4e07fe78396a36f7e92bac5befa9dee80fb9bc419->leave($__internal_2f58d25cc9a0c922755886e4e07fe78396a36f7e92bac5befa9dee80fb9bc419_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e85d989f807073a9656767fbb9092c5fbea0dfc581458e7b787172e17e1f432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e85d989f807073a9656767fbb9092c5fbea0dfc581458e7b787172e17e1f432->enter($__internal_1e85d989f807073a9656767fbb9092c5fbea0dfc581458e7b787172e17e1f432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e649739fb390e46d1cf3c65d5d6b51df73383eb45754848347c1010cd98c57fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e649739fb390e46d1cf3c65d5d6b51df73383eb45754848347c1010cd98c57fc->enter($__internal_e649739fb390e46d1cf3c65d5d6b51df73383eb45754848347c1010cd98c57fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_e649739fb390e46d1cf3c65d5d6b51df73383eb45754848347c1010cd98c57fc->leave($__internal_e649739fb390e46d1cf3c65d5d6b51df73383eb45754848347c1010cd98c57fc_prof);

        
        $__internal_1e85d989f807073a9656767fbb9092c5fbea0dfc581458e7b787172e17e1f432->leave($__internal_1e85d989f807073a9656767fbb9092c5fbea0dfc581458e7b787172e17e1f432_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8437fe0d12e7b3c1fcf57087230b01d2e8ce50e498437a729a7390a7b84a5fd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8437fe0d12e7b3c1fcf57087230b01d2e8ce50e498437a729a7390a7b84a5fd7->enter($__internal_8437fe0d12e7b3c1fcf57087230b01d2e8ce50e498437a729a7390a7b84a5fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d39c5e76ee13407f23f287bc463a76433702923ccc04c04beabe08c8933cf2ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d39c5e76ee13407f23f287bc463a76433702923ccc04c04beabe08c8933cf2ab->enter($__internal_d39c5e76ee13407f23f287bc463a76433702923ccc04c04beabe08c8933cf2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_d39c5e76ee13407f23f287bc463a76433702923ccc04c04beabe08c8933cf2ab->leave($__internal_d39c5e76ee13407f23f287bc463a76433702923ccc04c04beabe08c8933cf2ab_prof);

        
        $__internal_8437fe0d12e7b3c1fcf57087230b01d2e8ce50e498437a729a7390a7b84a5fd7->leave($__internal_8437fe0d12e7b3c1fcf57087230b01d2e8ce50e498437a729a7390a7b84a5fd7_prof);

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

<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8b4d72ac2e7371e92bef47f0cf2c28c13b633f8b28a75969ed375f53b1f3448f extends Twig_Template
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
        $__internal_f1c2cbfdf4f4bbfa881b6cc8724a3110bd2dfa5c05c16e13359731f21f8e6073 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1c2cbfdf4f4bbfa881b6cc8724a3110bd2dfa5c05c16e13359731f21f8e6073->enter($__internal_f1c2cbfdf4f4bbfa881b6cc8724a3110bd2dfa5c05c16e13359731f21f8e6073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_003105fbc7880e0ea504967c44fad504db76b53b346e701a9fd80c5bd9ce4b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_003105fbc7880e0ea504967c44fad504db76b53b346e701a9fd80c5bd9ce4b4d->enter($__internal_003105fbc7880e0ea504967c44fad504db76b53b346e701a9fd80c5bd9ce4b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1c2cbfdf4f4bbfa881b6cc8724a3110bd2dfa5c05c16e13359731f21f8e6073->leave($__internal_f1c2cbfdf4f4bbfa881b6cc8724a3110bd2dfa5c05c16e13359731f21f8e6073_prof);

        
        $__internal_003105fbc7880e0ea504967c44fad504db76b53b346e701a9fd80c5bd9ce4b4d->leave($__internal_003105fbc7880e0ea504967c44fad504db76b53b346e701a9fd80c5bd9ce4b4d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bc83c27bb810580e247cd4d6572b43349de8742418d7d058083632f94f5f0aa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc83c27bb810580e247cd4d6572b43349de8742418d7d058083632f94f5f0aa3->enter($__internal_bc83c27bb810580e247cd4d6572b43349de8742418d7d058083632f94f5f0aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ee6ec11fcf44398fe4e3d628b9946eb04a9bf4f60476aadadfad057f1d90f8d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee6ec11fcf44398fe4e3d628b9946eb04a9bf4f60476aadadfad057f1d90f8d2->enter($__internal_ee6ec11fcf44398fe4e3d628b9946eb04a9bf4f60476aadadfad057f1d90f8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ee6ec11fcf44398fe4e3d628b9946eb04a9bf4f60476aadadfad057f1d90f8d2->leave($__internal_ee6ec11fcf44398fe4e3d628b9946eb04a9bf4f60476aadadfad057f1d90f8d2_prof);

        
        $__internal_bc83c27bb810580e247cd4d6572b43349de8742418d7d058083632f94f5f0aa3->leave($__internal_bc83c27bb810580e247cd4d6572b43349de8742418d7d058083632f94f5f0aa3_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_be0c0c89266ce2b5f9ac08e61620f4649171d95f3f44c28475e690c26f7407cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be0c0c89266ce2b5f9ac08e61620f4649171d95f3f44c28475e690c26f7407cd->enter($__internal_be0c0c89266ce2b5f9ac08e61620f4649171d95f3f44c28475e690c26f7407cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b412e018129dfda1c38c1048a55cbc5b8ef20f0c8f979cfdea30b1c433e85bbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b412e018129dfda1c38c1048a55cbc5b8ef20f0c8f979cfdea30b1c433e85bbc->enter($__internal_b412e018129dfda1c38c1048a55cbc5b8ef20f0c8f979cfdea30b1c433e85bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_b412e018129dfda1c38c1048a55cbc5b8ef20f0c8f979cfdea30b1c433e85bbc->leave($__internal_b412e018129dfda1c38c1048a55cbc5b8ef20f0c8f979cfdea30b1c433e85bbc_prof);

        
        $__internal_be0c0c89266ce2b5f9ac08e61620f4649171d95f3f44c28475e690c26f7407cd->leave($__internal_be0c0c89266ce2b5f9ac08e61620f4649171d95f3f44c28475e690c26f7407cd_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_59155f701cfff2c14c9e9296ca763279a0e751f6208140bd2929488e2ae4c285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59155f701cfff2c14c9e9296ca763279a0e751f6208140bd2929488e2ae4c285->enter($__internal_59155f701cfff2c14c9e9296ca763279a0e751f6208140bd2929488e2ae4c285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bca78482cfea03ae23d74b898761f6368b10e2073da9a92ef2910bb07d9268a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bca78482cfea03ae23d74b898761f6368b10e2073da9a92ef2910bb07d9268a1->enter($__internal_bca78482cfea03ae23d74b898761f6368b10e2073da9a92ef2910bb07d9268a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_bca78482cfea03ae23d74b898761f6368b10e2073da9a92ef2910bb07d9268a1->leave($__internal_bca78482cfea03ae23d74b898761f6368b10e2073da9a92ef2910bb07d9268a1_prof);

        
        $__internal_59155f701cfff2c14c9e9296ca763279a0e751f6208140bd2929488e2ae4c285->leave($__internal_59155f701cfff2c14c9e9296ca763279a0e751f6208140bd2929488e2ae4c285_prof);

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

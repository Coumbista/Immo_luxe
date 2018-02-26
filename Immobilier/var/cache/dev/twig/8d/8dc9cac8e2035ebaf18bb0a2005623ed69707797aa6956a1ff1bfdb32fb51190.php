<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_4bbb3ed2b5cdf55cac4d5f4e3ede68d87338303fa9402d169289fbf7b75221bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_342bfef12add220aee5450898b277012938a30aa8a887f4bab4fa82d3063566c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_342bfef12add220aee5450898b277012938a30aa8a887f4bab4fa82d3063566c->enter($__internal_342bfef12add220aee5450898b277012938a30aa8a887f4bab4fa82d3063566c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_3a118c1353dd1cdf8ccc53aed78a660f698dbd0b2bb197bbb4cf4229276132db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a118c1353dd1cdf8ccc53aed78a660f698dbd0b2bb197bbb4cf4229276132db->enter($__internal_3a118c1353dd1cdf8ccc53aed78a660f698dbd0b2bb197bbb4cf4229276132db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_342bfef12add220aee5450898b277012938a30aa8a887f4bab4fa82d3063566c->leave($__internal_342bfef12add220aee5450898b277012938a30aa8a887f4bab4fa82d3063566c_prof);

        
        $__internal_3a118c1353dd1cdf8ccc53aed78a660f698dbd0b2bb197bbb4cf4229276132db->leave($__internal_3a118c1353dd1cdf8ccc53aed78a660f698dbd0b2bb197bbb4cf4229276132db_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a19c9b0ff41ba19ad1be1c86c692f2eabdb28c1d231c13d8ddbdfb6df7d5d649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a19c9b0ff41ba19ad1be1c86c692f2eabdb28c1d231c13d8ddbdfb6df7d5d649->enter($__internal_a19c9b0ff41ba19ad1be1c86c692f2eabdb28c1d231c13d8ddbdfb6df7d5d649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7573da8c2f433fe74fb111a1fc59e1659f2fe2477a92012ce92c16e58268e57f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7573da8c2f433fe74fb111a1fc59e1659f2fe2477a92012ce92c16e58268e57f->enter($__internal_7573da8c2f433fe74fb111a1fc59e1659f2fe2477a92012ce92c16e58268e57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7573da8c2f433fe74fb111a1fc59e1659f2fe2477a92012ce92c16e58268e57f->leave($__internal_7573da8c2f433fe74fb111a1fc59e1659f2fe2477a92012ce92c16e58268e57f_prof);

        
        $__internal_a19c9b0ff41ba19ad1be1c86c692f2eabdb28c1d231c13d8ddbdfb6df7d5d649->leave($__internal_a19c9b0ff41ba19ad1be1c86c692f2eabdb28c1d231c13d8ddbdfb6df7d5d649_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e377f764884c15156b93215dc168b1fc9c58753196cd077c3578ee19bc466624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e377f764884c15156b93215dc168b1fc9c58753196cd077c3578ee19bc466624->enter($__internal_e377f764884c15156b93215dc168b1fc9c58753196cd077c3578ee19bc466624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8c4685abc585170cff7c476bbe9341e02b20f4c488aea953ec6222ab925e4955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c4685abc585170cff7c476bbe9341e02b20f4c488aea953ec6222ab925e4955->enter($__internal_8c4685abc585170cff7c476bbe9341e02b20f4c488aea953ec6222ab925e4955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8c4685abc585170cff7c476bbe9341e02b20f4c488aea953ec6222ab925e4955->leave($__internal_8c4685abc585170cff7c476bbe9341e02b20f4c488aea953ec6222ab925e4955_prof);

        
        $__internal_e377f764884c15156b93215dc168b1fc9c58753196cd077c3578ee19bc466624->leave($__internal_e377f764884c15156b93215dc168b1fc9c58753196cd077c3578ee19bc466624_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a3dfce37839644e1ac01d3fe6c77ab9694c243665b43b98e6d950309dccf6c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a3dfce37839644e1ac01d3fe6c77ab9694c243665b43b98e6d950309dccf6c3->enter($__internal_9a3dfce37839644e1ac01d3fe6c77ab9694c243665b43b98e6d950309dccf6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eaeed672270dd229b1418a3372f785bbe5f019d153baa142122c47745481dd28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaeed672270dd229b1418a3372f785bbe5f019d153baa142122c47745481dd28->enter($__internal_eaeed672270dd229b1418a3372f785bbe5f019d153baa142122c47745481dd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eaeed672270dd229b1418a3372f785bbe5f019d153baa142122c47745481dd28->leave($__internal_eaeed672270dd229b1418a3372f785bbe5f019d153baa142122c47745481dd28_prof);

        
        $__internal_9a3dfce37839644e1ac01d3fe6c77ab9694c243665b43b98e6d950309dccf6c3->leave($__internal_9a3dfce37839644e1ac01d3fe6c77ab9694c243665b43b98e6d950309dccf6c3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/Agence_immobilier/Immobilier/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}

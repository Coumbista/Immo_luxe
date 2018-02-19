<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_21e1384dbb5ce9486a9d17503df7b90e48bc1b6ea63609664f02070f7deb3d3f extends Twig_Template
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
        $__internal_a781be7d53f4c3bb83d7d33d0e3b0def0a1449ffbd1a29e823ed5c8ea296f44a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a781be7d53f4c3bb83d7d33d0e3b0def0a1449ffbd1a29e823ed5c8ea296f44a->enter($__internal_a781be7d53f4c3bb83d7d33d0e3b0def0a1449ffbd1a29e823ed5c8ea296f44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b4a8fb23018e931651cb227e867c6e5447ad8ff916aebb7c73a8aefb025f4e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a8fb23018e931651cb227e867c6e5447ad8ff916aebb7c73a8aefb025f4e17->enter($__internal_b4a8fb23018e931651cb227e867c6e5447ad8ff916aebb7c73a8aefb025f4e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_a781be7d53f4c3bb83d7d33d0e3b0def0a1449ffbd1a29e823ed5c8ea296f44a->leave($__internal_a781be7d53f4c3bb83d7d33d0e3b0def0a1449ffbd1a29e823ed5c8ea296f44a_prof);

        
        $__internal_b4a8fb23018e931651cb227e867c6e5447ad8ff916aebb7c73a8aefb025f4e17->leave($__internal_b4a8fb23018e931651cb227e867c6e5447ad8ff916aebb7c73a8aefb025f4e17_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ffe73059032db227b8e7d4e3a5a87280cd5e4e338adcf65d254c943dcc988c4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffe73059032db227b8e7d4e3a5a87280cd5e4e338adcf65d254c943dcc988c4e->enter($__internal_ffe73059032db227b8e7d4e3a5a87280cd5e4e338adcf65d254c943dcc988c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4ea169544d66e0b795f22ba0125a616f1b28f4d12bb8c9c68dd3630dcd46f594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ea169544d66e0b795f22ba0125a616f1b28f4d12bb8c9c68dd3630dcd46f594->enter($__internal_4ea169544d66e0b795f22ba0125a616f1b28f4d12bb8c9c68dd3630dcd46f594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4ea169544d66e0b795f22ba0125a616f1b28f4d12bb8c9c68dd3630dcd46f594->leave($__internal_4ea169544d66e0b795f22ba0125a616f1b28f4d12bb8c9c68dd3630dcd46f594_prof);

        
        $__internal_ffe73059032db227b8e7d4e3a5a87280cd5e4e338adcf65d254c943dcc988c4e->leave($__internal_ffe73059032db227b8e7d4e3a5a87280cd5e4e338adcf65d254c943dcc988c4e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_600a1f9e40ad72c5db58cf10249512509713db4a6163575674719565190c9c76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_600a1f9e40ad72c5db58cf10249512509713db4a6163575674719565190c9c76->enter($__internal_600a1f9e40ad72c5db58cf10249512509713db4a6163575674719565190c9c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a394c77fb0e44197bfe4bdc84d8d8b8dafadc46961cdd003dc88643012218fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a394c77fb0e44197bfe4bdc84d8d8b8dafadc46961cdd003dc88643012218fe9->enter($__internal_a394c77fb0e44197bfe4bdc84d8d8b8dafadc46961cdd003dc88643012218fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a394c77fb0e44197bfe4bdc84d8d8b8dafadc46961cdd003dc88643012218fe9->leave($__internal_a394c77fb0e44197bfe4bdc84d8d8b8dafadc46961cdd003dc88643012218fe9_prof);

        
        $__internal_600a1f9e40ad72c5db58cf10249512509713db4a6163575674719565190c9c76->leave($__internal_600a1f9e40ad72c5db58cf10249512509713db4a6163575674719565190c9c76_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_721f5cb80bdca920831c114af740704e424a0c941b2ed56a94bee26e6b48f0ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_721f5cb80bdca920831c114af740704e424a0c941b2ed56a94bee26e6b48f0ad->enter($__internal_721f5cb80bdca920831c114af740704e424a0c941b2ed56a94bee26e6b48f0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8f255ddfeafa3f362efe0f87631c11bb3edd5ad1e5d054ec5b995bb775b184ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f255ddfeafa3f362efe0f87631c11bb3edd5ad1e5d054ec5b995bb775b184ab->enter($__internal_8f255ddfeafa3f362efe0f87631c11bb3edd5ad1e5d054ec5b995bb775b184ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8f255ddfeafa3f362efe0f87631c11bb3edd5ad1e5d054ec5b995bb775b184ab->leave($__internal_8f255ddfeafa3f362efe0f87631c11bb3edd5ad1e5d054ec5b995bb775b184ab_prof);

        
        $__internal_721f5cb80bdca920831c114af740704e424a0c941b2ed56a94bee26e6b48f0ad->leave($__internal_721f5cb80bdca920831c114af740704e424a0c941b2ed56a94bee26e6b48f0ad_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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

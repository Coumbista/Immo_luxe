<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_42d8899660577bc3e60a22fca01c6654ef6dfed1d897e03f8dfb31258a3aee48 extends Twig_Template
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
        $__internal_18739259d43ea64a3b8965f927527f54d82fa4a74d00e4985a57bb4c9ba24294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18739259d43ea64a3b8965f927527f54d82fa4a74d00e4985a57bb4c9ba24294->enter($__internal_18739259d43ea64a3b8965f927527f54d82fa4a74d00e4985a57bb4c9ba24294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_f142404e27ef72fcb25a7401ea906db9ea2a074d8797e557819e685bac226ffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f142404e27ef72fcb25a7401ea906db9ea2a074d8797e557819e685bac226ffc->enter($__internal_f142404e27ef72fcb25a7401ea906db9ea2a074d8797e557819e685bac226ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_18739259d43ea64a3b8965f927527f54d82fa4a74d00e4985a57bb4c9ba24294->leave($__internal_18739259d43ea64a3b8965f927527f54d82fa4a74d00e4985a57bb4c9ba24294_prof);

        
        $__internal_f142404e27ef72fcb25a7401ea906db9ea2a074d8797e557819e685bac226ffc->leave($__internal_f142404e27ef72fcb25a7401ea906db9ea2a074d8797e557819e685bac226ffc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d463544550a0cb0aed0fe88b92424f43073caf462d26aa3f928e5411b0172f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d463544550a0cb0aed0fe88b92424f43073caf462d26aa3f928e5411b0172f9->enter($__internal_9d463544550a0cb0aed0fe88b92424f43073caf462d26aa3f928e5411b0172f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c64d425dd7c60700cb6425812c05c6a9863c5ba2b57d1fc6bf7f91a15460b3f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c64d425dd7c60700cb6425812c05c6a9863c5ba2b57d1fc6bf7f91a15460b3f8->enter($__internal_c64d425dd7c60700cb6425812c05c6a9863c5ba2b57d1fc6bf7f91a15460b3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c64d425dd7c60700cb6425812c05c6a9863c5ba2b57d1fc6bf7f91a15460b3f8->leave($__internal_c64d425dd7c60700cb6425812c05c6a9863c5ba2b57d1fc6bf7f91a15460b3f8_prof);

        
        $__internal_9d463544550a0cb0aed0fe88b92424f43073caf462d26aa3f928e5411b0172f9->leave($__internal_9d463544550a0cb0aed0fe88b92424f43073caf462d26aa3f928e5411b0172f9_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_032bdaef842e91162f42baed6468eaea8eed4452870bb9cd433a314e961f2e8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_032bdaef842e91162f42baed6468eaea8eed4452870bb9cd433a314e961f2e8d->enter($__internal_032bdaef842e91162f42baed6468eaea8eed4452870bb9cd433a314e961f2e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2d8dc3de67b69232c71b6407b72e3b25eb29eb61212bdb1e5be965a0818e4ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8dc3de67b69232c71b6407b72e3b25eb29eb61212bdb1e5be965a0818e4ab4->enter($__internal_2d8dc3de67b69232c71b6407b72e3b25eb29eb61212bdb1e5be965a0818e4ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2d8dc3de67b69232c71b6407b72e3b25eb29eb61212bdb1e5be965a0818e4ab4->leave($__internal_2d8dc3de67b69232c71b6407b72e3b25eb29eb61212bdb1e5be965a0818e4ab4_prof);

        
        $__internal_032bdaef842e91162f42baed6468eaea8eed4452870bb9cd433a314e961f2e8d->leave($__internal_032bdaef842e91162f42baed6468eaea8eed4452870bb9cd433a314e961f2e8d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_eca07b9f102b8f002f5985ea7f79fa2a2198eed32814aae377700f22b1571858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eca07b9f102b8f002f5985ea7f79fa2a2198eed32814aae377700f22b1571858->enter($__internal_eca07b9f102b8f002f5985ea7f79fa2a2198eed32814aae377700f22b1571858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d926a5f8d7faa0878410c1e9dedb4d64bebbdbadc750a4a92f2b3b3fc06b298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d926a5f8d7faa0878410c1e9dedb4d64bebbdbadc750a4a92f2b3b3fc06b298->enter($__internal_8d926a5f8d7faa0878410c1e9dedb4d64bebbdbadc750a4a92f2b3b3fc06b298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8d926a5f8d7faa0878410c1e9dedb4d64bebbdbadc750a4a92f2b3b3fc06b298->leave($__internal_8d926a5f8d7faa0878410c1e9dedb4d64bebbdbadc750a4a92f2b3b3fc06b298_prof);

        
        $__internal_eca07b9f102b8f002f5985ea7f79fa2a2198eed32814aae377700f22b1571858->leave($__internal_eca07b9f102b8f002f5985ea7f79fa2a2198eed32814aae377700f22b1571858_prof);

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
